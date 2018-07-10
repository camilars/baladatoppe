<?php 
include "../header.php";
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/perfil.css">
	<title>Cadastrar balada</title>
</head>
<body>

</body>
</html>
<div class="container" id="corpo">

  <h2 class="pagm">Cadastro da Balada</h2>
    <form class="form-horizontal" action="crud/cadastrar_balada.php" method="POST">
      <div class="form-group" id="letras">
        <label class="control-label col-sm-1" for="balada">Balada:</label>
        <div class="col-sm-3">
          <input type="text" class="form-control"  placeholder="Nome da Balada" name="balada"required>
        </div>
      </div>
      
      <div class="form-group" >
        <label class="control-label col-sm-1" for="endereco">Endereço</label>
        <div class="col-sm-3">          
          <input type="text" class="form-control"  placeholder="Endereço" name="endereco" required>
        </div>
      </div>

      <div class="form-group" >
        <label class="control-label col-sm-1" for="telefone">Telefone</label>
        <div class="col-sm-3">          
          <input type="text" class="form-control"  placeholder="(81)4002-8922" name="telefone" required>
        </div>
      </div>

      <div class="form-group" >
        <label class="control-label col-sm-1" for="link">Link</label>
        <div class="col-sm-3">          
          <input type="text" class="form-control"  placeholder="Link (Facebook ou proprio site)" name="link" required>
         
          
        </div>
      </div>

      <div class="form-group" >
        <label class="control-label col-sm-1" for="descricao">Descrição</label>
        <div class="col-sm-3">          
          <input type="text" class="form-control"  placeholder="Descrição" name="descricao" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-1" for="horario">Horário</label>
        <div class="col-sm-2">          
          <input type="time" class="form-control"  name="horario" required>
        </div>
		<input class="btn btn-primary" type="submit" name="salvar" value="Salvar">	
        </div>
        <label class="control-label col-sm-4" </label>
					
      </div>




<?php 
include "../rodape.php"
?>