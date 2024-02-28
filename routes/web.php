<?php

use App\Http\Controllers\adminController;
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
Route::get('/accessoires', [linksController::class, 'accessoires'])->name('accessoires');
Route::get('/women', [linksController::class, 'women'])->name('women');
Route::get('/contact', [linksController::class, 'contact'])->name('contact');
Route::get('/about', [linksController::class, 'about'])->name('about');


/******************************************************************************** */

route::get('/admin/signin', function (){
    return view('admin.index');
})->name('admin');

route::get('/admin/home', [adminController::class, 'homeAdmin'])->name('admin-home');

route::get('/admin/produit-homme', [adminController::class, 'menArticle'])->name('admin-produit-homme');

route::get('/admin/produit-femme', [adminController::class, 'womenArticle'])->name('admin-produit-femme');

route::get('/admin/produit-accessoire', [adminController::class, 'accessoireArticle'])->name('admin-produit-accessoire');

route::get('/admin/ajout-produit', function (){
    return view('admin.ajout');
})->name('admin-ajout-produit');

route::get('/delete/article/{id}',[adminController::class, 'deleteArticle'])->name('admin-delete-article');

route::get('/logout/admin', [adminController::class, 'logoutAdmin'])->name('logout-admin');

/******************************************************************************* */

route::post('/admin/login', [adminController::class, 'loginAdmin'])->name('login-admin');

route::post('/admin/add-product', [adminController::class, 'createArticle'])->name('add-product');