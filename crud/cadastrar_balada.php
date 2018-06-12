<?php

include"conexao.php";
include_once "init-login.php";

$balada= $_POST[]
$endereco= $_POST[]
$tetefone= $_POST[]
$link= $_POST[]
$descricao= $_POST[]
$horario= $_POST[]


$consulta=$conn->prepare("INSERT INTO baladas(balada,endereco,telefone,link,descricao,horario) VALUES(?,?,?)");
$consulta->bindParam(1,$balada);
$consulta->bindParam(2,$endereco);
$consulta->bindParam(3,$telefone);
$consulta->bindParam(4,$link);
$consulta->bindParam(5,$descricao);
$consulta->bindParam(6,$horario);

$consulta->execute();





?>