<?php include 'header.php'; ?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- indicação-->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- slides das baladas-->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="imagens/imag1.jpg" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Nome do local da balada</h3>
          <p>descrição...........................</p>
        </div>      
      </div>

      <div class="item">
        <img src="imagens/imag3.jpg" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Nome do local da balada</h3>
          <p>descrição...........................</p>
        </div>      
      </div>
    
      <div class="item">
        <img src="imagens/imag2.jpg" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Nome do local da balada</h3>
          <p>descrição...........................</p>
        </div>      
      </div>
    </div>

    <!-- controle do carousel -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
<!-- QUEM SOMOS -->

<div id="quemsomos" class="container text-center">
  <h3>QUEM SOMOS</h3>
  <p><em>Balada Top</em></p>
  <p></p>
  <br>
</div>

<div id="contato" class="container text-center">
<h3>CONTATO</h3>
  <br>
  <div class="row text-center">
    <div class="col-sm-2">
      <p class="text-center"><strong>Camila Rodrigues</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="imagens/imag2.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo" class="collapse">
        <p><i class="fas fa-envelope"></i> camila.rs122@gmail.com</p>
        <p>Loves long walks on the beach</p>
        <p>Member since 1988</p>
      </div>
    </div>
    <div class="col-sm-2">
      <p class="text-center"><strong>Pedro Lucas</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="imagens/imag3.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo2" class="collapse">
        <p>Drummer</p>
        <p>Loves drummin'</p>
        <p>Member since 1988</p>
      </div>
    </div>
    <div class="col-sm-2">
      <p class="text-center"><strong>Rafael Herculano</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="imagens/imag1.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo3" class="collapse">
        <p>Bass player</p>
        <p>Loves math</p>
        <p>Member since 2005</p>
      </div>
    </div>
    <div class="col-sm-2">
      <p class="text-center"><strong>Maria Luiza</strong></p><br>
      <a href="#demo4" data-toggle="collapse">
        <img src="imagens/imag2.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo4" class="collapse">
        <p>Guitarist and Lead Vocalist</p>
        <p>Loves long walks on the beach</p>
        <p>Member since 1988</p>
      </div>
    </div>
    <div class="col-sm-2">
      <p class="text-center"><strong>Carlos Miguel</strong></p><br>
      <a href="#demo5" data-toggle="collapse">
        <img src="imagens/imag2.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo5" class="collapse">
        <p>Guitarist and Lead Vocalist</p>
        <p>Loves long walks on the beach</p>
        <p>Member since 1988</p>
      </div>
    </div>
  </div>
</div>