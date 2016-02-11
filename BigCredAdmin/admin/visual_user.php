   <?php
$id = $_GET['id'];
//Executa a Consulta
$result = mysql_query("SELECT * FROM usuarios WHERE id = '$id' LIMIT 1");
$resultado = mysql_fetch_assoc($result);
   ?>
    <div class="container theme-showcase" role="main">

    </div>

            <div class="page-header">
        <h1>Visualizar Usuários</h1>
      </div>
      <div class="pull-right">
        <a href="admin.php?link=2&id=<?php echo $resultado['id'];?>"><button type="button" class='btn btn-info'>Listar</button></a>

        <a href="admin.php?link=4&id=<?php echo $resultado['id'];?>"><button type="button" class='btn btn-warning'>Editar</button></a>

        <a href="../cadastro/apaga.php?id=<?php echo $resultado['id'];?>"><button type="button" class='btn btn-danger'>Apagar</button></a>


<!--Inicio - Mostra os Dados na Pagina de Visualizar-->
      </div>
      <div class="row">
        <div class="col-md-12">
           <div class="col-xs-3 col-sm-1 col-md-1">
             <b>Id:</b>
           </div>
           <div class="col-xs-9 col-sm-11 col-md-11">
             <?php echo $resultado['id'];?>
           </div>
           <div class="col-xs-3 col-sm-1 col-md-1">
             <b>Nome:</b>
           </div>
           <div class="col-xs-9 col-sm-11 col-md-11">
             <?php echo $resultado['nome'];?>
           </div>
           <div class="col-xs-3 col-sm-1 col-md-1">
             <b>E-mail:</b>
           </div>
           <div class="col-xs-9 col-sm-11 col-md-11">
             <?php echo $resultado['email'];?>
           </div>
           <div class="col-xs-3 col-sm-1 col-md-1">
             <b>login:</b>
           </div>
           <div class="col-xs-9 col-sm-11 col-md-11">
             <?php echo $resultado['login'];?>
           </div>
           <div class="col-xs-3 col-sm-1 col-md-1">
             <b>Nível de Acesso:</b>
           </div>
           <div class="col-xs-9 col-sm-11 col-md-11">
             <?php echo $resultado['nivel_acessos_id'];?>
           </div>
<!--Fim - Mostra os Dados na Pagina de Visualizar-->


    </div>
  </div>
</form>
        </div>

