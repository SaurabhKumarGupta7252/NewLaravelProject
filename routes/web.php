<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

/*
|--------------------------------------------------------------------------
| Simple-Routing
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Routing in short
|--------------------------------------------------------------------------
*/
Route::view('contact','/contact');

/*
|--------------------------------------------------------------------------
| Routing with dynamic value
|--------------------------------------------------------------------------
*/
Route::get('/about/{name}', function($name){
    return view("about", ['name' => $name]);
});

/*
|--------------------------------------------------------------------------
| Routing redirect
|--------------------------------------------------------------------------
*/
Route::get('/redirect', function(){
    return redirect('/');
});

/*
|--------------------------------------------------------------------------
| Routing & controller
|--------------------------------------------------------------------------
*/
Route::get('/user/{name}', [UserController::class, 'user']);

Route::get('/user2/{name}', [UserController::class, 'show']);

/*
|--------------------------------------------------------------------------
| Routing & Component
|--------------------------------------------------------------------------
*/
Route::view('user', 'user');
Route::view('user2', 'user2');

Route::view('noaccess', 'noaccess');
Route::view('alluser', 'alluser') -> middleware('restriction');
Route::view('home', 'home') -> middleware('restriction');