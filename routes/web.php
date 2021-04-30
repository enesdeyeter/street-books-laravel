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

Route::get('/books', 'BooksController@index')->name('books');
Route::get('/books/{id}', 'BooksController@show');

Route::get('/categories/{id}', 'PagesController@categoryPage')->name("categoryPage");
Route::get('/author/{id}', 'PagesController@authorPage')->name("authorPage");

Route::get('/quick-search', 'PagesController@quickSearch')->name('quick-search');

Route::get('/book-comment', 'PagesController@sendBookComment')->name('sendBookComment');
Route::post('/book-comment', 'PagesController@commentableBook')->name('commentableBook');


Route::middleware('auth')->group(function (){
    Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

    Route::get('/profile', 'PagesController@profile')->name('profile');

    Route::get('/book/add', 'BooksController@create');
    Route::post('/book/adding', 'BooksController@store')->name('add-book');

    Route::post('/like', 'BooksController@like')->name('like');
    Route::post('/dislike', 'BooksController@dislike')->name('dislike');
    //Route::resource("book","BooksController");
});


Auth::routes();

/*Route::get('/home', 'HomeController@index')->name('home');*/
