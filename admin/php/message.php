<?php

$id 	 = filter_var($_POST['id'], FILTER_SANITIZE_STRING);
$name	 = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
$email 	 = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

require_once '../../PHPMailer/src/PHPMailer.php';
require_once '../../PHPMailer/src/SMTP.php';
include 'email.php';

header('Location: ../index.php?page=show?id='.$id);
session_start();
$_SESSION['send'] = true;