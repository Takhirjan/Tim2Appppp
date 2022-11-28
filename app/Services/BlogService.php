<?php

namespace App\Services;

use App\Models\Post;
use Illuminate\Http\Request;

interface BlogService
{
public function getAll();
public function delete($id);
public function post($blogs);
public function update(Request $request,Post $post);

}
