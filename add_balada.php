<?php
include 'init-login.php';

$nome = $_FILES['arquivo']['name'];
$balada = $_POST['balada'];
$file = 'baladas.csv';
$data = $balada . "\n";

function criar($b){

	$arquivo_tpm = $_FILES['arquivo']['tmp_name'];
	$fileName = $b['name'];
	$extensao = strchr($fileName,'.');
	// var_dump($extensao);
	if(strstr('.jpg; .jpeg; .git; .png', $extensao)){
		$newName = $_SESSION['user-logged'] .$extensao;
		$destino = 'imagem/' .basename($newName);

		if(move_uploaded_file($arquivo_tpm, $destino)) {
			$_SESSION['upload'] = true;
			$_SESSION['image'] = $newName;
		} else {
			$_SESSION['upload'] = false;
		}

		$nono_arquivo = $destino."\n";
		array_push($file_data, $nono_arquivo);
		$data_str = implode('', $file_data);
		file_put_contents($data, $data_str);
		header('location: mostrar.php');
	}
}
addPub($file, $data);

criar($_FILES['arquivo']);
// redirect('index-login.php'); 

?>
