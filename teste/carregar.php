<?php
session_start();
if (!isset($_SESSION['user'])) {
	$_SESSION['user'] = $_SESSION['user-logged'];
}
?>
<<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method="POST" enctype="multipart/form-data" action="add_balada.php">
	 selecione imagem:
	<input type="file" name="arquivo"><br/>
	<input type="text" name="balada" placeholder="Nome da balada">
	<input type="submit">	
	</form>
	
</body>
</html>