<?php  
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		#balada_image {
			width: 400px;
			height: 400px;
		}
	</style>
</head>
<body>
	
<?php if(isset ($_SESSION['upload'])&& $_SESSION['upload']){
?>
<img id="balada_image" src="imagem/<?=$_SESSION['image']?>">
<?php
	} ?>
 
<?php
$baladas = file('baladas.csv');
?>
<?php foreach ($baladas as $balada) : ?>
<li> <?php 	echo $balada; ?> </li>
<?php endforeach ?>
<a href="carregar.php">Cadastrar outra balada</a>

</body>
</html>	