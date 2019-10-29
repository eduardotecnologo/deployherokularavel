@extends('templates.main')

@section('css-view')

@endsection

@section('conteudo-view')
    {!! Form::open(['route' => 'user.store','method' => 'post', 'class' => 'form-default']) !!}
        @include('templates.forms.input', ['label' => 'CPF','input' => 'cpf', 'atributes' => ['placeholder' => 'Digite o seu CPF']])
        @include('templates.forms.input', ['label' => 'Nome','input' => 'name', 'atributes' => ['placeholder' => 'Digite o seu nome']])
        @include('templates.forms.input', ['label' => 'Celular','input' => 'phone', 'atributes' => ['placeholder' => 'Digite o seu Celular']])
        @include('templates.forms.input', ['label' => 'E-mail','input' => 'email', 'atributes' => ['placeholder' => 'Digite o seu E-mail']])
        @include('templates.forms.password', ['label' => 'Senha', 'input' => 'password', 'atributes' => ['placeholder' => 'Digite sua Senha']])
        @include('templates.forms.submit',['input' => 'Cadastrar'])
    {!! Form::close() !!}
@endsection

@section('js-view')

@endsection