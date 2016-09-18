<?php
if (!empty($_POST) and (empty($_POST['login']) or empty($_POST['senha'])))
{
 
  header("Location: Login.php");
    
}

 mysql_connect('localhost', 'root', '');

$banco = mysql_select_db('db_vtimeline');

$login = mysql_real_escape_string($_POST['login']);
$senha = mysql_real_escape_string($_POST['senha']);

// Validação do usuário/senha digitados
$sql = "(SELECT * FROM usuario WHERE login = '$login'  AND senha = '$senha')";
$query = mysql_query($sql);


 if (mysql_num_rows($query)!= 1 ){
       header("Location: IndexUsuario.php");
  } 
else
  {
  // Salva os dados encontados na variável $resultado
   $resultado = mysql_fetch_assoc($query);
  }
 	
  $id = $resultado["id"];					
  $nome = $resultado["nome"];
  $email = $resultado["email"];
  $senha = $resultado["senha"];
  $conteudo = $resultado["conteudo"];
  $localizacao = $resultado["localizacao"];
  $imagem = $resultado["imagem"];

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
        <form action="UpdateUsuario.php" method="post">
          <h2>Digite o que deseja alterar</h2>
          <input type="hidden" name="id" value="<?php echo $id;?>"><br/>
          Nome: <input type="text" name="nome" value="<?php echo $nome;?>"><br/>
          E-mail: <input type="text" name="email" value="<?php echo $email;?>"><br/>
          Senha: <input type="text" name="senha" value="<?php echo $senha;?>"><br/>
          informação Pessoal: <input type="text" name="infoPessoal" value="<?php echo $infoPessoal;?>"><br/>
          Localização: <input type="text" name="localizacao" value="<?php echo $localizacao;?>"><br/>
          Imagem: <input type="text" name="imagem" value="<?php echo $imagem;?>"><br/>
          
        <input type="submit" value="Alterar" /><br/>

        <ul>
          <li><a href=IndexUsuario.php>Volta</a></li>
          <li><a href=Logout.php>Sair</a></li> 
        </ul>

    </body>
</div>
</html>

