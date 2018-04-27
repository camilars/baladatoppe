<?php
 
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$usuarios = $usuario.",".$senha;

$date = file('usuarios.csv' );
$date [] = $usuarios."\n";
$date_str = implode('',$date);

file_put_contents('usuarios.csv', $date_str);


//echo "Cadastro feito com Sucesso, Seja bem vindo";
header('location:login.php');
?>
