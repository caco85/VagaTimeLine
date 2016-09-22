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
  $infoPessoal = $resultado["infoPessoal"];
  $data = $resultado["data"];
  $conteudo = $resultado["conteudo"];
  $likes = $resultado["likes"];
  $localizacao = $resultado["localizacao"];
  $imagem = $resultado["imagem"];
  $qtdAmigos = $resultado["qtdAmigos"];


  
  echo "Numero do Usuario:   $id <br>Nome :  $nome<br> infoPessoal:  $infoPessoal<br>Data:  $data<br> Conteudo:   $conteudo<br> Likes:   $likes<br> Localizacao:   $localizacao.<br> Imagem:   $imagem.<br> qtdAmigos:   $qtdAmigos.<br>";

?>