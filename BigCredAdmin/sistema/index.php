<?php
session_start();
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
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="../css/signin.css" rel="stylesheet">
    <script src="../js/ie-emulation-modes-warning.js"></script>

     </head>

  <body>
    <!--Inicio - Destroi as Sessoes-->
  <?php
        unset(
              $_SESSION['usuarioId'],
              $_SESSION['usuarioNome'],
              $_SESSION['usuarioNivelAcesso'],
              $_SESSION['usuarioLogin'],
              $_SESSION['usuarioSenha']
          );
  ?>
  <!--Fim - Destroi as Sessoes-->

    <div class="container">

      <form class="form-signin" method="POST" action="valida_login.php">
        <h3 class="form-signin-heading text-center">Bem Vindo ao Sistema</h3>
        <label for="inputUser" class="sr-only">Nom de Usuário</label>
        <input type="text" name="login" class="form-control" placeholder="Digite seu Usuário" required autofocus><br/>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="senha" class="form-control" placeholder="Digite sua Senha" required>
        <button class="btn btn-lg btn-warning btn-block" type="submit">Entrar</button>
        <button class="btn btn-lg btn-info btn-block"><a href="../index.html">Pagina Principal</a></button>


        <h3 class="form-signin-heading text-center">BigCredJF Financeira</h3>
      </form>
                <!--Menssagem de Redirecionamento-->
                <p class="text-center text-danger">
                  <?php
                        if (isset($_SESSION['loginErro'])) {
                          echo $_SESSION['loginErro'];
                          unset ($_SESSION['loginErro']);
                        }
                  ?>

                </p>
                <!--Fim-->

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
