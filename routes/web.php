<?php

use App\Http\Controllers\CartoonController;
use App\Models\Cartoon;
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

Route::get('/',[CartoonController::class,'index'])->name('home');

Route::resource('cartoons',CartoonController::class);
