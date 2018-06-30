<?php 
Include"header.php";
?>
<link rel="stylesheet" type="text/css" href="css/perfil.css">
<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
<!-- Include the above in your HEAD tag -->

<div class="container">
	<div class="row">
		<h2>Perfil do Usuário <?= ($_SESSION['user-logged'])?></h2>


   <div class="col-md-7 ">

    <div class="panel panel-default">
      <div class="panel-heading">  <h4 >usuário</h4></div>
      <div class="panel-body">

        <div class="box box-info">

          <div class="box-body">
           <div class="col-sm-6">
             <div  align="center"> <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive"> 
               <form method="POST" action="up-perfil.php" enctype="multipart/form-data" id="form"> 
              <input id="profile-image-upload" name="foto" class="hidden" type="file">
              <input type="submit" value="enviar" class="btn btn-success">
              <div style="color:#999;" >altera imagem </div>
          </form>
              <!--Upload Image Js And Css-->
            </div>


            <div class="profile-usertitle">
              <div class="profile-usertitle-name">
                <?= strtoupper($_SESSION['user-logged'])?>
              </div>
              <div class="profile-usertitle-job">
                
              </div>
            </div>
            
            <div class="profile-userbuttons">
             
              <button data-toggle="modal" data-target="#editdescri" type="button" class="btn btn-success btn-sm" >Descrição</button>
              <button data-toggle="modal" data-target="#editModal" type="button" class="btn btn-danger btn-sm">Alterar conta</button>

            </div>

          </div>


        </div>


      </div> 
    </div>

    <script>
      $(function() {
        $('#profile-image1').on('click', function() {
          $('#profile-image-upload').click();
        });
      });    

    </script> 

    
  </div>
</div>
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">

  
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
            <input  id="sen"  type="password" name="password" class="form-control"   required="Pra sua segurança ">
          </div>
          <div class="form-group">
            <input type="hidden" name="balada" value="<?= $balada?>">
            <input class="btn btn-danger" type="submit" name='delete' value="Excluir">  
            <input id="pp" class="btn btn-success" type="submit" name="salvar" value="Salvar">  
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="editdescri" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">

  
  <div class="modal-dialog" role="document" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">fale mais sobre você</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
          <div class="form-group">
            <label for="name">Descrição</label>
            <input type="text" name="user" class="form-control">
          </div>
         
          <div class="form-group">
            <input type="hidden" name="balada" value="<?= $balada?>">
            <input id="pp" class="btn btn-success" type="submit" name="salvar" value="Salvar">  
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<script>
var sen = document.getElementById("sen");
if (sen == null) {
  alert("digita a nova senha");
}
var pp = document.getElementById("pp");
pp.onclick = function(){
  alert("você tem certeza ?");
}

  
</script>

</body>
<?php 
include_once "rodape.php";
?>