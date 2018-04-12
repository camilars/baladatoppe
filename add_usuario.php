<?php 

session_start();

$usuario = $_POST['usuario'];
$email = $_POST['email'];
$estado = $_POST['estado'];
$senha = $_POST['senha'];

$file = fopen('usuarios.txt', 'a+')

$dado = $usuario."-".$email."-".$estado."-".$senha."\n";

fwrite($file, $dado);
fclose($file);
header('Location:index.php');

?>