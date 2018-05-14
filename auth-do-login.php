<?php 
require_once 'conexao.php';
session_start();

$_SESSION['logado'] = false;
$_SESSION['user'] = "";
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$consulta = $conn->prepare("SELECT * FROM usuarios WHERE usuario = ? AND senha = ?");
$consulta->bindParam(1,$usuario);
$consulta->bindParam(2,$senha);
$consulta->execute();


if ($consulta->rowCount() >= 1) {
	$_SESSION['user'] = $usuario;
	$_SESSION['logado'] = true;
	header('location:index-login.php');
}

?>