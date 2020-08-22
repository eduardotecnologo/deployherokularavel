<?php
if(resolve('/admin')){
 render('admin/home', 'admin');
}elseif(resolve('/admin/pages')){
  echo 'Administração de Páginas';
}else{
  echo "Página não encontrada!";
}