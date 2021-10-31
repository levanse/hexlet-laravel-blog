@extends('layouts.app')

@section('content')
    @if (Session::has('success'))
        {{ Session::get('success') }}
    @endif
    <h1>Список статей</h1>
    @foreach ($articles as $article)
        <h2><a href="{{ route('articles.show', $article) }}">{{$article->name}}</a></h2>
        <small>
            <a href="{{ route('articles.edit', $article) }}">Редактирование</a> |
            <a href="{{ route('articles.destroy', $article) }}" data-confirm="Вы уверены?" data-method="delete" rel="nofollow">Удалить</a>
        </small>

        <div>{{Str::limit($article->body, 200)}}</div>
    @endforeach
@endsection
