<?php

    $filename = 'usuarios.csv';

    $nome = $_POST['login'];
    $pages = $_POST['senha'];
    $linha = $_POST['linha'];
  

    if (!file_exists($filename)) {
        touch($filename);
    }

    $data = file($filename);
    $data[$linha] = $nome . ',' . $pages ;
    $data_str = implode('', $data);
    file_put_contents($filename, $data_str);

    header('location: login.php');

?>