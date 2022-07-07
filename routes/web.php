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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/clients', [App\Http\Controllers\ClientsController::class, 'index'])->name('clients.index');
Route::get('/clients/create', [App\Http\Controllers\ClientsController::class, 'create'])->name('clients.create');
Route::post('/clients/store', [App\Http\Controllers\ClientsController::class, 'store'])->name('clients.store');
Route::get('/clients/edit/{id}', [App\Http\Controllers\ClientsController::class, 'edit'])->name('clients.edit');
Route::put('/clients/update/{id}', [App\Http\Controllers\ClientsController::class, 'update'])->name('clients.update');
Route::delete('/clients/delete/{id}', [App\Http\Controllers\ClientsController::class, 'delete'])->name('clients.delete');


Route::get('/sispro', [App\Http\Controllers\SisproController::class, 'index'])->name('sispro.index');
Route::post('/sispro/token', [App\Http\Controllers\SisproController::class, 'generateToken'])->name('sispro.token');
