@props(['options' => []])

@extends('templates.main')

@section('page.title')
    Блог
@endsection

@section('main.content')

    <h2 class="mb-5">
        {{__('Список постов')}}
    </h2>

    <x-form action="{{route('blog')}}">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="mb-3">
                    <input class = "form-control" name="search" value="{{request('search')}}" placeholder="{{__('Поиск')}}"/>
                </div>
            </div>
        </div>
            <div class="col-12 col-md-4">
                <div class="mb-3">
                    <x-select name="category_id" value="{{request('category_id')}}" :options="[null=>__('Все категории'), 1 => __('Первая категория'), 2 => __('Вторая категория')]"></x-select>
                </div>
            </div>
        <div class="col-12 col-md-4">
            <div class="mb-3">
                <button class="btn btn-primary" type="submit">{{__('Применить')}}</button>
            </div>
        </div>

    </x-form>

    @if(empty($posts))
        <div>
            <p>
                {{__('Постов нет')}}
            </p>
        </div>
    @else
        @foreach($posts as $post)
            <div class="col-12">
                <x-card>
                    <x-card-body>
                        <div class="mb-5">
                            <h5>
                                <a href="{{route('blog.show', $post->id)}}">
                                    {{$post->title}}
                                </a>
                            </h5>
                            <p>
                                {{$post->text}}
                            </p>
                        </div>
                        <div class="text-muted">
                            {{now()->format('d.m.Y H:i:s')}}
                        </div>
                    </x-card-body>
                </x-card>
            </div>
        @endforeach
    @endif
    <div class="col-12">

    </div>

@endsection
