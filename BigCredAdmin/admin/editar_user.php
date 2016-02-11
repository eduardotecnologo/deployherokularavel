   <?php
      $id = $_GET['id'];
      //Executa a Consulta
      $result = mysql_query("SELECT * FROM usuarios WHERE id = '$id' LIMIT 1");
      $resultado = mysql_fetch_assoc($result);


   ?>
    <div class="container theme-showcase" role="main">

            <div class="page-header">
        <h1>Editar Usuários</h1>
      </div>
      <div class="row espaco">

       <div class="pull-right">
        <a href="admin.php?link=2&id=<?php echo $resultado['id'];?>"><button type="button" class='btn btn-info'>Listar</button></a>
        <a href="../cadastro/apaga.php?id=<?php echo $resultado['id'];?>"><button type="button" class='btn btn-danger'>Apagar</button></a>


        </div>
      </div>

        <div class="col-md-12">
          <form class="form-horizontal" method="POST" action="../cadastro/cad_edit_usuarios.php">
<div class="form-group">
     <label for="inputEmail3" class="col-sm-2 control-label">Nome</label>
<div class="col-sm-10">
     <input type="text" class="form-control" name="nome" placeholder="Digite o Nome Completo"
     value="<?php echo $resultado['nome'];?>">
</div>
</div>

   <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">E-mail</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="email" placeholder="Digite o E-mail"
      value="<?php echo $resultado['email'];?>">
    </div>
  </div>

 <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Usuário</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="usuario" placeholder="Digite o Nome de Usuário"
      value="<?php echo $resultado['login'];?>">
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

          <option>Seleciona</option>
          <option value="1"
          <?php
          if($resultado[nivel_acessos_id] == 1){
                echo selected;
             }
           ?>
            >Administrador</option>

          <option value="2"
          <?php
          if($resultado[nivel_acessos_id] == 2){
                echo selected;
            }
          ?>
          >Usuário</option>
      </select>
    </div>
  </div>

  <input type="hidden" name="id" value="<?php echo $resultado['id'];?>">

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">Salvar</button>
    </div>
  </div>
</form>
        </div>

