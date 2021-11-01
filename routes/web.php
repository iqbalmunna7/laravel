<?php
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
 
Route::get('/Contact', 'ContactController@index');
Route::get('/About','AboutController@About');