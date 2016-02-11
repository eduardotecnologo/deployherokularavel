<?php
session_start();
include_once("../admin/seguranca.php");
include_once("../sistema/conexao.php");
$nome                              = $_POST["nome"];
$cpf                                  = $_POST["cpf"];
$rg                                   = $_POST["rg"];
$nascimento                    = $_POST["nascimento"];
$matricula                       = $_POST["matricula"];
$matriculaII                     = $_POST["matriculaII"];
$logradouro                     = $_POST["logradouro"];
$numero                          = $_POST["numero"];
$complemento                = $_POST["complemento"];
$bairro                             = $_POST["bairro"];
$cidade                             = $_POST["cidade"];
$uf                                    = $_POST["uf"];
$cep                                 = $_POST["cep"];
$ddd                                 = $_POST["ddd"];
$telefone                          = $_POST["telefone"];
$celular                            = $_POST["celular"];
$conta                               =$_POST["conta"];
$agencia                           = $_POST["agencia"];
$operacao                         = $_POST["operacao"];
$orgao_id                          = $_POST["orgao_id"];
$tipo_id                             = $_POST["tipo_id"];
$tabela_id                         = $_POST["tabela_id"];
$prazo_id                          = $_POST["prazo_id"];
$banco_id                         = $_POST["banco_id"];
$parceiro_id                      = $_POST["parceiro_id"];
$promotor_id                    = $_POST["promotor_id"];
$valor_contrato                 = $_POST["valor_contrato"];
$porc_comicao_promotor = $_POST["porc_comicao_promotor"];
$valor_comicao                 = $_POST["valor_comicao"];
$status_id                          = $_POST["status_id"];
$comicao_geral                 = $_POST["comicao_geral"];
$status_comicao_id           = $_POST["status_comicao_id"];
$anexo_proposta               = $_FILES['anexo_proposta']['name'];
$anexo_documentos         = $_FILES['anexo_documentos']['name'];
$observacoes                    = $_POST["observacoes"];

//Pasta para salvar os arquivos
$_UP['pasta'] = '../img_arquivos/';

//Definir o tamanho mximo do arquivo em Bytes
$_UP['tamanho'] = 1024*1024*100; //5mb

//Array com as extenções permitidas
$_UP['extensoes'] = array('pdf', 'jpeg','png', 'jpg', 'doc','gif');

//Renomeia o arquivo
$_UP['renomeia'] = false;

//Array com os tipos de erros do upload do PHP
$_UP['erros'][0] = 'Não ouve ero';
$_UP['erros'][1] = 'O arquivo no upload é maior que o limite do php';
$_UP['erros'][2] = 'O arquivo ultrapassa o limite especificado do HTML';
$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
$_UP['erros'][0] = 'Não foi feito o upload do arquivo';

//Verifica se ouve algum erro com o upload(Se sim, exibe uma mensagem de erro)
if ($_FILES['anexo_proposta']['error'] != 0) {
  die("Não foi possível fazer o upload, erro:<br/>". $_UP['erros']$_FILES['anexo_proposta']['error']);
  exit;
}
if ($_FILES['anexo_documentos']['error'] != 0) {
  die("Não foi possível fazer o upload, erro:<br/>". $_UP['erros']$_FILES['anexo_documentos']['error']);
  exit;
}

//Verifica as extenções dos arquivos
$extensao = strtolower(end(explode('.', $_FILES['anexo_proposta']['name'])));
$extensao = strtolower(end(explode('.', $_FILES['anexo_documentos']['name'])));
if (array_search($extensao, $_UP['extensoes'])=== false) {
   echo"
         <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/BigCredAdmin/admin/admin.php?link=15'>
             <script type=\"text/javascript\">
             alert(\"Por favor envie aquivos com as extensoes: ('pdf', 'jpeg','png', 'jpg', 'doc' e 'gif')!!!\");
             </script>
   ";
}

$query = mysql_query("INSERT INTO clientes (nome, cpf, rg, nascimento, matricula, matriculaII,
  logradouro, numero, complemento, bairro, cidade, uf, cep, ddd, telefone, celular, conta, agencia, operacao, orgao_id,
  tipo_id, tabela_id, prazo_id, banco_id, parceiro_id, promotor_id, valor_contrato, porc_comicao_promotor,
  valor_comicao, status_id, comicao_geral, status_comicao_id, anexo_proposta, anexo_documentos, observacoes, created)
    VALUES ('$nome', '$cpf', '$rg', '$nascimento', '$matricula', '$matriculaII','$logradouro', '$numero', '$complemento', '$bairro',
      '$cidade', '$uf', '$cep', '$ddd', '$telefone', '$celular', '$conta', '$agencia','$operacao', '$orgao_id',
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
         <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/BigCredAdmin/admin/admin.php?link=15'>
             <script type=\"text/javascript\">
             alert(\"Cliente Cadastrado com Sucesso!!!\");
             </script>
   ";
}else
      {
        echo "
         <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/BigCredAdmin/admin/admin.php?link=15'>
             <script type=\"text/javascript\">
             alert(\"Erro ao Cadastrar Cliente!!!\");
             </script>
    ";
}

?>
  </body>
</html>