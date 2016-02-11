
    <div class="container theme-showcase" role="main">

            <div class="page-header">
        <h1>Cadastrar Categorias</h1>
      </div>
      <div class="row espaco">

      <div class="pull-right">
        <a href="admin.php?link=8&id=<?php echo $resultado['id'];?>"><button type="button" class='btn btn-info'>Orgaos</button></a>
        <a href="admin.php?link=9&id=<?php echo $resultado['id'];?>"><button type="button" class='btn btn-info'>Tipo</button></a>
        <a href="admin.php?link=10&id=<?php echo $resultado['id'];?>"><button type="button" class='btn btn-info'>Tabela</button></a>
        <a href="admin.php?link=11&id=<?php echo $resultado['id'];?>"><button type="button" class='btn btn-info'>Prazo</button></a>
        <a href="admin.php?link=12&id=<?php echo $resultado['id'];?>"><button type="button" class='btn btn-info'>Banco</button></a>
        <a href="admin.php?link=13&id=<?php echo $resultado['id'];?>"><button type="button" class='btn btn-info'>Parceiros</button></a>
        <a href="admin.php?link=14&id=<?php echo $resultado['id'];?>"><button type="button" class='btn btn-info'>Promotor</button></a>
          <?php
         $resultado=mysql_query("SELECT * FROM orgao ORDER BY 'id'");
         $linhas=mysql_num_rows($resultado);
  ?>

    <div class="container theme-showcase" role="main">

            <div class="page-header">
        <h1>Lista de Usuários e Administradores</h1>
      </div>

      <div class="row espaco">
      <div class="pull-right">
      </div>
      </div>
      <div class="row">
        <div class="col-md-5">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Orgaos</th>
                  </tr>
            </thead>
            <tbody>
            <?php
    while ($linhas = mysql_fetch_array(
      $resultado)) {
           echo "<tr>";
               echo "<td>".$linhas['id']."</td>";
               echo "<td>".$linhas['nome']."</td>";



?>
<td>
<a href='admin.php?link=5&id=<?php echo $linhas['id'];?>'></a>
<a href='admin.php?link=4&id=<?php echo $linhas['id'];?>'></a>
<a href='../cadastro/apaga_orgao.php?id=<?php echo $linhas['id'];?>'>
<button type="button" class='btn btn-danger'>Apagar</button></a>
<?php
           echo "</tr>";
                }
            ?>

            </tbody>
          </table>
        </div>


        </div>
</div>
<?php
         $resultado=mysql_query("SELECT * FROM tipo ORDER BY 'id'");
         $linhas=mysql_num_rows($resultado);
  ?>

    <div class="container theme-showcase" role="main">

            <div class="page-header">

      </div>

      <div class="row espaco">
      <div class="pull-right">
      </div>
      </div>
      <div class="row">
        <div class="col-md-5">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Tipos</th>
                  </tr>
            </thead>
            <tbody>
            <?php
    while ($linhas = mysql_fetch_array(
      $resultado)) {
           echo "<tr>";
               echo "<td>".$linhas['id']."</td>";
               echo "<td>".$linhas['nome']."</td>";
?>
<td>
<a href='admin.php?link=5&id=<?php echo $linhas['id'];?>'></a>
<a href='admin.php?link=4&id=<?php echo $linhas['id'];?>'></a>
<a href='../cadastro/apaga_tipo.php?id=<?php echo $linhas['id'];?>'>
<button type="button" class='btn btn-danger'>Apagar</button></a>
<?php
           echo "</tr>";
                }
            ?>

            </tbody>
          </table>
        </div>


        </div>
</div>
<?php
         $resultado=mysql_query("SELECT * FROM tabela ORDER BY 'id'");
         $linhas=mysql_num_rows($resultado);
  ?>

    <div class="container theme-showcase" role="main">

            <div class="page-header">

      </div>

      <div class="row espaco">
      <div class="pull-right">
      </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Tabelas</th>
                  </tr>
            </thead>
            <tbody>
            <?php
    while ($linhas = mysql_fetch_array(
      $resultado)) {
           echo "<tr>";
               echo "<td>".$linhas['id']."</td>";
               echo "<td>".$linhas['nome']."</td>";
?>
<td>
<a href='admin.php?link=5&id=<?php echo $linhas['id'];?>'></a>
<a href='admin.php?link=4&id=<?php echo $linhas['id'];?>'></a>
<a href='../cadastro/apaga_tabela.php?id=<?php echo $linhas['id'];?>'>
<button type="button" class='btn btn-danger'>Apagar</button></a>
<?php
           echo "</tr>";
                }
            ?>

            </tbody>
          </table>
        </div>


        </div>
