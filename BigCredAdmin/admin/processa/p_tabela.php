<?php
session_start();
include_once("../../admin/seguranca.php");
include_once("../../sistema/conexao.php");
$nome = $_POST["nome"];

$query = mysql_query("INSERT INTO tabela (nome, created)
    VALUES ('$nome', NOW())");
?>
<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
<?php

if (mysql_affected_rows() != 0) {
   echo"
         <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/BigCredAdmin/admin/admin.php?link=7'>
             <script type=\"text/javascript\">
             alert(\"Tabela Cadastrado com Sucesso!!!\");
             </script>
   ";
}else
      {
        echo "
         <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/BigCredAdmin/admin/admin.php?link=7'>
             <script type=\"text/javascript\">
             alert(\"Erro ao Cadastrar Nova Tabela!!!\");
             </script>
    ";
}

?>
  </body>
</html>