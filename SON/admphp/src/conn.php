<?php

//conecta a um banco de dados chamado "adm01php" na máquina "localhost" com um usuário e senha
$conn = pg_connect("host=localhost port=5432 dbname=adm01php user=postgres password=root");
$res1 = pg_get_result($conn);
echo pg_result_error($res1);
