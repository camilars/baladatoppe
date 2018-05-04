<?php include "header.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="update.css">

<body>
<h1>Editar</h1>
<form action="update.php" method="POST">
Login :	<input type="text" name="login" value="" required><br><br>
Senha :	<input type="password" name="senha" value="" required><br><br>
		<input type="hidden" value="<? $linha ?>">
	<input type="submit" value="Editar">
</form>
</body>
</html>





<?php include "rodape.php";?>