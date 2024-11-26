<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Aunth;


//Route::get('/', function () {
  //  return view('welcome');
//});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/', function () { return view('admin'); });

Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index')->middleware('auth');
Route::get('/admin/usuarios', [App\Http\Controllers\UsuarioController::class, 'index'])->name('usuarios.index')->middleware('auth','can:usuarios.index');
Route::get('/admin/usuarios/create', [App\Http\Controllers\UsuarioController::class, 'create'])->name('usuarios.create')->middleware('auth','can:usuarios.create');
Route::post('/admin/usuarios', [App\Http\Controllers\UsuarioController::class, 'store'])->name('usuarios.store')->middleware('auth','can:usuarios.store');
Route::get('/admin/usuarios/{id}', [App\Http\Controllers\UsuarioController::class, 'show'])->name('usuarios.show')->middleware('auth','can:usuarios.show');
Route::get('/admin/usuarios/{id}/edit', [App\Http\Controllers\UsuarioController::class, 'edit'])->name('usuarios.edit')->middleware('auth','can:usuarios.edit');
Route::put('/admin/usuarios/{id}', [App\Http\Controllers\UsuarioController::class, 'update'])->name('usuarios.update')->middleware('auth','can:usuarios.update');
Route::delete('/admin/usuarios/{id}', [App\Http\Controllers\UsuarioController::class, 'destroy'])->name('usuarios.destroy')->middleware('auth','can:usuarios.destroy');
Route::get('/graficas', [App\Http\Controllers\UsuarioController::class, 'graficas'])->name('usuarios.graficas')->middleware('auth','can:usuarios.graficas');


//rutas  menu cliente
Route::get('admin/menu_cliente/index', [App\Http\Controllers\clientectrl::class, 'index'])->name('menu_cliente.index')->middleware('auth');
Route::get('/transfer', [App\Http\Controllers\clientectrl::class, 'transferencias'])->name('transferencia');
Route::get('/balances', [App\Http\Controllers\clientectrl::class, 'showBalances'])->name('balances');
Route::get('/retiros', [App\Http\Controllers\clientectrl::class, 'retiros'])->name('retiros');
Route::get('/statement', [App\Http\Controllers\clientectrl::class, 'extracto'])->name('extracto');
Route::get('/settings', [App\Http\Controllers\clientectrl::class,'settings'])->name('settings');

// rutas tranferencia
Route::get('/transfer-screen', [App\Http\Controllers\clientectrl::class, 'show'])->name('transfer-screen');
Route::post('/process-transfer', [App\Http\Controllers\clientectrl::class,'process'])->name('processTransfer');
Route::get('/receipt', [App\Http\Controllers\clientectrl::class,'receipt'])->name('receipt');

//rutas de estado de cuenta


