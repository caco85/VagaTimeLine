<?php

 mysql_connect('localhost', 'root', '');

$banco = mysql_select_db('db_vtimeline');


$sql = "(SELECT * FROM `usuario`)";
$query = mysql_query($sql);



  // Salva os dados encontados na variável $resultado
  $resultado  = mysql_fetch_assoc($query);

 while($linha = mysql_fetch_array($query)){ 
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
  }
?>
<br><br><br>

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
      <h1>O que deseja fazer?</h1>
      <ul>
        <li><a href=BuscarCadastrosEditar.php>Editar</a></li>
        <li><a href=ExcluirCadastros.php>Excluir</a></li> 
        <li><a href=IndexAdmin.php>Voltar</a></li> 
        <li><a href=Logout.php>Sair</a></li> 
      </ul>
    </body>
  </div>
</html>