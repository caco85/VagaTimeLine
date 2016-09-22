<!DOCTYPE html>
<html>
	<div class="container">
		<head>
		<meta charset="utf-8">
		<title>Home</title>
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen"/>
		<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>	
		</head>

		<body>
			<?php

				
				session_start();
				if (!isset($_SESSION['UsuarioNome'])) {
  			  		require_once("Login.php");
					require_once("Cadastrar.php");	
				 
				}
				
			?>
		</body>
	</div>	
</html>