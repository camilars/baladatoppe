<?php
// ob_start();
include_once "init-login.php";

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$balada =$_POST['promoter'];
$usuarios = $usuario.",".$senha.",".$balada;


$date = file('usuarios.csv' );
$date [] = $usuarios."\n";
$date_str = implode('',$date);
if (isset($usuario) && isset($senha)) {

	$users = getUsers();
	if (in_array($usuario, $users)) {
		flash("Usuário já registrado, utilize outro username.");
		redirect('form_cadastro.php');
	} else {
		addUser($usuario, $senha);
		file_put_contents('usuarios.csv', $date_str);
		redirect('login.php');
	}
}
?>