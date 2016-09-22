<?php

 mysql_connect('localhost', 'root', '');

$banco = mysql_select_db('db_vtimeline');


$sql = "(SELECT * FROM `usuario`)";
$query = mysql_query($sql);



  // Salva os dados encontados na variável $resultado
  $resultado  = mysql_fetch_assoc($query);

 while($linha = mysql_fetch_array($query)){ 
    
      $id = $linha["id"];
      $nome =$linha["nome"];
      $infoPessoal = $linha["infoPessoal"];
      $data = $linha["data"];
      $conteudo = $linha["conteudo"];
      $likes = $linha["likes"];
      $localizacao =$linha["localizacao"];
      $imagem =$linha["imagem"];
      $qtdAmigos = $linha['qtdAmigos'];
        
     
  echo "Numero do Usuario:   $id <br>Nome :  $nome<br> infoPessoal:  $infoPessoal<br>Data:  $data<br> Conteudo:   $conteudo<br> Likes:   $likes<br> Localizacao:   $localizacao.<br> Imagem:   $imagem.<br>qtdAmigos:   $qtdAmigos.<br>";
  }
?>