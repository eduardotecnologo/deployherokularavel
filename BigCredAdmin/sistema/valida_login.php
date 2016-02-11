<?php
session_start();
$user = $_POST['login'];
$pass = $_POST['senha'];
include_once("conexao.php");
$result = mysql_query("SELECT * FROM usuarios WHERE login='$user' AND senha='$pass' LIMIT 1");

$resultado = mysql_fetch_assoc($result);
if (empty($resultado)) {
    //Menssagem de Erro de Usuario
    $_SESSION['loginErro'] = "Usuario ou Senha Invalidos! Tente de Novo";
    //Redireciona Usuario para Tela de Login
header("Location: index.php");
}else{
    //Define os Valores Atribuidos na Sessao do Usuario
    $_SESSION['usuarioId']                 = $resultado['id'];
    $_SESSION['usuarioNome']           = $resultado['nome'];
    $_SESSION['usuarioNivelAcesso'] = $resultado['nivel_acessos_id'];
    $_SESSION['usuarioLogin']            = $resultado['login'];
    $_SESSION['usuarioSenha']           = $resultado['senha'];

    if ($_SESSION['usuarioNivelAcesso'] == 1 ) {
         header("Location: ../admin/admin.php");
    }else{
       header("Location: ../admin/usuario.php");
    }
    header("Location: ../admin/admin.php");
    }
?>