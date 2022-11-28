<?php

namespace App\Services\Impl;

use App\Models\Post;
use App\Services\BlogService;
use Illuminate\Http\Request;


class BlogServiceImpl implements  BlogService
{

    public function getAll()
    {
        $blogs= Post::all();
        if($blogs==null){
            throw new \Exception('Нету данных', 404);
        }
        return $blogs;
    }
    public function delete($id)
    {
        $post = Post::find($id);
        return $post->delete();
    }
    public function post($blogs)
    {

    }

    public function all()
    {

    }

    public function update(Request $request, Post $post) {
        $post->update($request->all());
        return $post;

    }
}
