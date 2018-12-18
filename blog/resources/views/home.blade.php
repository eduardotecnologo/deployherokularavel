@extends('layouts.app')

@section('content')
<pagina tamanho="10">
  <painel titulo="Dashboard">
    Testando o Painel
        <div class="row">
          <div class="col-md-4">
            <box qtd="60" titulo="Artigos" url="{{route('artigos.index')}}" cor="orange" icon="ion ion-pie-graph"></box>
          </div>
          <div class="col-md-4">
            <box qtd="1600" titulo="Usuários" url="#" cor="red" icon="ion ion-person-stalker"></box>
          </div> 
          <div class="col-md-4">
            <box qtd="3" titulo="Autores" url="#" cor="green" icon="ion ion-person"></box>
          </div>   
        </div> 
      </painel>
</pagina>
@endsection
