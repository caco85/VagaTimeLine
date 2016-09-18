<?php 
mysql_connect('localhost', 'root', '');

$banco = mysql_select_db('db_vtimeline');

$id = mysql_real_escape_string($_POST['id']);

$sql = ("Delete from usuario where id='$id'");
$query = mysql_query($sql);

//var_dump($sql);
echo "Excluido com Susseço,o que deseja fazer?";
 ?>

<!doctype html>
<html>

	<div id="tudo">
		<head>
			<meta charset="utf-8">
			<title>Vagalume TimeLine</title>
			<link href="style.css" rel="stylesheet" type="text/css">
			<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
		</head>

		<body>
		  	<ul>
				<li><a href=Cadastrar.php>Novo Cadastro?</a></li>
				<li><a href=Logout.php>Sair</a></li> 
			</ul>
	 	</body>
	</div>
</html>