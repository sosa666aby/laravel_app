@extends('templates.base')

@section('page.title')
    Вход
@endsection

@section('content')
  <section class="mt-5">
      <x-container>
          <div class="row">
              <div class="col-12 col-md-6 offset-md-3">
                  <x-card>
                      <x-card-header>
                          <x-card-title>
                              {{__('Вход')}}
                          </x-card-title>
                      </x-card-header>
                      <x-card-body>
                          <x-form action="{{route('login.store')}}" method="POST">
                              @csrf
                              <div class="mb-3">
                                  <label class="required" for="">{{__('Электронная почта')}}</label>
                                  <input type="email" name="email" class="form-control" autofocus>
                              </div>
                              <div class="mb-3">
                                  <label class="required" for="">{{__('Пароль')}}</label>
                                  <input type="password" name="password" class="form-control">
                              </div>
                              <button type="submit" class="btn btn-primary">{{__('Войти')}}</button>
                          </x-form>
                      </x-card-body>
                  </x-card>
              </div>
          </div>
      </x-container>
  </section>
@endsection
