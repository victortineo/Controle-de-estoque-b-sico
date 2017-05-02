<?php require_once('header.php');
	require_once('banco-produto.php');
	require_once('banco-categoria.php');
	require_once('logica-usuario.php');
	require_once('class/produto.php');
	require_once('class/categoria.php');
	?>

<div class="container">
	<?php successAlert();?>

	<?php $produtos = listaProduto($conexao) ?>
	<table class="table table-bordered table-striped">
		<?php foreach ($produtos as $produto) { ?>
		<tr>
			<td> <?= $produto->getNome();?></td>
			<td> <?= $produto->getPreco();?></td>
			<td> <?= $produto->precoComDesconto()?></td>
			<td> <?= substr($produto->getDescricao(), 0,40);?></td>
			<td> <?= $produto->getCategoria()->getNome();?></td>
			<form action="delete-produto.php?id=<?=$produto->getId()?>/" method="post">	
			<input type="hidden" name="id" value="<?=$produto->getId()?>">
			<td> <a href="altera-produto-form.php?id=<?=$produto->getId()?>/" class="btn btn-primary">Alterar</a></td>
			<td> <button class="btn btn-danger">Deletar</button></td>
			</form>
		</tr>
		<?php } ?>
	</table>
</div>
<?php require_once('footer.php') ?>