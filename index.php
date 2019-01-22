<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Caixa de Emails - PHP - Lailson Conceição</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<section class="container mt-5">
		<div class="row">			
			<div class="offset-md-3 col-md-6 border border-light">
				<h1 class="display-4 text-center">Entre em contato</h1>
				<?php if(isset($_GET['e']) && $_GET['e'] == '1'): ?>
				<div class="alert alert-warning" role="alert">
				    <strong>Ops!</strong> Por favor, verifique todos os campos.
				</div>
				<?php elseif(isset($_GET['c']) && $_GET['c'] == '1'): ?>
				<div class="alert alert-success" role="alert">
				    <strong>Obrigado!</strong> Breve responderemos o seu contato.
				</div>
				<?php endif; ?>
				<form action="admin/php/cadastro.php" method="POST" class="m-2">
					<div class="form-group">
						<label for="name" class="form-control-label">Nome</label>
						<input type="text" class="form-control" id="name" name="name" placeholder="Nome" required>
					</div>
					<div class="form-group">
						<label for="email" class="form-control-label">Email</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
					</div>
					<div class="form-group">
						<label for="subject" class="form-control-label">Assunto</label>
				    	<select class="form-control" id="subject" name="subject"
					        <option value="elogios">Elogios</option>
					        <option value="sugestoes">Sugestões</option>
					        <option value="reclamacao">Reclamação</option>
					        <option value="pedidos">Pedidos</option>
					    </select>
					</div>
					<div class="form-group">
					    <label for="message" class="form-control-label">Mensagem</label>
				    	<textarea class="form-control" id="message" name="message" rows="3" required></textarea>
				  	</div>
					<div class="form-group">
						<button type="submit" class="btn btn-secondary">Enviar</button>
					</div>
				</form>
			</div>
		</div>
	</section>
	
</body>
</html>