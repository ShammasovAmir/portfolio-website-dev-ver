<?php
use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){
    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $message = $_POST['message'];

    require '../phpmailer/src/Exception.php';
    require '../phpmailer/src/PHPMailer.php';
    require '../phpmailer/src/SMTP.php';

    $mail = new PHPMailer();

    //smtp settings
    $mail->isSMTP();
    $mail->Host       = "smtp.gmail.com";
    $mail->SMTPAuth   = true;
    $mail->Username   = "RRRRRRRRRRRRRR";
    $mail->Password   = 'RRRRRRRRRRRR';
    $mail->Port       = 465;
    $mail->SMTPSecure = "ssl";

    //email settings
    $mail->isHTML(true);
    $mail->setFrom($email, $name);
    $mail->addAddress("RRRRRRRRRRR");
    $mail->Subject = ("Form Email");
    $mail->Body    = $message;

    if ($mail->send()) 
        echo "Success";
    else
        echo "Error";
}
?>