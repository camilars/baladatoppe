<?php
session_start();

$linha = $_GET["linha"];


if  (file_exists('usuarios.csv')) {
     $fileDelete= 'usuarios.csv';
     $data = file($fileDelete);
     unset($data[$linha]);

     $data_str = implode('', $data);

     file_put_contents($fileDelete , $data_str);

     unset($_SESSION['user-logged']);

     header('location: login.php');
}  else {
     echo ('updatef.php');
}


?>