
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
				
				<div class="container">
					<div class="navbar navbar-inverse ">
						<div class="navbar-inner">
							<ul class="nav navbar-nav ">
								<li><a href="?p=home"  title="Home Page">Home</a></li>
								<li> <a href=Logout.php>Sair</a></li>
								<li> <a href=VerCadastroUsuario.php title="ver cadastro">VerCadastro</a></li>
								<li><a href=BuscarusuarioEditar.php  title="Editar cadastro">Editar</a></li> 
								<li><a href=BuscarusuarioExcluir.php  title="excluir cadastro">Excluir</a></li> 
								<li> <a href="?p=sobre" title="Sobre">Sobre</a></li>   
							</ul>
						</div>
					</div>
				</div>
				<div class="container body-content">
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
							
							if (!isset($_SESSION)) session_start();
							{
							echo "Ola ", $_SESSION['UsuarioNome'] ," Seja bem vindo  <br><br>" ;
							
							
						}
						
						require_once("BuscarCadastrosSimp.php");	
						?>
						
					</div>
				</div>

				<nav aria-label="Page navigation">
					<ul class="pagination">
						<li>
							<a href="#" aria-label="Previous">
							<span aria-hidden="true">&laquo;</span>
							</a>
						</li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
						<li>
							<a href="#" aria-label="Next">
							<span aria-hidden="true">&raquo;</span>
							</a>
						</li>
					</ul>
				</nav>
				<div class"row">
					<footer>
						<p>&copy; Vagalume TimeLine 2016- Todos os Diretos Resevados.</p>
					</footer>
				</div>
			</body>
		</div>
	</div>
</html>