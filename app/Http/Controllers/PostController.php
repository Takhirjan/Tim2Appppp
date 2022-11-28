<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function index()
    {
        $allPosts = Post::all();
        return view('posts.index', ['posts' => $allPosts]);
        //return view with all posts
    }

    public function create()
    {
        return view('posts.create');
    }

    public function follow(){
        return view('posts.follow');
    }
    public function newprofile(){
        return view('posts.newprofile');
    }
    public function store(Request $req)
    {

        if ($req->hasFile('image')) {

            $url = $req->file('image')->store('image');
            Post::create([
                'title' => $req->title,
                'content' => $req->content,
                'image'=>$url,
            ]);
            return redirect()->route('posts.index');
        }

        //return view with a form
    }
    public function destroy(Post $post){
        $post->delete();
        return redirect()->route('posts.index');
    }
public function edit(Post $post){
return view('posts.edit',['post'=>$post]);
}
public function update (Request $request, Post $post){
//        $post->update(['title'=>$request->title,
//        'content'=>request->content,])
        ///Request $request -возвращает данные
    $post->title = $request->get('title');
    $post->content = $request->get('content');
    $post->save();
    return redirect('/');
}
    public function show(Post $post){
//        $post=Post::find($id);
        //  return "ID:" .$id;
        return view('posts.show', ['post' => $post]);
    }

}

///find, create, post::all - это функици и котрые приходят от классак Model

