<?php

require __DIR__ . '/src/error_handler.php';
require __DIR__ . '/src/resolve-route.php';
require __DIR__ . '/src/render-route.php';
require __DIR__ . '/src/conn.php';

if (resolve('/admin/?(.*)')) {
  require __DIR__ . '/admin/routes.php';
}elseif(resolve('/(.*)')){
  require __DIR__ . '/site/routes.php';
}