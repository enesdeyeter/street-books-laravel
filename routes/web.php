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

Route::get('/', 'PagesController@home');
Route::get('/home', 'PagesController@home')->name('home');

Route::get('/books', 'PagesController@books')->name('books');


Route::middleware('auth')->group(function (){
    Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

    Route::get('/profile', 'PagesController@profile')->name('profile');
});


// Quick search dummy route to display html elements in search dropdown (header search)
Route::get('/quick-search', 'PagesController@quickSearch')->name('quick-search');

Auth::routes();

/*Route::get('/home', 'HomeController@index')->name('home');*/
