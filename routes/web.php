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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', ['as'=>'home', 'uses'=>'HomeController@index']);

//pages
Route::get('/about',['as'=>'about_company', 'uses'=>'PageController@about']);
Route::get('/chose_us', ['as'=>'why_chose_us', 'uses'=>'PageController@choseUs']);
Route::get('/services', ['as'=>'services', 'uses'=>'PageController@services']);
Route::get('/our_blogs', ['as'=>'our_blogs', 'uses'=>'PageController@ourBlogs']);
Route::get('/contact_us', ['as'=>'contact_us', 'uses'=>'PageController@contactUS']);
