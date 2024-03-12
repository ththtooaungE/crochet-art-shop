<?php

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\ItemController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/item-export', [ItemController::class, 'export'])->name('item-export');
Route::get('/artist-export', [ArtistController::class, 'export'])->name('artist-export');

Route::post('/item-import', [ItemController::class, 'import'])->name('item-import');
Route::post('/artist-import', [ArtistController::class, 'import'])->name('artist-import');
