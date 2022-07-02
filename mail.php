<?php
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
//require 'PHPMailer/src/OAuth.php';
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/POP3.php';
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendmail($email, $name, $title, $content)
{
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(false);
    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'vuducthanhuet@gmail.com';                     //SMTP username
        $mail->Password   = '01152000thanh';                               //SMTP password
        $mail->SMTPSecure = "tls";            //Enable implicit TLS encryption
        $mail->Port       = 587;                         //TCP port to connect to; use 587 if you have set 
        //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->CharSet = "UTF-8";
        //Recipients
        $mail->setFrom('vuducthanhuet@gmail.com', 'Thành');
        $mail->addAddress($email, $name);     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $title;
        $mail->Body    = $content;

        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
