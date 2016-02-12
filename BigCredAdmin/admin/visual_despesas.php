   <?php
$id = $_GET['id'];
//Executa a Consulta
$result = mysql_query("SELECT * FROM despesas WHERE id = '$id' LIMIT 1");
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
        <h1>Dados Gerais das Despesas</h1>
      </div>
      <div class="pull-right">
      <a href="admin.php?link=17&id=<?php echo $resultado['id'];?>"><button type="button" class='btn btn-warning'>Editar</button></a>
      <a href="../cadastro/apaga_clientes.php?id=<?php echo $resultado['id'];?>"><button type="button" class='btn btn-danger'>Apagar</button></a>


<!--Inicio - Mostra os Dados na Pagina de Visualizar-->
      </div>
      <div class="row">
        <div class="col-md-12">
           <div class="col-xs-9 col-sm-9 col-md-15">
             <b>Mês de Lançamento :</b>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <?php echo $resultado['id'];?>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <b>Água:</b>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <?php echo $resultado['agua'];?>
           </div>
            <div class="col-xs-9 col-sm-9 col-md-15">
             <b>Luz:</b>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <?php echo $resultado['luz'];?>
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
             <b>Internet:</b>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <?php echo $resultado['internet'];?>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <b>Aluguel:</b>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <?php echo $resultado['aluguel'];?>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <b>Condominio:</b>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <?php echo $resultado['condominio'];?>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <b>Condução:</b>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <?php echo $resultado['conducao'];?>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <b>Emprestimos:</b>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <?php echo $resultado['emprestimos'];?>
           </div>
           <div class="col-xs-3 col-sm-9 col-md-15">
             <b>Pagamentos:</b>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <?php echo $resultado['pagamentos'];?>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <b>Gráficas:</b>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <?php echo $resultado['grafica'];?>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <b>Contador:</b>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <?php echo $resultado['contador'];?>
           </div>
            <div class="col-xs-9 col-sm-9 col-md-15">
             <b>Manutenção:</b>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <?php echo $resultado['manutencao'];?>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <b>Limpeza:</b>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <?php echo $resultado['limpeza'];?>
           </div>
          <div class="col-xs-9 col-sm-9 col-md-15">
             <b>Observações:</b>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <?php echo $resultado['outros'];?>
           </div>
          <div class="col-xs-9 col-sm-9 col-md-15">
             <b>Data de Lançamento:</b>
           </div>
           <div class="col-xs-9 col-sm-9 col-md-15">
             <?php echo $resultado['created'];?>
           </div>

                    <!--Fim - Mostra os Dados na Pagina de Visualizar-->
    </div>
  </div>
</form>
</body>
</html>
