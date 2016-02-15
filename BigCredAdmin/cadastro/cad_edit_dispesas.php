<?php
session_start();
include_once("../admin/seguranca.php");
include_once("../sistema/conexao.php");
$agua            =$_POST["agua"];
$luz               = $_POST["luz"];
$telefone       = $_POST["telefone"];
$internet        = $_POST["internet"];
$aluguel        = $_POST["aluguel"];
$condominio = $_POST["condominio"];
$grafica         = $_POST["grafica"];
$contador      = $_POST["contador"];
$manutencao= $_POST["manutencao"];
$limpeza       = $_POST["limpeza"];
$celular         = $_POST["celular"];


$query = mysql_query("UPDATE despesas set agua ='$agua', luz = '$luz', telefone = '$telefone', internet = '$internet', aluguel = '$aluguel',
  condominio ='$condominio', grafica = '$grafica', contador = '$contador', manutencao = '$manutencao',limpeza = '$limpeza', celular = '$celular',
modified = NOW() WHERE id='$id'");
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
         <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Estudos-PHP/BigCredAdmin/admin/admin.php?link=20'>
             <script type=\"text/javascript\">
             alert(\"Despesas Editada com Sucesso!!!\");
             </script>
   ";
}else
      {
        echo "
         <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Estudos-PHP/BigCredAdmin/admin/admin.php?link=20'>
             <script type=\"text/javascript\">
             alert(\"Erro ao Editar o Despesas!!!\");
             </script>
    ";
}
rro
?>
  </body>
</html>