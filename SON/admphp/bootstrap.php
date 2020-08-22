<?php

$path = $_SERVER['PATH_INFO'] ?? '/';
if($path == '/'){
  require __DIR__ . '/site/routes.php';
}elseif($path == '/contato'){
  require __DIR__ . '/site/contato.php';
}else{
  echo 'Página não encontrada!';
}