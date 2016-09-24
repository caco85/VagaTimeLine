<?php 
mysql_connect('localhost', 'root', '');

$banco = mysql_select_db('db_vtimeline');

$id = mysql_real_escape_string($_POST['id']);
$nome = mysql_real_escape_string($_POST['nome']);
$login = mysql_real_escape_string($_POST['login']);
$email = mysql_real_escape_string($_POST['email']);
$senha = mysql_real_escape_string($_POST['senha']);
$infoPessoal = mysql_real_escape_string($_POST['infoPessoal']);
$data = mysql_real_escape_string($_POST['data']);
$conteudo = mysql_real_escape_string($_POST['conteudo']);
//$likes = mysql_real_escape_string($_POST['likes']);
$localizacao = mysql_real_escape_string($_POST['localizacao']);
$imagem = mysql_real_escape_string($_POST['imagem']);
//$qtdAmigos = mysql_real_escape_string($_POST['qtdAmigos']);

$sql = ("Update usuario SET nome='$nome', login='$login', email ='$email',senha ='$senha', infoPessoal='$infoPessoal', data='$data',conteudo ='$conteudo',likes='$likes',localizacao ='$localizacao',imagem ='$imagem',qtdAmigos = '$qtdAmigos' where id='$id'");

$query = mysql_query($sql);

//var_dump($sql);
echo "Alteração Feita com Susseço,o que deseja fazer?";
 ?>
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
								<ul>
								<li><a href=IndexUsuario.php>Volta</a></li>
								<li><a href=Logout.php>Sair</a></li> 
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