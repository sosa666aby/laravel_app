<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $post = (object)[
            'id'=> 3,
            'title' => 'Blog title',
            'text' => 'Blog text',
        ];
        $posts = array_fill(0, 20, $post);
        return view('user.index', compact('posts'));
    }

    public function create()
    {
        return view('user.create');
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
