<?php  
include "header.php";

?>
<?php
  // $id = $_GET['id'];
        $stmt = $conn->query("SELECT * FROM iamgem WHERE id = $id  ");
        $cadastro = $stmt->fetchAll();
        foreach ($cadastro as $dados) {
        $id = $dados['id'];
        $nome=$dados['nome'];
        echo "<tr>
        <td> "."$nome"."</td>
        <td>"."$quantidade"."</td>
        <td>R$"."$preco"."</td>
        <td>"."$categoria"."</td>
        </tr>";
        }
 ?>
          
        
?>

<div class="container">
    <div class="card">
        <div class="container-fliud">
            <div class="wrapper row">
                <div class="preview col-md-6">
                    <div class="preview-pic tab-content">
                        <div class="tab-pane active" id="pic-1">
                            <?php echo "<img src=\"".$result['imagem']."\">"; ?>
                        </div>
                    </div>

                </div>
                <div class="details col-md-6">
                    <div class="panel panel-default text-center">
                        <h3>
                            <div class="panel-title"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;Nome</div>
                        </h3>
                        <hr>
                    <h4><?php echo strtoupper($result['nome']) ?></h4>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<?php 
include "rodape.php";
 ?>