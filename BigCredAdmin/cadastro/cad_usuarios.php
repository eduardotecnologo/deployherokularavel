<?php
session_start();
include_once("../admin/seguranca.php");
include_once("../sistema/conexao.php");
$nome                    = $_POST["nome"];
$email                    = $_POST["email"];
$usuario                 = $_POST["usuario"];
$senha                   = $_POST["senha"];
$nivel_acessos       = $_POST["nivel_acessos"];

$query = mysql_query("INSERT INTO usuarios (nome, email, login, senha, nivel_acessos_id, created)
	VALUES ('$nome','$email','$usuario','$senha','$nivel_acessos', NOW())");
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
         <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Estudos-PHP/BigCredAdmin/admin/admin.php?link=2'>
             <script type=\"text/javascript\">
             alert(\"Usuário Cadastrado com Sucesso!!!\");
             </script>
   ";
}else
      {
		echo "
         <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Estudos-PHP/BigCredAdmin/admin/admin.php?link=2'>
             <script type=\"text/javascript\">
             alert(\"Erro ao Cadastrar Usuário!!!\");
             </script>
	";
}

?>
  </body>
</html>