<?php

$linha = $_GET['linha'];

$data = file('usuarios.csv'); 
$usuarios = trim($data[$linha]); 
$dados_usuarios = explode(',', $usuarios);

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