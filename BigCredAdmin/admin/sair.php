<?php
session_start();
session_destroy();
//Remover todas as Informações Contidas nas Variáveis Globais
unset($_SESSION['usuarioId'],
            $_SESSION['usuarioNome'],
            $_SESSION['usuarioNivelAcesso'],
            $_SESSION['usuarioLogin'],
            $_SESSION['usuarioSenha']);
//Redireciona Usuário para Página Inicial
header("Location: ../sistema/index.php");
?>