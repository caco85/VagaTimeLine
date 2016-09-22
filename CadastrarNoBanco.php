<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
$login = $_POST["login"];
$senha = $_POST["senha"];
$tpUser =$_POST["tpUser"];
$infoPessoal = $_POST["infoPessoal"];
$data = $_POST["data"];
$conteudo = $_POST["conteudo"];
$likes = $_POST["likes"];
$localizacao = $_POST["localizacao"];
$imagem = $_POST["imagem"];
$qtdAmigos = $_POST["qtdAmigos"];

echo"Conectando ao banco...";
$sql = mysql_connect("localhost", "root", "");
$banco = mysql_select_db("db_vtimeline");
echo"Conexão ok.";
$inserir= "insert into usuario(nome,email,login,senha,tpUser,infoPessoal,data,conteudo,likes,localizacao,imagem,qtdAmigos) values ('$nome', '$email', '$login', '$senha','$tpUser','$infoPessoal', '$data', '$conteudo','$likes','$localizacao ','$imagem ','$qtdAmigos ')";
mysql_query($inserir, $sql);
echo"Inserção bem sucedida!";

mysql_close($sql);

//var_dump($sql);



?>

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
								<li><a href=Login.php>Entrar!</a></li>
								<li><a href=Cadastrar.php>Novo Cadastro?</a></li>
								<li><a href=Index.php>Voltar!</a></li>
								<li><a href=Logout.php>Sair</a></li> /a>
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