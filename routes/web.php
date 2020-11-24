<?php

use Illuminate\Support\Facades\Route;


//Imports
use App\Http\Controllers\PostsController;

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

//php artisan route:list

//GET Routes
// Route::get('/', function () {
//     return view('welcome');
// });

// // Get Routes with Parameter
// Route::get('user/{id}', function ($id) {
//     return 'User '.$id;
// });

//Named Routes
Route::get('/', function () {
    return view('welcome');
})->name('home');


//Redirect Routes
Route::redirect('/home','/');


//View Routes
// Route::view('/welcome', 'welcome');
// Route::view('/posts', 'posts.index');


//Resource Routes
Route::resource('/posts', PostsController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
