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
    'smtp_host'    => 'smtp.zoho.in',         // e.g., smtp.gmail.com, mail.lakshaysharma.com
    'smtp_auth'    => true,
    'smtp_user'    => 'komal@punjabit.co.in',    // Your SMTP email / username
    'smtp_pass'    => 'Sachdeva123Punjab',       // Your SMTP password or Gmail App Password
    'smtp_secure'  => 'ssl',                     // 'tls' (port 587) or 'ssl' (port 465)
    'smtp_port'    => 465,

    // Sender Details
    'from_email'   => 'komal@punjabit.co.in',
    'from_name'    => 'Lakshay Sharma Portfolio',

    // Where contact form submissions should be delivered
    'recipient_email' => 'info@lakshaysharma.com',
    'recipient_name'  => 'Lakshay Sharma Team',
];

