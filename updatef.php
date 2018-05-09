<?php
include 'init.php';
$filename = 'user.csv';
$data = file($filename);
for($i = 0; $i < sizeof($data); $i++ ) {
    $data[$i] = explode(',', $data[$i]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1></h1>
    <table cellpadding="10">
        <?php foreach ($data as $linha => $elemento): ?>
           <?php if($elemento[0] == $_SESSION['user']): ?> 
           <tr>
                <td><?= $elemento[0] ?></td>
                <td><?= $elemento[1] ?></td>
                <td><a href="edite.php?linha=<?=$linha?>">Edit</a></td>    
            </tr> 
           <?php endif ?> 
        <?php endforeach ?>
    </table>
    <a href="login.php">Sair</a>
</body>
</html>