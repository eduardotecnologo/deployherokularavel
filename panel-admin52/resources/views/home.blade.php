@extends('layouts.app')

@section('content')
<div class="container">
    @forelse ($posts as $post)
            <h1>{{$post->title}}</h1>
            <p>{{$post->description}}</p>
            <b>Author: {{$post->user->name}}</b>
        @can('update-post', $post)
            <a href="{{url("/post/$post->id/update")}}">Editar</a>
            <hr>
        @endcan
       
    @empty
        <p>Nenhum post Cadastrado!!!</p>
    @endforelse
</div>
@endsection
