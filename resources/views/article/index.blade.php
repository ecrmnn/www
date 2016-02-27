@extends('layout')

@section('title', 'Blog')
@section('description', 'Articles I\'ve written')

@section('content')
    <div class="page-header">
        <h1>Blog</h1>
    </div>

    @foreach($articles as $article)
        <h3><a href="{{ route('article.show', [$article->slug]) }}">{{ $article->title }}</a></h3>
    @endforeach
@stop