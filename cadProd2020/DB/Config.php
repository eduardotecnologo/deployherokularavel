<?php
// $DB_HOST = "localhost";
$DB_DATABASE = "cad_prod01";
$DB_USERNAME = "root";
$DB_PASSWORD = "root";

try {
  $pdo = new PDO($DB_DATABASE, $DB_USERNAME, $DB_PASSWORD);
} catch (PDOException $ex) {
  echo 'Erro: ' . $ex->getMessage();
}



// if (mysqli_connect_error()) {
//   echo "Failed to connect to MySQL: " . mysqli_connect_error();
//   //you need to exit the script, if there is an error
//   exit();
// }