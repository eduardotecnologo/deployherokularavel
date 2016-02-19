   <?php
$id = $_GET['id'];
//Executa a Consulta
$result = mysql_query("SELECT * FROM clientes WHERE id = '$id' LIMIT 1");
$resultado = mysql_fetch_assoc($result);
   ?>
   <!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <div class="container theme-showcase" role="main">


    </div>

            <div class="page-header">
        <h1>Dados Gerais de Clientes</h1>
      </div>
      <div class="pull-right">
        <a href="admin.php?link=20&id=<?php echo $resultado['id'];?>"><button type="button" class='btn btn-info'>Listar</button></a>

        <a href="admin.php?link=17&id=<?php echo $resultado['id'];?>"><button type="button" class='btn btn-warning'>Editar</button></a>

        <a href="../cadastro/apaga_despesas.php?id=<?php echo $resultado['id'];?>"><button type="button" class='btn btn-danger'>Apagar</button></a>


<!--Inicio - Mostra os Dados na Pagina de Visualizar-->
      </div>
      <div class="row">
        <div class="col-md-12">
           <div class="col-xs-9 col-sm-9 col-md-15">
             <b>Id:</b>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <?php echo $resultado['id'];?>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <b>Nome:</b>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <?php echo $resultado['nome'];?>
           </div>
            <div class="col-xs-9 col-sm-9 col-md-15">
             <b>CPF:</b>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <?php echo $resultado['cpf'];?>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <b>RG:</b>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <?php echo $resultado['rg'];?>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <b>Nascimento:</b>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <?php echo $resultado['nascimento'];?>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <b>Matricula:</b>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <?php echo $resultado['matricula'];?>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <b>Matricula(2):</b>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <?php echo $resultado['matricul'];?>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <b><h2><strong>Dados de Endereços:</strong></h2></b>
             <b>Logradouro:</b>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <?php echo $resultado['logradouro'];?>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <b>Bairro:</b>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <?php echo $resultado['bairro'];?>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <b>Cidade:</b>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <?php echo $resultado['cidade'];?>
           </div>
           <div class="col-xs-3 col-sm-9 col-md-15">
             <b>UF:</b>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <?php echo $resultado['uf'];?>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <b>CEP:</b>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <?php echo $resultado['cep'];?>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
           <b><h2><strong>Dados de Contatos:</strong></h2></b>
             <b>E-mail:</b>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <?php echo $resultado['email'];?>
           </div>
            <div class="col-xs-9 col-sm-9 col-md-15">
             <b>DDD:</b>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <?php echo $resultado['ddd'];?>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <b>Telefone:</b>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <?php echo $resultado['telefone'];?>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <b>Celular:</b>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <?php echo $resultado['celular'];?>
           </div>

           <div class="col-xs-9 col-sm-9 col-md-15">
           <b><h2><strong>Dados de Bancarios:</strong></h2></b>
             <b>Conta:</b>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <?php echo $resultado['conta'];?>
           </div>

           <div class="col-xs-9 col-sm-9 col-md-15">
             <b>Agencia:</b>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <?php echo $resultado['agencia'];?>
           </div>

           <div class="col-xs-9 col-sm-9 col-md-15">
             <b>Operação:</b>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <?php echo $resultado['operacao'];?>
           </div>

           <div class="col-xs-9 col-sm-9 col-md-15">
           <b><h2><strong>Informações para Emprestimos:</strong></h2></b>
             <b>Orgao:</b>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <?php echo $resultado['orgao_id'];?>
           </div>
          <div class="col-xs-9 col-sm-9 col-md-15">
             <b>Tipo:</b>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <?php echo $resultado['tipo_id'];?>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <b>Tabela:</b>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <?php echo $resultado['tabela_id'];?>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <b>Prazo:</b>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <?php echo $resultado['prazo_id'];?>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <b>Banco:</b>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <?php echo $resultado['banco_id'];?>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <b>Parceiro:</b>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <?php echo $resultado['parceiro_id'];?>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <b>Valor.Contrato:</b>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <?php echo $resultado['valor_contrato'];?>
           </div>
            <div class="col-xs-9 col-sm-9 col-md-15">
             <b>Cadastro:</b>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <?php echo $resultado['created'];?>
           </div>
            <div class="col-xs-9 col-sm-9 col-md-15">
             <b>Modificado:</b>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <?php echo $resultado['modified'];?>
           </div>
            <div class="col-xs-9 col-sm-9 col-md-15">
             <b>Promotor:</b>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <?php echo $resultado['usuarios_id'];?>
           </div>
            <div class="col-xs-9 col-sm-9 col-md-15">
             <b>Banco:</b>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <?php echo $resultado['banco_id'];?>
           </div>
            <div class="col-xs-9 col-sm-9 col-md-15">
             <b>Observaçoes:</b>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <?php echo $resultado['observacoes'];?>
           </div>
                    <!--Fim - Mostra os Dados na Pagina de Visualizar-->
    </div>
  </div>
</form>
</body>
</html>
