<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route is basic method which comes from frame work it needs two parameters 
//1 path and
//2 function 

// what are routes //what is static route and what is dynamic route
// static routes
Route::get('/', [ArticleController::class, 'index']);
Route::get('/articles', [ArticleController::class, 'index']);

Route::get('/articles/detail/{id}', [ArticleController::class, 'detail']);

//dynamic routes go the the page depending on the para
// Route::get('/articles/detail/{id}', function ($id) {
//     return "Article Detail - $id";
// });


//routes can set route name
//route pattern -> resource/action/id/sub-resource/sub-action action => add/update/view/delete
Route::get('/users/detail/{id}/photos', function($id) {
    return "Users Detail - $id";
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
