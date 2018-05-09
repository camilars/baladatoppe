<?php

$linha = $_GET['linha'];

$data = file('user.csv'); // lê o arquivo para um array
$usuarios = trim($data[$linha]); // pega a linha específica do array e coloca em $livro
$dados_usuarios = explode(',', $usuarios); // pega os dados do livro e coloca no array $dados_livro

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="update.php" method="POST">
        <input type="text" name="login" value="<?=$dados_usuarios[0]?>">
        <input type="password" name="senha" value="<?=$dados_usuarios[1]?>">
        <input type="hidden" name="linha" value="<?=$linha?>">
        <input type="submit">
    </form>
</body>
</html>