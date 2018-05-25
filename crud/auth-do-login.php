<?php 
require_once '../conexao.php';
session_start();

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$consulta = $conn->prepare("SELECT * FROM usuarios WHERE usuario = ? AND senha = ?");
$consulta->bindParam(1,$usuario);
$consulta->bindParam(2,$senha);
$consulta->execute();
$result = $consulta->fetchAll();
$balada = $result[0]['balada'];

if ($consulta->rowCount() >= 1) {
	echo 'balada: ' . $balada . '<br>';
	$_SESSION['user-logged'] =  $usuario;
	if ($balada == "sim") {
		$_SESSION['balada'] = true; 
	}
	header('location:../index-login.php');
}else{
	header('location:login.php');
}

?>