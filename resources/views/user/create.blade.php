@extends('templates.main')

@push('trix')
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
        <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
@endpush

@section('page.title')
    Создание поста
@endsection

@section('main.content')
    <div class="title d-flex justify-content-between justify-items-center mt-2 ">
        <h2 class="mb-5">
            {{__('Создание поста')}}
        </h2>
        <a href="{{route('user.posts')}}">Назад к постам</a>
    </div>
    <x-form action="{{route('user.posts.store')}}" method="POST">
        @csrf
        <div class="container">
            <x-form-item>
                <label for="">{{__('Название поста')}}</label>
            </x-form-item>
            <input class="form-control" name="title" type="text">
            <x-form-item class="">
                <label for="">{{__('Содержание поста')}}</label>
            </x-form-item>
            <input id="content" type="hidden" name="content">
            <trix-editor input="content"></trix-editor>
            <button class="mt-2 btn btn-primary" type="submit">{{__('Создать пост')}}</button>
        </div>
    </x-form>

@endsection
