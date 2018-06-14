<?php
include ('header.php');
?>
<!DOCTYPE html>
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
<div id="user"><?php

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

 ?>
</div>
</div>
</div>	
</div>
</body>
</html>
<?php include ('rodape.php'); ?>