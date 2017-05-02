<?php require_once('header.php'); ?>
<?php require_once('logica-usuario.php'); ?>

<div class="container">

<!-- lógica para login -->

<?php 	successAlert();
		dangerAlert(); ?>

<!-- corpo e layout -->

	<h2 class="text-center">Bem vindo!</h2>
	<?php if(isUserLogged()){ ?>
	<p class="text-success text-center">Você está logado como <?= usuarioLogado(); ?> </p>
	<a href="logout.php">Deslogar</a>
	<?php } ?>
	<?php if (isset($_GET['logout']) && $_GET['logout'] == true){?>
	<p class="alert-danger text-center">Logout com sucesso</p>
	<?php } ?>
	<?php if(!isUserLogged()){ ?>
	<h2 class="text-center">Login</h2>
	<form action="login.php" method="post">
		<table class="table">
			<tr>
				<td>Email</td>
				<td><input class="form-control" type="email" name="email"></td>
			</tr>
			<tr>
				<td>Senha</td>
				<td><input class="form-control" type="password" name="senha"></td>
			</tr>
			<tr>
				<td><button type="submit" class="btn btn-primary">Login</button></td>
				<td></td>
			</tr>
		</table>
	</form>
	<?php } ?>
</div>

<?php require_once('footer.php'); ?>
