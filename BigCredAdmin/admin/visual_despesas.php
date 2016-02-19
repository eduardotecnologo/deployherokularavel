  <?php
         $resultado=mysql_query("SELECT * FROM despesas ORDER BY 'id'");
         $linhas=mysql_num_rows($resultado);
  ?>

    <div class="container theme-showcase" role="main">

            <div class="page-header">
        <h1>Lista de Clientes Cadastrados</h1>
      </div>

      <div class="row espaco">
      <div class="pull-right">
        <a href="admin.php?link=19"><button type="button" class='btn btn-default'>Novo</button></a>
      </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <table class="table">
            <thead>
              <tr>
                <th>Água</th>
                <th>Luz</th>
                <th>Telefone</th>
                <th>Celular</th>
                <th>Internet</th>
                <th>Aluguel</th>
                <th>Condominio</th>
                <th>Grafica</th>
                <th>Contador</th>
                <th>Manutencao</th>
                <th>Limpeza</th>
                <th>Total</th>
                <th>Data:</th>
              </tr>
            </thead>
            <tbody>
            <?php
    while ($linhas = mysql_fetch_array(
      $resultado)) {
           echo "<tr>";
               echo "<td>".$linhas['agua']."</td>";
               echo "<td>".$linhas['luz']."</td>";
               echo "<td>".$linhas['telefone']."</td>";
               echo "<td>".$linhas['celular']."</td>";
               echo "<td>".$linhas['internet']."</td>";
               echo "<td>".$linhas['aluguel']."</td>";
               echo "<td>".$linhas['condominio']."</td>";
               echo "<td>".$linhas['grafica']."</td>";
                echo "<td>".$linhas['contador']."</td>";
               echo "<td>".$linhas['manutencao']."</td>";
               echo "<td>".$linhas['limpeza']."</td>";
               echo "<td>".$linhas['total']."</td>";
               echo "<td>".$linhas['created']."</td>";

?>
<td>
<a href='admin.php?link=21&id=<?php echo $linhas['id'];?>'><button type='button' class='btn btn-warning'>Editar</button></a>
<a href='../cadastro/apaga_despesas.php?id=<?php echo $linhas['id'];?>'><button type='button' class='btn btn-danger'>Apagar</button></a>
<?php
           echo "</tr>";
                }
            ?>

            </tbody>
          </table>
        </div>
