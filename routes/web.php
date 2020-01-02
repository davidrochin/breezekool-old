<?php

use App\Http\Controllers\ContactController;

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

/*Route::any('{query}', function () {
    return view('construction');
})->where('query', '.*');;*/

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/article/{id}', function ($id) {
    return view('article-'.$id);
})->name('article');

Route::post('/contact', 'ContactController@contact')->name('contact');

//Route::get('')
