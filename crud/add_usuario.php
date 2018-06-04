<?php
// ob_start();
include"conexao.php";
include_once "init-login.php";

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$balada =$_POST['promoter'];


$consulta=$conn->prepare("INSERT INTO usuarios(usuario,senha,balada) VALUES(?,?,?)");
$consulta->bindParam(1,$usuario);
$consulta->bindParam(2,$senha);
$consulta->bindParam(3,$balada);

$consulta->execute();

header('location:login.php');

?>