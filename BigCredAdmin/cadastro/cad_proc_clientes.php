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
$anexo_proposta              = $_FILES['anexo_proposta']['name'];
$anexo_documentos         = $_FILES['anexo_documentos']['name'];
$observacoes                   = $_POST["observacoes"];

//Pasta para salvar os arquivos
$_UP['pasta'] = '../img_arquivos/';

//Definir o tamanho mximo do arquivo em Bytes
$_UP['tamanho'] = 1024*1024*100; //5mb

//Array com as extenções permitidas
$_UP['extensoes'] = array('pdf', 'jpeg','png', 'jpg', 'doc','gif');

//Renomeia o arquivo
$_UP['renomeia'] = false;

$query = mysql_query("INSERT INTO clientes (nome, cpf, rg, nascimento, matricula, matriculaII,
  logradouro, numero, complemento, bairro, cidade, uf, cep, email, ddd, telefone, celular, conta, agencia, operacao, orgao_id,
  tipo_id, tabela_id, prazo_id, banco_id, parceiro_id, promotor_id, valor_contrato, porc_comicao_promotor,
  valor_comicao, status_id, comicao_geral, status_comicao_id, anexo_proposta, anexo_documentos, observacoes, created  )
    VALUES ('$nome', '$cpf', '$rg', '$nascimento', '$matricula', '$matriculaII','$logradouro', '$numero', '$complemento', '$bairro',
      '$cidade', '$uf', '$cep', '$email', '$ddd', '$telefone', '$celular', '$conta', '$agencia','$operacao', '$orgao_id',
  '$tipo_id', '$tabela_id', '$prazo_id', '$banco_id', '$parceiro_id', '$promotor_id', '$valor_contrato', '$porc_comicao_promotor',
  '$valor_comicao', '$status_id', '$comicao_geral', '$status_comicao_id', '$anexo_proposta', '$anexo_documentos', '$observacoes', NOW())");
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
         <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Estudos-PHP/BigCredAdmin/admin/admin.php?link=15'>
             <script type=\"text/javascript\">
             alert(\"Cliente Cadastrado com Sucesso!!!\");
             </script>
   ";
}else
      {
    echo "
         <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Estudos-PHP/BigCredAdmin/admin/admin.php?link=15'>
             <script type=\"text/javascript\">
             alert(\"Erro ao Cadastrar Clientes!!!\");
             </script>
  ";
}

?>
  </body>
</html>