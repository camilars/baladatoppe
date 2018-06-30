<?php
include "header.php";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" href="css/carregar.css">
	<meta charset="UTF-8">
	<title>Celke - Upload</title>
</head>
<body>
	<h2>Cadastrar Imagem</h2>
	<?php
	if(isset($_SESSION['msg'])){
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
	}
	?>
	<div class="container" id="corpo">
	
	<form method="POST" action="proc_cad_img.php" enctype="multipart/form-data" id="formulario">
		<label>Nome:</label>
		<div class="col-md-3">
			<input type="text"  class="form-control" name="nome" placeholder="Digitar o nome"><br><br>
		</div>
		
		<label>Imagem</label>
		<input id="file"  type="file" name="imagem"><br><br>
		
		<input id="botao" name="SendCadImg" type="submit"  class="btn btn-primary btn-md" value="Cadastrar">
	</form>
</div>

</body>
</html>
