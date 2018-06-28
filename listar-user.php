<?php
include ('header.php');
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/listar-user.css">
	<title>Document</title>
</head>
<body>
<div id="position">
<div id="lista">
<div id="box">
	<div id="user"> -->
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<!------ Include the above in your HEAD tag ---------->

		<div class="container">
			<div class="row">
				<h2>Gerenciar usuários</h2>
			</div>


			<div class="row">

				<div class='col-sm-8 col-md-8'>


					<table class='table'>
						<thead>
							<tr>
								<!-- <th>Escopo</th> -->
								<th>Nome</th>
								<th>promoter</th>
								<th>Papel</th>
								<!-- <th>Ações</th>	 -->                
							</tr>
						</thead>
						<tbody>
							<form action="adm-user.php" method="POST">
								<input type="text" name="role">
								<input type="submit" value="Altera">
							</form>

							<tr>
								
								<td><?php

								$sql='SELECT * FROM usuarios';
								$result = $conn->query($sql);
								foreach ($result as $sql) {
									echo "<option value = '$sql[1]' >" .$sql[1]. "</option>";
								}

								?></td>
								<td><?php

								$sql='SELECT * FROM usuarios';
								$result = $conn->query($sql);
								foreach ($result as $sql) {
									echo "<option value = '$sql[3]' >" .$sql[3]. "</option>";
								}

								?></td>
								<td>
									<?php

								$sql='SELECT * FROM usuarios';
								$result = $conn->query($sql);
								foreach ($result as $sql) {
									echo "<option value = '$sql[4]' >" .$sql[4]. "</option>";
								}

								?>
								</td>
								
							</tr> 

						</tbody>
					</table>

				</div>


			</div>


			</div><!-- <?php

			$sql='SELECT * FROM usuarios';
			$result = $conn->query($sql);
			foreach ($result as $sql) {
				echo "<option value = '$sql[1]' >" .$sql[1]. "</option>";
			}

			?>
		</div>
		<div id="balada"><?php

		$sql='SELECT * FROM usuarios';
		$result = $conn->query($sql);
		foreach ($result as $sql) {
			echo "<option value = '$sql[3]' >" .$sql[3]. "</option>";
		}

		?> -->
<!-- </div>
</div>
</div>	
</div>
</body>
</html> -->
<?php include ('rodape.php'); ?>