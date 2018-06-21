<?php
include "header.php";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Celke - Upload</title>
</head>
<body>
	<h1>Cadastrar Imagem</h1>
	<?php
	if(isset($_SESSION['msg'])){
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
	}
	?>
	<div class="container">
	<!-- 
	<form method="POST" enctype="multipart/form-data" action="add_balada.php" id="formulario">
	 <h1 style="color: white;">selecione imagem:</h1>
	 <div class="col-md-6">
	<input type="file" class="form-control" name="arquivo" required><br/>
	 </div>
	 <div class="col-md-12"><br>
	<input type="submit" class="btn btn-primary">	
	 </div>
	</form> -->
	<form method="POST" action="proc_cad_img.php" enctype="multipart/form-data" id="formulario">
		<label>Nome:</label>
		<div class="col-md-6">
			<input type="text"  class="form-control" name="nome" placeholder="Digitar o nome"><br><br>
		</div>
		
		<label>Imagem</label>
		<input type="file" name="imagem"><br><br>
		
		<input name="SendCadImg" type="submit"  class="btn btn-primary" value="Cadastrar">
	</form>
</div>

</body>
</html>
