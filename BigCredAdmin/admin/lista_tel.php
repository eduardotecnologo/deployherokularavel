    <div class="container theme-showcase" role="main">

            <div class="page-header">
        <h1>Lista Telefonica</h1>
      </div>
      <div class="row espaco">

      <div class="pull-right">
        <a href="admin.php?link=2&id=<?php echo $resultado['id'];?>"><button type="button" class='btn btn-info'>Listar</button></a>

        </div>
</div>
        <div class="col-md-12">
          <form class="form-horizontal" method="POST" action="../cadastro/cad_lista_tel.php">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Nome</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nome" style="width: 25em"  placeholder="Digite o Nome Completo">
    </div>
  </div>

   <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Telefone</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="telefone" style="width: 15em"  placeholder="Digite o Telefone">
    </div>
  </div>

 <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Celular</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="celular" style="width: 15em"   placeholder="Digite o Celular">
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">E-Mail</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="email" style="width: 15em" placeholder="Digite o Email">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">Cadastrar</button>
    </div>
  </div>
</form>
</div>

