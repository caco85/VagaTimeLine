<?php

	if (!isset($_SESSION)) session_start();
	{
	echo "Ola ", $_SESSION['UsuarioNome'] ," Seja bem vindo" ;
	$_SESSION['UsuarioID']; 			
	}
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
			<h1>O que deseja fazer?</h1>
			<ul>
				<li><a href=BuscarCadastros.php>Ver Cadastro</a></li>
				<li><a href=BuscarCadastrosEditar.php>Editar</a></li>
				<li><a href=BuscarCadastrosExcluir.php>Excluir</a></li> 
				<li><a href=Logout.php>Sair</a></li> 
			</ul>
		</body>
	</div>
</html>