  <?php
         $resultado=mysql_query("SELECT * FROM clientes ORDER BY 'id'");
         $linhas=mysql_num_rows($resultado);
  ?>

    <div class="container theme-showcase" role="main">

            <div class="page-header">
        <h1>Lista de Clientes Cadastrados</h1>
      </div>

      <div class="row espaco">
      <div class="pull-right">
        <a href="admin.php?link=6"><button type="button" class='btn btn-default'>Novo</button></a>
      </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>RG</th>
                <th>Matricula</th>
              </tr>
            </thead>
            <tbody>
            <?php
    while ($linhas = mysql_fetch_array(
      $resultado)) {
           echo "<tr>";
               echo "<td>".$linhas['id']."</td>";
               echo "<td>".$linhas['nome']."</td>";
               echo "<td>".$linhas['cpf']."</td>";
               echo "<td>".$linhas['rg']."</td>";
               echo "<td>".$linhas['matricula']."</td>";

?>
<td>
<a href='admin.php?link=16&id=<?php echo $linhas['id'];?>'><button type='button' class='btn btn-primary'>Visualizar</button></a>
<a href='admin.php?link=17&id=<?php echo $linhas['id'];?>'><button type='button' class='btn btn-warning'>Editar</button></a>
<a href='../cadastro/apaga_clientes.php?id=<?php echo $linhas['id'];?>'><button type='button' class='btn btn-danger'>Apagar</button></a>
<?php
           echo "</tr>";
                }
            ?>

            </tbody>
          </table>
        </div>
