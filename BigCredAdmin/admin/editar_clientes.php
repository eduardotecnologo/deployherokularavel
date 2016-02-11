   <?php
      $id = $_GET['id'];
      //Executa a Consulta
      $result = mysql_query("SELECT * FROM clientes WHERE id = '$id' LIMIT 1");
      $resultado = mysql_fetch_assoc($result);


   ?>
    <div class="container theme-showcase" role="main">

            <div class="page-header">
        <h1>Editar Clientes</h1>
      </div>
      <div class="row espaco">

       <div class="pull-right">
        <a href="admin.php?link=15&id=<?php echo $resultado['id'];?>"><button type="button" class='btn btn-info'>Listar</button></a>

        </div>
      </div>

        <div class="col-md-12">
          <form class="form-horizontal" method="POST" action="../cadastro/cad_edit_usuarios.php">
<div class="form-group">
     <label for="inputEmail3" class="col-sm-2 control-label">NOME</label>
<div class="col-sm-10">
     <input type="text" class="form-control" name="nome" placeholder="Digite o Nome Completo"
     value="<?php echo $resultado['nome'];?>">
</div>
</div>

   <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">CPF</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="cpf" style="width: 15em" value="<?php echo $resultado['cpf'];?>">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">RG</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="rg" style="width: 15em" value="<?php echo $resultado['rg'];?>">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">NASCIMENTO</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="nascimento" style="width: 15em" value="<?php echo $resultado['nascimento'];?>">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">MATRICULA</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="matricula" style="width: 15em" value="<?php echo $resultado['matricula'];?>">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">MATRICULA II</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="matriculall" style="width: 15em" value="<?php echo $resultado['matriculall'];?>">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">LOGRADOURO</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="logradouro" style="width: 35em" value="<?php echo $resultado['logradouro'];?>">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">NUMERO</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="numero" style="width: 15em" value="<?php echo $resultado['numero'];?>">
    </div>
  </div>

 <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">COMPLEMENTO</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="complemento" value="<?php echo $resultado['complemento'];?>">
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">BAIRRO</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="bairro" style="width: 25em">
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">CIDADE</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="cidade" style="width: 25em">
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">UF</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="uf"  style="width: 5em">
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">CEP</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="cep"  style="width: 5em">
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">DDD</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="ddd" style="width: 5em">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">TELEFONE</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="telefone" value="<?php echo $resultado['telefone'];?>">
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">CELULAR</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="celular" style="width: 15em">
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2  control-label">ORGÃO</label>
     <select class="form-control" name="orgao_id" style="width: 15em">

         <option>Seleciona</option>
          <?php
              $resultado=mysql_query("SELECT * FROM orgao");
          while($dados = mysql_fetch_assoc($resultado)){
         ?>
         <option value="<?php echo $dados['id'];?>"><?php echo $dados['nome'];?></option>
         <?php
            }
         ?>
      </select>
    </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">TIPO</label>
    <select class="form-control" name="tipo_id" style="width: 15em">
          <option>Seleciona</option>
          <?php
              $resultado=mysql_query("SELECT * FROM tipo");
          while($dados = mysql_fetch_assoc($resultado)){
         ?>
         <option value="<?php echo $dados['id'];?>"><?php echo $dados['nome'];?></option>
         <?php
            }
         ?>
      </select>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">TABELA</label>
    <select class="form-control" name="tabela_id" style="width: 15em">
          <option>Seleciona</option>
          <?php
              $resultado=mysql_query("SELECT * FROM tabela");
          while($dados = mysql_fetch_assoc($resultado)){
         ?>
         <option value="<?php echo $dados['id'];?>"><?php echo $dados['nome'];?></option>
         <?php
            }
         ?>
      </select>
    </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">PRAZO</label>
    <select class="form-control" name="prazo_id" style="width: 15em">
          <option>Seleciona</option>
          <?php
              $resultado=mysql_query("SELECT * FROM prazo");
          while($dados = mysql_fetch_assoc($resultado)){
         ?>
         <option value="<?php echo $dados['id'];?>"><?php echo $dados['nome'];?></option>
         <?php
            }
         ?>
      </select>
    </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">BANCO</label>
     <select class="form-control" name="banco_id" style="width: 15em">
          <option>Seleciona</option>
          <?php
              $resultado=mysql_query("SELECT * FROM banco");
          while($dados = mysql_fetch_assoc($resultado)){
         ?>
         <option value="<?php echo $dados['id'];?>"><?php echo $dados['nome'];?></option>
         <?php
            }
         ?>
      </select>
    </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">PARCEIRO</label>
   <select class="form-control" name="parceiro_id " style="width: 15em">
          <option>Seleciona</option>
          <?php
              $resultado=mysql_query("SELECT * FROM parceiro");
          while($dados = mysql_fetch_assoc($resultado)){
         ?>
         <option value="<?php echo $dados['id'];?>"><?php echo $dados['nome'];?></option>
         <?php
            }
         ?>
      </select>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">VALOR DO CONTRATO</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="valor_contrato" style="width: 10em">
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">OBSERVAÇÕES</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="observacoes" >
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

