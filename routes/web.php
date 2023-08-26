<?php

use App\Http\Controllers\AccueilController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EntrepriseController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ApprenantController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\BlogpostController;

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

Route::get('/', [AccueilController::class,'acceuil'])->name('accueil');

Auth::routes();
Route::get('programme', [App\Http\Controllers\ForumController::class, 'programme'])->name('programme');

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

//evenemet
Route::get('evenement', [App\Http\Controllers\EvenementController::class, 'traiterEven'])->name('evenement');

//entreprise

Route::get('/index2', [EntrepriseController::class,'show'])->name('index2');
Route::get('/edit', [EntrepriseController::class,'edit'])->name('edit');
// Route::post('/edit', [EntrepriseController::class,'update'])->name('edit');
Route::resource('users', EntrepriseController::class);
// apprenant

Route::get('cvtheque', [AccueilController::class,'cvtheque'])->name('cvtheque');

Route::get('offre', [AccueilController::class,'offre'])->name('offre');

Route::resource('user', UserController::class)->middleware('auth');

//blog
Route::get('blog', [BlogpostController::class, 'blog'])->name('blog');

