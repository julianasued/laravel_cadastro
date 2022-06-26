<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoaController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */


Route::resource('pessoas', PessoaController::class);
ROute::get('/changeStatus', [PessoaController::class, 'changePessoaStatus'])->name('changeStatus');
ROute::get('/changePagamentos', [PessoaController::class, 'changePessoaPagamentos'])->name('changePagamentos');