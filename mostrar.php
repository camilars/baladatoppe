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
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container text-center">

<h1> Baladas da Semana </h1>
<!-- Large modal -->
<button class="btn btn-default" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      

  

  <div class="carousel-inner">
    <div class="item active"> 
 <img class="img-responsive" src="imagens/imag5.jpg"  alt="..."> -->
      <div class="carousel-caption">
       
      </div>
    </div>
    <div class="item">
      <img class="img-responsive" src="imagens/imag5.jpg"  alt="...">
      <div class="carousel-caption">
      
      </div>
    </div>
     <div class="item">
      <img class="img-responsive" src="imagens/imag5.jpg"  alt="...">
      <div class="carousel-caption">
        Another Image
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
    </div>
  </div>
</div>
</div>

	
<!-- <?php if(isset ($_SESSION['upload'])&& $_SESSION['upload']){
?>
<?php 
$pasta = "imagens/";

if (is_dir($pasta)){
	$diretorio = dir($pasta);
	echo '<div class="container">';
	while (($arquivo = $diretorio -> read())!== false) {
		if ($arquivo != '.' && $arquivo != '..')
			echo "<img width='190' height='100' src ='" .$pasta.$arquivo. "'><br/>";
	}
	$diretorio -> close();
}else{
	echo"A pasta não existe";
}

 ?>
 </div>
<?php
	} ?> -->
 

<!-- <li style="margin-top: 4%;color:white;"> <?php 	echo $balada; ?> </li> -->
<?php if (balada()): ?>
<a href="carregar.php" style="margin-left: 40%; margin-top: 500px;" class="btn btn-primary">Cadastrar outra balada</a>
   <?php endif ?>

</body>
</html>	
<?php 
include "rodape.php";
 ?>