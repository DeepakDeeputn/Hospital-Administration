<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])){
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'ddrsthospital@gmail.com';//mail
    $mail->Password = 'iqqdfrgdpijqznue';//gmail password
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
     
    $mail->setFrom('ddrsthospital@gmail.com');//mail

    $mail->addAddress($_POST["email"]);

    $mail->isHTML(true);

    $mail->Subject = $_POST["subject"];
    $mail->Body = $POST["message"];

    $mail->send();

    echo
    "
    <script>
    alert('Sent Successfully ');
    document.location.href = 'index1.php';
    </script>
    ";
}

