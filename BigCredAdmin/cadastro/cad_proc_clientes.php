<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
  </head>

  <?php
include_once("../admin/seguranca.php");
include_once("../sistema/conexao.php");
$nome                             = $_POST["nome"];
$cpf                                 = $_POST["cpf"];
$rg                                   = $_POST["rg"];
$nascimento                   = $_POST["nascimento"];
$matricula                       = $_POST["matricula"];
$matricul                     = $_POST["matricul"];
$logradouro                     = $_POST["logradouro"];
$numero                          = $_POST["numero"];
$complemento                = $_POST["complemento"];
$bairro                             = $_POST["bairro"];
$cidade                            = $_POST["cidade"];
$uf                                    = $_POST["uf"];
$cep                                 = $_POST["cep"];
$email                              = $_POST["email"];
$ddd                                 = $_POST["ddd"];
$telefone                         = $_POST["telefone"];
$celular                            = $_POST["celular"];
$conta                              = $_POST["conta"];
$agencia                          = $_POST["agencia"];
$operacao                        = $_POST["operacao"];
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
//Pasta onde o arquivo vai ser salvo
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
  $query = mysql_query("INSERT INTO clientes (nome, cpf, rg, nascimento, matricula, matricul,logradouro, numero, complemento, bairro, cidade,
  uf, cep, email, ddd, telefone, celular, conta, agencia, operacao, orgao_id,tipo_id, tabela_id, prazo_id, banco_id, parceiro_id, usuarios_id, valor_contrato, porc_comicao_promotor,
  valor_comicao, status_id, comicao_geral, status_comicao_id, observacoes, created )
    VALUES ('$nome', '$cpf', '$rg', '$nascimento', '$matricula', '$matricul','$logradouro', '$numero', '$complemento', '$bairro','$cidade', '$uf', '$cep'
    , '$email', '$ddd', '$telefone', '$celular', '$conta', '$agencia','$operacao', '$orgao_id','$tipo_id', '$tabela_id', '$prazo_id', '$banco_id', '$parceiro_id',
    '$usuarios_id', '$valor_contrato', '$porc_comicao_promotor','$valor_comicao', '$status_id', '$comicao_geral', '$status_comicao_id', '$observacoes', NOW())");
echo"
         <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Estudos-PHP/BigCredAdmin/admin/admin.php?link=15'>
             <script type=\"text/javascript\">
             alert(\"Cliente salvo com Sucesso!!!\");
             </script>
     ";

    }
    //Verifica o tamanho do arquivo
else if ($_UP['tamanho'] < $_FILES['anexo_documentos']['size']){
  echo "";
   $query = mysql_query("INSERT INTO clientes (nome, cpf, rg, nascimento, matricula, matriculaII,logradouro, numero, complemento, bairro, cidade,
  uf, cep, email, ddd, telefone, celular, conta, agencia, operacao, orgao_id,tipo_id, tabela_id, prazo_id, banco_id, parceiro_id, usuarios_id, valor_contrato, porc_comicao_promotor,
  valor_comicao, status_id, comicao_geral, status_comicao_id, observacoes, created )
    VALUES ('$nome', '$cpf', '$rg', '$nascimento', '$matricula', '$matriculaII','$logradouro', '$numero', '$complemento', '$bairro','$cidade', '$uf', '$cep'
    , '$email', '$ddd', '$telefone', '$celular', '$conta', '$agencia','$operacao', '$orgao_id','$tipo_id', '$tabela_id', '$prazo_id', '$banco_id', '$parceiro_id',
    '$usuarios_id', '$valor_contrato', '$porc_comicao_promotor','$valor_comicao', '$status_id', '$comicao_geral', '$status_comicao_id', '$observacoes', NOW())");

echo"
         <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Estudos-PHP/BigCredAdmin/admin/admin.php?link=15'>
             <script type=\"text/javascript\">
             alert(\"Cliente salvo com Sucesso.Mas, \");
             </script>
     ";
}

//O arquivo passou em todas as verificações, hora de tentar move-lo para a pasta foto

else{
  //Primeiro verifica se deve trocar o nome do arquivo
  if($UP['renomeia'] == true){
    //Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
    $nome_final = time().'.jpg';
  }else{
    //mantem o nome original do arquivo
    $nome_final = $_FILES['anexo_documentos']['name'];
  }
  //Verificar se é possivel mover o arquivo para a pasta escolhida
  if(move_uploaded_file($_FILES['anexo_documentos']['tmp_name'], $_UP['pasta']. $nome_final)){
    //Upload efetuado com sucesso, exibe a mensagem
    $query = mysql_query("INSERT INTO clientes (nome, cpf, rg, nascimento, matricula, matricul,logradouro, numero, complemento, bairro, cidade,
  uf, cep, email, ddd, telefone, celular, conta, agencia, operacao, orgao_id,tipo_id, tabela_id, prazo_id, banco_id, parceiro_id, usuarios_id, valor_contrato, porc_comicao_promotor,
  valor_comicao, status_id, comicao_geral, status_comicao_id, anexo_documentos,observacoes, created )
    VALUES ('$nome', '$cpf', '$rg', '$nascimento', '$matricula', '$matricul','$logradouro', '$numero', '$complemento', '$bairro','$cidade', '$uf', '$cep'
    , '$email', '$ddd', '$telefone', '$celular', '$conta', '$agencia','$operacao', '$orgao_id','$tipo_id', '$tabela_id', '$prazo_id', '$banco_id', '$parceiro_id',
    '$usuarios_id', '$valor_contrato', '$porc_comicao_promotor','$valor_comicao', '$status_id', '$comicao_geral', '$status_comicao_id', '$nome_final', '$observacoes', NOW())");

echo"
         <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Estudos-PHP/BigCredAdmin/admin/admin.php?link=15'>
             <script type=\"text/javascript\">
             alert(\"Cliente salvo com Sucesso.Mas, \");
             </script>
     ";
  }else{
    //Upload não efetuado com sucesso, exibe a mensagem
    echo "
      <META HTTP-EQUIV=REFRESH CONTENT =  '0;URL=http://localhost/Estudos-PHP/BigCredAdmin/admin/admin.php?link=15'>
      <script type=\"text/javascript\">
        alert(\"Cliente não foi cadatrado com Sucesso.\");
      </script>
    ";
  }
}


    ?>
  </body>
</html>