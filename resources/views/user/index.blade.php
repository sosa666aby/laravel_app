@extends('templates.main')

@section('page.title')
    Мои посты
@endsection

@section('main.content')
<div class="title d-flex justify-content-between justify-items-center mt-2 ">
    <h2 class="mb-5">
        {{__('Список моих постов')}}
    </h2>
    <div class="button">
        <a href="{{route('user.posts.create')}}">
            <button class="btn btn-primary" >
                Создать
            </button>
        </a>

    </div>
</div>

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
