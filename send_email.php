<?php
    require_once("PHPMailer/PHPMailerAutoload.php");

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';

    $mail->Host = 'smtp.gmail.com';
    $mail->Port = '465';
    $mail->isHTML();

    $mail->Username = 'arnoananda@gmail.com';
    $mail->Password = 'kossa23634571';

    $mail->setFrom= "no-reply@tugwell.co.uk";

    $mail->Subject = "New contact through the website";
    $mail->Body = "A test email!";

    $mail->addAddress("kossa21@gmail.com");

    $mail->Send();

?>