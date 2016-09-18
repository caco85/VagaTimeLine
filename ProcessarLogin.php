<?php

//Verificar se o login/senha foram digitados

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
       header("Location: Login.php");
  } 
else
  {
  // Salva os dados encontados na variável $resultado
   $resultado = mysql_fetch_assoc($query);
  }

 if (!isset($_SESSION)) session_start();
    {
       $_SESSION['UsuarioID'] = $resultado['id']; 
       $_SESSION['UsuarioNome'] = $resultado['nome'];
       $_SESSION['TipoUsuario'] = $resultado['tpUser'];
       
       $tpUser = mb_strtoupper($resultado['tpUser']);
       var_dump($tpUser);
       if ($tpUser == 'ADMINISTRADOR') {
         header("Location: IndexAdmin.php");
       }
       elseif ($tpUser == 'Usuario') {
         header("Location: IndexUsuario.php");
       }
       else{
        header("Location: Index.php");
        }
       
    }

////var_dump($tpUser);
?>