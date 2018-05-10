<?php
include 'init_login.php';
$balada = $_POST['balada'];
$data = file ('balada.csv');
$data[] = $balada . "\n";
if (addPub($data)){
		file_put_contents('balada.csv', $balada);
		redirect('index-login.php'); 
 }
?>
 