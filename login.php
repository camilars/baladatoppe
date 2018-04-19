<?php include 'header.php';?> 
<?php include 'menu.php';?>

<link rel="stylesheet" type="text/css" href="login.css">
	<div class="Cadastro">
		<form method="POST" action="auth-do-login.php">

			<span class="fontawesome-user"></span><input type="text" name="user" required placeholder="Login" autocomplete="off"> 
			<span class="fontawesome-lock"></span><input type="password" name="password" id="password" required placeholder="Senha" autocomplete="off"> 
			<input type="submit" value="Enviar">
		</form>
	</div>
</div>
<?php include 'footer.php';?>