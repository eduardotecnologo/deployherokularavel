@extends('layouts.app')

@section('content')
<pagina tamanho="12">
  <painel titulo="Lista de Artigos">
    
    {{--  //Tabela de Lista de Artigos  --}}
    <tabela-lista 
      v-bind:titulos="['Código','Título','Descrição','Autor','Data']"
      v-bind:itens="[[1,'Programação com Laravel','Blog utilizando Vue.js','Eduardo Alexandre','24/12/2019'],
                    [2,'Programação com React','Blog utilizando Javascript','Eduardo Alexandre','24/12/2019']]"

    {{--  //Botões de Ações - Tabela de Lista de Artigos  --}}  
    criar="#criar" detalhe="#detalhe" editar="#editar" deletar="#deletar" token="1616564564">

    </tabela-lista>

  </painel>
</pagina>
@endsection
