<?php 
Include"header.php";
?>
<link rel="stylesheet" type="text/css" href="css/perfil.css">
<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->

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

              <input id="profile-image-upload" class="hidden" type="file">
              <div style="color:#999;" >upload</div>
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
               
              <button type="button" class="btn btn-success btn-sm">Descrição</button>
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
                      </div> 
<?php 
include"rodape.php";
?>