<?php include "header.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="musica.css">
	<title>Document</title>
</head>
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
	<?php include 'rodape.php'; ?>