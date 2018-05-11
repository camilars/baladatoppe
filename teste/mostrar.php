<?php  
session_start();

$file = array_map('str_getcsv', file('teste.csv'));
$head = array_shift($file);
$csv = array();

foreach ($file as $value) {
	$csv[]=array_combine($head, $value);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
<?php if(isset ($_SESSION['upload'])&& $_SESSION['upload']){
?>
<img src="imagem/<?=$_SESSION['image']?>">
<?php
	} ?>
 

<?php foreach ($csv as $value) : ?>
<li> <?php 	echo $value['NOME']; ?> </li>
	<li> <?php echo "<img src\"".$value['img']."\">"; ?> </li> 

<?php endforeach ?>


</body>
</html>	