<?php  
include "header.php";

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
<?php 
$pasta = "imagem/";

if (is_dir($pasta)){
	$diretorio = dir($pasta);
	echo '<div class="container">';
	while (($arquivo = $diretorio -> read())!== false) {
		if ($arquivo != '.' && $arquivo != '..')
			echo "<img width='120' height='70' src ='" .$pasta.$arquivo. "'><br/>";
	}
	$diretorio -> close();
}else{
	echo"A pasta não existe";
}

 ?>
 </div>
<?php
	} ?>
 

<li style="margin-top: 4%;color:white
;"> <?php 	echo '<h2>'.$balada.'</h2>'; ?> </li>
<?php if (balada()): ?>
<a href="carregar.php" style="margin-left: 40%; margin-top: -550px;" class="btn btn-primary">Cadastrar outra balada</a>
   <?php endif ?>

</body>
</html>	
<?php 
include "rodape.php";
 ?>