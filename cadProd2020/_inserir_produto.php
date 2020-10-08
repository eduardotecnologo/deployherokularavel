<?php

include 'DB/Config.php';

$nroproduto = $_POST['nroproduto']; //Recebendo o valor do atributo
$nameproduto = $_POST['nameproduto'];
$categoria = $_POST['categoria'];
$qtd = $_POST['qtd'];
$fornecedor = $_POST['fornecedor'];

$sql = "INSERT INTO `estoque`(`nroproduto`,`nameproduto`,`categoria`,`qtd`,`fornecedor`)
        VALUES ($nroproduto,'$nameproduto','$categoria',$qtd,'$fornecedor')";

// echo $nameproduto;
$inserir = mysqli_query($pdo, $sql);