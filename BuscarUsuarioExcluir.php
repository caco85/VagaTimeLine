<!doctype html>
<html>
	<div class="jumbotron">
		<div class="container">
			<head>
			<meta charset="utf-8">
			<title>Vagalume TimeLine</title>
			<link href="css/bootstrap.min.css" rel="stylesheet" media="screen"/>
			<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>

			</head>

			<body>
				<header class="container" >
					<img src="imagens/vagalumet.jpg" width="1109" height="200"  alt=""/>
					</img>
				</header>
				<div class="container">
					<div class="navbar navbar-inverse nav-justified ">
						<div class="navbar-inner">
							<ul class="nav navbar-nav ">
								<li><a href="?p=home"  title="Home Page">Home</a></li>
								<li><a href=IndexUsuario.php>Voltar</a></li>
								<li> <a href="?p=sobre" title="Sobre">Sobre</a></li>   
							</ul>
						</div>
					</div>
				</div>
				<div class="container body-content">
				<form action="BuscarUsuarioExcluirNoBanco.php" method="post">
					<br><br><br>
					<p>Por motivo de segurança digite login  e senha novamente.</p><br><br>

					<table border="1">
						<tr>
						<td>Login:</td>
						<td><input type="text" name="login" /></td>
						</tr>
						<tr>
						<td>Senha:</td>
						<td><input type="password" name="senha" /></td>
						</tr>
						<tr>
						<td>&nbsp;</td>
						<td><input type="submit" value="Entrar" /></td>
						</tr>
					</table>
				</form>
					<div class="span12">
						<?php        
							if(isset ($_GET['p'])){
								$inc = $_GET['p'];
							}else{
								$inc = 'home';
							}
							if($inc == ""){
								$inc = 'home';
							}
							include $inc.".php";
						?>
					 	
					</div>
				</div>

				<div class"row">
					<footer>
						<p>&copy; Vagalume TimeLine 2016- Todos os Diretos Resevados.</p>
					</footer>
				</div>
			</body>
		</div>
	</div>
</html>