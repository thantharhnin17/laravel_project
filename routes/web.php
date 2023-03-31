<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dbconn', function () {
//     return view('dbconn');
// });

Route::get('/', [HomeController::class, 'testRoot'])->name('root');

Route::resource('posts',HomeController::class);
// Route::resource('posts',HomeController::class)->middleware(['auth']);



// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::get('logout', [AuthController::class, 'logout']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [HomeController::class, 'index']);
