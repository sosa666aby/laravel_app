<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return 'Страница с постами';
    }

    public function create()
    {
        return 'Страница создания поста';
    }

    public function store(){
        return 'Страница обновления поста';
    }

    public function show($post_id){
        return "Страница просмотра поста {$post_id}";
    }

    public function edit($post_id){
        return "Страница изменения поста {$post_id}";
    }

    public function update(){
        return 'Страница обновления поста';
    }

    public function delete(){
        return 'Страница удаления поста';
    }
}
