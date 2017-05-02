<?php require_once('header.php'); ?>
<?php require_once('banco-produto.php'); ?>
<?php require_once('logica-usuario.php'); ?>
<?php require_once('class/produto.php'); ?>
<?php require_once('class/categoria.php'); ?>
<?php verificaUsuario(); ?>
	<div class="container"> 
	<?php 
		?>
		<?php 

		$categoria = new Categoria;
		$categoria->_setId($_POST['categoria_id']);

		$produto = new Produto;
		$produto->_setNome( $_POST['nome']);
		$produto->_setPreco($_POST['preco']);
		$produto->_setDescricao($_POST['descricao']);
		$produto->_setCategoria($categoria);
		if (array_key_exists('usado', $_POST)) {
			$produto->_setUsado('true');
		} else { 
			$produto->_setUsado('false');
		}
		
		if (insereProduto($conexao, $produto)){ ?>
	 	
	 		<p class="text-success text-center"> produto <strong><?php echo $produto->nome; ?></strong> adicionado com sucesso</p>
	 	
	 		<?php }

		else {	?>
			<?php $msg = mysqli_error($conexao); ?>

	 		<p class="text-danger text-center"> Produto <strong><?php echo $produto->nome; ?></strong> não adicionado: <br> <?= $msg ?></p>

		<?php } ?>
		</div>
<?php require_once('footer.php') ?>