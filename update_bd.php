<?php
require_once 'crud/conexao.php';

$description = "Casa noturna animada por bandas de estilos populares diversos com pista eletrônica, espaços intimistas e bar.";
$id = 3;
// $sql = "UPDATE `baladas` SET `descricao` = :description WHERE `id` = ";
$stmt = $conn->prepare('UPDATE baladas SET descricao = :descricao WHERE id = :id');
$stmt->execute(array(
  ':id'   => $id,
  ':descricao' => $description
));
echo $stmt->rowCount();
?>