   <?php
      $id = $_GET['id'];
      //Executa a Consulta
      $result = mysql_query("SELECT * FROM despesas WHERE id = '$id' LIMIT 1");
      $resultado = mysql_fetch_assoc($result);


   ?>
    <div class="container theme-showcase" role="main">

            <div class="page-header">
        <h1>Editar Usuários</h1>
      </div>
      <div class="row espaco">

       <div class="pull-right">
        <a href="admin.php?link=20&id=<?php echo $resultado['id'];?>"><button type="button" class='btn btn-info'>Listar</button></a>
        <a href="../cadastro/apaga_despesas.php?id=<?php echo $resultado['id'];?>"><button type="button" class='btn btn-danger'>Apagar</button></a>


        </div>
      </div>

        <div class="col-md-12">
          <form class="form-horizontal" method="POST" action="../cadastro/cad_edit_despesas.php">
<div class="form-group">
     <label for="inputEmail3" class="col-sm-2 control-label">Água</label>
<div class="col-sm-10">
     <input type="text" class="form-control" name="nome" style="width: 20em" value="<?php echo $resultado['agua'];?>">
</div>
</div>

   <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Luz</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="luz" style="width: 20em" value="<?php echo $resultado['luz'];?>">
    </div>
  </div>

 <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Telefone</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="telefone" style="width: 20em" value="<?php echo $resultado['telefone'];?>">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Internet</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="internet" style="width: 20em" value="<?php echo $resultado['telefone'];?>">
    </div>
  </div>

   <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Aluguel</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="luz" style="width: 20em" value="<?php echo $resultado['luz'];?>">
    </div>
  </div>

 <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Condominio</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="telefone" style="width: 20em" value="<?php echo $resultado['telefone'];?>">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Contador</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="conttador" style="width: 20em" value="<?php echo $resultado['conttador'];?>">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Grafica</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="grafica" style="width: 20em" value="<?php echo $resultado['grafica'];?>">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Manutencao</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="manutencao" style="width: 20em" value="<?php echo $resultado['manutencao'];?>">
    </div>
  </div>

   <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Limpeza</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="limpeza" style="width: 20em" value="<?php echo $resultado['limpeza'];?>">
    </div>
  </div>

   <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Celular</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="celular" style="width: 20em" value="<?php echo $resultado['celular'];?>">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Total</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="total" style="width: 20em" value="<?php echo $resultado['total'];?>">
    </div>
  </div>



  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">Salvar</button>
    </div>
  </div>
</form>
        </div>

