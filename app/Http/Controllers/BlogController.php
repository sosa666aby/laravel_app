<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {

        $search = $request->input('search');
        $category_id = $request->input('category_id');
        $post = (object)[
            'id'=> 3,
          'title' => 'Blog title',
          'text' => 'Blog text',
            'category_id'=>1,
        ];
//        dd($search, $category_id);
        $posts = array_fill(0, 20, $post);

        $posts = array_filter($posts, function ($post) use ($search, $category_id) {
            if ($search && ! str_contains(strtolower($post->title), strtolower($search))) {
                return false;
            }

            if ($category_id && $post->category_id != $category_id) {
                return false;
            }

            return true;
        });
        return view('blog.index', compact('posts'));
    }

    public function show(){
        $post = (object)[
            'id'=> 3,
            'title' => 'Blog title',
            'text' => 'Blog text',
            'category_id'=> 1,
        ];

        return view('blog.show', compact('post'));
    }
}
