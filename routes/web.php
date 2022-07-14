<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\RelatoriosController;

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

// rota para inclusão do formulario modal
Route::get('/cliente',[ClientesController::class,'create'])->name('cliente.create');
Route::post('/cliente',[ ClientesController::class,'store'])->name('cliente.store');
Route::get('/cliente/{id}',[ ClientesController::class,'show'])->name('cliente.show');
Route::delete('/cliente/{id}',[ ClientesController::class,'destroy'])->name('cliente.destroy');

//retorna o caminho do relatorio
Route::get('/clientes', [RelatoriosController::class, 'clientes']);
Route::get('/sistema', [RelatoriosController::class, 'sistema']);
Route::get('/saldo', [RelatoriosController::class, 'saldo']);
Route::get('/vendas', [RelatoriosController::class, 'vendas']);
