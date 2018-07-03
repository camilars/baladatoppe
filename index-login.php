             <?php include_once 'init-login.php' ;
             include_once 'header.php';

             ?>
             <!DOCTYPE html>
             <html lang="en">
             <head>

                  <title>Balada Top </title>

                  
                  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
                  
                  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
                  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
                  
                  <link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">               
                  
                  <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
                  <meta name="viewport" content="width=device-width">
                  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'>
                  <meta name="viewport" content="width=device-width, initial-scale=1">
                  <link rel="stylesheet" type="text/css" href="css/index_login.css">
                  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
             </head>
             <br>
             <br>
             <div id="map">
                  <?php
                  // $id=1;
                  $stmt = $conn->prepare("SELECT * FROM imagens order by id desc limit 7");
                  $stmt->execute();
                  $result = $stmt->fetchAll();
                  $rows = $stmt->rowCount();
                  ?>
                  <div class="container">
                        <div id="carousel" class="carousel slide" data-ride="carousel">
                              <!-- indicação-->
                              <ol class="carousel-indicators">
                                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                                    <?php
                                    for ($i = 1; $i < $rows; $i++) { 
                                          ?>                                              
                                          <li data-target="#carousel" data-slide-to="<?= $i ?>"></li>
                                          <?php } ?>
                                    </ol>


                                    <!-- slides das baladas-->
                                    <div class="carousel-inner" role="listbox">
                                          <div class="item active">
                                                <img class="img-responsive" src="imagens/<?= $result[0]['imagem'] ?>"  style="  width:1200px; height:500px;">
                                                <div class="carousel-caption">
                                                </div>      
                                          </div>
                                          <?php
                                          for ($i = 1; $i < sizeof($result); $i++) {
                                                ?>
                                                <div class="item">
                                                      <img class="img-responsive" src="imagens/<?=$result[$i]['imagem']?>" style="  width:1200px; height:500px;">
                                                      <div class="carousel-caption">
                                                            <h3></h3>
                                                            <p></p>
                                                      </div>      
                                                </div>
                                                <?php
                                          }
                                          ?>

                                    </div>
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
                  </div>
                  <div id="rolamento">
                        <label> <div class="w3-container w3-white">
                              <h2 style=" position: absolute;top: 50px; left: 1200px; color: white; text-shadow:1px 1px 0 #444 ">Baladas cadastradas:</h2>
                        </div>
                        <div class="dropdown" style="position: absolute;left:1200px; top:120px;">
                              <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Selecione a Balada
                                    <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                          <?php 
                                          $sql='SELECT * FROM baladas';
                                          $result = $conn->query($sql);
                                          foreach ($result as $balada) {
                                                if (isset($_GET['id']) && $balada[0] == $_GET['id']) {
                                                      echo '<li><a tabindex="-1" href="index-login.php?id=' . $balada[0] . '" class="active">' . $balada[1] . '</a></li>';
                                                } else {
                                                      echo '<li><a tabindex="-1" href="index-login.php?id=' . $balada[0] . '">' . $balada[1] . '</a></li>';
                                                }
                                          }
                                          ?>
                                    </ul>
                              </div>
                              <br><br><br><br>
                              
                        </label> 
                        <div style="background-color: white; width: 40%;height: 13%;">

                              <?php
                              if (isset ($_GET['id'])) {
                                    $balada = $_GET['id'];

                                    $sql = "SELECT * FROM `baladas` WHERE `id` ='" . $balada . "'";
                                    $result = $conn->query($sql);
                                    foreach ($result as $row) {
                                          echo $row['balada'] . "<br>";
                                          echo $row['endereco'] . "<br>";
                                          echo $row['telefone'] . "<br>";
                                          echo "<a href='" . $row['link'] . "' target='_blank'>" . $row['link'] . "</a><br>";
                                          echo $row['descricao'] . "<br>";
                                          echo $row['horario'] . "<br>";
                                    }
                              }
                              ?>
                        </div>
                  </div>
                  <div class="cp-pen-styles">
                        <div class="comments">
                              <div class="comment-wrap">
                                    <div class="photo">
                                          
                                    </div>

                              </div>

                              <div class="comment-wrap">

                                    <?php  if (isset($_GET['id'])) { ?>
                                    <div class="comment-block">
                                          <div class="col-md-12">
                                                <?php
                                                $id = $_GET['id'];
                                    // echo $id;
                                                $consult = $conn->prepare('select * from comentarios where balada_id=' . $id);
                                                $consult->execute();
                                    // $i = 0;
                                                $rows = $consult->rowCount();
                                                $results = $consult->fetchAll();
                                                if ($rows === 0) {
                                                      echo "<p style='color:black;' class='text-left'>Não existem comentários sobre essa balada. Seja o primeiro a comentar.</p>";
                                                }

                                                foreach ($results as $result) {
                                                      $user = $result['usuarios_id'];
                                                      $consulta = $conn->prepare("select usuario from usuarios where id = '$user'");
                                                      $consulta->execute();
                                                      $res = $consulta->fetch(PDO::FETCH_ASSOC);
                                                      echo "<p style='color:black' class='text-left'><b>" .$res['usuario'] . "</b>: " . $result['texto'] . "</p>";
                                                      
                                                }

                                                ?>
                                          </div>
                                    </div>
                              </div>
                              <div class="photo">
                                    <div class="avatar" style="background-image: url('https://s3.amazonaws.com/uifaces/faces/twitter/jsa/128.jpg')"></div>
                              </div>
                              <?php } ?>
                              <?php if (isset($_GET['id'])): ?>
                                    <div class="panel-body">            
                                          <form   method="POST" action="coment.php">
                                                <textarea class="form-control counted" name="texto" placeholder="Comentários" rows="5" style="margin-bottom:10px;"></textarea>
                                                <input type="hidden" name="balada_id" value="<?= $_GET['id'] ?>">
                                                <button class="btn btn-info" type="submit">Comentar</button>
                                                <?php unset($_GET['id']) ?>
                                          </form>
                                    </div>
                              <?php endif ?>

                              
                        </div>
                  </div>
                  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
                  <script>
                        $(document).ready(function(){
                              $('.dropdown-submenu a.test').on("click", function(e){
                                    $(this).next('ul').toggle();
                                    e.stopPropagation();
                                    e.preventDefault();
                              });
                        });
                  </script>
                  <?php include_once 'rodape.php' ?>