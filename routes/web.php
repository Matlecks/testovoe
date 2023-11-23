<?php

use App\Http\Controllers\TransactionController;
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


Route::get('/', [TransactionController::class, 'index'])->name('index'); // общая страница пользователей

Route::post('/add_money_{id}', [TransactionController::class, 'add_money'])->name('add_money'); // добавляет балансу n сумму

