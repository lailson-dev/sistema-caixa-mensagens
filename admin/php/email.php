<?php

try {
    $mailer = new PHPMailer\PHPMailer\PHPMailer();
    $mailer->isSMTP();
    $mailer->isHTML(true);
    $mailer->CharSet = 'UTF-8';
    $mailer->SMTPAuth = true;
    $mailer->SMTPSecure = 'ssl';
    $mailer->Host = 'smtp.gmail.com';
    $mailer->Port = 465;
    $mailer->Username = 'email@gmail.com';
    $mailer->Password = 'senha';
    $mailer->From = 'email@gmail.com';
    $mailer->FromName = ucfirst($name);
    $mailer->Subject = 'RE: '.ucfirst($subject);
    $mailer->Body = $message;
    $mailer->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    $mailer->addAddress($email);
    $mailer->Send();
} catch (Exception $e) {}