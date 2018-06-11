<?php
include "header.php";

if (!isset($_SESSION['user'])) {
	$_SESSION['user'] = $_SESSION['user-logged'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="css/carregar.css">
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<div class="container">
	
	<form method="POST" enctype="multipart/form-data" action="add_balada.php" id="formulario">
	 <h1 style="color: white;">selecione imagem:</h1>
	 <div class="col-md-6">
	<input type="file" class="form-control" name="arquivo" required><br/>
	 </div>
	 <div class="col-md-12"><br>
	<input type="submit" class="btn btn-primary">	
	 </div>
	</form>
</div>
	
</body>
</html>
<?php 
include "rodape.php";

 ?>