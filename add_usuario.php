<?php
 include 'init_do_cadastro.php';
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$usuarios = $usuario."-".$senha;

$date = file('Login editado e css/users-passwords.txt' );
$date [] = $usuarios."\n";
$date_str = implode('',$date);

file_put_contents('/Login editado e css/users-passwords.txt', $date_str);

echo "Cadastro feito com Sucesso, Seja bem vindo";
?>
 .<a href="/Login editado e css/login.php">Acessar</a>