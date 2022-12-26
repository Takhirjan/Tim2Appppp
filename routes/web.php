<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PostController;
//Route::get('/', function(){
//    return redirect()->route('posts.index');
//});
Route::get('/', function(){
    return redirect()->route('posts.index');
});


Route::group(['prefix'=>'auth'],function() {
    Route::get('register', [AuthController::class, 'register'])->name('register');
    Route::get('login', [AuthController::class, 'auth'])->name('auth');
    Route::post('user/create', [AuthController::class, 'create'])->name('user.create');
    Route::post('signin', [AuthController::class, 'login'])->name('login');
    Route::get('blogs',[AuthController::class,'blogs'])->name('blogs');
});




Route::get('/posts/newprofile',[PostController::class,'newprofile'])->name('posts.newprofile');
Route::get('/posts/blog',[PostController::class,'blog'])->name('posts.blog');
//Route::name('user.')->group(function(){
Route::get('/posts/follow',[PostController::class,'follow'])->name('posts.follow');
Route::resource('posts', PostController::class);

Route::get('/posts',[PostController::class,'index'])->name('posts.index');
Route::get('/posts/create',[PostController::class,'create'])->name('posts.create');
Route::post('/posts',[PostController::class,'store'])->name('posts.store');
Route::get('posts/{id}',[PostController::class,'show'])->name('posts.show');
/*Route::get('goods', function(Request $req){
 return $req->model;
});*/
/* c request ПРИХОДЯТ GET параметры
php artisan make:controller PostController-команда для осуществления Контроллера
migration- то построение таблицы
model-работа с таблицами

php artisan make: model Post--migration
php artisan config:cache

csrf token-

*/
