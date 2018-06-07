<?php
include "../header.php";
?> 


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<div class="Cadastro">
		<form method="POST" action="crud/auth-do-login.php">

			<span class="fontawesome-user"></span><input type="text" name="usuario" required placeholder="Login" autocomplete="off"> 
			<span class="fontawesome-lock"></span><input type="password" name="senha" id="senha" required placeholder="Senha" autocomplete="off"> 
			<input type="submit" value="Enviar">
		<!-- /form -->

                Ainda não é cadastrado?<br>
                <a href="crud/form_cadastro.php" class="forgot-password"> Cadastre-se! </a>
        </div><!-- /card-container -->
    </div><!-- /container -->
	</div>
</div>
		</form>

</body>
</html>

<?php 
include "../rodape.php" ;
?>
