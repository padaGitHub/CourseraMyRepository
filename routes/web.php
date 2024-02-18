<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;
// use App\Http\Middleware\MiddlewareAuth;


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
    return view('checkage');
});

Route::get('/checkage', [RouteController::class, 'checkage'])->name(name: 'checkage');

Route::get('/welcome', [RouteController::class, 'welcome'])->name(name: 'welcome')->middleware('age');
Route::get('/dashboard', [RouteController::class, 'dashboard'])->name(name: 'dashboard')->middleware('guest');
Route::get('/login', [RouteController::class, 'login'])->name(name: 'login');

Route::get('/register', [RouteController::class, 'register'])->name(name: 'register');
Route::post('/register', [RouteController::class, 'saveData'])->name(name: 'saveData');

