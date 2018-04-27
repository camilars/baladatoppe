<!DOCTYPE html>
<html>
<?php include "header.php";?>
  <head>
    <title>Styled Maps - Night Mode</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      #map {
        height: 650px;
        width: 100%;
        margin-top:320px ;
       
      }
      .header{
        font-size: 40px;
        padding: 2px 2px;
        text-align: center;
        background-color: grey;
        color:#000000;

      }
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    <!DOCTYPE html>
<html>
  <head>
    <style>
       #map {
        height: 400px;
        width: 100%;
       }
    </style>
  </head>
  <body>
    <h3>My Google Maps Demo</h3>
    <div id="map"></div>
    <script>
      function initMap() {
        var uluru = { lat: -7.8292242, lng: -34.9016204};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCXxe_P1-dfG5zlclrPO-fmEZNka6-KrFs&callback=initMap">
    </script>
  </body>
</html>


 

<?php  include "rodape.php"; ?>