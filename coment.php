<?php 
session_start();
// include_once 'init-login.php';
$usuario = $_SESSION['user-logged'];


$comentario = '<b>' . $usuario . '</b>: ' . $_POST['text'];

$fileComentario='comentarios.txt';

$data = file($fileComentario);
$data[30] = $comentario. "\n";

$dataStr = implode("", $data);
file_put_contents($fileComentario, $dataStr);
$a= $dataStr;
	header('location:index-login.php');
	?>