<!DOCTYPE html>
<html>
	<head>
		<!-- Required meta tags -->
    	<meta charset="utf-8">
   		<link rel="stylesheet" type="text/css" href="css/style.css">
    	<meta name="description" content="Cdastro de clientes">
    	<meta name="keywords" content="cadatro, pizza, gráfico">
    	<meta name="author" content="Icaro">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
   		<meta name="viewport" content="width=device-width, initial-scale=1">

   		<!-- Bootstrap -->
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

		<title>Soterotech</title>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->

		<!-- Google fonts -->
		<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">

		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		
	</head>

	<body>
		<header>
			<div class="container">
				<form action="php/cadastro.php" method="POST" class="form-inline">
					<div class="form-group">
				    	<input type="text" class="form-control campo-formulario" name="nome" placeholder="Nome" required>
				  	</div>
				  	<div class="form-group">
				    	<input type="text" class="form-control campo-formulario" name="sobrenome" placeholder="Sobrenome" required>
				  	</div>
				  	<div class="form-group">
				    	<input type="number" class="form-control campo-formulario" name="participacao" placeholder="Participação" required>
				  	</div>
				  	
				  	<button type="submit" class="btn btn-default btn-formulario">Enviar</button>
				</form>
			</div>
		</header>

		<section>
			<h2>DATA</h2>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

			<div class="row container-form">
				<div class="col-md-6 tabela">
					<table class="table table-bordered">
						<tr>
							<th>#</th>
							<th>Nome</th>
							<th>Sobrenome</th>
							<th>Participação</th>
						</tr>

						<?php require('php/inserirNaTabela.php');?>
					</table>
				</div>
				<div class="col-md-6 grafico">
					<div id="donutchart" ></div>
				</div>
			</div>
		</section>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

	    <script src="js/main.js"></script>
	</body>
</html>