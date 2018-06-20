<?php 
include "header.php";
?>
<link rel="stylesheet" type="text/css" href="css/perfil.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

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
<div class="container">
	<div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="http://keenthemes.com/preview/metronic/theme/assets/admin/pages/media/profile/profile_user.jpg" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						<?= strtoupper($_SESSION['user-logged'])?>
					</div>
					<div class="profile-usertitle-job">
						
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<button type="button" class="btn btn-success btn-sm">Upload</button>
					<button type="button" class="btn btn-danger btn-sm">Message</button>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="#" >
								<i class="glyphicon glyphicon-home"></i>
								Descrição</a>
							</li>
							<li>
								<a href="#"  data-toggle="modal" data-target="#editModal">
									<i class="glyphicon glyphicon-user"></i>
									Account Settings </a>
								</li>
							</a>
						</li>
						
						</ul>
					</div>
					
				</div>
			</div>
			<div class="col-md-9">
				<div class="profile-content">
					
				</div>
			</div>
		</div>
	</div>
	<center>
		<strong><a href="index-login.php" target="_blank">Balada top</a></strong>
	</center>



	<?php 
	include "rodape.php";

	?>