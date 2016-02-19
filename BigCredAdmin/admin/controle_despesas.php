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
                <label for="snome">Internet</label>
                <input type="text" name="internet" style="width: 15em" placeholder="Valor da Conta" />
            </div>
        </fieldset>
         <fieldset>
        <fieldset class="grupo">
            <div class="campo">
                <label for="nome">Aluguel</label>
                <input type="text" name="aluguel" style="width: 20em" placeholder="Valor da Conta" />
            </div>
            <div class="campo">
                <label for="snome">Condominio</label>
                <input type="text" name="condominio" style="width: 15em" placeholder="Valor da Conta" />
            </div>
            <div class="campo">
                <label for="snome">Grafica</label>
                <input type="text" name="grafica" style="width: 15em" placeholder="Valor da Conta" />
            </div><div class="campo">
                <label for="snome">Contador</label>
                <input type="text" name="contador" style="width: 15em" placeholder="Valor da Conta" />
            </div>
        </fieldset>
        <fieldset>
        <fieldset class="grupo">
            <div class="campo">
                <label for="nome">Manutencao</label>
                <input type="text" name="manutencao" style="width: 20em" placeholder="Valor da Conta" />
            </div>
            <div class="campo">
                <label for="snome">Limpeza</label>
                <input type="text" name="limpeza" style="width: 15em" placeholder="Valor da Conta" />
            </div>
            <div class="campo">
                <label for="snome">Celular</label>
                <input type="text" name="celular" style="width: 15em" placeholder="Valor da Conta" />
            </div>
            <div class="campo">
                <label for="snome">Total</label>
                <input type="text" name="total" style="width: 15em" placeholder="Valor da Conta" />
            </div>
            </fieldset>


        <button type="submit" class='btn btn-success'>Cadastrar</button></a>

    </fieldset>
</form>
