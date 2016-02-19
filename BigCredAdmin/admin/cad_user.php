    <div class="container theme-showcase" role="main">

            <div class="page-header">
        <h1>Cadastrar Usuários</h1>
      </div>
      <div class="row espaco">

      <div class="pull-right">
        <a href="admin.php?link=2&id=<?php echo $resultado['id'];?>"><button type="button" class='btn btn-info'>Listar</button></a>

        </div>
</div>
        <div class="col-md-12">
          <form class="form-horizontal" method="POST" action="../cadastro/cad_usuarios.php">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Nome</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nome" placeholder="Digite o Nome Completo">
    </div>
  </div>

   <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">E-mail</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="email" placeholder="Digite o E-mail">
    </div>
  </div>

 <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Usuário</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="usuario" placeholder="Digite o Nome de Usuário">
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Senha</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="senha" placeholder="Digite a Senha">
    </div>
  </div>

   <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Nível de Acesso</label>
    <div class="col-sm-10">
      <select class="form-control" name="nivel_acessos">
          <option value="1">Administrador</option>
          <option value="2">Usuário</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">Cadastrar</button>
    </div>
  </div>
</form>
        </div>

