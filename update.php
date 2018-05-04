<?php include "header.php"; ?>
<?php

$linha = $_GET['usuario'];

$data = file('usuarios.csv'); // lê o arquivo para um array
$livro = trim($data[$linha]); // pega a linha específica do array e coloca em $livro
$dados_livro = explode(',', $livro); // pega os dados do livro e coloca no array $dados_livro

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="update.css">
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="edit.php" method="POST">
       Login :<input type="text" name="login" value="<?=$dados_livro[0]?>">
        Senha:<input type="password" name="password" value="<?=$dados_livro[1]?>">
        <input type="submit">
    </form>
</body>
</html>





<?php include "rodape.php";?>