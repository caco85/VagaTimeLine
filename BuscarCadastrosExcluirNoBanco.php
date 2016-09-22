<?php

 mysql_connect('localhost', 'root', '');

$banco = mysql_select_db('db_vtimeline');

$id = mysql_real_escape_string($_POST['id']);


// Validação do usuário/senha digitados
$sql = "(SELECT * FROM usuario WHERE id = '$id')";
$query = mysql_query($sql);

  // Salva os dados encontados na variável $resultado
   $resultado = mysql_fetch_assoc($query);
 	
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

    
 echo "Numero do Usuario:   $id <br>Nome :  $nome<br> E-mail: $email<br> Login:   $login<br> Senha:  $senha<br> Tipo de Usuario:   $tpUser<br> infoPessoal:  $infoPessoal<br>Data:  $data<br> Conteudo:   $conteudo<br> Likes:   $likes<br> Localizacao:   $localizacao.<br> Imagem:   $imagem.<br> qtdAmigos:   $qtdAmigos.<br>";

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
                 <li><a href=IndexAdmin.php>Volta</a></li>
                <li><a href=Logout.php>Sair</a></li> 
                <li> <a href="?p=sobre" title="Sobre">Sobre</a></li>   
              </ul>
            </div>
          </div>
        </div>
        <div class="container body-content">
        <form action="ExcluirUsuario.php" method="post">
            <h2>Confirme se foi o cadastro o desejado  ou clique em volta</h2>
            <input type="hidden" name="id" value="<?php echo $id;?>"><br/>
            <input type="submit" value="Proseguir" /><br/>
          </form> 
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