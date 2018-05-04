<?php include "header.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="musica.css">
	<title>Document</title>
</head>
</body>
<style>
	
 #comments {
	max-height: 600px;
  	position: absolute;
  	left:1900px;
  	top:250px;
  	background-color:transparent;  	}
</style>

	
<h2 style= "position: absolute;top: 50px; left: 1400px; text-shadow:1px 1px 0 #444" >Bregas</h2>
<audio controls  id="audio" style="position: absolute; left:1400px; top:120px;">
	<source " src="MC JAPÃO - DESCULPA - BATIDÃO ROMÂNTICO.mp3" loop="1" width="200" height="50" type="audio/ogg" >
		Your browser does not support the audio element.
	
	</audio>
	<!-- <embed src="Jamiroquai - Superfresh Oliver Heldens Remix [thezippyaudio1.com].mp3" autostart="true" loop="1" width="200" height="50"></embed> -->
	
		
	
	<audio controls id="audio" style="position: absolute; left:1400px; top:155px;">
	<source " src="Brega Vício Louco Cinco da Manhã.mp3" loop="1" width="200" height="50" type="audio/ogg" >
		Your browser does not support the audio element.
	
	</audio>
	<audio controls id="audio" style="position: absolute; left:1400px; top:190px;">
	<source " src="MC TROIA - PODE BALANÇAR - CLIPE OFICIAL - YouTube.mp3" loop="1" width="200" height="50" type="audio/ogg" >
		Your browser does not support the audio element.
	</audio>
	<h2 style= "position: absolute;top: 50px; left: 800px; text-shadow:1px 1px 0 #444" >funk</h2>
	<audio controls id="audio" style="position: absolute; left:790px; top:110px;">
	<source " src="MC Don Juan - Amar, Amei (KondZilla).mp3" loop="1" width="200" height="50" type="audio/ogg" >
		Your browser does not support the audio element.
	</audio>
	<h2 style= "position: absolute;top: 50px; left: 300px; text-shadow:1px 1px 0 #444" >Eletrônica</h2>
	<audio controls autoplay id="audio" style="position: absolute; left:300px; top:110px;">
	<source " src="Avicii - Waiting For Love.mp3" loop="1" width="200" height="50" type="audio/ogg" >
		Your browser does not support the audio element.
	</audio>
	<audio controls id="audio" style="position: absolute; left:300px; top:150px;">
	<source " src="Jamiroquai - Superfresh Oliver Heldens Remix [thezippyaudio1.com].mp3" loop="1" width="200" height="50" type="audio/ogg" >
		Your browser does not support the audio element.
	</audio>
	<script>
		var audio = document.getElementById('audio');
		audio.volume = 0.4;
	</script>


	</html>
	<div>

	</div>
	<?php include 'rodape.php'; ?>