<?php

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


// Route::get('/about', function (){
//     return view('Page.about');
// });


/* Route::get('/', function () {
    return ' Hello Vannkinh';
});
Route::delete('/hello', function () {
    return ' Hello World';
});
*/


// adding dynamic route
/*Route::get('/user/{id}/{name}' , function($id,$name){
        return 'This is my: '.$id.'and I am '.$name;
});*/

// Route through controller
// Route::get('/welcome', function (){
//     return view('welcome');
// });
Route::get('/welcome', 'PagesController@welcome');
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

//map the route to postcontroller's function
Route::resource('posts','PostsController');
Route::resource('admins','PostsController');