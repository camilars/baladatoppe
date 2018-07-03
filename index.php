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
        <img class="img-responsive" src="imagem/imag5.jpg"  class="img-responsive">
        <div class="carousel-caption">
          <h2>Quer conheçer as melhores baladas e participar de PROMOÇÕES?</h2>
          <a href="crud/form_cadastro.php" class="btn btn-danger" role="button">CADASTRE-SE</a>
        </div>      
      </div>

      <div class="item">
       <img class="img-responsive" src="imagem/imag3.jpg" class="img-responsive">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>      
      </div>
    
      <div class="item">
        <img class="img-responsive" src="imagem/imag2.jpg" class="img-responsive">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
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
 
  
</div>
</div>
</div>
</div> 

<?php include "rodape.php";?> 
