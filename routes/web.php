<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;


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

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route 
Route::get('/',[HomeController::class,'index']);

// Route Prefix
Route::prefix('product')->group(function () {
    Route::get('1',[ProductsController::class,'product']);
    
});

//Route Parameter
Route::get('/news/{id}', function ($id) {
    return 'asds';
    
    // Route::get('/news',[NewsController::class,'news']);
});
    
// Route Prefix
Route::prefix('program')->group(function () {
    Route::get('1',[ProgramController::class,'program']);    
});

// Route Public
Route::get('/about',[AboutController::class,'about']);

// Route Resource
Route::get('/contact',[ContactController::class,'index']);
