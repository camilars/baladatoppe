<?php
     include_once 'conexao.php';
include_once "init-login.php";
/******.
 * Upload de imagens
 ******/
echo "teste";
if (isset($_SESSION['user_id'])) {
	$user_id=$_SESSION['user_id'];
	$sql="SELECT id FROM usuarios WHERE id ='$user_id'";
	$result=$conn->query($sql);
	echo $user_id;
}

// verifica se foi enviado um arquivo
if (isset( $_FILES['foto']['name']) && $_FILES['foto']['error'] == 0) {

    $nome = $_FILES['foto']['name'];
 
    // Pega a extensão
    $extensao = pathinfo ( $nome, PATHINFO_EXTENSION );
 
    // Converte a extensão para minúsculo
    $extensao = strtolower ( $extensao );
 
    // Somente imagens, .jpg;.jpeg;.gif;.png
    // Aqui eu enfileiro as extensões permitidas e separo por ';'
    // Isso serve apenas para eu poder pesquisar dentro desta String
    if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {
        // Cria um nome único para esta imagem
        // Evita que duplique as imagens no servidor.
        // Evita nomes com acentos, espaços e caracteres não alfanuméricos
        $novoNome = uniqid ( time () ) . '.' . $extensao;
 
        // Concatena a pasta com o nome
        $destino = 'imagens / ' . $novoNome;
 
        // tenta mover o arquivo para o destino
        if (move_uploaded_file ( $arquivo_tmp, $destino ) ) {
            echo 'Arquivo salvo com sucesso em : <strong>' . $destino . '</strong><br />';
            echo ' < img src = "' . $destino . '" />';
			$sql = "INSERT INTO foto (imagem, usuarios_id) values ( '$novoNome','$user_id')";
        }
        else
            echo 'Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br />';
    }
    else
        echo 'Você poderá enviar apenas arquivos "*.jpg;*.jpeg;*.gif;*.png"<br />';
}
else
    echo 'Você não enviou nenhum arquivo!';
?>
