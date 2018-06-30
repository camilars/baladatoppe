<?php 

include 'init-login.php';

if (is_logged()) {
	$balada_id = $_POST['balada_id'];
	echo 'Balada id: ' . $balada_id . '<br>';
	$user = $_SESSION['user-logged'];
	$consult = $conn->prepare("select id from usuarios where usuario = '$user'");
	$consult->execute();
	$result = $consult->fetch(PDO::FETCH_ASSOC);
	$user_id = $result['id'];

	$texto = $_POST['texto'];
	echo $user_id . '<br>';
	$sql = "INSERT INTO comentarios(texto, usuarios_id, balada_id) VALUES (:texto, :usuarios_id, :balada_id)";
	$consulta=$conn->prepare($sql);
	$consulta->bindParam(':texto', $texto);
	$consulta->bindParam(':usuarios_id', $user_id);
	$consulta->bindParam(':balada_id', $balada_id);

	$res = $consulta->execute();
	header('location:index-login.php?id=' . $balada_id);
}
?>