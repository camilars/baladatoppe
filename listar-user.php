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
		<?php
			$sql='SELECT * FROM usuarios';
			$result = $conn->query($sql);
		?>
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
								<th>Ações</th>	                
							</tr>
						</thead>
						<tbody>							
								<?php while($res = $result->fetch(PDO::FETCH_ASSOC)) { ?>
								<tr>
									<td><?= $res['usuario'] ?></td>
									<td><?= $res['balada'] ?></td>
									<td><?= $res['role'] ?></td>
									<td><a href="adm-user.php?id=<?= $res['id'] ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a></td>
								</tr> 
								<?php } ?>

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