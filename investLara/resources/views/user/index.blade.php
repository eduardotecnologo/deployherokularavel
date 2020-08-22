@extends('templates.main')

@section('css-view')

@endsection

@section('conteudo-view')
{{-- Imprime message --}}
    @if(session('success'))
        <h3>{{ session('success')['messages']}}</h3>
    @endif

    {!! Form::open(['route' => 'user.store','method'  => 'post', 'class'   => 'form-default']) !!}
        @include('templates.forms.input',    ['label' => 'CPF','input'     => 'cpf', 'atributes'      => ['placeholder' => 'Digite o seu CPF']])
        @include('templates.forms.input',    ['label' => 'Nome','input'    => 'name', 'atributes'     => ['placeholder' => 'Digite o seu nome']])
        @include('templates.forms.input',    ['label' => 'Celular','input' => 'phone', 'atributes'    => ['placeholder' => 'Digite o seu Celular']])
        @include('templates.forms.input',    ['label' => 'E-mail','input'  => 'email', 'atributes'    => ['placeholder' => 'Digite o seu E-mail']])
        @include('templates.forms.password', ['label' => 'Senha', 'input'  => 'password', 'atributes' => ['placeholder' => 'Digite sua Senha']])
        @include('templates.forms.submit',   ['input' => 'Cadastrar'])
    {!! Form::close() !!}

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">Telefone</th>
                <th scope="col">Nascimento</th>
                <th scope="col">Sexo</th>
                <th scope="col">E-mail</th>
                <th scope="col">Status</th>
                <th scope="col">Permissão</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
            <tbody>
                @foreach ($users as $user)    
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->cpf}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->birth}}</td>
                    <td>{{$user->gender}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->status}}</td>
                    <td>{{$user->permission}}</td>
                    
                    <td>
                        {!! Form::open(['route' => ['user.destroy', $user->id], 'method' => 'DELETE']) !!}
                        {!! Form::submit('Remover') !!}
                        {!! Form::close() !!}           
                    </td>                     
                </tr>
                @endforeach
            </tbody>
    </table>
@endsection

@section('js-view')

@endsection