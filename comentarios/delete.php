<?php
include 'init-secure.php';
if (is_logged()) {
    $user = $_SESSION['user'];
}
    $filename = "Task.csv";
    $id = $_GET["id"];

var_dump($id);
    // lê todo o conteudo do arquivo para o vetor arquivo
    $arquivo = file('Task.csv');

    //retira do vetor a id exclui id  o é para a id anterior
    unset($arquivo[$id]);

    //criar o arquivo novamente
    $arq = fopen('Task.csv', "w");

    // insere todos os elementos do vetor sem o exclukeyo
    foreach ($arquivo as $conteudo){
        fwrite($arq, $conteudo);
    }
    fclose($arq);

    echo"<script>
            alert('OK! Atividade Excluida');
            window.location.href='index.php';
            </script>";
?>