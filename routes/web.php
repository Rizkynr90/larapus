<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// admin route
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function() {
    Route::get('/', function () {
        return view('admin.index');
    });

    Route::resource('author', AuthorController::class);
    Route::resource('books', BookController::class);
});
