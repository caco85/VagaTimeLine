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

$sql = ("Update usuario SET nome='$nome', login='$login', email ='$email',senha ='$senha', infoPessoal='$infoPessoal', data='$data',conteudo ='$conteudo',likes='$likes',localizacao ='$localizacao',imagem ='$imagem' where id='$id'");

$query = mysql_query($sql);

//var_dump($sql);
echo "Alteração Feita com Susseço,o que deseja fazer?";
 ?>
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
				<li><a href=IndexUsuario.php>Volta</a></li>
				<li><a href=Logout.php>Sair</a></li> 
			</ul>
		</body>
	</div>
</html>