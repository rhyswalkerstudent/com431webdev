<?php

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


//CommentBankController
Route::get('/', [App\Http\Controllers\CombinedController::class, 'index'])->name('homepage');
Route::post('/', [App\Http\Controllers\CombinedController::class, 'store'])->name('homepage');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/references/create', [App\Http\Controllers\ReferenceController::class, 'create'])->name('references.create');
Route::get('/reflections/create', [App\Http\Controllers\ReflectionController::class, 'create'])->name('reflections.create');
Route::post('/references/store', [App\Http\Controllers\ReferenceController::class, 'store'])->name('references.store');
Route::post('/reflections/store', [App\Http\Controllers\ReflectionController::class, 'store'])->name('reflections.store');

//Route::get('/createRefe', [App\Http\Controllers\HomeController::class, 'refCreate'])->name('create');
//Route::get('/createRelf', [App\Http\Controllers\HomeController::class, 'reflCreate'])->name('create');
