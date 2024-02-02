<?php

use App\Http\Controllers\IndexController;
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


Route::post('/index', [IndexController::class, 'indexpost'])->name('index.post');
   



Route::get('/index', [IndexController::class, 'indexget'])->name('index.get');
   



Route::post('/install', [IndexController::class, 'installpost'])->name('install.post');
   

