<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Balada Top </title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="index.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="js/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="js/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="fontawesome/web-fonts-with-css/css/fontawesome-all.min.css"></script>
  <script src="fontawesome/svg-with-js/js/fontawesome-all.min.js"></script>

  <style>
      #map {
        height: 80%;
        width: 50%;
        margin-top:100px ;
       
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
        /*margin: 0;*/
        /*padding: 0;*/
        width:100%;
      }

      body{
        background:url('abalada.jpg') no-repeat;
        background-size: cover;
        background-attachment: fixed;
      }

      #buscar{
        margin-top: 60px;
        margin-bottom: 10px;
      }

  </style>
</head>
<body>


<nav class="navbar navbar-expand-sm navbar-light bg-faded">
   <a class="navbar-brand" href="index.php">Balada Top</a>
  </div>
    <div class="collapse navbar-collapse justify-content-end" id="nav-content">
      <ul class="nav navbar-nav navbar-right">
        <li class="nav-item"><a class="nav-link" href="index.php"><i class="fas fa-home fa-2x"></i> HOME </a></li>
        <li class="nav-item"><a class="nav-link" href="mapa.php"><i class="fas fa-map-marker-alt fa-2x"></i> MAPA </a></li>
        <li class="nav-item"><a class="nav-link" href="form_cadastro.php"><i class="fas fa-users fa-2x"></i> CADASTRE-SE </a></li>
        <li class="nav-item"><a class="nav-link" href="login.php"> LOGIN <i class="fas fa-sign-in-alt fa-2x"></i></a></li>
        Bem Vindo(a), <?php echo $_SESSION['user-logged'];?></li>
		<button>
  
		<a href="login.php">Sair</a> 
		</button>
        
      </ul>
    </div>
  </div>
</nav>  
 <input id="buscar" type="text" name="buscar">
 <input type="submit" value="Procurar">

 <div id="map"></div>
     <!-- <div class="header"> -->
     
    <!-- </div> -->
<?php include 'footer.php';?>
    <script>
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -8.0475622, lng: -34.8769643},
          zoom: 12,
          styles: [
            {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
            {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
            {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
            {
              featureType: 'administrative.locality',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'poi',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'geometry',
              stylers: [{color: '#263c3f'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'labels.text.fill',
              stylers: [{color: '#6b9a76'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry',
              stylers: [{color: '#38414e'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry.stroke',
              stylers: [{color: '#212a37'}]
            },
            {
              featureType: 'road',
              elementType: 'labels.text.fill',
              stylers: [{color: '#9ca5b3'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry',
              stylers: [{color: '#746855'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry.stroke',
              stylers: [{color: '#1f2835'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'labels.text.fill',
              stylers: [{color: '#f3d19c'}]
            },
            {
              featureType: 'transit',
              elementType: 'geometry',
              stylers: [{color: '#2f3948'}]
            },
            {
              featureType: 'transit.station',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'water',
              elementType: 'geometry',
              stylers: [{color: '#17263c'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.fill',
              stylers: [{color: '#515c6d'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.stroke',
              stylers: [{color: '#17263c'}]
            }
          ]
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGgwMp0kjMkByacOFITQOWz-7mH43dPnM&callback=initMap"
    async defer></script>

  </body>

</html>
