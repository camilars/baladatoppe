             <?php include_once 'init-login.php' ;
             include_once 'header.php';
             include 'rodape.php';

             ?>
             <!DOCTYPE html>
             <html lang="en">
             <head>
             	<title>Balada Top </title>

             	<link rel="stylesheet" type="text/css" href="css/index_login.css">
             	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
             	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
             	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
             	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
             	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js"></script>
             	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
             	
             	<script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/kavendish/pen/aOdopx?q=comment&limit=all&type=type-pens" />
             	<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
             	<meta name="viewport" content="width=device-width">
             	<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'>

             </head>
             

             <meta name="viewport" content="width=device-width, initial-scale=1">
             <link rel="stylesheet" type="text/css" href="css/index_login.css">
         </head>
         <br>
         <br>


         <div id="map"></div>

         
         

         <meta name="viewport" content="width=device-width, initial-scale=1">
         
         

         <div id="rolamento">


         	<label> <div class="w3-container w3-white">


         		<h2 style=" position: absolute;top: 50px; left: 1000px; color: white; text-shadow:1px 1px 0 #444 ">Baladas cadastradas:</h2>

         	</div>
         	
         	<form  style="position: absolute; left:1000px; top:120px;action="index-login.php" method="POST" name="meuForm">

         		<select name="balada" id="balad" class="form-control" onchange="this.form.submit();" value="sql['balada']" >

         			
         			<option value="balada" id = "balad">
         				<?php 
         				$sql='SELECT * FROM baladas';
         				$result = $conn->query($sql);
         				foreach ($result as $sql) {
         					echo "<option value = '$sql[1]' >" .$sql[1]. "</option>";
         				}
         				?>
         			</select>

         		</form>
         		

         	</label> 

         	<div style="background-color: white; width: 40%;height: 13%;">

         		<?php
         		if (isset ($_POST['balada'])) {
         			$balada = $_POST['balada'];

         			$sql = "SELECT * FROM `baladas` WHERE `balada` ='" . $balada . "'";
         			$result = $conn->query($sql);
         			foreach ($result as $row) {
         				echo $row['balada'] . "<br>";
         				echo $row['endereco'] . "<br>";
         				echo $row['telefone'] . "<br>";
         				echo "<a href='" . $row['link'] . "' target='_blank'>" . $row['link'] . "</a><br>";
         				echo $row['descricao'] . "<br>";
         				echo $row['horario'] . "<br>";
         			}
         			unset($_POST['balada']);

         		}
         		?>


         		
         	</div>
         	
         </div>
         

         

         <div class="cp-pen-styles">


         	<div class="comments">
         		<div class="comment-wrap">
         			<div class="photo">
         				<!-- <div class="avatar" style="background-image: url('https://s3.amazonaws.com/uifaces/faces/twitter/dancounsell/128.jpg')"></div> -->
         			</div>
         			
         		</div>

         		<div class="comment-wrap">
         			
         			<div class="comment-block">
         				<p class="comment-text">
         					<p>		<?php 
         						$consult = $conn->prepare('select * from comentarios');
         						$consult->execute();
         						$i = 0;
         						$results=$consult->fetchAll();

         						foreach ($results as $result) {
         							$user = $result['usuarios_id'];
         							$consulta = $conn->prepare("select usuario from usuarios where id = '$user'");
         							$consulta->execute();
         							$res = $consulta->fetch(PDO::FETCH_ASSOC);
         							echo "<p style='color:black'><b>" .$res['usuario'] . "</b>: " . $result['texto'] . "</p>";
         							$i++;
         						}

         						?></p>
         						
         					</div>
         				</div>
         				<div class="photo">
         					<div class="avatar" style="background-image: url('https://s3.amazonaws.com/uifaces/faces/twitter/jsa/128.jpg')"></div>
         				</div>
         				<div class="panel-body">                
         					<form   method="POST" action="coment.php">
         						<textarea class="form-control counted" name="texto" placeholder="Comentários" rows="5" style="margin-bottom:10px;"></textarea>

         						<button class="btn btn-info" type="submit">Comentar</button>
         					</form>
         				</div>
         				



         				

         				<link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">

         				<script>
         					function initMap() {

         						var recife = {lat: -8.1148764, lng: -34.8963423};
         						var manny = {lat:-8.014136, lng: -34.84473};
         						var uk = {lat: -8.1148764, lng: -34.8963423};
         						var liverpool = {lat: -8.0948747, lng: -34.8861826};
         						var winner = {lat:-8.0472278, lng:-34.8959251};
         						var map = new google.maps.Map(document.getElementById('map'), {
         							zoom: 15,
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
         						var pool = new google.maps.Marker({
         							position: liverpool,
         							map:map

         						});
         						var win = new google.maps.Marker({
         							position:winner,
         							map:map
         						});
         					}
         				</script>
         				<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGgwMp0kjMkByacOFITQOWz-7mH43dPnM&callback=initMap"
         				async defer></script>



         			</body>
         			</html>


