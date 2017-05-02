<?php require_once('banco-produto.php');
require_once('logica-usuario.php');

verificaUsuario();

$id = $_POST['id'];
deleteProduto($conexao, $id);
$_SESSION['success'] = "Deletado com sucesso";
header("location: lista-produto.php");
die();	