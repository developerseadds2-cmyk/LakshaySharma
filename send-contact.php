<?php
/**
 * AJAX Contact Form Handler with PHPMailer & SMTP
 * Lakshay Sharma Official Portfolio
 */

header('Content-Type: application/json; charset=utf-8');

// Ensure request is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
    exit;
}

// Read input (support both form-data and json)
$input = $_POST;
if (empty($input)) {
    $raw = file_get_contents('php://input');
    if (!empty($raw)) {
        $decoded = json_decode($raw, true);
        if (is_array($decoded)) {
            $input = $decoded;
        }
    }
}

$name    = isset($input['name']) ? trim($input['name']) : '';
$email   = isset($input['email']) ? trim($input['email']) : '';
$phone   = isset($input['phone']) ? trim($input['phone']) : '';
$message = isset($input['message']) ? trim($input['message']) : '';

// Validation
$errors = [];

if (mb_strlen($name) < 2 || mb_strlen($name) > 80) {
    $errors['name'] = 'Please enter a valid name (2-80 characters).';
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Please enter a valid email address.';
}

$digitsOnly = preg_replace('/\D/', '', $phone);
if (strlen($digitsOnly) < 7 || strlen($digitsOnly) > 15) {
    $errors['phone'] = 'Please enter a valid phone number (7-15 digits).';
}

if (mb_strlen($message) < 10 || mb_strlen($message) > 2000) {
    $errors['message'] = 'Please enter a message (10-2000 characters).';
}

if (!empty($errors)) {
    http_response_code(422);
    echo json_encode([
        'success' => false,
        'message' => 'Validation failed. Please correct the highlighted fields.',
        'errors'  => $errors
    ]);
    exit;
}

// Load SMTP Configuration
$configPath = __DIR__ . '/includes/smtp-config.php';
$config = file_exists($configPath) ? include $configPath : [];

