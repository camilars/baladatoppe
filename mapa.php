<!DOCTYPE html>
<html>
<?php include "header.php";?>

<body>


<?php if ($_GET['barb']): ?>
  <?php  ?>
  <ul>
    <?php foreach ($variable as $key => $value): ?>
      <li><?= $value ?></li>
    <?php endforeach ?>
  </ul>
<?php endif ?>


<div id="rolamento">

  
  <label> <div class="w3-container w3-white">
    <h2 style=" position: relative;top: 50px; left: 1000px; text-shadow:1px 1px 0 #444 ">Baladas cadastradas:</h2>

    <td>

    </div>
    <div class="dropdown" style="position: absolute; left:1000px; top:120px;">
      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">selecionar
        <span class="caret"></span></button>
        <ul class="dropdown-menu">

          <li><a href="mapa.php?barb=UK">UK</a></li>
          <li><a href="mapa.php?barb=MannyDeck">Manny Deck</a></li>
          <li><a href="mapa.php?barb=Winner">Winner</a></li>
          <li><a href="mapa.php?barb=Liverpool">Liverpool</a></li>
          <li><a href="mapa.php?barb=NOX">NOX</a></li> -->
        </ul>
      </div>

    </div>
  </label>
  <h1>Não encontrou sua balada favorita? <a href="form_cadastro.php">Cadastre-se</a></h1>
</div>
<div style="background-color: white; width: 40%;height: 25%; display: block;">
  
  <?php
  if(isset($_GET['barb'])){
    $state = $_GET['barb'];

    $h = file($state . ".csv");

    $i = empty($h);
    foreach ($h as $value) {
      if ($value == end($h)) {
        echo '<a href=' . $value . ' target="_blank">' . $value . '</a>';
      }
      else{
        echo $value.'<br>';
      }
    }

    if($i){

      echo "<h3>Pub não encontrado,</h3>";

    }

  }
  ?>
  
</div>

<style >
  #map {
  height: 600px;
  width: 40%;
 }
</style>
<div id="map"></div>
 <!-- Replace the value of the key parameter with your own API key. -->
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkUOdZ5y7hMm0yrcCQoCvLwzdM6M8s5qk&callback=initMap">
</script> 
<script>
function initMap() {
  // var uluru = {lat: -25.363, lng: 131.044};
  var recife = {lat: -8.0578381, lng:-34.8828969};
  //var manny = {lat:-8.014136, lng: -34.84473};
  //var uk = {lat: -8.1148764, lng: -34.8963423};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 11,
    center: recife
  });
  var marker = new google.maps.Marker({
    position: recife,
    map: map
  });
  var loc = new google.maps.Marker({
    position: uk,
    map: map
  });
  var deck = new google.maps.Marker({
    position: manny,
    map: map
  });
}
</script>
<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGgwMp0kjMkByacOFITQOWz-7mH43dPnM&callback=initMap"
async defer></script>

 

<?php  include "rodape.php"; ?>