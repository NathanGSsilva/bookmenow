<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;


Route::get('/',[SiteController::class, "home"])->name('site.home');
Route::get('/sobre-nos',[SiteController::class, "sobreNos"])->name('site.sobreNos');
Route::get('/contato',[SiteController::class, "contato"])->name('site.contato');


// Rotas da seção Usuarios
Route::get('/admin/usuarios',[UsuarioController::class, "index"])->name('usuario.index');
Route::get('/admin/usuarios/cadastrar', [UsuarioController::class, "create"])->name('usuario.create');
Route::post('/admin/usuarios/cadastrar/salvar', [UsuarioController::class, "store"])->name('usuario.store');
Route::get('/admin/usuarios/editar/{id}', [UsuarioController::class, "edit"])->name('usuario.edit');
Route::get('/admin/usuarios/visualizar/{id}', [UsuarioController::class, "show"])->name('usuario.show');
Route::put('/admin/usuarios/atualizar/{id}',[UsuarioController::class, "update"])->name('usuario.update');
Route::delete('/admin/usuarios/deletar/{id}',[UsuarioController::class, "destroy"])->name('usuario.destroy');


// Rotas da seção Categorias
 
Route::get('/admin/categorias',[CategoriaController::class, "index"])->name('categoria.index');
Route::get('/admin/categorias/cadastrar', [CategoriaController::class, "create"])->name('categoria.create');
Route::post('/admin/categorias/cadastrar/salvar', [CategoriaController::class, "store"])->name('categoria.store');
Route::get('/admin/categorias/visualizar/{id}', [CategoriaController::class, "show"])->name('categoria.show');
Route::get('/admin/categorias/editar/{id}', [CategoriaController::class, "edit"])->name('categoria.edit');
Route::put('/admin/categorias/atualizar/{id}',[CategoriaController::class, "update"])->name('categoria.update');
Route::delete('/admin/categorias/deletar/{id}', [CategoriaController::class,"destroy"]) ->name("categoria.destroy");

// Rotas da seção Serviços

Route::get('/admin/servicos',[ServicoController::class, "index"])->name('servico.index');
Route::get('/admin/servicos/cadastrar', [ServicoController::class, "create"])->name('servico.create');
Route::post('/admin/servicos/cadastrar/salvar', [ServicoController::class, "store"])->name('servico.store');
Route::get('/admin/servicos/visualizar/{id}', [ServicoController::class, "show"])->name('servico.show');
Route::get('/admin/servicos/editar/{id}', [ServicoController::class, "edit"])->name('servico.edit');
Route::put('/admin/servicos/atualizar/{id}',[ServicoController::class, "update"])->name('servico.update');
Route::delete('/admin/servicos/deletar/{id}', [ServicoController::class,"destroy"]) ->name("servico.destroy");
 
Route::get('/admin/dashboard',[DashboardController::class, "dashboard"])->name('dashboard');
