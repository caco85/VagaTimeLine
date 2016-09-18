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

echo"Conectando ao banco...";
$sql = mysql_connect("localhost","root", "");
$banco = mysql_select_db("db_vtimeline");
echo"Conexão ok.";
$inserir= "insert into usuario(nome,email,login,senha,tpUser,infoPessoal,data,conteudo,likes,localizacao,imagem) values ('$nome', '$email', '$login', '$senha','$tpUser','$infoPessoal', '$data', '$conteudo','$likes','$localizacao ','$imagem ')";
mysql_query($inserir, $sql);
echo"Inserção bem sucedida!";

mysql_close($sql);

//var_dump($sql);

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
		<a href=Login.php>Entrar!</a>
		<li><a href=Cadastrar.php>Novo Cadastro?</a></li>
		<a href=Index.php>Voltar!</a>
		<li><a href=Logout.php>Sair</a></li> 
	</ul>
  </body>
</div>
</html>

