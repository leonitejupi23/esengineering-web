
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';


if (isset($_POST['case']) and $_POST['case'] == 0) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $subjet = $_POST['subject'];


    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = '';                     // SMTP username
        $mail->Password   = '';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom('', 'Mailer');
        $mail->addAddress('', 'Joe User');     // Add a recipient
        // Name is optional

        // $permbajtja = $

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Email nga kontakt forma';
        $mail->Body    =  'Derguar nga: ' . $_POST['name'] . '<br> Email nga: ' . $_POST['email'] . '<br> Mesazhi: ' . $_POST['message'];
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo '1';
    } catch (Exception $e) {
        echo "0";
    }
}

if (isset($_POST['case']) and $_POST['case'] == 1) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $subjet = $_POST['subject'];


    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = '';                     // SMTP username
        $mail->Password   =                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom('', 'Mailer');
        $mail->addAddress('', 'Joe User');     // Add a recipient
        // Name is optional

        // $permbajtja = $

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Subject From';
        $mail->Body    =  'Sent From: ' . $_POST['name'] . '<br> Email From: ' . $_POST['email'] . '<br> Message: ' . $_POST['message'];
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo '1';
    } catch (Exception $e) {
        echo "0";
    }
}