  <?php
         $resultado=mysql_query("SELECT * FROM usuarios ORDER BY 'id'");
         $linhas=mysql_num_rows($resultado);
  ?>

    <div class="container theme-showcase" role="main">

            <div class="page-header">
        <h1>Lista de Usuários e Administradores</h1>
      </div>

      <div class="row espaco">
      <div class="pull-right">
        <a href="admin.php?link=3"><button type="button" class='btn btn-default'>Novo</button></a>
      </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Usuario</th>
                <th>Nível de Acesso</th>
                <th>Configurar</th>
              </tr>
            </thead>
            <tbody>
            <?php
    while ($linhas = mysql_fetch_array(
      $resultado)) {
           echo "<tr>";
               echo "<td>".$linhas['id']."</td>";
               echo "<td>".$linhas['nome']."</td>";
               echo "<td>".$linhas['email']."</td>";
               echo "<td>".$linhas['login']."</td>";
               echo "<td>".$linhas['nivel_acessos_id']
                   ."</td>";

?>
<td>
<a href='admin.php?link=5&id=<?php echo $linhas['id'];?>'><button type='button' class='btn btn-primary'>Visualizar</button></a>
<a href='admin.php?link=4&id=<?php echo $linhas['id'];?>'><button type='button' class='btn btn-warning'>Editar</button></a>
<a href='../cadastro/apaga.php?id=<?php echo $linhas['id'];?>'><button type='button' class='btn btn-danger'>Apagar</button></a>
<?php
           echo "</tr>";
                }
            ?>

            </tbody>
          </table>
        </div>
