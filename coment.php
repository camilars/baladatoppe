<?php 

include 'init-login.php';

if (is_logged()) {
	echo 'entrou<br>';# code...

	$user = $_SESSION['user-logged'];
	$consult = $conn->prepare("select id from usuarios where usuario = '$user'");
	$consult->execute();
	$result = $consult->fetch(PDO::FETCH_ASSOC);
	$user_id = $result['id'];

	$texto = $_POST['texto'];
	echo $user_id . '<br>';
	$sql = "INSERT INTO comentarios(texto, usuarios_id) VALUES (:texto, :usuarios_id)";
	$consulta=$conn->prepare($sql);
	$consulta->bindParam(':texto', $texto);
	$consulta->bindParam(':usuarios_id', $user_id);

	$res = $consulta->execute();
	if ($res) {
		header('location:index-login.php');
	} else {
		echo 'erro ao salvar';
		// echo ''
	}

}
?>