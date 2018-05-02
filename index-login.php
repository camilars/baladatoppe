<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Balada Top </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="index.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="fontawesome/web-fonts-with-css/css/fontawesome-all.min.css"></script>
	<script src="fontawesome/svg-with-js/js/fontawesome-all.min.js"></script>

  <!-- <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="index.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="js/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="js/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="fontawesome/web-fonts-with-css/css/fontawesome-all.min.css"></script>
  <script src="fontawesome/svg-with-js/js/fontawesome-all.min.js"></script> -->
  <style>
  #map {
  	height: 50%;
  	width: 40%;
  	margin-top:30px ;

  }
  embed {
  	margin: 0;
  	padding: 0;
  	height: 50px;
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
  #comment-container {
	max-height: 230px;
	position: absolute;
	left:1300px;
	top:160px;
	background-color:white;
  }
  #comments {
  	left:1300px;
	top:160px;
  }
</style>

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
				<a class="navbar-brand" href="#myPage">Balada Top</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php"><i class="fas fa-home"></i> HOME</a></li>

					<li><a href="mapa.php">MAPA<i class="fas fa-map-marker-alt"></i></span></a></li>


					<li style=" font-size: 14px !important;text-decoration: none; margin-top: 15px; color:gray; "><i class="fas fa-user"></i><?php echo "&nbsp;".$_SESSION['user-logged'];?> </li> 




					<button style=" font-size: 14px !important;text-decoration: none; margin-top: 15px;">

						<a href="logout.php">Sair</a> 
					</button>

				</ul>
			</div>
		</div>
	</nav>








	<input id="buscar" type="text" name="buscar" placeholder="Buscar">

	<div id="map"></div>

	<script async defer
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-xE7a7Pi92cA69kmk-zwtGg5M9l0N2Ag&callback=initMap">
</script>

<div id="rolamento">

	<h1></h1>
	<label> <div class="w3-container w3-white">
		<h2 style=" position: absolute;top: 50px; left: 1000px; text-shadow:1px 1px 0 #444 ">Baladas cadastradas:</h2>


		<td>





		</div>
		<div class="dropdown" style="position: absolute; left:1000px; top:120px;">
			<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">selecionar
				<span class="caret"></span></button>
				<ul class="dropdown-menu">
					<li><a href="index-login.php?barb=UK">UK</a></li>
					<li><a href="index-login.php?barb=Manny Deck">Manny Deck</a></li>
					<li><a href="index-login.php?barb=Winner">Winner</a></li>
					<li><a href="index-login.php?barb=Liverpool">Liverpool</a></li>
					<li><a href="index-login.php?barb=Villarena Country Pub">Villarena Country Pub</a></li>
				</ul>
			</div>



<!-- </div> 
  <div  style="position: absolute; left:1000px; top:75px;" >
  <p style="position: relative;top: 50px; display:block;"> <a href="index-login.php?barb=UK" /><button>UK</button></p>
  <p style="position: relative;top: 50px; display:block;"> <a href="index-login.php?barb=Manny Deck" /><button>Manny Deck</button></p>
  <p style="position: relative;top: 50px; display:block;"> <a href="index-login.php?barb=Winner" /><button>Winner</button></p>
  <p style="position: relative;top: 50px; display:block;"> <a href="index-login.php?barb=Liverpool" /><button>Liverpool</button></p>
  <p style="position: relative;top: 50px; display:block;"> <a href="index-login.php?barb=Villarena Country Pub" /><button>Villarena Country Pub</button></p></div>
</td> -->

</div>
</label> 
</div>
<?php
if(isset($_GET['estado'])){
	$state = $_GET['estado'];

	$h = fopen("baladas.csv","r");
	$i = fgetcsv($h, null, ",");
	foreach ($i as $indice => $valor) {
		echo var_dump($i);
	}

	if($r==0){
		echo "<h3>Nenhum pubs encontrada nesse estado!</h3>";
	}
	while ($i = file('baladas.csv')) {

        # code...
	}
      // while($registro = file('baladas.csv')){
      //   $pubs = $registro['USER_pub'];
      //   $cidade = $registro['USER_CIDADE'];
      //   $telefone = $registro['USER_TELEFONE'];
      //   $endereco = $registro['USER_LOGRADOURO'];
      //   $perfil = $registro['USER_PERFIL'];
      //   echo "<p class='detalhes'><b>pub :</b> <a href='perfil.php?id=$perfil'>". $pubs."</p></a>";
      //   echo "<p class='detalhes'><b>Cidade :</b>". $cidade."</p>";
      //   echo "<p class='detalhes'><b>Logradouro :</b>". ucwords($endereco)."</p>";
      //   echo "<p class='detalhes'><b>Telefone :</b>". $telefone."</p>";
      //   echo "<hr>";
      // }
}
?>  


<!-- <div class="header"> -->

	<!-- </di5> -->	<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<div id="comment-container">
	<h1>Comentarios da balada </h1>
<div id="comments" style="width: inherit; height: 150px; overflow-y: scroll;">	
	<?php
	$a=file('comentarios.txt');	
	implode("\n", $a);
	for ($i=0; $i < sizeof($a); $i++): ?>
	<li><?= $a[$i]?>
	<?php endfor?>
</div>
</div>
<form method="POST" action="coment.php">
<form>
  <input type="text"   name="text"  placeholder="comentarios " maxlength="30" style="height: 50px; position: absolute; left:1100px; top:450px; width: 600px; background-color: transparent;" required="e preciso adicinar comentarios para enviar.">
  <input type="submit" value="Enviar" style="position: absolute; left:1770px; top:450px;"">

</form>
<style>
#comentarios::-webkit-input-placeholder{
    color:#C4C;
    background-color: #4C4;
    text-transform: uppercase;
    font-style: bold;
</style>
</body>
</html> 




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
	<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGgwMp0kjMkByacOFITQOWz-7mH43dPnM&callback=initMap"
	async defer></script>

</body>

<h2 style= "position: absolute;top: 50px; left: 1400px; text-shadow:1px 1px 0 #444" >Music Play</h2>
<audio controls autoplay id="audio" style="position: absolute; left:1400px; top:120px;">
  <source " src="Jamiroquai - Superfresh Oliver Heldens Remix [thezippyaudio1.com].mp3" loop="1" width="200" height="50" type="audio/ogg" >
  Your browser does not support the audio element.
</audio>
<!-- <embed src="Jamiroquai - Superfresh Oliver Heldens Remix [thezippyaudio1.com].mp3" autostart="true" loop="1" width="200" height="50"></embed> -->
<script>
	var audio = document.getElementById('audio');
	audio.volume = 0.5;
</script>

</html>
<div>
	
</div>
<?php include "rodape.php";?>