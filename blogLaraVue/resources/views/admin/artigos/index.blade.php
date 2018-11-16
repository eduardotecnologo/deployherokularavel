@extends('layouts.app')

@section('content')
<pagina tamanho="10">
        <painel titulo="Lista de Artigos">
            <tabela-lista v-bind:titulos="['teste','outros']"></tabela-lista>
        </painel>
</pagina>
@endsection
