@extends('layouts.app')

@section('content')
        <h1>{{$post->title}}</h1>
        <p>{{$post->description}}</p>
        <b>Author: {{$post->user->name}}</b>
        <hr>
</div>
@endsection
