<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

Route::get('/', [\App\Http\Controllers\AdminController::class, 'welcome']);

Route::get('/imuzaffariadmin', [\App\Http\Controllers\AdminController::class, 'index'])->middleware('auth')->middleware('can:isAdmin');

Route::get('/imuzaffariadmin/action', [\App\Http\Controllers\AdminController::class, 'action'])->middleware('auth')->middleware('can:isAdmin');

Route::get('/imuzaffariadmin/myimg', [\App\Http\Controllers\AdminController::class, 'myimg'])->middleware('auth')->middleware('can:isAdmin');

Route::post('/imuzaffariadmin/myimg', [\App\Http\Controllers\AdminController::class, 'myimgpost'])->middleware('auth')->middleware('can:isAdmin');

Route::get('/imuzaffariadmin/portfolio', [\App\Http\Controllers\AdminController::class, 'portfolio'])->middleware('auth')->middleware('can:isAdmin');

Route::post('/imuzaffariadmin/portfolio', [\App\Http\Controllers\AdminController::class, 'portfoliopost'])->middleware('auth')->middleware('can:isAdmin');

Route::get('/imuzaffariadmin/blog', [\App\Http\Controllers\AdminController::class, 'blog'])->middleware('auth')->middleware('can:isAdmin');

Route::post('/imuzaffariadmin/blog', [\App\Http\Controllers\AdminController::class, 'blogpost'])->middleware('auth')->middleware('can:isAdmin');

Route::get('/imuzaffariadmin/timeline', [\App\Http\Controllers\AdminController::class, 'timeline'])->middleware('auth')->middleware('can:isAdmin');

Route::post('/imuzaffariadmin/timeline', [\App\Http\Controllers\AdminController::class, 'timelinepost'])->middleware('auth')->middleware('can:isAdmin');

Route::post('/imuzaffariadmin/action/myimg', [\App\Http\Controllers\AdminController::class, 'deletemyimg'])->middleware('auth')->middleware('can:isAdmin');

Route::post('/imuzaffariadmin/action/portfolio', [\App\Http\Controllers\AdminController::class, 'deleteportfolio'])->middleware('auth')->middleware('can:isAdmin');

Route::post('/imuzaffariadmin/action/blog', [\App\Http\Controllers\AdminController::class, 'deleteblog'])->middleware('auth')->middleware('can:isAdmin');

Route::post('/imuzaffariadmin/action/timeline', [\App\Http\Controllers\AdminController::class, 'deletetimeline'])->middleware('auth')->middleware('can:isAdmin');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
