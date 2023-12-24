<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware('auth')->group(function(){
    Route::get('/chat', [App\Http\Controllers\Controller::class, 'show'])->name('chat');
    Route::get('/display', [App\Http\Controllers\Controller::class, 'show2'])->name('display');
    Route::post('/message', [App\Http\Controllers\Controller::class, 'process_data']);
    //Route::get('get_message', [App\Http\Controllers\Controller::class, 'get_message']);

});


