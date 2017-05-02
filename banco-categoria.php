<?php 
include('conecta.php');
require_once('class/categoria.php');

function listaCategoria($conexao) {
	
	$categorias = array();
	$query = "select * from categoria";
	$resultado = mysqli_query($conexao, $query);
	
	while($categoria_array = mysqli_fetch_assoc($resultado)) {

		$categoria = new Categoria;
		$categoria->_setId($categoria_array['id']);
		$categoria->_setNome($categoria_array['nome']);

		array_push($categorias, $categoria);
	}

	return $categorias;
} 