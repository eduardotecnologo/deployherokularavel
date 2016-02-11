    <div class="container theme-showcase" role="main">
            <div class="page-header">
        <h1>Controle de Despesas</h1>
      </div>
      <div class="row espaco">

      <div class="pull-right">
        <a href="admin.php?link=20&id=<?php echo $resultado['id'];?>"><button type="button" class='btn btn-info'>Visualizar Históricos</button></a>

        </div>
</div>
<form method="POST" action="../cadastro/cad_proc_despesas.php" enctype="multipart/form-data" >
    <fieldset>
        <fieldset class="grupo">
            <div class="campo">
                <label for="nome">Água</label>
                <input type="text" name="agua" style="width: 20em" placeholder="Valor da Conta" />
            </div>
            <div class="campo">
                <label for="snome">Luz</label>
                <input type="text" name="luz" style="width: 15em" placeholder="Valor da Conta" />
            </div>
            <div class="campo">
                <label for="snome">Telefone</label>
                <input type="text" name="telefone" style="width: 15em" placeholder="Valor da Conta" />
            </div><div class="campo">
                <label for="snome">Celular</label>
                <input type="text" name="celular" style="width: 15em" placeholder="Valor da Conta" />
            </div>
        </fieldset>
        <fieldset>
        <fieldset class="grupo">
            <div class="campo">
                <label for="nome">Internet</label>
                <input type="text" name="internet" style="width: 20em" placeholder="Valor da Conta" />
            </div>
            <div class="campo">
                <label for="snome">Aluguel</label>
                <input type="text" name="aluguel" style="width: 20em" placeholder="Valor da Conta" />
            </div>
        </fieldset>
        <fieldset>
        <fieldset class="grupo">
            <div class="campo">
                <label for="nome">Condominio</label>
                <input type="text" name="condominio" style="width: 20em" placeholder="Valor da Conta" />
            </div>
            <div class="campo">
                <label for="snome">Condução</label>
                <input type="text" name="conducao" style="width: 15em" placeholder="Valor da Conta" />
            </div>
            <div class="campo">
                <label for="snome">Emprestimos</label>
                <input type="text" name="emprestimos" style="width: 15em" placeholder="Valor da Conta" />
            </div><div class="campo">
                <label for="snome">Gráfica</label>
                <input type="text" name="grafica" style="width: 15em" placeholder="Valor da Conta" />
            </div>
        </fieldset>
        <fieldset>
        <fieldset class="grupo">
            <div class="campo">
                <label for="nome">Contador</label>
                <input type="text" name="contador" style="width: 15em" placeholder="Valor da Conta" />
            </div>
            <div class="campo">
                <label for="snome">Manutenção</label>
                <input type="text" name="manutencao" style="width: 15em" placeholder="Valor da Conta" />
            </div>
             <div class="campo">
                <label for="snome">Limpeza</label>
                <input type="text" name="limpeza" style="width: 15em" placeholder="Valor da Conta" />
            </div>
        </fieldset>

      <div class="campo">
            <label for="mensagem">Observações</label>
            <textarea rows="6" class="form-control ckeditor" style="width: 20em"
            name="outros" placeholder="Observaçoes"></textarea>
        </div>

        <button type="submit" class='btn btn-success'>Cadastrar</button></a>

    </fieldset>
</form>
