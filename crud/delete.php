<?php
session_start();

$usuario = $_SESSION['user'];
if (isset($_GET['id'])) {
	$id = $_GET['id'];
}

if  (file_exists("comentarios.txt")){
	$data = file("comentarios.txt");

	unset($data[$id]);

	$data_str = implode("", $data);

	file_put_contents("comentarios.txt",$data_str);

	header('location:index-login.php');
	
} else{
	echo "não encontrado";
}