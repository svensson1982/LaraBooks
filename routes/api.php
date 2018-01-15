<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

  Route::resource('/books', 'Api\BooksController');

  Route::get('book/:id', 'Api\BooksController@show');
  Route::post('books', 'Api\BooksController@store');
   Route::get('books', 'Api\BooksController@index');

// protected routes, access only with authentication
Route::middleware('auth:api')->group(function() {
   // insert a new book
   //
});
