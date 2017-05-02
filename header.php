<!DOCTYPE html5>
<?php 	require_once('funcoes-gerais.php'); 
error_reporting(E_ALL ^ E_NOTICE) ?>


<html>
<head>
	<title> Página de teste da loja </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="css/bootstrap/dist/js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap/dist/css/bootstrap.css">
</head>
<body>
	<header class="cabecalho-pag">
		<nav class="navbar navbar-default">
			<div class="container">

				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="/POO-loja-alura/">Home</a></li>
						<li><a href="adiciona-produto-form.php">Adiciona Produto</a></li>
						<li><a href="lista-produto.php">Lista de Produtos</a></li>
					</ul>
				</div>
			</div>
		</nav>

	</header>