@extends('layout')

@section('content')
    <div class="page-header">
        <h1>{{ $article->title }}</h1>
        <time class="text-muted">Published {{ $article->created_at->format('Y-m-d') }}</time>
    </div>

    <div class="row">
        <div class="col-xs-12">
            {!! $article->parsedContent() !!}
        </div>
    </div>
@stop