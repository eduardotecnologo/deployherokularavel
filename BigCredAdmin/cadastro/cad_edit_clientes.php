<?php
session_start();
include_once("../admin/seguranca.php");
include_once("../sistema/conexao.php");
$nome                             = $_POST["nome"];
$cpf                                 = $_POST["cpf"];
$rg                                  = $_POST["rg"];
$nascimento                    = $_POST["nascimento"];
$matricula                       = $_POST["matricula"];
$matriculaII                      = $_POST["matriculaII"];
$logradouro                     = $_POST["logradouro"];
$numero                          = $_POST["numero"];
$complemento                 = $_POST["complemento"];
$bairro                             = $_POST["bairro"];
$cidade                           = $_POST["cidade"];
$uf                                  = $_POST["uf"];
$cep                                = $_POST["cep"];
$email                             = $_POST["email"];
$ddd                                = $_POST["ddd"];
$telefone                         = $_POST["telefone"];
$celular                           = $_POST["celular"];
$conta                             = $_POST["conta"];
$agencia                          = $_POST["agencia"];
$operacao                       = $_POST["operacao"];
$orgao_id                        = $_POST["orgao_id"];
$tipo_id                           = $_POST["tipo_id"];
$tabela_id                       = $_POST["tabela_id"];
$prazo_id                        = $_POST["prazo_id"];
$banco_id                       = $_POST["banco_id"];
$parceiro_id                    = $_POST["parceiro_id"];
$promotor_id                   = $_POST["promotor_id"];
$valor_contrato                = $_POST["valor_contrato"];
$porc_comicao_promotor = $_POST["porc_comicao_promotor"];
$valor_comicao                = $_POST["valor_comicao"];
$status_id                        = $_POST["status_id"];
$comicao_geral                = $_POST["comicao_geral"];
$valor_comicao_geral       = $_POST["valor_comicao_geral"];
$status_comicao_id          = $_POST["status_comicao_id"];
$anexo_documentos         = $_FILES['anexo_documentos']['name'];
$observacoes                   = $_POST["observacoes"];

$query = mysql_query("UPDATE clientes set  nome = '$nome', cpf =  '$cpf', rg = '$rg', nascimento = '$nascimento', matricula = '$matricula',
  matriculaII = '$matricall', logradouro = '$logradouro', numero = '$numero', complemento = '$complemento', bairro = '$bairro', cidade = '$cidade',
  uf = '$uf', cep = '$cep', email = '$email', ddd = '$ddd', telefone = '$telefone', celular = '$celular', conta = '$conta', agencia = '$agencia',
  operacao = '$operacao', orgao_id = '$orgao_id', tipo_id = '$tipo_id', tabela_id = '$tabela_id', prazo_id = '$prazo_id', banco_id = '$banco_id',
  parceiro_id = '$parceiro_id', promotor_id = '$promotor_id', valor_contrato = '$valor_contrato', porc_comicao_promotor = '$porc_comicao_promotor',
  valor_comicao = '$valor_comicao', status_id = '$status_id', comicao_geral = '$comicao_geral', valor_comicao_geral = '$valor_comicao_geral',
  status_comicao_id = '$status_comicao_id', anexo_documentos = '$anexo_documentos', observacoes = '$observacoes', modified  = NOW() WHERE id='$id'");
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
         <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Estudos-PHP/BigCredAdmin/admin/admin.php?link=15'>
             <script type=\"text/javascript\">
             alert(\"Cliente Editado com Sucesso!!!\");
             </script>
   ";
}else
      {
        echo "
         <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Estudos-PHP/BigCredAdmin/admin/admin.php?link=15'>
             <script type=\"text/javascript\">
             alert(\"Erro ao Editar o Clientes!!!\");
             </script>
    ";
}
rro
?>
  </body>
</html>