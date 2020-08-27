<?php
$pages_all = function(){
  //Buscando todas as página
};
$pages_one = function($id){
  //Buscando apena uma página
};
$pages_create = function(){
  //Criando um página
  // flash('Registro criado com sucesso!','success');

};
$pages_edit = function($id){
  //Editando uma página
  swal('Registro editado com sucesso', 'success');
};
$pages_delete = function($id){
  //Deletando uma página
  swal('Registro deletado com sucesso!','danger');
};
