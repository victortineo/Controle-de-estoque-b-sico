<?php 
session_start();
function logaUsuario($email){
	$_SESSION['usuario_logado'] = $email;
}
function isUserLogged() {
	return isset($_SESSION['usuario_logado']);
}
function usuarioLogado(){
	return $_SESSION['usuario_logado'];
}
function verificaUsuario() {
	if (!isUserLogged()) {
		$_SESSION['danger'] = "Você não tem acesso a essa funcionalidade";
		header('location: index.php');
		die();
	}
}

function logout(){
	session_destroy();
	session_start();
}