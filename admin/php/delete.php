<?php

include '../functions/config.php';

if(isset($_POST) && $_POST != '') {
	$id = $_POST['id'];

	foreach ($id as $key => $value) {
		$delete = $db->prepare("DELETE FROM emails WHERE id = :id");
		$delete->bindParam(':id', $value);
		$delete->execute();
	}
	header('Location: ../index.php');
}