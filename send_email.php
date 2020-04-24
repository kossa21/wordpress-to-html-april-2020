<?php

    require_once("PHPMailer/PHPMailerAutoload.php");

    if(isset($_POST['email']) || isset($_POST['phone']) || isset($_POST['name']) || isset($_POST['message'])) {

        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $name = $_POST['name'];
        $message = $_POST['message'];

        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';

        $mail->Host = 'smtp.gmail.com';
        $mail->Port = '465';
        $mail->isHTML();

        $mail->Username = 'newcontactwebsite@gmail.com';
        $mail->Password = 'Felicidad-238';

        $mail->setFrom("no-reply@tugwell.co.uk", "Tugwell Master Builders");

        $mail->Subject = "New contact message from $name";
        $mail->Body = "<h2>You have received a new message:</h2><br><br>
                        <p><strong>Name: </strong> $name</p>
                        <p><strong>Telephone Number: </strong> $phone</p>
                        <p><strong>Email address: </strong> $email</p><br>
                        <p><strong>Message: </strong><br><br> $message</p>
        ";
    
        $mail->addAddress("seanpbrowne@gmail.com");
        $mail->addBCC("arnoananda@gmail.com");
    
        $mail->send();
    }

    header('Location: contact-us.html'); 

?>