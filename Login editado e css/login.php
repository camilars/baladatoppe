<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "header.php";?> 
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<div class="Cadastro">
		<form method="POST" action="auth.php">

			<span class="fontawesome-user"></span><input type="text" name="user" required placeholder="Login" autocomplete="off"> 
			<span class="fontawesome-lock"></span><input type="password" name="password" id="password" required placeholder="Senha" autocomplete="off"> 
			<input type="submit" value="Enviar">
		</form>
	</div>
</div>
</body>
</html>