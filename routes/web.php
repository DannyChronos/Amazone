<?php

use App\Http\Controllers\linksController;
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
Route::get('/', [linksController::class, 'index'])->name('index');
Route::get('/mens', [linksController::class, 'mens'])->name('mens');
Route::get('/womens', [linksController::class, 'womens'])->name('womens');
Route::get('/women', [linksController::class, 'women'])->name('women');
Route::get('/contact', [linksController::class, 'contact'])->name('contact');
Route::get('/about', [linksController::class, 'about'])->name('about');

