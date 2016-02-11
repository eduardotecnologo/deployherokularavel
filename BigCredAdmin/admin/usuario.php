<?php
session_start();
echo "Bem Vindo Usuário: ".$_SESSION['usuarioNome'];
?>
<br/>
<a href="sair.php">Sair</a>