@extends('templates.main')

@section('page.title')
    {{$post->title}}
@endsection

@section('main.content')

    <h2 class="mb-5">
        {{$post->title}}
    </h2>
    {!! $post->text !!}

@endsection
