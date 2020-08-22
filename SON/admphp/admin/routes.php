<?php
if(resolve('/admin')){
  echo 'Administração';
}elseif(resolve('/admin/pages')){
  echo 'Administração de Páginas';
}else{
  echo "Página não encontrada!";
}