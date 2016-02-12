<?php
session_start();
include_once("../admin/seguranca.php");
include_once("../sistema/conexao.php");
$agua               = $_POST["agua"];
$luz                  = $_POST["luz"];
$telefone         = $_POST["telefone"];
$celular            = $_POST["celular"];
$internet          = $_POST["internet"];
$aluguel           = $_POST["aluguel"];
$condominio    = $_POST["condominio"];
$conducao       = $_POST["conducao"];
$emprestimos = $_POST["emprestimos"];
$grafica           = $_POST["grafica"];
$contador         = $_POST["contador"];
$manutencao  = $_POST["manutencao"];
$limpeza          = $_POST["limpeza"];
$outros            = $_POST["outros"];

$query = mysql_query("INSERT INTO despesas (agua, luz, telefone, celular, internet, aluguel, condominio,
  conducao, emprestimos, pagamentos, grafica, contador, manutencao, limpeza, outros, created)
    VALUES ('$agua', '$luz' , '$telefone', '$celular', '$internet', '$aluguel', '$condominio', '$conducao', '$emprestimos', '$pagamentos',
     '$grafica', '$contador', '$manutencao', '$limpeza', '$outros', NOW())");
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
         <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Estudos-PHP/BigCredAdmin/admin/admin.php?link=20'>
             <script type=\"text/javascript\">
             alert(\"Dados Cadastrado com Sucesso!!!\");
             </script>
   ";
}else
      {
        echo "
         <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Estudos-PHP/BigCredAdmin/admin/admin.php?link=19'>
             <script type=\"text/javascript\">
             alert(\"Erro ao Cadastrar Novos Dados!!!\");
             </script>
    ";
}

?>
  </body>
</html>