<?php
session_start();

if(isset($_GET['page']) && $_GET['page'] != '') {
	$url = filter_var($_GET['page'], FILTER_SANITIZE_STRING);
	$query = explode('=', $url);
	$id = end($query);

	$select = $db->prepare("SELECT * FROM emails WHERE id = :id");
	$select->bindParam(':id', $id, PDO::PARAM_STR);
	$select->execute();
	$result = $select->fetch();

	$status = 1;
	$update = $db->prepare("UPDATE emails SET status = :status WHERE id = :id");
	$update->bindParam(':status', $status, PDO::PARAM_INT);
	$update->bindParam(':id', $id, PDO::PARAM_INT);
	$update->execute();
}

if(isset($_SESSION['send'])) : ?>
<div class="alert alert-success" role="alert">
    <strong>Irrulll!</strong> Enviamos um e-mail para <?= ucfirst($result->name) ?>.
</div>
<?php endif; ?>
<h1 class="text-center"><?= $result->name ?></h1>
<span class="d-block lead"><strong>De:</strong> <?= $result->name ?></span>
<span class="d-block lead"><strong>Email:</strong> <?= ucfirst($result->email) ?></span>
<span class="d-block lead"><strong>Assunto:</strong> <?= ucfirst($result->subject) ?></span>
<span class="d-block lead"><strong>Data:</strong> <?= date('d/m/Y', strtotime($result->date)) ?></span>
<p class="lead bg-light mt-3 py-2"><?= $result->message ?></p>

<form action="php/message.php" method="post">
	<div class="form-group">
		<label for="message" class="form-control-label">Responder</label>
		<input type="hidden" name="id" value="<?= $result->id ?>">
		<input type="hidden" name="name" value="<?= $result->name ?>">
		<input type="hidden" name="email" value="<?= $result->email ?>">
		<input type="hidden" name="subject" value="<?= $result->subject ?>">
    	<textarea class="form-control" id="message" name="message" rows="3" required></textarea>
	</div>
	<div class="form-group">
		<button type="submit" name="send" class="btn btn-outline-primary">Enviar</button>
	</div>
</form>