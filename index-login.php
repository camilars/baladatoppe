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
            	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
            	<script src='js/jquery-3.3.1.min.js'></script>
            	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            	<script src="fontawesome/web-fonts-with-css/css/fontawesome-all.min.css"></script>
            	<script src="fontawesome/svg-with-js/js/fontawesome-all.min.js"></script>
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


					<li style=" font-size: 14px !important;text-decoration: none; margin-top: 15px; color:blue;"><i class="fas fa-user"></i><?php  echo "&nbsp;".$_SESSION['user-logged'];?> </li> 


					<!DOCTYPE html>
					<html>
					<head>
						<meta name="viewport" content="width=device-width, initial-scale=1">
						<style>
						body {
							font-family: "Lato", sans-serif;
						}

						.sidenav {
							height: 100%;
							width: 0;
							position: fixed;
							z-index: 1;
							top: 0;
							right: 0;
							background-color: #111;
							overflow-x: hidden;
							transition: 0.5s;
							padding-top: 60px;
						}

						.sidenav a {
							padding: 8px 8px 8px 32px;
							text-decoration: none;
							font-size: 25px;
							color: #818181;
							display: block;
							transition: 0.3s;
						}

						.sidenav a:hover {
							color: #f1f1f1;
						}

						.sidenav .closebtn {
							position: absolute;
							top: 0;
							right: 25px;
							font-size: 36px;
							margin-left: 50px;
						}
						
						@media screen and (max-height: 450px) {
							.sidenav {padding-top: 15px;}
							.sidenav a {font-size: 18px;}
						}
					</style>
				</head><link rel="stylesheet" type="text/css" href="cssteste.css">
				<body>
					<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

					<div id="mySidenav" class="sidenav">
						<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
						<a href="update.php">Editar conta</a>
						<!-- <a href="bar.php">Playlist</a> --> -->
						<a href="logout.php">Sair</a>
					</div>

					<script>
						function openNav() {
							document.getElementById("mySidenav").style.width = "250px";
						}

						function closeNav() {
							document.getElementById("mySidenav").style.width = "0";
						}
					</script>

				</body>
				</html> 


			</ul>
		</div>
	</div>
</nav>

<input id="buscar" type="text" name="buscar" placeholder="Buscar">

<div id="map"></div>

<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-xE7a7Pi92cA69kmk-zwtGg5M9l0N2Ag&callback=initMap">
</script>

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
		<h2 style=" position: absolute;top: 50px; left: 1000px; text-shadow:1px 1px 0 #444 ">Baladas cadastradas:</h2>

		<td>

		</div>
		<div class="dropdown" style="position: absolute; left:1000px; top:120px;">
			<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">selecionar
				<span class="caret"></span></button>
				<ul class="dropdown-menu">

					<li><a href="index-login.php?barb=UK">UK</a></li>
					<li><a href="index-login.php?barb=MannyDeck">Manny Deck</a></li>
					<li><a href="index-login.php?barb=Winner">Winner</a></li>
					<li><a href="index-login.php?barb=Liverpool">Liverpool</a></li>
					<li><a href="index-login.php?barb=NOX">NOX</a></li> -->
				</ul>
			</div>

		</div>
	</label> 
</div>
<div style="background-color: white; width: 40%;height: 13%;">
	
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
			echo "<h3>Pub não encontrado</h3>";
		}

	}
	?>
	
</div>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	li{
		color: black;
	}
</style>
</head>
<body>
	<div id="comment-container"  style ="display: block; background-color: transparent; border:1px solid black; height: 250px; width: 550px;">
		<h1 style="background-color: #264899;color: white">Comentários sobre a balada </h1>
		<div id="comments" style="width: inherit; height: 160px; overflow-y: scroll; background-color: transparent;">	
			<?php
			$a=file('comentarios.txt');	
			implode("\n", $a);
			for ($i=0; $i < sizeof($a); $i++): ?>
			<li ><?=  $a[$i] ?><a href="delete.php?id=<?= $i ?>"> X </a></li>
		<?php endfor?>
	</div>
</div>
<form method="POST" action="coment.php">
	<input type="text"   name="text"  placeholder="comentarios " maxlength="30" style="height: 50px; position: absolute; left:1300px; top:400px; width: 500px; background-color: transparent; border:1px solid black;" required="e preciso adicinar comentarios para enviar.">
	<input type="submit" value="Enviar" style="position: absolute; left:1800px; top:415px;"">

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
	function initialize() {
		    var latlng = new google.maps.LatLng(-8.114590, -34.896299);
		 
		    var options = {
			        zoom: 5,
			        center: latlng,
			        mapTypeId: google.maps.MapTypeId.ROADMAP
		    };
		 
		    map = new google.maps.Map(document.getElementById("mapa"), options);
	}
	 
	initialize();
	[
	{
		"Latitude":-8.114590 ,
		"Longitude": -34.896299
	},
	{
		"Latitude": -22.618827234831404,
		"Longitude": -42.57636812499999
	},
	{
		"Latitude": -22.57825604463875,
		"Longitude": -48.68476656249999
	}
	]
	function carregarPontos() {

		$.getJSON('js/pontos.json', function(pontos) {

			$.each(pontos, function(index, ponto) {

				var marker = new google.maps.Marker({
					position: new google.maps.LatLng(ponto.Latitude, ponto.Longitude),
					title: "Meu ponto personalizado! :-D",
					map: map
				});

			});

		});

	}

	carregarPontos();


	var marker = new google.maps.Marker({
		position: new google.maps.LatLng(ponto.Latitude, ponto.Longitude),
		title: "Meu ponto personalizado! :-D",
		map: map,
		icon: 'img/marcador.png'
	});

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



	</html>
	<p id="teste">

	</p>
	<script>
		$(document).ready(function() {
			var h = $(window).height();
			$('#teste').html(h);
			if (h <= 1084) {
				$('footer').css('position', 'absolute');
			} else {
				$('footer').css('position', 'relative');
			}
		});
	</script>
	<?php include "rodape.php";?>