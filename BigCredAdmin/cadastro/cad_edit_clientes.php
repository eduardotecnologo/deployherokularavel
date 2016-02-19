<?php
session_start();
include_once("../admin/seguranca.php");
include_once("../sistema/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
  </head>
  <?php
$id                                   = $_POST["id"];
$nome                             = $_POST["nome"];
$cpf                                 = $_POST["cpf"];
$rg                                  = $_POST["rg"];
$nascimento                    = $_POST["nascimento"];
$matricula                       = $_POST["matricula"];
$matricul                         = $_POST["matricul"];
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
$usuarios_id                   = $_POST["usuarios_id"];
$valor_contrato                = $_POST["valor_contrato"];
$porc_comicao_promotor = $_POST["porc_comicao_promotor"];
$valor_comicao                = $_POST["valor_comicao"];
$status_id                        = $_POST["status_id"];
$comicao_geral                = $_POST["comicao_geral"];
$valor_comicao_geral       = $_POST["valor_comicao_geral"];
$status_comicao_id          = $_POST["status_comicao_id"];
$anexo_documentos         = $_FILES['anexo_documentos']['name'];
$observacoes                   = $_POST["observacoes"];
$img_antiga                      = $_POST["img_antiga"];

if($anexo_documentos == ""){
  $query = mysql_query("UPDATE clientes SET nome = '$nome', cpf =  '$cpf', rg = '$rg', nascimento = '$nascimento', matricula = '$matricula',
  matricul = '$matricul', logradouro = '$logradouro', numero = '$numero', complemento = '$complemento', bairro = '$bairro', cidade = '$cidade',
  uf = '$uf', cep = '$cep', email = '$email', ddd = '$ddd', telefone = '$telefone', celular = '$celular', conta = '$conta', agencia = '$agencia',
  operacao = '$operacao', orgao_id = '$orgao_id', tipo_id = '$tipo_id', tabela_id = '$tabela_id', prazo_id = '$prazo_id', banco_id = '$banco_id',
  parceiro_id = '$parceiro_id', usuarios_id = '$usuarios_id', valor_contrato = '$valor_contrato', porc_comicao_promotor = '$porc_comicao_promotor',
  valor_comicao = '$valor_comicao', status_id = '$status_id', comicao_geral = '$comicao_geral', valor_comicao_geral = '$valor_comicao_geral',
  status_comicao_id = '$status_comicao_id', observacoes = '$observacoes',modified  = NOW() WHERE id='$id'");

if (mysql_affected_rows() != 0 ){
      echo "
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Estudos-PHP/BigCredAdmin/admin/admin.php?link=15'>
             <script type=\"text/javascript\">
             alert(\"Cliente editado com Sucesso. \");
             </script>
      ";
    }
     else{
        echo "
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Estudos-PHP/BigCredAdmin/admin/admin.php?link=15'>
             <script type=\"text/javascript\">
             alert(\"Erro ao editar cliente.\");
             </script>
      ";

    }

}else{
//Pasta de destino das imagens
$_UP['pasta'] = '../img_arquivos/';

//Tamanho máximo do arquivo em Bytes
$_UP['tamanho'] = 1024*1024*100; //5mb

//Array com as extensoes permitidas
$_UP['extensoes'] = array('png','jpg', 'jpeg', 'gif');

//Renomeia o arquivo? (se true, o arquivo será salvo como .jpg e em nome único)
$_UP['renomeia'] = false;

//Array com os tipos de erros de upload do PHP
$_UP['erros'][0] = 'Não ouve erro';
$_UP['erros'][1] = 'O arquivo no upload é maior que o permitido no PHP';
$_UP['erros'][2] = 'O arquivo no upload é maior que o permitido no HTML';
$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
$_UP['erros'][4] = 'Não foi possivel fazer o upload do arquivo';

//Verifica se houve algum erro com o upload. Sem sim, exibe a mensagem do erro
if($_FILES['anexo_documentos']['error'] != 0){
  die("Não foi possivel fazer o upload, erro: <br />". $_UP['erros'][$_FILES['anexo_documentos']['error']]);
  exit; //Para a execução do script
}
//Faz a verificação da extensao do arquivo
$extensao = strtolower(end(explode('.', $_FILES['anexo_documentos']['name'])));
if(array_search($extensao, $_UP['extensoes'])=== false){
  $query = mysql_query("UPDATE clientes SET nome = '$nome', cpf =  '$cpf', rg = '$rg', nascimento = '$nascimento', matricula = '$matricula',
  matricul = '$matricul', logradouro = '$logradouro', numero = '$numero', complemento = '$complemento', bairro = '$bairro', cidade = '$cidade',
  uf = '$uf', cep = '$cep', email = '$email', ddd = '$ddd', telefone = '$telefone', celular = '$celular', conta = '$conta', agencia = '$agencia',
  operacao = '$operacao', orgao_id = '$orgao_id', tipo_id = '$tipo_id', tabela_id = '$tabela_id', prazo_id = '$prazo_id', banco_id = '$banco_id',
  parceiro_id = '$parceiro_id', usuarios_id = '$usuarios_id', valor_contrato = '$valor_contrato', porc_comicao_promotor = '$porc_comicao_promotor',
  valor_comicao = '$valor_comicao', status_id = '$status_id', comicao_geral = '$comicao_geral', valor_comicao_geral = '$valor_comicao_geral',
  status_comicao_id = '$status_comicao_id', observacoes = '$observacoes',modified  = NOW() WHERE id='$id'");

if (mysql_affected_rows() != 0 ){
      echo "
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Estudos-PHP/BigCredAdmin/admin/admin.php?link=15'>
             <script type=\"text/javascript\">
             alert(\"Erro ao alterar imagem.Dados do Cliente editado com Sucesso. \");
             </script>
      ";
    }
     else{
        echo "
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Estudos-PHP/BigCredAdmin/admin/admin.php?link=15'>
             <script type=\"text/javascript\">
             alert(\"Erro ao editar cliente.\");
             </script>
      ";

    }


    }

}

    ?>
  </body>
</html>