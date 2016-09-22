<?php
 mysql_connect('localhost', 'root', '');

$banco = mysql_select_db('db_vtimeline');

$id = mysql_real_escape_string($_POST['id']);


// Validação do usuário/senha digitados
$sql = "(SELECT * FROM usuario WHERE id= '$id')";
$query = mysql_query($sql);


 if (mysql_num_rows($query)!= 1 ){
       header("Location: IndexAdmin.php");
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
    $qtdAmigos = mysql_real_escape_string($_POST['qtdAmigos']);
   

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
    <form action="UpdateUsuarios.php" method="post">
    <h2>Digite o que deseja alterar</h2>
      <input type="hidden" name="id" value="<?php echo $id;?>"><br/>
      Nome: <input type="text" name="nome" value="<?php echo $nome;?>"><br/>
      Login: <input type="text" name="login" value="<?php echo $login;?>"><br/>
      E-mail: <input type="text" name="email" value="<?php echo $email;?>"><br/>
      Senha: <input type="text" name="senha" value="<?php echo $senha;?>"><br/>
      <input type="hidden" name="tpUser" value="<?php echo $tpUser?>"><br/>
      Info Pessoal: <input type="text" name="infoPessoal" value="<?php echo  $infoPessoal;?>"><br/>
      Data: <input type="text" name="data" value="<?php echo $data;?>"><br/>
      Conteudo: <input type="text" name="conteudo" value="<?php echo $conteudo;?>"><br/>
      Likes: <input type="text" name="likes" value="<?php echo $likes;?>"><br/>
      Localização: <input type="text" name="localizacao" value="<?php echo $localizacao;?>"><br/>
      Imagem: <input type="text" name="imagem" value="<?php echo $imagem;?>"><br/>
      Qtd Amigos: <input type="text" name="qtdAmigos" value="<?php echo $qtdAmigos;?>"><br/>
    <input type="submit" value="Alterar" /><br/>

      <ul>
        <li><a href=IndexAdmin.php>Volta</a></li>
        <li><a href=Logout.php>Sair</a></li> 
      </ul>

  </body>
</div>
</html>
