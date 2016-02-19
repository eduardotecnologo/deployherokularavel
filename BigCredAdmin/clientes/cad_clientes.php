    <div class="container theme-showcase" role="main">
            <div class="page-header">
        <h1>Cadastrar Novos Clientes</h1>
      </div>
      <div class="row espaco">

      <div class="pull-right">
        <a href="admin.php?link=15&id=<?php echo $resultado['id'];?>"><button type="button" class='btn btn-info'>Listar Clientes</button></a>

        </div>
</div>
<form method="POST" action="../cadastro/cad_proc_clientes.php" enctype="multipart/form-data" >
    <fieldset>
        <fieldset class="grupo">
            <div class="campo">
                <label for="snome">Nome</label>
                <input type="text" name="nome" style="width: 20em" placeholder="Digite o Nome Completo" />
            </div>
            <div class="campo">
                <label for="snome">CPF</label>
                <input type="text" name="cpf" style="width: 15em" placeholder="Digite o CPF" />
            </div>
            <div class="campo">
                <label for="snome">RG</label>
                <input type="text" name="rg" style="width: 15em" placeholder="Digite o RG" />
            </div><div class="campo">
                <label for="snome">Nascimento</label>
                <input type="text" name="nascimento" style="width: 15em" placeholder="Digite a Data de Nascimento" />
            </div>
        </fieldset>
        <fieldset>
        <fieldset class="grupo">
            <div class="campo">
                <label for="nome">Matrícula</label>
                <input type="text" name="matricula" style="width: 20em" placeholder="Digite a Matrícula" />
            </div>
            <div class="campo">
                <label for="snome">Matrícula(2)</label>
                <input type="text" name="matricul" style="width: 20em" placeholder="Digite a Matrícula(2)" />
            </div>
        </fieldset>
        <h3>Endereço</h3>
        <fieldset>
        <fieldset class="grupo">
            <div class="campo">
                <label for="nome">Logradouro</label>
                <input type="text" name="logradouro" style="width: 20em" placeholder="Digite o Logradouro" />
            </div>
            <div class="campo">
                <label for="snome">Número</label>
                <input type="text" name="numero" style="width: 15em" placeholder="Digite o Número" />
            </div>
            <div class="campo">
                <label for="snome">Complemento</label>
                <input type="text" name="complemento" style="width: 15em" placeholder="Digite o Complemento" />
            </div><div class="campo">
                <label for="snome">Bairro</label>
                <input type="text" name="bairro" style="width: 15em" placeholder="Digite o Bairro" />
            </div>
        </fieldset>
        <fieldset>
        <fieldset class="grupo">
            <div class="campo">
                <label for="nome">Cidade</label>
                <input type="text" name="cidade" style="width: 15em" placeholder="Digite o Nome da Cidade" />
            </div>
            <div class="campo">
                <label for="snome">UF</label>
                <input type="text" name="uf" style="width: 5em" placeholder="Digite a UF" />
            </div>
             <div class="campo">
                <label for="snome">CEP</label>
                <input type="text" name="cep" style="width: 15em" placeholder="Digite o CEP" />
            </div>
        </fieldset>
        <h3>Contatos</h3>
        <fieldset>
        <fieldset class="grupo">
            <div class="campo">
                <label for="nome">E-Mail</label>
                <input type="email" name="email" style="width: 20em" placeholder="Digite o E-mail(Não Obrigatório)" />
            </div>
            <div class="campo">
                <label for="snome">DDD</label>
                <input type="text" name="ddd" style="width: 5em" placeholder="Digite o DDD" />
            </div>
             <div class="campo">
                <label for="snome">Telefone</label>
                <input type="text" name="telefone" style="width: 15em" placeholder="Digite o Telefone" />
            </div>
            <div class="campo">
                <label for="snome">Celular</label>
                <input type="text" name="celular" style="width: 15em" placeholder="Digite o Celular" />
            </div>
        </fieldset>
         <h3>Dados Bancários</h3>
        <fieldset>
        <fieldset class="grupo">
            <div class="campo">
                <label for="nome">Conta</label>
                <input type="text" name="conta" style="width: 20em" placeholder="Digite o Numero da Conta" />
            </div>
            <div class="campo">
                <label for="snome">Agência</label>
                <input type="text" name="agencia" style="width: 5em" placeholder="Digite a Agência" />
            </div>
             <div class="campo">
                <label for="snome">Operação</label>
                <input type="text" name="operacao" style="width: 15em" placeholder="Digite a Operação" />
            </div>
        </fieldset>
        <h3>Proposta de Empréstimo</h3>
        <fieldset class="grupo">
            <div class="campo">
                    <label for="snome">Orgão</label>
                <select class="form-control" name="orgao_id" style="width: 10em">
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
            <div class="campo">
                    <label for="snome">Tipo</label>
                <select class="form-control" name="tipo_id" style="width: 10em">
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
            <div class="campo">
                    <label for="snome">Tabela</label>
                <select class="form-control" name="tabela_id" style="width: 10em">
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
            <div class="campo">
                    <label for="snome">Prazo</label>
                <select class="form-control" name="prazo_id" style="width: 10em">
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
            <div class="campo">
                    <label for="snome">Banco</label>
                <select class="form-control" name="banco_id" style="width: 10em">
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
            <div class="campo">
                    <label for="snome">Parceiro</label>
                <select class="form-control" name="parceiro_id" style="width: 10em">
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
            <div class="campo">
                   <label for="snome">Promotor</label>
                <select class="form-control" name="usuarios_id" style="width: 10em">
          <option>Seleciona</option>
          <?php
              $resultado=mysql_query("SELECT * FROM usuarios");
          while($dados = mysql_fetch_assoc($resultado)){
         ?>
         <option value="<?php echo $dados['id'];?>"><?php echo $dados['nome'];?></option>
         <?php
            }
         ?>
      </select>
            </div>
            <div class="campo">
                <label for="snome">Valor do Contrato</label>
                <input type="text" name="valor_contrato" style="width: 15em" placeholder="Digite o Valor do Contrato" />
            </div>
             <div class="campo">
                <label for="snome">%Comissão do Promotor</label>
                <input type="text" name="porc_comicao_promotor" style="width: 15em" placeholder="Valor  da Comição do Promotor" />
            </div>
            <div class="campo">
                <label for="snome">Valor da Comissão</label>
                <input type="text" name="valor_comicao" style="width: 15em" placeholder="Digite o Valor Comição" />
            </div>
            <div class="campo">
                    <label for="snome">Status</label>
                <select class="form-control" name="status_id " style="width: 10em">
          <option>Seleciona</option>
          <?php
              $resultado=mysql_query("SELECT * FROM status");
          while($dados = mysql_fetch_assoc($resultado)){
         ?>
         <option value="<?php echo $dados['id'];?>"><?php echo $dados['nome'];?></option>
         <?php
            }
         ?>
      </select>
            </div>
        </fieldset>
        <fieldset class="grupo">
            <div class="campo">
                <label for="nome">%Comissão Geral</label>
                <input type="text" name="comicao_geral" style="width: 15em" placeholder="%Comissão Geral"/>
            </div>
            <div class="campo">
                <label for="snome">Valor.Comissão Geral</label>
                <input type="text" name="valor_comicao_geral" style="width: 15em" placeholder="Valor Comicão Geral" />
            </div>
             <div class="campo">
                    <label for="snome">Status da Comição</label>
                <select class="form-control" name=" status_comicao_id" style="width: 10em">
          <option>Seleciona</option>
          <?php
              $resultado=mysql_query("SELECT * FROM status_comicao");
          while($dados = mysql_fetch_assoc($resultado)){
         ?>
         <option value="<?php echo $dados['id'];?>"><?php echo $dados['nome'];?></option>
         <?php
            }
         ?>
      </select>
            </div>
       </fieldset>
        <div class="form-group">
    <label for="exampleInputFile">Enviar Documentos</label>
    <input type="file" name="anexo_documentos">
    <p class="help-block">Formatos: pdf, jpeg, jpg, doc.</p>
  </div>
      <div class="campo">
            <label for="mensagem">Observações</label>
            <textarea rows="6" class="form-control ckeditor" style="width: 20em" name="observacoes"></textarea>
        </div>

        <button type="submit" class='btn btn-success'>Cadastrar</button></a>

    </fieldset>
</form>
