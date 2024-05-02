<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\EmpController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\RelatoriosController;
use App\Http\Controllers\SistemasController;

// chama a tela de login inicialmente com a classe de authetificação programada
Route::get('/login', function () {
    return view('auth.login');
});


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('logout', [LoginController::class, 'logout'])->name('logout');

//rotas de registro
Route::post('/register',[RegisterController::class,'create'])->name('register');
Route::post('/logar',[RegisterController::class,'logar'])->name('logar');
//inicialmente chama a index para renderizar a pagina
Route::get('/cadastro', [ClientesController::class, 'index'])->name('cliente.index');
Route::get('/cadastro/search',[ ClientesController::class,'search'])->name('cadastro.search');


// rota para inclusão do formulario modal
Route::get('/cliente',[ClientesController::class,'create'])->name('cliente.create');
Route::get('/cliente/{id}',[ ClientesController::class,'show'])->name('cliente.show');
Route::get('/cliente/{id}/edit',[ ClientesController::class,'edit'])->name('cliente.edit');
Route::post('/cliente',[ ClientesController::class,'store'])->name('cliente.store');
Route::post('/cliente/{id}',[ ClientesController::class,'update'])->name('cliente.update');
Route::delete('/cliente/{id}',[ ClientesController::class,'destroy'])->name('cliente.destroy');



// rota de acesso as funionalidades de sistemas

Route::get('/sistemas', [SistemasController::class, 'index'])->name('sistema.index');
Route::post('/sistema/search',[SistemasController::class,'search'])->name('sistema.search');
Route::get('/sistema',[SistemasController::class,'create'])->name('sistema.create');
Route::get('/sistema/{id}',[ SistemasController::class,'show'])->name('sistema.show');
Route::get('/sistemas/{id}/edit',[ SistemasController::class,'edit'])->name('sistema.edit');
Route::post('/sistema',[SistemasController::class,'store'])->name('sistema.store');
Route::post('/sistema/{id}',[ SistemasController::class,'update'])->name('sistema.update');
Route::delete('/sistemas/{id}',[SistemasController::class,'destroy'])->name('sistema.destroy');





//retorna o caminho do relatorio
Route::get('/clientes', [RelatoriosController::class, 'clientes']);
Route::get('/saldo', [RelatoriosController::class, 'saldo']);
Route::get('/vendas', [RelatoriosController::class, 'vendas']);


// actions
Route::get('/mpf', [EmpController::class, 'gerarPdf'])->name('mpf.gerarPdf');
