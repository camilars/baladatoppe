<?php 

session_start();

$usuario = $_POST['usuario'];
$email = $_POST['email'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];
$senha = $_POST['senha'];

function cadastrar($usuario, $email, $cidade, $estado, $cep, $senha) {
    $cadastro = file('casdrasto.csv');
    $usuario [] = $usuario."\n";
    $email [] = $email."\n";
    $cidade [] = $email."\n";
    $estado [] = $estado."\n";
    $cep [] = $cep."\n";
    $senha []= $senha."\n";
    for ($i = 0; $i < sizeof($casdrasto); $i++) {
        $casdrasto[$i] = trim($casdrasto[$i]);
    }

?>