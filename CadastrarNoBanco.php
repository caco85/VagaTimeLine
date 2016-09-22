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

	//salvar imagem na pasta e no banco
	$arquivo 	= $_FILES['arquivo']['name'];
	
	
	$_UP['pasta'] = 'foto/';
	
	
	$_UP['tamanho'] = 1024*1024*100; 
	
	
	$_UP['extensoes'] = array('png', 'jpg', 'jpeg', 'gif');
	
	
	$_UP['renomeia'] = false;
	
	
	$_UP['erros'][0] = 'Não houve erro';
	$_UP['erros'][1] = 'O arquivo no upload é maior que o limite do PHP';
	$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especificado no HTML';
	$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
	$_UP['erros'][4] = 'Não foi feito o upload do arquivo';
	
	
	if($_FILES['arquivo']['error'] != 0){
		die("Não foi possivel fazer o upload, erro: <br />". $_UP['erros'][$_FILES['arquivo']['error']]);
		exit; 
	}
	
	$extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
	if(array_search($extensao, $_UP['extensoes'])=== false){		
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:83/TimeLineVaga/index.php'>
			<script type=\"text/javascript\">
				alert(\"A imagem não foi cadastrada extesão inválida.\");
			</script>
		";
	}
	
	
	else if ($_UP['tamanho'] < $_FILES['arquivo']['size']){
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:83/TimeLineVaga/index.php'>
			<script type=\"text/javascript\">
				alert(\"Arquivo muito grande.\");
			</script>
		";
	}
	
	
	else{
		
		if($UP['renomeia'] == true){
			
			$nome_final = time().'.jpg';
		}else{
			
			$nome_final = $_FILES['arquivo']['name'];
		}
		
		if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta']. $nome_final)){
			
			$query = mysqli_query($conn, "INSERT INTO usuario (
			imagem) VALUES('$nome_final')");
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:83/TimeLineVaga/index.php'>
				<script type=\"text/javascript\">
					alert(\"Imagem cadastrada com Sucesso.\");
				</script>
			";	
		}else{
			
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost;83/TimeLineVaga/index.php'>
				<script type=\"text/javascript\">
					alert(\"Imagem não foi cadastrada com Sucesso.\");
				</script>
			";
		}
	}



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