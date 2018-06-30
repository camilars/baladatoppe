<?php
require_once 'init-login.php';
include ('header.php');

if (isset($_GET['id'])) {
	$user_id = $_GET['id'];
	$sql="SELECT * FROM usuarios where id='$user_id'";
	$result = $conn->query($sql);
	$res = $result->fetch(PDO::FETCH_ASSOC);
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
						<th>Nome</th>
						<th>promoter</th>
						<th>Papel</th>
						<th>Ação</th>
					</tr>
				</thead>
				<tbody>
					<form action="adm-user.php" method="POST">
						<tr>
							<td><?= $res['usuario'] ?></td>
							<td><?= $res['balada'] ?></td>
							<td><input type="text" name="role" value="<?= $res['role'] ?>"></td>
							<td>
								<input type="hidden" name="user_id" value="<?= $user_id ?>">
								<input type="submit" class="btn btn-success" value="Salvar">
								<a class="btn btn-danger" href="listar-user.php">Cancelar</a>
							</td>
						</tr>
				</form>
			</tbody>
		</table>
	</div>
</div>
</div>
<?php
} else if(isset($_POST['role'])) {
	$role = $_POST['role'];
	$user_id = $_POST['user_id'];

	if ($role != 'adm') {
		$role = 'user';
	}
	$sql = "UPDATE usuarios SET role = '$role' WHERE id ='$user_id'";
	$query = $conn->prepare($sql);
	$query->execute();
	echo "<script>location.href='listar-user.php';</script>";
}
?>
<?php include ('rodape.php'); ?>