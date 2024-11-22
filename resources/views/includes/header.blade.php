    <nav class="navbar navbar-expand-md bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}">
                {{config('app.name')}}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link {{Route::is('home') ? 'active' : ''}}" aria-current="page" href="{{route('home')}}">{{__('Главная')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Route::is('blog') ? 'active' : ''}}" aria-current="page" href="{{route('blog')}}">{{__('Статьи')}}</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link {{Route::is('register') ? 'active' : ''}}" aria-current="page" href="{{route('register')}}">{{__('Регистрация')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Route::is('login') ? 'active' : ''}}" aria-current="page" href="{{route('login')}}">{{__('Вход')}}</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
