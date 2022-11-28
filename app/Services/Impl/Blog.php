<?php

namespace App\Services\Impl;
use App\Models\Post;

class Blog
{

    public static function all(){
    }

    public static function create(array $all){

    }
    public $timestamps=false;
    protected $filliable=['title', 'content', 'image'];
}
