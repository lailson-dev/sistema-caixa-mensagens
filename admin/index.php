<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Painel Administrativo Caixa de Emails - PHP - Lailson Conceição</title>

	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
</head>
<body>
	<section class="container">
		<header class="blog-header py-3 mt-5 p-5 bg-info">
			<div class="row flex-nowrap justify-content-center align-items-center">
			  <div class="col-4 text-center">
				<a class="blog-header-logo text-dark" href="#">Gerenciamento de Emails</a>
			  </div>
			</div>
		</header>

		<section class="nav-scroller py-1 mb-2">
			<nav class="nav d-flex justify-content-center">
			  <a class="p-2 text-muted" href="index.php">Início</a>
			</nav>
		</section>

		<section class="container">
			<div class="rrow d-flex justify-content-center mt-5">
				<div class="col-md-8">
					<?php
						if(!isset($_GET['page']) || $_GET['page'] == '')
							include "../pages/home.php";
						elseif(isset($_GET['page']) && $_GET['page'] != '') {
							if(file_exists("../pages/".$_GET['page'].".php"))
								include "../pages/".$_GET['page'].".php";
							else {
								echo '
									<h1 class="text-center mt-5">Desculpe, esta página não existe!</h1>
								';
							}
						}
					?>
				</div>
			</div>
		</section>
	</section>
</body>
</html>
