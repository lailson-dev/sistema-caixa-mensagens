<?php

include '../functions/config.php';

$name 	  = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$email 	  = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
if(!$email)
	header('Location: ../../?e=1');
$subject  = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
$status = 0;
$date = date('Y-m-d h:i:s');

try {
	$sql = "INSERT INTO emails (name, email, subject, message, status, date) VALUES (:name, :email, :subject, :message, :status, :date)";
	$insert = $db->prepare($sql);
	$insert->bindParam(':name', $name);
	$insert->bindParam(':email', $email);
	$insert->bindParam(':subject', $subject);
	$insert->bindParam(':message', $message);
	$insert->bindParam(':status', $status);
	$insert->bindParam(':date', $date);

	if($insert->execute())
		header('Location: ../../?c=1');
} catch (PDOException $e) {
	echo $e->getMessage();
}

