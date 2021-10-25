@extends('layouts.app')

@section('content')
    @if (Session::has('success'))
        {{ Session::get('success') }}
    @endif
    <h1>Список статей</h1>
    @foreach ($articles as $article)
        <h2><a href="articles/{{$article->id}}">{{$article->name}}</a></h2>
        <small><a href="articles/{{$article->id}}/edit">Редактирование</a></small>

        <div>{{Str::limit($article->body, 200)}}</div>
    @endforeach
@endsection
