<?php  
include "header.php";
include_once "conexao.php";
?>
<?php
$id=1;
$stmt = $conn->prepare("SELECT * FROM imagens order by id desc limit 4");
$stmt->execute();
// $result = $stmt->fetch(PDO::FETCH_ASSOC);
$result = $stmt->fetchAll();
?>
<div class="container">
<div id="carousel" class="carousel slide" data-ride="carousel">
    <!-- indicação-->
    <ol class="carousel-indicators">
      <li data-target="#carousel" data-slide-to="0" class="active"></li>
      <li data-target="#carousel" data-slide-to="1"></li>
      <li data-target="#carousel" data-slide-to="2"></li>
      <li data-target="#carousel" data-slide-to="3"></li>
    </ol>
  
 
    <!-- slides das baladas-->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img class="img-responsive" src="imagens/<?= $result[0]['imagem'] ?>"  style="  width:12000px; height:600px;">
        <div class="carousel-caption">
          <!-- <h2>Quer conheçer as melhores baladas e participar de PROMOÇÕES?</h2> -->
          <!-- <a href="crud/form_cadastro.php" class="btn btn-danger" role="button">CADASTRE-SE</a> -->
        </div>      
      </div>
    <?php
        for ($i = 1; $i < sizeof($result); $i++) { 
    ?>
        <div class="item">
               <img class="img-responsive" src="imagens/<?=$result[$i]['imagem']?>" style="width:12000px; height:600px;">
                <div class="carousel-caption">
                  <h3></h3>
                  <p></p>
                </div>      
              </div>
        <?php
            }
        ?>
      <!-- <div class="item">
       <img class="img-responsive" src="imagens/imag3.jpg" style="width:12000px; height:1050px;">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>      
      </div>
          
      <div class="item">
        <img class="img-responsive" src="imagens/imag2.jpg" style="width:12000px; height:1050px;">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>      
      </div> -->
    </div>
    <!-- controle do carousel -->
    <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

</div>
<!-- <div class="container">
    <div class="card">
        <div class="container-fluid">
            <div class="wrapper row">
                <div class="preview col-md-6">
                    <div class="preview-pic tab-content">
                        <div class="tab-pane active" id="pic-1">
                        <?php
                            while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {

                        ?>
                                <img height="250" width="250" src="imagens/<?=$result['imagem']?>">;
                        <?php
                            }
                        ?>
                        </div>
                    </div>

                </div>
                <div class="details col-md-6">
                    <div class="panel panel-default text-center">
                        <h3>
                            <div class="panel-title"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;Nome</div>
                        </h3>
                        <hr>
                    <h4><?php echo strtoupper($result['imagem']) ?></h4>
                    </div>
                    <div class="panel panel-default text-center">
                        <h3>
                            <div class="panel-title"><span class="glyphicon glyphicon-comment"></span>&nbsp;Descriçao</div>
                        </h3>
                        <hr>
                        <h4>
                            <?php echo strtoupper($result['nome']); ?>
                        </h4>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div> -->
<?php 
include "rodape.php";
 ?>