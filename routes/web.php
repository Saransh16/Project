<?php

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

Route::get('/wel','PagesController@home');
Route::get('/about','PagesController@about');
Route::get('/contact','PagesController@contact');
Route::get('/students','StudentController@index');
Route::get('/students/new','StudentController@create');
Route::post('/student/create','StudentController@store');


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/wel', function () {

//     $tasks = [
//         'go to the store',
//         'go to the market',
//         'go to work',
//         'go to the concert',
//     ];

//     return view('wel',[

//         'tasks' => $tasks,
//         'foo' => 'foobar'
//     ]);

// });


// Route::get('/contact', function () {
//     t
// });

// Route::get('/about', function () {
//     return view('about');
// });
