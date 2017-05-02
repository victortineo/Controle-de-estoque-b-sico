<?php 
include('conecta.php');
require_once('class/produto.php');
require_once('class/categoria.php');

function listaProduto($conexao) {
	$produtos = array();
	$resultado = mysqli_query($conexao, "select p.*, c.nome as categoria_nome from produtos as p join categoria as c on p.categoria_id = c.id");
	while ($produto_array = mysqli_fetch_assoc($resultado)) {
		
		$categoria = new Categoria();
		$categoria->_setNome($produto_array['categoria_nome']);

		$produto = new Produto();
		$produto->_setId($produto_array['id']);
		$produto->_setNome($produto_array['nome']);
		$produto->_setPreco($produto_array['preco']);
		$produto->_setDescricao($produto_array['descricao']);
		$produto->_setCategoria($categoria);
		$produto->_setUsado($produto_array['usado']);


		array_push($produtos, $produto);
	}
	return $produtos;
}

function insereProduto($conexao, $produto) {
	$produto->_setNome(mysqli_real_escape_string($conexao, $produto->nome));
	$produto->_setPreco(mysqli_real_escape_string($conexao, $produto->preco));
	$produto->_setDescricao(mysqli_real_escape_string($conexao, $produto->descricao));
	$produto->_setCategoria_id(mysqli_real_escape_string($conexao, $produto->categoria->id));
	$produto->_setUsado(mysqli_real_escape_string($conexao, $produto->usado));
	$query = "insert into produtos (nome, preco, descricao, categoria_id, usado) values ('{$produto->nome}', {$produto->preco}, '{$produto->descricao}',{$produto->categoria->id}, {$produto->usado})"; 
	return mysqli_query($conexao, $query); 
}



function deleteProduto($conexao, $id) {
	$query = "delete from produtos where id = {$id}";
	return mysqli_query($conexao, $query);
}

function buscaProduto($conexao, $id) {
	$query = "select * from produtos where id = '{$id}'";
	$resultado = mysqli_query($conexao, $query);
	$produto_buscado = mysqli_fetch_assoc($resultado);

	$categoria = new Categoria();
	$categoria->_setNome($produto_buscado['categoria_nome']);

	$produto = new Produto();
	$produto->_setId($produto_buscado['id']);
	$produto->_setNome($produto_buscado['nome']);
	$produto->_setPreco($produto_buscado['preco']);
	$produto->_setDescricao($produto_buscado['descricao']);
	$produto->_setCategoria($categoria);
	$produto->_setUsado($produto_buscado['usado']);
	return $produto;
	
}
function alteraProduto($conexao, $produto) {
	$query = "update produtos set nome = '{$produto->getNome()}', preco = {$produto->getPreco()}, descricao = '{$produto->getDescricao()}', categoria_id= {$produto->getCategoria()->getId()}, usado = {$produto->getUsado()} where id = '{$produto->getId()}'";
	return mysqli_query($conexao, $query); }