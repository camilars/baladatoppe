<?php
require_once 'init-login.php';

$user = $_POST['user'];
$senha = $_POST['password'];
$usuario = $_SESSION['user-logged'];
$cons = $conn->prepare("SELECT id, balada FROM usuarios WHERE usuario ='$usuario'");
$cons->execute();
$res = $cons->fetch(PDO::FETCH_ASSOC);
$id = $res['id'];
$balada = $res['balada'];
if (isset($_POST['delete'])) {
    $coment = $conn->prepare("DELETE FROM comentarios WHERE usuarios_id ='$id'");
    $coment->execute();
    $consulta = $conn->prepare("DELETE FROM usuarios WHERE id='$id'");
    $consulta->execute();
    header('location: logout.php');
} else {
    $consulta = $conn->prepare("UPDATE usuarios SET usuario='$user', senha='$senha', balada = '$balada' WHERE id='$id'");
    $consulta->execute();
    header('location: ../index-login.php');
}

?>