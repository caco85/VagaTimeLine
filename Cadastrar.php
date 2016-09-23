<!doctype html>
<html>
  <div class="container"">
    <head>
      <meta charset="utf-8">
      <title>Vagalume TimeLine</title>
      <link href="css/bootstrap.min.css" rel="stylesheet" media="screen"/>
      <script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
    </head>
    <body>
     <div >
          <form action="CadastrarNoBanco.php" method="post" enctype="multipart/form-data">
            <table border="1">
              <tr>
              <td>Nome:</td>
              <td><input type="text" name="nome" /></td>
              </tr>
              <tr>
              <td>E-mail:</td>
              <td><input type="text" name="email" /></td>
              </tr>
              <tr>

              <td>Login:</td>
              <td><input type="text" name="login" /></td>
              </tr>
              <tr>
              <td>Senha:</td>
              <td><input type="password" name="senha" /></td>
              </tr>
              <tr>
              <!--  <td>Tipo Usuario:</td> tipo Usuario AI-->
              <td><input type="hidden" name="tpUser" value="Usuario" /></td>
              </tr>
              <tr>
              <td>Informação Pessoal:</td>
              <td><input type="text" name="infoPessoal" /></td>
              </tr>
              <tr>
              <td>Data:</td>
              <td><input type="text" name="data" /></td>
              </tr>
              <tr>
              <td>Conteudo:</td>
              <td><input type="text" name="conteudo" /></td>
              </tr>
              <!--  <td>Tipo Likes:</td> tipo Usuario AI-->
              <td><input type="hidden" name="likes" value=0 /></td>
              </tr>
              <tr>
              <td>Localização:</td>
              <td><input type="text" name="localizacao" /></td>
              </tr>
              <tr>
              <tr>
               <td>SelecionarImagem</td>
                <td><input type="file" name="imagem"> </td>
               </tr>
              
              <!--  <td>Tipo qtdAmigos:</td> tipo Usuario AI-->
              <td><input type="hidden" name="qtdAmigos" value=0 /></td>
              </tr>
                    
               
                <td>&nbsp;</td>
                <td><input type="submit" value="Cadastrar" /></td>
                </tr>
               </table>
         
          </form>

            
      </div>
    </body>

  </div>
</html>