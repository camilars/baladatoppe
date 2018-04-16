<?php 
session_start();
function login($usuario,$senha){
	$usuario_logado = $usuario ."-". $senha;
	$usuario = file('usuarios.txt');
	for ($i=0; $i < sizeof($usuario); $i++) {
	 $usuario[$i] = trim($usuario[$i]);
	}
	if (in_array($usuario_logado, $usuario)) {
		$_SESSION['usuario'] = $usuario;
		return true;
	}
	return false;
}
function logado(){
	return isset($_SESSION['usuario']);
}
?>