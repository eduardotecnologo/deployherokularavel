<?php
ob_start();
if (($_SESSION['usuarioId'] == "") || ($_SESSION['usuarioNome'] == "") || ($_SESSION['usuarioNivelAcesso'] == "") || 
	($_SESSION['usuarioLogin'] == "") || ($_SESSION['usuarioSenha'] == "")) {
    //Destroi a Sessão
	unset($_SESSION['usuarioId'],
            $_SESSION['usuarioNome'],
            $_SESSION['usuarioNivelAcesso'],
            $_SESSION['usuarioLogin'],
            $_SESSION['usuarioSenha']);
	//Menssagem de Erro
	$_SESSION['loginErro'] = "Área Restrita para Usuários Cadastrados";
    //Retorna Usuário para Tela de Login
    header("Location: ../index.php");

    
}
?>