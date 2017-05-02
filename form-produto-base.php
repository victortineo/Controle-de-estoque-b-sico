<tr>
	<td><label for="nome-produto">Nome</label></td>
	<td>
		<input class="form-control" id="nome-produto" type="text" name="nome" value="<?= $produto->getNome() ?>">
	</td>
</tr>

<tr>
	<td><label for="preco-produto">Preco</label></td>

	<td>
		<input class="form-control" id="preco-produto" type="number" name="preco" value="<?= $produto->getPreco() ?>">
	</td>
</tr>
<tr>
	<td><label for="descricao-produto">Descrição</label></td>

	<td>
		<textarea name="descricao" id="descricao-produto"><?= $produto->getDescricao() ?></textarea>
	</td>
</tr>
<tr>
	<td><label for="check-usado">Usado</label></td>
	<td>
		<input id="check-usado" type="checkbox" name="usado" <?= $produto->getUsado()?> value="true">
	</td>
</tr>
<tr>

	<td><label for="categorias-produtos"> Categoria</label></td>
	<td>
		<select id="categorias-produtos" name="categoria_id" class="form-control">
			<?php 
			foreach ($categorias as $categoria) { 
				$aSelecao = $produto->getCategoria()->getId() == $categoria->getId();
				$selecao = $aSelecao ? "selected='selected'" : "";
				?>
				<option value="<?= $categoria->getId()?>" <?= $selecao?>>
					<?= $categoria->getNome()?>
				</option>
				<?php } ?>
			</select>
		</td>	

	</tr>
