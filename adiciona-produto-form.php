<?php require_once('header.php'); ?>
<?php require_once('banco-categoria.php');?>
<?php require_once('logica-usuario.php'); ?>
<?php require_once('class/produto.php'); ?>
<?php require_once('class/categoria.php'); ?>

<?php $produto = array('nome' => '', 'descricao' => '', 'preco' => '', 'categoria_id' => '1');
		$categoria = new Categoria();
		$categoria->_setNome('');
		$categoria->_setId('1');

		$produto = new Produto();
		$produto->_setNome('');
		$produto->_setPreco('');
		$produto->_setDescricao('');
		$produto->_setCategoria($categoria->getId());
?>
<?php $produto->_setUsado(''); ?>
<?php $categorias = listaCategoria($conexao); ?>
<?php verificaUsuario(); ?>
<div class="container">
	<h1> Adiciona produtos </h1>

	<form method="post" action="adiciona-produtos.php">
		<table class="table">
			<?php 	require_once('form-produto-base.php'); ?>

			<tr>
				<td><button type="submit" class="btn btn-primary">Cadastrar</button></td><td></td>
			</tr>
		</table>
	</form>
</div>
<?php require_once('footer.php'); ?>