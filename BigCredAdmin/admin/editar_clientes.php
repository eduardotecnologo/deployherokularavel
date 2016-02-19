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
          <form class="form-horizontal" method="POST" action="../cadastro/cad_edit_clientes.php">
 <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Nome do Cliente</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="nome" value="<?php echo $resultado['nome'];?>">
      </div>
      </div>
<div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">CPF</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="cpf" style="width: 15em"  value="<?php echo $resultado['cpf'];?>">
      </div>
      </div>
<div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">RG</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="rg" style="width: 15em"  value="<?php echo $resultado['rg'];?>">
      </div>
      </div>

<div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Nascimento</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="nascimento" style="width: 15em"  value="<?php echo $resultado['nascimento'];?>">
      </div>
      </div>

 <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Matricula</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="matricula" style="width: 15em"  value="<?php echo $resultado['matricula'];?>">
      </div>
      </div>

  <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Matricula 2</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="matricul" style="width: 15em"  value="<?php echo $resultado['matricul'];?>">
      </div>
      </div>

<div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Logradouro</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="logradouro" style="width: 15em"  value="<?php echo $resultado['logradouro'];?>">
      </div>
      </div>

 <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Numero</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="numero" style="width: 15em"  value="<?php echo $resultado['numero'];?>">
      </div>
      </div>

<div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Complento</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="complemento" style="width: 15em"  value="<?php echo $resultado['complemento'];?>">
      </div>
      </div>

<div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Bairro</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="bairro" style="width: 15em"  value="<?php echo $resultado['bairro'];?>">
      </div>
      </div>

<div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Cidade</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="cidade" style="width: 15em"  value="<?php echo $resultado['cidade'];?>">
      </div>
      </div>

  <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">UF</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="uf" style="width: 15em"  value="<?php echo $resultado['uf'];?>">
      </div>
      </div>

<div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">CEP</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="cep" style="width: 15em"  value="<?php echo $resultado['cep'];?>">
      </div>
      </div>

<div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">E-Mail</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="email" style="width: 15em"  value="<?php echo $resultado['email'];?>">
      </div>
      </div>


<div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">DDD</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="ddd" style="width: 15em"  value="<?php echo $resultado['ddd'];?>">
      </div>
      </div>

  <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Telefone</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="telefone" style="width: 15em"  value="<?php echo $resultado['telefone'];?>">
      </div>
      </div>

<div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Celular</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="celular" style="width: 15em"  value="<?php echo $resultado['celular'];?>">
      </div>
      </div>

<?php $orgao_id = $resultado['orgao_id'];?>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2  control-label">ORGÃO</label>
     <select class="form-control" name="orgao_id" style="width: 15em">

         <option>Seleciona</option>
          <?php
              $resul_orgao=mysql_query("SELECT * FROM orgao");
          while($dados = mysql_fetch_assoc($resul_orgao)){
            $id_orgao = $dados['id'];
         ?>
         <option value="<?php echo $dados['id'];?>"<?php if($id_orgao == $orgao_id){ echo 'selected'; }?>>
         <?php echo $dados['nome'];?></option>
         <?php
            }
         ?>
      </select>
    </div>

