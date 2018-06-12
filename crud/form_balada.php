<?php 
include "../header.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar balada</title>
</head>
<body>
	<div class="container text-center">
		<div class="form-row">
			<div class="col-md-6">
				
				

				<form action="crud/cadastrar_balada.php" method="POST">
					<div class="form-control">
						Balada <input type="text" name="balada">
					</div>	
					<div class="form-control">
						endereço<input type="text" name="endereco">
					</div>
					<div class="form-control">
						telefone<input type="text" name="telefone">
					</div>
					<div class="form-control">
						Link<input type="text" name="link">
					</div>
					<div class="form-control">
						descrição<input type="text" name="descricao" >
					</div>
					<div class="form-control">
						Horario<input type="time" name="horario">
					</div>
					<div class="form-control">
						<input class="btn btn-success" type="submit" name="salvar" value="Salvar">	
					</div>	
				</div>
			</div>
		</form>
	</div>
</body>
</html>

<?php 
include "../rodape.php"
?>