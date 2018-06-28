<?php
require_once 'init-login.php';

$adm = $_POST['role'];
$usuario = $_SESSION['user-logged'];
$cons = $conn->prepare("SELECT id, balada FROM role  WHERE id ='$id'");
$cons->execute();
$res = $cons->fetch(PDO::FETCH_ASSOC);
$id = $res['id'];
$balada = $res['balada'];
if  {
    $consulta = $conn->prepare("UPDATE role SET role='$adm' WHERE id='$id'");
    $consulta->execute();
    header('location:index-login.php');
}

?>