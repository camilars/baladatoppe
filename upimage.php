<?php 
session_start();

$text = $_POST['text'];

$nome = $_FILES['arquivo']['name'];

function criar($a, $b){
	$data = 'teste.csv';

	$arquivo_tpm = $_FILES['arquivo']['tmp_name'];

	$file_data = file($data);

	$extensao = strchr($b,'.');
	var_dump($extensao);
	if(strstr('.jpg; .jpeg; .git; .png', $extensao)){
		$newName = $_SESSION['user-logged'] .$extensao;
		$destino = 'imagem/' .basename($newName);

		if(move_uploaded_file($arquivo_tpm, $destino)) {
			$_SESSION['upload'] = true;
			$_SESSION['image'] = $newName;
		} else {
			$_SESSION['upload'] = false;
		}

		$nono_arquivo = $a.','.$destino."\n";
		array_push($file_data, $nono_arquivo);
		$data_str = implode('', $file_data);
		file_put_contents($data, $data_str);
		header('location: mostrar.php');
	}
}
criar($text, $nome);
?>