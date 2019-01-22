<h1 class="text-center">Emails Recebidos</h1>
<form action="" method="post">
	<table class="table table-striped">
	<tbody>
		<tr>
			<td><strong><input class="btn btn-info" type="submit" name="delete" value="Apagar"></td></strong>
			<td><strong>Nome</strong></td>
			<td><strong>Email</strong></td>
			<td><strong>Assunto</strong></td>
			<td><strong>Data</strong></td>
			<td><strong>Visualizar</strong></td>
		</tr>
	<?php foreach ($select->fetchAll() as $key => $value):
		if($value->status == 0) :?>
		<tr>
			<td><input type="checkbox" name="id[]" value="<?= $value->id ?>"></td>
			<td><strong><?= $value->name ?></strong></td>
			<td><strong><?= $value->email ?></strong></td>
			<td><strong><?= ucfirst($value->subject) ?></strong></td>
			<td><strong><?= date('d/m/Y', strtotime($value->date)) ?></strong></td>
			<td><strong><a href="index.php?page=show?id=<?= $value->id ?>">Visualizar</a></td>
		</tr>
	<?php else: ?>
		<tr>
			<td><input type="checkbox" name="id[]" value="<?= $value->id ?>"></td>
			<td><?= $value->name ?></td>
			<td><?= $value->email ?></td>
			<td><?= ucfirst($value->subject) ?></td>
			<td><?= date('d/m/Y', strtotime($value->date)) ?></td>
			<td><a href="index.php?page=show?id=<?= $value->id ?>">Visualizar</a></td>
		</tr>
	<?php endif; endforeach; ?>
	</tbody>
</table>
</form>