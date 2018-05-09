<?php
include 'init_login.php';
$balada = $_POST['balada'];
$data = file ('bar.csv');
$data[] = $balada . "\n";
if (addUser($balada);{
		file_put_contents('bar.csv', );
		redirect('login.php');) {
 }
}
 