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
		<!-- <div class="dropdown" style="position: absolute; left:1000px; top:120px;">
			<a class="dropdown-toggle btn btn-primary" data-toggle="dropdown" href="#">Visualizar <span class="caret"></span></a>
			<ul class="dropdown-menu"> -->
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
			<!-- </ul>
		</div>

			 -->
			</form>

</label> 
<!-- </div> -->
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

<!-- <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">

	
												<div class="modal-dialog" role="document" >
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="loginModalLabel">Editar conta</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<form action="crud/update.php" method="POST">
																<div class="form-group">
																	<label for="name">Name:</label>
																	<input type="text" name="user" class="form-control" value="<?=$_SESSION['user-logged']?>">
																</div>
																<div class="form-group">
																	<label for="pass">Password:</label>
																	<input type="password" name="password" class="form-control" value="*****">
																</div>
																<div class="form-group">
																	<input type="hidden" name="balada" value="<?= $balada?>">
																	<input class="btn btn-danger" type="submit" name='delete' value="Excluir">	
																	<input class="btn btn-success" type="submit" name="salvar" value="Salvar">	
																</div>
															</form>
														</div>
													</div>
												</div>
											</div>  --><!-- <Modal Login > -->
											<div id="comment-container"  style ="display: block; background-color: transparent; border:1px white; height: 250px; width: 550px;">
												<h1 style="background-color: #264899;color: white">Comentários sobre a balada </h1>
												<div id="comments" style="width: inherit; height: 160px; overflow-y: scroll; background-color: transparent;">	

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
														echo "<p style='color:white'><b>" .$res['usuario'] . "</b>: " . $result['texto'] . "</p>";
														$i++;
													}

													?>
												</div>
											</div>

											<form method="POST" action="coment.php">
												<input type="text"   name="texto"  placeholder="Comentários " maxlength="30" style="   height: 50px; position: absolute; left:1300px; top:400px; width: 500px; background-color: white; border:1px solid black;" required="e preciso adicinar comentarios para enviar.">
												 <input type="hidden" id="custId" name="balada" value="$sql[1]">
												<button  type="submit" class="btn btn-success green "  style="top:410px; position: absolute; left:1820px;"><i class="fa fa-share"></i> Share</button>
												
											</form>
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


