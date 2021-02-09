<?php

    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']))
{
    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $message = $_POST['message'];

    $mail = new PHPMailer();

    //smtp settings
    $mail->isSMTP();
    $mail->Host       = "smtp.gmail.com";
    $mail->SMTPAuth   = "true";
    $mail->Username   = "simple8@gmail.com";
    $mail->Password   = '*********';
    $mail->Port       = "587";
    $mail->SMTPSecure = "tls";

    //email settings
    $mail->isHTML(true);
    $mail->setFrom($email, $name);
    $mail->addAddress("simple8@gmail.com");
    $mail->Subject = ("Form Email");
    $mail->Body    = $message;

    if ($mail->send()) 
        echo "Success";
    else
        echo $mail->ErrorInfo;

    $mail->smtpClose();
}
?>