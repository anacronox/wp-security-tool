# wp-smpt-mail

## Email SMTP settings in wp-config.php.

Paste the following files into the wp-config.php file of your WordPress website. We place all the SMTP server settings in the wp-config file for security.

```php
// SMTP email settings
define( 'SMTP_username', 'youremail@gmail.com' );  // username of host like Gmail
define( 'SMTP_password', 'gmail-app-password' );   // password for login into the App
define( 'SMTP_server', 'smtp.gmail.com' );     // SMTP server address
define( 'SMTP_FROM', 'youremail@example.com' );   // Your Business Email Address
define( 'SMTP_NAME', 'SEO Neurons' );   //  Business From Name
define( 'SMTP_PORT', '587' );     // Server Port Number
define( 'SMTP_SECURE', 'tls' );   // Encryption - ssl or tls
define( 'SMTP_AUTH', true );  // Use SMTP authentication (true|false)
define( 'SMTP_DEBUG',   0 );  // for debugging purposes only
```
