<?php

use App\Http\Controllers\PostController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('homepage');
});

// Route::get('/home', function () {
//     return view('homepage');
// });




Route::get('/posts',[PostController ::class, "index"]);

Route::get('/course',[PostController ::class, "show"]);

// Route::get('/posts/course',[PostController ::class, "liveSearch"]);
Route::post('/posts/course',['as' => 'search-post', 'uses' => 'PostController@liveSearch']);

Route::get('/posts/create',[PostController ::class, "create"]);
Route::post('/posts',[PostController ::class, "store"]);

Route::get('/posts/{post}/edit',[PostController ::class, "edit"]);

Route::put('/posts/{post}',[PostController ::class, "update"]);

Route::delete('/posts/{post}',[PostController ::class, "destroy"]);

