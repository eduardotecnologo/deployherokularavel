<?php
session_start();
include_once("seguranca.php");
include_once("../sistema/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Login:::Sistema Administrativo BigCred Financeira">
    <meta name="author" content="Eduardo Alexandre">
    <link rel="icon" href="../img/favicon.ico">

    <title>Sistema Administrativo BigCredJF</title>

    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="../css/theme.css" rel="stylesheet">
    <script src="../js/ie-emulation-modes-warning.js"></script>

      </head>

  <body role="document">
  <?php
         include_once("menu_admin.php");

            $link        = $_GET["link"];
            $pag[1]   = "bem_vindo.php";
            $pag[2]   = "lista_user.php";
            $pag[3]   = "cad_user.php";
            $pag[4]   = "editar_user.php";
            $pag[5]   = "visual_user.php";
            $pag[6]   = "../clientes/cad_clientes.php";
            $pag[7]   = "../clientes/cad_categorias.php";
            $pag[8]   = "../categorias/orgaos.php";
            $pag[9]   = "../categorias/tipo.php";
            $pag[10] = "../categorias/tabela.php";
            $pag[11] = "../categorias/prazo.php";
            $pag[12] = "../categorias/banco.php";
            $pag[13] = "../categorias/parceiros.php";
            $pag[14] = "../categorias/promotor.php";
            $pag[15] = "../clientes/lista_clientes.php";
            $pag[16] = "visual_clientes.php";
            $pag[17] = "editar_clientes.php";
            $pag[18] = "../cadastro/apaga_clientes.php";
            $pag[19] = "controle_despesas.php";
            $pag[20] = "visual_despesas.php";
            $pag[21] = "editar_despesas.php";
            $pag[22] = "../cadastro/cad_edit_dispesas.php";
            $pag[23] = "../cadastro/apaga_despesas.php";
            $pag[23] = "lista_tel.php";



            if (!empty($link)) {
              if (file_exists($pag[$link])) {
                include $pag[$link];
            }else{
              include "bem_vido.php";
                 }
          }else{
            include "bem_vindo.php";
          }


  ?>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/docs.min.js"></script>
    <script src="../js/ckeditor/ckeditor.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
