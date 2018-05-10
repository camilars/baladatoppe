<div class="modal fade" id="modal-mensagem">
    <div class="modal-dialog">
         <div class="modal-content">
<?php

    $filename = 'usuarios.csv';

    $user = $_POST['login'];
    $senha = $_POST['senha'];
    $linha = $_POST['linha'];

    $data = file($filename);
    $data[$linha] = $user.','.$senha."\n";
    $data_str = implode('', $data);
    file_put_contents($filename, $data_str);

    header('location: updatef.php');

?>
  </div>
         </div>
     </div>