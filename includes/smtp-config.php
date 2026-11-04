<?php
/**
 * SMTP & Email Configuration
 * Lakshay Sharma Official Portfolio
 *
 * Update these settings with your live SMTP credentials.
 */

return [
    // Set to true to send real emails via SMTP; if false, it logs or uses PHP mail()
    'enabled'      => true,

    // SMTP Server Settings
    'smtp_host'    => 'smtp.gmail.com',         // e.g., smtp.gmail.com, mail.lakshaysharma.com
    'smtp_auth'    => true,
    'smtp_user'    => 'your-email@gmail.com',    // Your SMTP email / username
    'smtp_pass'    => 'your-app-password',       // Your SMTP password or Gmail App Password
    'smtp_secure'  => 'tls',                     // 'tls' (port 587) or 'ssl' (port 465)
    'smtp_port'    => 587,

    // Sender Details
    'from_email'   => 'your-email@gmail.com',
    'from_name'    => 'Lakshay Sharma Portfolio',

    // Where contact form submissions should be delivered
    'recipient_email' => 'info@lakshaysharma.com',
    'recipient_name'  => 'Lakshay Sharma Team',
];

