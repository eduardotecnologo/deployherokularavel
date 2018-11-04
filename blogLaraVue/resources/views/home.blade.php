@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <painel titulo="Painel de Controle">
                    Teste de Conteúdo...
            <div class="row">
                <div class="col-md-4">
                    <box></box> 
                </div>
                <div class="col-md-4">
                    <painel titulo="Conteúdo 2" cor="panel-warning">
                        Teste de Conteúdo 2....
                    </painel> 
                </div>
                <div class="col-md-4">
                    <painel titulo="Conteúdo 3">
                        Teste de Conteúdo 3....
                    </painel> 
                </div>
                </painel>
            </div>
        </div>
    </div>
@endsection