<?php $tipo_id = $resultado['tipo_id'];?>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2  control-label">Tipo</label>
     <select class="form-control" name="tipo_id" style="width: 15em">

         <option>Seleciona</option>
          <?php
              $resul_tipo=mysql_query("SELECT * FROM tipo");
          while($dados = mysql_fetch_assoc($resul_tipo)){
            $id_tipo = $dados['id'];
         ?>
         <option value="<?php echo $dados['id'];?>"<?php if($id_tipo == $tipo_id){ echo 'selected'; }?>>
         <?php echo $dados['nome'];?></option>
         <?php
            }
         ?>
      </select>
    </div>

    <?php $tabela_id = $resultado['tabela_id'];?>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2  control-label">Tabela</label>
     <select class="form-control" name="tabela_id" style="width: 15em">

         <option>Seleciona</option>
          <?php
              $resul_tabela=mysql_query("SELECT * FROM tabela");
          while($dados = mysql_fetch_assoc($resul_tabela)){
            $id_tabela = $dados['id'];
         ?>
         <option value="<?php echo $dados['id'];?>"<?php if($id_tabela == $tabela_id){ echo 'selected'; }?>>
         <?php echo $dados['nome'];?></option>
         <?php
            }
         ?>
      </select>
    </div>

  <?php $prazo_id = $resultado['prazo_id'];?>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2  control-label">Prazo</label>
     <select class="form-control" name="prazo_id" style="width: 15em">

         <option>Seleciona</option>
          <?php
              $resul_prazo=mysql_query("SELECT * FROM prazo");
          while($dados = mysql_fetch_assoc($resul_prazo)){
            $id_prazo = $dados['id'];
         ?>
         <option value="<?php echo $dados['id'];?>"<?php if($id_prazo == $prazo_id){ echo 'selected'; }?>>
         <?php echo $dados['nome'];?></option>
         <?php
            }
         ?>
      </select>
    </div>

   <?php $banco_id = $resultado['banco_id'];?>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2  control-label">Banco</label>
     <select class="form-control" name="banco_id" style="width: 15em">

         <option>Seleciona</option>
          <?php
              $resul_banco=mysql_query("SELECT * FROM banco");
          while($dados = mysql_fetch_assoc($resul_banco)){
            $id_banco = $dados['id'];
         ?>
         <option value="<?php echo $dados['id'];?>"<?php if($id_banco == $banco_id){ echo 'selected'; }?>>
         <?php echo $dados['nome'];?></option>
         <?php
            }
         ?>
      </select>
    </div>


  <?php $parceiro_id = $resultado['parceiro_id'];?>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2  control-label">Parceiro</label>
     <select class="form-control" name="parceiro_id" style="width: 15em">

         <option>Seleciona</option>
          <?php
              $resul_parceiro=mysql_query("SELECT * FROM parceiro");
          while($dados = mysql_fetch_assoc($resul_parceiro)){
            $id_parceiro = $dados['id'];
         ?>
         <option value="<?php echo $dados['id'];?>"<?php if($id_parceiro == $parceiro_id){ echo 'selected'; }?>>
         <?php echo $dados['nome'];?></option>
         <?php
            }
         ?>
      </select>
    </div>

<?php $usuarios_id = $resultado['usuarios_id'];?>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2  control-label">Promotor</label>
     <select class="form-control" name="usuarios_id" style="width: 15em">

         <option>Seleciona</option>
          <?php
              $resul_usuarios=mysql_query("SELECT * FROM usuarios");
          while($dados = mysql_fetch_assoc($resul_usuarios)){
            $id_usuarios = $dados['id'];
         ?>
         <option value="<?php echo $dados['id'];?>"<?php if($id_usuarios == $usuarios_id){ echo 'selected'; }?>>
         <?php echo $dados['nome'];?></option>
         <?php
            }
         ?>
      </select>
    </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">VALOR DO CONTRATO</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="valor_contrato" style="width: 10em" value="<?php echo $resultado['valor_contrato'];?>">
    </div>
  </div>

  <div class="form-group">
    <label for="exampleInputFile" class="col-sm-2 control-label">Enviar Documentos</label>
    <input type="file" name="anexo_documentos" type="file"/>
    </div>
  </div>

  <?php
      $foto = $resultado['anexo_documentos'];
      if($foto == ""){
        ?>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">
            Foto Antiga
          </label>
          <div class="col-sm-10">
            O  não possui documentos cadastrados
          </div>
        </div>
      <?php
      }
      if($foto != ""){?>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">
            Foto do Produto Antiga
          </label>
          <div class="col-sm-10">
            <img src="<?php echo "../img_arquivos/$foto"; ?>" width="100" height="100">
            <input type="hidden" name="img_antiga" value='<?php echo $foto ?>'>
          </div>
        </div>
      <?php } ?>


  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">OBSERVAÇÕES</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="observacoes" value="<?php echo $resultado['observacoes'];?>">
    </div>
    </div>


   <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Nível de Acesso</label>
    <div class="col-sm-10">
      <select class="form-control" name="nivel_acessos" style="width: 15em">

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

