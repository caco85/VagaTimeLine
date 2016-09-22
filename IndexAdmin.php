
<!doctype html>
<html>

<div id="tudo">
	<head>
		<meta charset="utf-8">
		<title>Vagalume TimeLine</title>
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen"/>
		<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
	</head>

	<body>
		<header>
			<div class="top">
				<div class="tudotop">
					<div classe="minilogo">
							
						<img src="imagens/vagalumet.jpg" width="1000" height="200" alt=""/>
						</img>
					</div>	
					<nav role='navigation'>
						<ul>
							<li>
							 	<li><a href="?p=home"  title="Home Page">Home</a></li>
							 	<li> <a href="Logout.php ">Sair</a></li>
		        				<li> <a href="?p=cadastrar" title="Cadastre-se">Cadastrar</a></li>
					           	<li> <a href="?p=sobre" title="Sobre">Sobre</a></li>      	   
						 	</li>
						<ul>
					<nav>	
				</div>
			</div>	
		</header>

		<div class ="conteudo">

			<section id="sec01">
	   				
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
		 	 </section>  
		</div>
	  <?php

			if (!isset($_SESSION)) session_start();
				{
				echo "Ola ", $_SESSION['UsuarioNome'] ," Seja bem vindo" ;
				$_SESSION['UsuarioID']; 

				require_once("BuscarCadastrosSimp.php");			
				}

		?>
	</body>
	<footer> 
		<!-- <p>Vagalume TimeLine 2016- Todos os Diretos Resevados. <p> -->
	</footer>
</div>
</html>