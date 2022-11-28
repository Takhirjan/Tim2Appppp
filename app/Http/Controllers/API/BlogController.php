<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResourse;
use App\Models\Post;
use App\Services\BlogService;
use App\Services\Impl\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected $blogService;

    public function __construct(BlogService $blogService)
    {
        $this->blogService = $blogService;
    }

    public function index()
    {
        try {
            $blogs = $this->blogService->getAll();
            return response()->json([
                'status' => true,
                'blogs' => PostResourse::collection($blogs)]);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()], $e->getCode());
        }
    }

    public function destroy($id)
    {
        $this->blogService->delete($id);
        return ["status" => "Succesful"];
    }

    public function store(Request $req){
        $blog=Post::create($req->all());
        return response($blog,201);

    }

    public function update(Request $request, Post $post)
    {
        return response()->json([
            'status' => true,
            'message' => "Post updated",
            'post' => $this->blogService->update($request, $post)
        ], 200);
    }
}



