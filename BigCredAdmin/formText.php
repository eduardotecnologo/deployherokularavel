
    <div class="container theme-showcase" role="main">

            <div class="page-header">
        <h1>Cadastrar Novos Clientes</h1>
      </div>
      <div class="row espaco">

      <div class="pull-right">
        <a href="admin.php?link=15&id=<?php echo $resultado['id'];?>"><button type="button" class='btn btn-info'>Listar Clientes</button></a>

        </div>
</div>
        <div class="col-md-10">
          <form class="form-horizontal" method="POST" action="../cadastro/cad_proc_clientes.php">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Nome</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="nome" placeholder="Digite o Nome Completo">
    </div>
  </div>

   <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">CPF</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="cpf" placeholder="Digite o CPF">
    </div>
  </div>

 <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">RG</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="rg" placeholder="Digite o Numero do RG">
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Nascimento</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="nascimento" placeholder="Digite a Data de Nascimento">
    </div>
  </div>

    <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Matricula</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="matricula" placeholder="Digite a Matricula">
    </div>
  </div>
      <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Matricula(2)</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="matricula(2)" placeholder="Digite a Matricula">
    </div>
  </div>
      <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Logradouro</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="logradouro" placeholder="Digite a Logradouro">
    </div>
  </div>
      <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Numero</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" name="numero" placeholder="Digite o Numero">
    </div>
  </div>
      <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Complemento</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" name="complemento" placeholder="Digite a Complemento">
    </div>
  </div>
      <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Bairro</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="bairro" placeholder="Digite o Bairro">
    </div>
  </div>
      <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Cidade</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="cidade" placeholder="Digite a Cidade">
    </div>
  </div>
      <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">UF</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" name="uf" placeholder="Digite a UF">
    </div>
  </div>
      <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">CEP</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" name="cep" placeholder="Digite o CEP">
    </div>
  </div>
      <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">DDD</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" name="ddd" placeholder="Digite o DDD">
    </div>
  </div>
      <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Telefone</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="telefone" placeholder="Digite o Telefone">
    </div>
  </div>
      <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Celular</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="celular" placeholder="Digite o Celular">
    </div>
  </div>
      <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Orgao</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="orgao_id" placeholder="Digite o Nome do Orgao">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Valor do Contrato</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="valor_contrato" placeholder="Digite o Valor do Contrato">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">%Comissao do Promotor</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="porc_comicao_promotor " placeholder="Digite o Valor da Comissao">
    </div>
  </div>
   <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Valor da Comissao</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="valor_comicao" placeholder="Digite o Valor da Comissao">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Status</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="status_id" placeholder="Digite o Valor da Comissao">
    </div>
  </div>
   <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">%Comissao Geral</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="comicao_geral" placeholder="Digite o Valor da Comissao">
    </div>
  </div>
   <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Valor da Comissao Geral</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name=" valor_comicao_geral" placeholder="Digite o Valor da Comissao">
    </div>
  </div><div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Anexo da Proposta</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="anexo_proposta " placeholder="Digite o Nome do Tipo">
    </div>
  </div>
    <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Anexo de Documentos</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="anexo_documentos " placeholder="Digite o Nome do Tipo">
    </div>
  </div>
   <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Status da Comicao</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="status_comicao_id " placeholder="Digite o Nome do Tipo">
    </div>
  </div>
   <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Promotor</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="promotor" placeholder="Digite o Nome do Promotor">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Parceiro</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="parceiro" placeholder="Digite o Nome do Parceiro">
    </div>
  </div>
    <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Banco</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="banco" placeholder="Digite o Nome do Banco">
    </div>
  </div>
    <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Tabela</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="tabela_id" placeholder="Digite o Tipo de Tabela">
    </div>
  </div>
    <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Prazo</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="prazo" placeholder="Digite o Prazo de Pagamento">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Tipo</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="tipo_id" placeholder="Digite o Nome do Tipo">
    </div>
  </div>
         <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Obsrvaçoes</label>
    <div class="col-sm-10">
    <textarea class="form-control ckeditor" rows="5" name="observacoes" placeholder="Digite a Aqui."></textarea>
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

        <label for="nome">Orgao</label>
                <input type="text" name="orgao_id" style="width: 10em" />
                <option>Selecione</option>
                <?php
                       $resultado=mysql_query("SELECT * FROM orgao");
                       while ($dados = mysql_fetch_assoc($resultado)) {
                        ?>
                        <option value="<?php echo $dados['id'];
                        ?>"><?php echo $dados['nome']; ?></option>
                        <?php}?>