// Autoload PHPMailer
require_once __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    if (!empty($config['enabled'])) {
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host       = !empty($config['smtp_host']) ? $config['smtp_host'] : 'smtp.gmail.com';
        $mail->SMTPAuth   = isset($config['smtp_auth']) ? (bool)$config['smtp_auth'] : true;
        $mail->Username   = !empty($config['smtp_user']) ? $config['smtp_user'] : '';
        $mail->Password   = !empty($config['smtp_pass']) ? $config['smtp_pass'] : '';

        $secure = strtolower($config['smtp_secure'] ?? 'tls');
        if ($secure === 'ssl') {
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = !empty($config['smtp_port']) ? (int)$config['smtp_port'] : 465;
        } else {
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = !empty($config['smtp_port']) ? (int)$config['smtp_port'] : 587;
        }

        // Sender & Recipient
        $fromEmail = !empty($config['from_email']) ? $config['from_email'] : $mail->Username;
        $fromName  = !empty($config['from_name']) ? $config['from_name'] : 'Lakshay Sharma Portfolio';
        $mail->setFrom($fromEmail, $fromName);

        $toEmail = !empty($config['recipient_email']) ? $config['recipient_email'] : $fromEmail;
        $toName  = !empty($config['recipient_name']) ? $config['recipient_name'] : 'Lakshay Sharma';
        $mail->addAddress($toEmail, $toName);

        // Reply-To user
        $mail->addReplyTo($email, $name);

        // Content
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->Subject = 'New Contact Inquiry: ' . $name;

        // Clean HTML Email Body
        $safeName    = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
        $safeEmail   = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
        $safePhone   = htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');
        $safeMessage = nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8'));
        $date        = date('F j, Y, g:i a');

        $mail->Body = "
        <div style='font-family: Arial, sans-serif; background-color: #f1f5f9; padding: 25px; color: #0b1528;'>
            <div style='max-width: 600px; margin: 0 auto; background: #ffffff; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.06); border: 1px solid #e2e8f0;'>
                <div style='background: #101C35; padding: 22px 28px; border-bottom: 3px solid #C6F135;'>
                    <h2 style='color: #ffffff; margin: 0; font-size: 20px; font-weight: 800;'>New Website Inquiry</h2>
                    <p style='color: #C6F135; margin: 4px 0 0 0; font-size: 13px; font-weight: 600;'>Lakshay Sharma Official Portfolio</p>
                </div>
                <div style='padding: 28px;'>
                    <table style='width: 100%; border-collapse: collapse; margin-bottom: 20px;'>
                        <tr>
                            <td style='padding: 10px 0; border-bottom: 1px solid #f1f5f9; color: #64748b; font-size: 13px; width: 120px; font-weight: 700; text-transform: uppercase;'>Full Name</td>
                            <td style='padding: 10px 0; border-bottom: 1px solid #f1f5f9; color: #0b1528; font-size: 15px; font-weight: 700;'>{$safeName}</td>
                        </tr>
                        <tr>
                            <td style='padding: 10px 0; border-bottom: 1px solid #f1f5f9; color: #64748b; font-size: 13px; font-weight: 700; text-transform: uppercase;'>Email</td>
                            <td style='padding: 10px 0; border-bottom: 1px solid #f1f5f9; color: #1769FF; font-size: 15px; font-weight: 600;'><a href='mailto:{$safeEmail}' style='color: #1769FF; text-decoration: none;'>{$safeEmail}</a></td>
                        </tr>
                        <tr>
                            <td style='padding: 10px 0; border-bottom: 1px solid #f1f5f9; color: #64748b; font-size: 13px; font-weight: 700; text-transform: uppercase;'>Phone</td>
                            <td style='padding: 10px 0; border-bottom: 1px solid #f1f5f9; color: #0b1528; font-size: 15px; font-weight: 600;'><a href='tel:{$safePhone}' style='color: #0b1528; text-decoration: none;'>{$safePhone}</a></td>
                        </tr>
                        <tr>
                            <td style='padding: 10px 0; color: #64748b; font-size: 13px; font-weight: 700; text-transform: uppercase;'>Submitted On</td>
                            <td style='padding: 10px 0; color: #64748b; font-size: 13px;'>{$date}</td>
                        </tr>
                    </table>

                    <div style='margin-top: 15px; background: #f8fafc; border-left: 4px solid #1769FF; padding: 16px; border-radius: 6px;'>
                        <p style='margin: 0 0 6px 0; color: #64748b; font-size: 12px; font-weight: 800; text-transform: uppercase;'>Message</p>
                        <p style='margin: 0; color: #0b1528; font-size: 14px; line-height: 1.6;'>{$safeMessage}</p>
                    </div>
                </div>
                <div style='background: #f8fafc; padding: 14px 28px; text-align: center; color: #94a3b8; font-size: 12px; border-top: 1px solid #e2e8f0;'>
                    Sent via Contact Form on Lakshay Sharma Portfolio
                </div>
            </div>
        </div>";

        $mail->AltBody = "New Website Inquiry\n\nName: {$name}\nEmail: {$email}\nPhone: {$phone}\nDate: {$date}\n\nMessage:\n{$message}";

        $mail->send();
    } else {
        // Fallback: log to file if SMTP disabled
        error_log("Contact Form (SMTP disabled): Name: $name, Email: $email, Phone: $phone, Message: $message");
    }

    echo json_encode([
        'success' => true,
        'message' => 'Thank you! Your message has been sent successfully. We will get back to you shortly.'
    ]);
} catch (Exception $e) {
    // If SMTP credentials are dummy/unauthenticated, return informative error message
    $errorMsg = $mail->ErrorInfo;
    error_log("PHPMailer error: " . $errorMsg);

    echo json_encode([
        'success' => false,
        'message' => 'Unable to send email: ' . $errorMsg . '. Please verify your SMTP settings in includes/smtp-config.php.'
    ]);
}

