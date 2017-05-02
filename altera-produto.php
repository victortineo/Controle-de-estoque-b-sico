<?php require_once('header.php'); ?>
<?php require_once('banco-produto.php'); ?>
<?php require_once('logica-usuario.php'); ?>
<?php require_once('class/produto.php') ?>
<?php require_once('class/categoria.php'); ?>
<?php verificaUsuario(); ?>
 
	<div class="container">
		<?php 
		$categoria = new Categoria;
		$categoria->_setId($_POST['categoria_id']);

		$produto = new Produto;
		$produto->_setId($_GET['id']);
		$produto->_setNome($_POST['nome']);
		$produto->_setPreco($_POST['preco']);
		$produto->_setDescricao($_POST['descricao']);
		if (array_key_exists('usado', $_POST)) {
			$produto->_setUsado('true');
		} else { 
			$produto->_setUsado('false');
		}
		$produto->_setCategoria($categoria);
		
		if (alteraProduto($conexao, $produto)){ ?>
	 	
	 		<p class="text-success text-center"> produto <strong><?php echo $produto->getNome(); ?></strong> alterado com sucesso</p>
	 	
	 		<?php }

		else {	?>
			<?php $msg = mysqli_error($conexao); ?>

	 		<p class="text-danger text-center"> Produto <strong><?php echo $produto->getNome(); ?></strong> não alterado: <br> <?= $msg ?></p>

		<?php } ?>
		</div>
<?php require_once('footer.php') ?>