</div>
<?php
         $resultado=mysql_query("SELECT * FROM prazo ORDER BY 'id'");
         $linhas=mysql_num_rows($resultado);
  ?>

    <div class="container theme-showcase" role="main">

            <div class="page-header">

      </div>

      <div class="row espaco">
      <div class="pull-right">
      </div>
      </div>
      <div class="row">
        <div class="col-md-5">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Prazos</th>
                  </tr>
            </thead>
            <tbody>
            <?php
    while ($linhas = mysql_fetch_array(
      $resultado)) {
           echo "<tr>";
               echo "<td>".$linhas['id']."</td>";
               echo "<td>".$linhas['nome']."</td>";
?>
<td>
<a href='admin.php?link=5&id=<?php echo $linhas['id'];?>'></a>
<a href='admin.php?link=4&id=<?php echo $linhas['id'];?>'></a>
<a href='../cadastro/apaga_prazo.php?id=<?php echo $linhas['id'];?>'>
<button type="button" class='btn btn-danger'>Apagar</button></a>
<?php
           echo "</tr>";
                }
            ?>

            </tbody>
          </table>
        </div>


        </div>
</div>
<?php
         $resultado=mysql_query("SELECT * FROM banco ORDER BY 'id'");
         $linhas=mysql_num_rows($resultado);
  ?>

    <div class="container theme-showcase" role="main">

            <div class="page-header">

      </div>

      <div class="row espaco">
      <div class="pull-right">
      </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Bancos</th>
                  </tr>
            </thead>
            <tbody>
            <?php
    while ($linhas = mysql_fetch_array(
      $resultado)) {
           echo "<tr>";
               echo "<td>".$linhas['id']."</td>";
               echo "<td>".$linhas['nome']."</td>";
?>
<td>
<a href='admin.php?link=5&id=<?php echo $linhas['id'];?>'></a>
<a href='admin.php?link=4&id=<?php echo $linhas['id'];?>'></a>
<a href='../cadastro/apaga_banco.php?id=<?php echo $linhas['id'];?>'>
<button type="button" class='btn btn-danger'>Apagar</button></a>
<?php
           echo "</tr>";
                }
            ?>

            </tbody>
          </table>
        </div>


        </div>
</div>
<?php
         $resultado=mysql_query("SELECT * FROM parceiro ORDER BY 'id'");
         $linhas=mysql_num_rows($resultado);
  ?>

    <div class="container theme-showcase" role="main">

            <div class="page-header">

      </div>

      <div class="row espaco">
      <div class="pull-right">
      </div>
      </div>
      <div class="row">
        <div class="col-md-9">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Parceiros</th>
                  </tr>
            </thead>
            <tbody>
            <?php
    while ($linhas = mysql_fetch_array(
      $resultado)) {
           echo "<tr>";
               echo "<td>".$linhas['id']."</td>";
               echo "<td>".$linhas['nome']."</td>";
?>
<td>
<a href='admin.php?link=5&id=<?php echo $linhas['id'];?>'></a>
<a href='admin.php?link=4&id=<?php echo $linhas['id'];?>'></a>
<a href='../cadastro/apaga_parceiro.php?id=<?php echo $linhas['id'];?>'>
<button type="button" class='btn btn-danger'>Apagar</button></a>
<?php
           echo "</tr>";
                }
            ?>

            </tbody>
          </table>
        </div>


        </div>
</div>
<?php
         $resultado=mysql_query("SELECT * FROM promotor ORDER BY 'id'");
         $linhas=mysql_num_rows($resultado);
  ?>

    <div class="container theme-showcase" role="main">

            <div class="page-header">

      </div>

      <div class="row espaco">
      <div class="pull-right">
      </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Promotores</th>
                  </tr>
            </thead>
            <tbody>
            <?php
    while ($linhas = mysql_fetch_array(
      $resultado)) {
           echo "<tr>";
               echo "<td>".$linhas['id']."</td>";
               echo "<td>".$linhas['nome']."</td>";
?>
<td>
<a href='admin.php?link=5&id=<?php echo $linhas['id'];?>'></a>
<a href='admin.php?link=4&id=<?php echo $linhas['id'];?>'></a>
<a href='../cadastro/apaga_promotor.php?id=<?php echo $linhas['id'];?>'>
<button type="button" class='btn btn-danger'>Apagar</button></a>
<?php
           echo "</tr>";
                }
            ?>

            </tbody>
          </table>
        </div>


        </div>
</div>





