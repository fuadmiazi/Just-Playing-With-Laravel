<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\User;
use App\Http\Controllers\UserController;

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
    return view('welcome');
    //return redirect('about');
});

// Route::get('/about', function(){
//     return view('about');
// });

// Route::get('/contact', function(){
//     return view('contact');
// });

// Route::get('/users/{name}', function($name){
//     return view('users',['name'=>$name]);
// });

// Route::get("users/{name}",[UserController::class,'loadView']);

// Route::post("users",[UserController::class,'getData']);

// Route::view("login","users");
//Route:get("path","controller file");

//Route::get("User/{fuad}",[User::class,'index']);

// Route::view("users", "users");

// Route::view("noaccess", "noaccess");

// Route::group(['middleware'=>['protectedPage']],function(){
//     Route::view("home", "home");
//     Route::get('/', function () {
//         return view('welcome');
//     });
// });

Route::view('users','users')->middleware('protectedPage');
Route::view('home','home');
Route::view('noaccess','noaccess');
