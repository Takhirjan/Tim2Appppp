<?php

use App\Http\Controllers\API\BlogController;
use App\Http\Controllers\API\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/blogs',[\App\Http\Controllers\API\BlogController::class,'index']);
Route::delete('/blogs/{id}',[\App\Http\Controllers\API\BlogController::class,'destroy']);
Route::post("/blogs/add", [BlogController::class,'store']);
Route::post("/blogs/update/{post}", [BlogController::class,'update']);

Route::group(['prefix'=>'user'],function(){
Route::post('/login',[LoginController::class,'userLogin']);
Route::post('/register',[LoginController::class,'register']);
Route::get('/get-user',[LoginController::class,'userDetail']);

});
Route::group(['prefix'=>'emps'],function(){
    Route::post('/store',[\App\Http\Controllers\API\EmployeeController::class,'store'])
        ->middleware([ 'auth:api','admin']);
    Route::get('/',[\App\Http\Controllers\API\EmployeeController::class,'index'])->middleware([ 'auth:api',]);

});
