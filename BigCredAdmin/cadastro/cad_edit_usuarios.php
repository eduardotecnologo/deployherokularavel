<?php
session_start();
include_once("../admin/seguranca.php");
include_once("../sistema/conexao.php");
$id                    = $_POST["id"];
$nome             = $_POST["nome"];
$email              = $_POST["email"];
$usuario           = $_POST["usuario"];
$senha             = $_POST["senha"];
$nivel_acessos = $_POST["nivel_acessos"];

$query = mysql_query("UPDATE usuarios set nome ='$nome', email = '$email', login = '$usuario', senha = '$senha',
  nivel_acessos_id = '$nivel_acessos', modified = NOW() WHERE id='$id'");
?>
<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
<?php

if (mysql_affected_rows() != 0) { //Menssagem Javascript
   echo"
         <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Estudos-PHP/BigCredAdmin/admin/admin.php?link=2'>
             <script type=\"text/javascript\">
             alert(\"Usuário Editado com Sucesso!!!\");
             </script>
   ";
}else
      {
		echo "
         <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Estudos-PHP/BigCredAdmin/admin/admin.php?link=2'>
             <script type=\"text/javascript\">
             alert(\"Erro ao Editar o Usuário!!!\");
             </script>
	";
}
rro
?>
  </body>
</html>