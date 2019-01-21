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
				<form action="" method="POST" class="m-2">
					<div class="form-group">
						<label for="name" class="form-control-label">Nome</label>
						<input type="text" class="form-control" id="name" name="name" placeholder="Nome">
					</div>
					<div class="form-group">
						<label for="email" class="form-control-label">Email</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Email">
					</div>
					<div class="form-group">
						<label for="subject" class="form-control-label">Assunto</label>
				    	<select class="form-control" id="subject" name="subject">
					        <option value="compliments">Elogios</option>
					        <option value="suggestions">Sugestões</option>
					        <option value="complaint">Reclamação</option>
					        <option value="orders">Pedidos</option>
					    </select>
					</div>
					<div class="form-group">
					    <label for="message" class="form-control-label">Mensagem</label>
				    	<textarea class="form-control" id="message" name="message" rows="3"></textarea>
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