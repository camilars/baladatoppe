             <?php include_once 'init-login.php' ;
             include_once 'header.php';
             include 'rodape.php';
             ?>
             <!DOCTYPE html>
             <html lang="en">
             <head>
             	<title>Balada Top </title>

             	<link rel="stylesheet" type="text/css" href="css/index_login.css">

             </head>
             <body >

             	<meta name="viewport" content="width=device-width, initial-scale=1">
             	<link rel="stylesheet" type="text/css" href="css/index_login.css">
             </head>
             <br>
             <br>


             <div id="map"></div>

           </head>
           <body >

           	<meta name="viewport" content="width=device-width, initial-scale=1">
           </head>
         </nav>

         <div id="rolamento">


         	<label> <div class="w3-container w3-white">
         		<h2 style=" position: absolute;top: 50px; left: 1000px; color: white; text-shadow:1px 1px 0 #444 ">Baladas cadastradas:</h2>

         	</div>
	
				<form  style="position: absolute; left:1000px; top:120px;action="index-login.php" method="POST" name="meuForm">

					<select name="balada" id="balad" class="form-control" onchange="this.form.submit();">

						<option value="default">Selecione</option>
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
<div id="post">
	

													<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
													<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
													<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>



													<div class="container" id="cont">
														<div class="col-md-5">
															<div class="panel panel-default">
																<div class="panel-body">
																	<section class="post-heading">
																		<div class="row">
																			<div class="col-md-11">
																				<div class="media">
																					<div class="media-left">                 
																					</div>
																					<div class="media-body">
																						<h4 class="media-heading">comentarios da Balada</h4> 

																					</div>
																				</div>
																			</div>

																		</div>             
																		<?php 
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

																		?>
                  </div>
             
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>

</div>


</div>


												<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
												<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js"></script>
												<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
												<!------ Include the above in your HEAD tag ---------->

												<div style=" position: absolute; left:1280px; top:400px; width: 900px;">


													<div class="col-md-8">


							


															<div class="panel panel-default">
																<div class="panel-body">                
																	<form   method="POST" action="coment.php">
																		<textarea class="form-control counted" name="texto" placeholder="Comentários" rows="5" style="margin-bottom:10px;"></textarea>

																		<button class="btn btn-info" type="submit">Comentar</button>
																	</form>
																</div>
															</div>
															<!--         </div> -->
														</div>	
													</div>	

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


