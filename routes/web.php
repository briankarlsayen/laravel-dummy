<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\FallbackController;
use Barryvdh\Debugbar\Facades\Debugbar;
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

// Route::get('/', function () {
//     Debugbar::startMesure('henlo all!', 'bye all');
//     return view('welcome');
// });


Route::prefix('blog')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('blog.index');
    Route::get('/{id}', [BlogController::class, 'show'])->name('blog.show');
    Route::post('/', [BlogController::class, 'store'])->name('blog.store');
    Route::patch('/{id}', [BlogController::class, 'update'])->name('blog.update');
    Route::delete('/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');
});

Route::fallback(FallbackController::class);
