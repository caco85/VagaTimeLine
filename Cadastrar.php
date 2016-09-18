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
    <form action="CadastrarNoBanco.php" method="post">
  <br><br><br>
    <p>Bem-vindo a tela de cadastro .Preencha os dados a seguir: </p><br><br>

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
        <td>Imagem:</td>
        <td><input type="text" name="imagem" /></td>
     </tr>
     <tr>
        <td>&nbsp;</td>
          <td><input type="submit" value="Entrar" /></td>
      </tr>
    </table>
     <br><br><br>
    <ul>
      <li><a href=Index.php>Voltar</a></li>
    </ul>
  </body>
</div>
</html>