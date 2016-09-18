<?php
if (!empty($_POST) and (empty($_POST['login']) or empty($_POST['senha'])))
{
 
  header("Location: Login.php");
    
}

 mysql_connect('localhost', 'root', '');

$banco = mysql_select_db('db_VagaTimeLine');

$login = mysql_real_escape_string($_POST['login']);
$senha = mysql_real_escape_string($_POST['senha']);

// Validação do usuário/senha digitados
$sql = "(SELECT * FROM usuario WHERE login = '$login'  AND senha = '$senha')";
$query = mysql_query($sql);


 if (mysql_num_rows($query)!= 1 ){
       header("Location: LoginUsuario.php");
  } 
else
  {
  // Salva os dados encontados na variável $resultado
   $resultado = mysql_fetch_assoc($query);
  }
 	
  $id = $resultado["id"];
  $nome = $resultado["nome"];
  $email = $resultado["email"];
  $login = $resultado["login"];
  $senha = $resultado["senha"];
  $tpUser = $resultado["tpUser"];
  $infoPessoal = $resultado["infoPessoal"];
  $data = $resultado["data"];
  $conteudo = $resultado["conteudo"];
  $likes = $resultado["likes"];
  $localizacao = $resultado["localizacao"];
  $imagem = $resultado["imagem"];

  
  echo "Numero do Usuario:   $id <br>Nome :  $nome<br> E-mail: $email<br> Login:   $login<br> Senha:  $senha<br> Tipo de Usuario:   $tpUser<br> infoPessoal:  $infoPessoal<br>Data:  $data<br> Conteudo:   $conteudo<br> Likes:   $likes<br> Localizacao:   $localizacao.<br> Imagem:   $imagem.<br>";

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
    <form action="ExcluirUsuario.php" method="post">
    <h2>Confirme seu cadastro clicando em prosseguir ou clique em volta</h2>
    <input type="hidden" name="id" value="<?php echo $id;?>"><br/>
    <input type="submit" value="Proseguir" /><br/>

     <ul>
        <li><a href=IndexUsuario.php>Volta</a></li>
        <li><a href=Logout.php>Sair</a></li> 
    </ul>

  </body>
</div>
</html>

