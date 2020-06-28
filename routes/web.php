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

Route::get('/', 'HomeController@index');

Route::get('/home', function() { return redirect('/'); });

Route::resource('articles', 'ArticleController');

Route::prefix('admin')->group(function() {
	Route::get('/', function() { return redirect()->route('login'); });
	Auth::routes(['register' => false]);
});

// Special Routes
Route::prefix('special')->group(function() {
	Route::get('/back/{name}', 'ReturnRedirectController@back')->name('go.back');
});
