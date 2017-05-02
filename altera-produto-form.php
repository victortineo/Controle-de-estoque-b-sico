<?php require_once('header.php'); ?>
<?php require_once('banco-categoria.php');?>
<?php require_once('banco-produto.php'); ?>
<?php require_once('logica-usuario.php'); ?>
<?php verificaUsuario(); ?>
<?php $categorias = listaCategoria($conexao) ?>

<?php 
$id = $_GET['id'];
$produto = buscaProduto($conexao, $id);
$categorias = listaCategoria($conexao);

$usado = $produto->getUsado() ? "checked='checked'" : "''" ;
$produto->_setUsado($usado);

?>

<div class="container">
	<h1> Alterar produtos </h1>

	<form method="post" action="altera-produto.php?id=<?=$produto->getId()?>">
		<table class="table">
			<?php 	include('form-produto-base.php'); ?>
			<tr>
				<td><button type="submit" class="btn btn-primary">Alterar</button></td><td></td>
			</tr>
		</table>
	</form>
</div>
<?php require_once('footer.php'); ?>