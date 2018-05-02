<?php
$comentarios = $_post["text"];
$data = file("comentario.txt");
$data [] $comentarios . "\n";
$data_strg = implode('', $data);

file_put_contents('comentario.txt', $data_strg);

header('location:index-login.php');
?>
