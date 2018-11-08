@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <painel titulo="Painel de Controle">
                    Painel de Controle
            <div class="row">
                <div class="col-md-4">
                    <box qtd="80" titulo="Artigos" url="#" cor="orange" icone="fa fa-comments-o"></box> 
                </div>
                <div class="col-md-4">
                    <box qtd="104" titulo="Usuários" url="#" cor="blue" icone="fa fa-users"></box> 
                </div>
                <div class="col-md-4">
                     <box qtd="2" titulo="Autores" url="#" cor="red" icone="fa fa-user-circle"></box>  
                </div>
                </painel>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <box qtd="80" titulo="Artigos" url="#" cor="green" icone="fa fa-comments-o"></box> 
                </div>
                <div class="col-md-4">
                    <box qtd="104" titulo="Usuários" url="#" cor="pink" icone="fa fa-users"></box> 
                </div>
                <div class="col-md-4">
                     <box qtd="2" titulo="Autores" url="#" cor="brown" icone="fa fa-user-circle"></box>  
                </div>
                </painel>
            </div>
        </div>
    </div>
@endsection
