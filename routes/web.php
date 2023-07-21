<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardController;

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

Route::get('/card', [CardController::class, 'index'])->name('card.index');
Route::get('/card/create', [CardController::class, 'create'])->name('card.create');
Route::post('/card', [CardController::class, 'storecard'])->name('card.storecard');
Route::get('/card/{card}/edit', [CardController::class, 'editcard'])->name('card.editcard');
Route::put('/card/{card}/update', [CardController::class, 'updatecard'])->name('card.updatecard');
Route::delete('/card/{card}/destroy', [CardController::class, 'destroycard'])->name('card.destroycard');



