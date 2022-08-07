<?php

use App\Http\Controllers\EmpController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\RelatoriosController;
use App\Http\Controllers\SistemasController;

// chama a tela de login inicialmente com a classe de authetificação programada
Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//inicialmente chama a index para renderizar a pagina
Route::get('/cadastro', [ClientesController::class, 'index'])->name('cliente.index');
Route::get('/cadastro/search',[ ClientesController::class,'search'])->name('cadastro.search');


// rota para inclusão do formulario modal
Route::get('/cliente',[ClientesController::class,'create'])->name('cliente.create');
Route::get('/cliente/{id}',[ ClientesController::class,'show'])->name('cliente.show');
Route::get('/cliente/{id}/edit',[ ClientesController::class,'edit'])->name('cliente.edit');

Route::post('/cliente',[ ClientesController::class,'store'])->name('cliente.store');
Route::put('/cliente/{id}',[ ClientesController::class,'update'])->name('cliente.update');
Route::delete('/cliente/{id}',[ ClientesController::class,'destroy'])->name('cliente.destroy');

//retorna o caminho do relatorio
Route::get('/clientes', [RelatoriosController::class, 'clientes']);
Route::get('/saldo', [RelatoriosController::class, 'saldo']);
Route::get('/vendas', [RelatoriosController::class, 'vendas']);

// rota de acesso as funionalidades de sistemas

Route::get('/sistemas', [SistemasController::class, 'index'])->name('sistema.index');
Route::get('/sistema',[SistemasController::class,'create'])->name('sistema.create');
Route::post('/sistema',[SistemasController::class,'store'])->name('sistema.store');
Route::get('/sistemas/{id}',[SistemasController::class,'destroy'])->name('sistema.destroy');
Route::delete('sistema/{id}',[ SistemasController::class,'destroy'])->name('sistema.destroy');

// actions
Route::get('/mpf', [EmpController::class, 'gerarPdf'])->name('mpf.gerarPdf');
