<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SiteController;
use App\Http\Controllers\ContaController;
use App\Http\Controllers\FreteController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\CaminhoneiroController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RelatorioController;

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

// Site Rotas.
Route::get('/', [SiteController::class, 'index'])->name('home');

Route::get('/institucional', [SiteController::class, 'institucional'])->name('institucional');
Route::get('/institucional/sobre-nos', [SiteController::class, 'sobre'])->name('institucional.sobre');

    // Usuário Conta.
Route::get('/minha-conta/cadastro-caminhoneiro', [ContaController::class, 'cadastroCaminhoneiro'])->name('user.cadastroCaminhoneiro')->middleware('user');
Route::post('/minha-conta/cadastro-caminhoneiro/enviar', [CaminhoneiroController::class, 'storeFromUser'])->name('user.enviarCadastroCam')->middleware('user');

    // Caminhoneiro Conta.
Route::get('/minha-conta', [ContaController::class, 'minhaConta'])->name('site.minhaconta')->middleware('auth');
Route::get('/minha-conta/fretes', [ContaController::class, 'fretesPendentes'])->name('caminhoneiro.fretes.pendentes')->middleware('caminhoneiro');
Route::get('/minha-conta/historico', [ContaController::class, 'fretesHistorico'])->name('caminhoneiro.fretes.historico')->middleware('caminhoneiro');
Route::get('/minha-conta/sair', [ContaController::class, 'sairCaminhoneiro'])->name('caminhoneiro.sair')->middleware('caminhoneiro');
// ~~~~~~~~

// Login Rotas.
Route::get('/entrar', [LoginController::class, 'index'])->name('login.entrar')->middleware('guest');
Route::get('/cadastrar-se', [LoginController::class, 'create'])->name('login.cadastro')->middleware('guest');
Route::get('/sair', [LoginController::class, 'logout'])->name('login.logout')->middleware('auth');
Route::post('/auth', [LoginController::class, 'auth'])->name('login.auth');
Route::post('/auth/create', [LoginController::class, 'store'])->name('login.create');
// ~~~~~~~~


// Admin Rotas.
Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard')->middleware('admin');

    // Fretes Admin.
Route::get('/admin/fretes', [AdminController::class, 'fretes'])->name('admin.fretes.index')->middleware('admin');
Route::post('/admin/fretes/store', [FreteController::class, 'store'])->name('admin.fretes.store')->middleware('admin');
Route::get('/admin/fretes/criar', [FreteController::class, 'create'])->name('admin.fretes.create')->middleware('admin');
Route::get('/admin/fretes/editar/{id}', [FreteController::class, 'edit'])->name('admin.fretes.edit')->middleware('admin');
Route::get('/admin/fretes/detalhes/{id}', [FreteController::class, 'detalhes'])->name('admin.fretes.detalhes')->middleware('admin');
Route::put('/admin/fretes/atualizar/{id}', [FreteController::class, 'update'])->name('admin.fretes.update')->middleware('admin');
Route::get('/admin/fretes/deletar/{id}', [FreteController::class, 'destroy'])->name('admin.fretes.destroy')->middleware('admin');

Route::post('/admin/fretes/detalhes/{id}/aprovar', [FreteController::class, 'aprovarFrete'])->name('admin.fretes.detalhes.aprovar')->middleware('admin');
Route::post('/admin/fretes/detalhes/{id}/pendente', [FreteController::class, 'definirPendente'])->name('admin.fretes.detalhes.pendente')->middleware('admin');
Route::post('/admin/fretes/detalhes/{id}/cancelar', [FreteController::class, 'cancelarFrete'])->name('admin.fretes.detalhes.cancelar')->middleware('admin');
Route::post('/admin/fretes/detalhes/{id}/concluir', [FreteController::class, 'freteConcluido'])->name('admin.fretes.detalhes.concluir')->middleware('admin');
Route::post('/admin/fretes/detalhes/atribuir/{freteId}/{id}', [FreteController::class, 'atribuirFreteCaminhoneiro'])->name('admin.fretes.detalhes.atribuir')->middleware('admin');
Route::post('/admin/fretes/detalhes/relatorio/{id}', [RelatorioController::class, 'relatorioDetalhes'])->name('admin.fretes.detalhes.relatorio')->middleware('admin');

    // Usuários Admin.
Route::get('/admin/usuarios', [AdminController::class, 'usuarios'])->name('admin.usuarios.index')->middleware('admin');
Route::get('/admin/usuarios/criar', [UserController::class, 'create'])->name('admin.usuarios.create')->middleware('admin');
Route::post('/admin/usuarios/store', [UserController::class, 'store'])->name('admin.usuarios.store')->middleware('admin');

    // Caminhoneiros Admin.
Route::get('/admin/caminhoneiros', [AdminController::class, 'caminhoneiros'])->name('admin.caminhoneiros.index')->middleware('admin');
Route::get('/admin/caminhoneiros/criar', [CaminhoneiroController::class, 'create'])->name('admin.caminhoneiros.create')->middleware('admin');
Route::post('/admin/caminhoneiros/cadastrar', [CaminhoneiroController::class, 'store'])->name('admin.caminhoneiros.store')->middleware('admin');
Route::get('/admin/caminhoneiros/editar/{slug}', [CaminhoneiroController::class, 'edit'])->name('admin.caminhoneiros.edit')->middleware('admin');
Route::put('/admin/caminhoneiros/atualizar/{id}', [CaminhoneiroController::class, 'update'])->name('admin.caminhoneiros.update')->middleware('admin');
Route::get('/admin/caminhoneiros/deletar/{id}', [CaminhoneiroController::class, 'destroy'])->name('admin.caminhoneiros.destroy')->middleware('admin');

    // Empresas Admin.
Route::get('/admin/empresas', [AdminController::class, 'empresas'])->name('admin.empresas.index')->middleware('admin');
Route::get('/admin/empresas/criar', [EmpresaController::class, 'create'])->name('admin.empresas.create')->middleware('admin');
Route::post('/admin/empresas/registrar', [EmpresaController::class, 'store'])->name('admin.empresas.store')->middleware('admin');
Route::get('/admin/empresas/editar/{slug}', [EmpresaController::class, 'edit'])->name('admin.empresas.edit')->middleware('admin');
Route::put('/admin/empresas/atualizar/{id}', [EmpresaController::class, 'update'])->name('admin.empresas.update')->middleware('admin');
Route::get('/admin/empresas/deletar/{id}', [EmpresaController::class, 'destroy'])->name('admin.empresas.destroy')->middleware('admin');

    // Relatórios
Route::get('/admin/relatorios', [RelatorioController::class, 'index'])->name('admin.relatorios')->middleware('admin');
Route::post('/admin/relatorios/gerar', [RelatorioController::class, 'gerarRelatorio'])->name('admin.relatorios.gerar')->middleware('admin');
// ~~~~~~~~


// Frete Rotas .
Route::get('/fretes', [FreteController::class, 'index'])->name('fretes.index');
Route::post('/fretes/store', [FreteController::class, 'store'])->name('fretes.store');
Route::get('/fretes/{id}', [FreteController::class, 'show'])->name('fretes.show');
Route::get('/fretes/candidatar/{id}', [FreteController::class, 'candidatar'])->name('fretes.candidatar')->middleware('caminhoneiro');

    //Empresa CRUD.
Route::get('/fretes/{id}/concluido', [FreteController::class, 'freteConcluido'])->name('fretes.concluido')->middleware('empresa');
Route::get('/minha-empresa/fretes/criar', [FreteController::class, 'create'])->name('empresa.frete.create')->middleware('empresa');
Route::post('/minha-empresa/fretes/store', [FreteController::class, 'store'])->name('empresa.frete.store')->middleware('empresa');
Route::get('/minha-empresa/fretes/{id}/editar', [FreteController::class, 'edit'])->name('empresa.frete.edit')->middleware('empresa');
Route::post('/minha-empresa/fretes/{id}/update', [FreteController::class, 'update'])->name('empresa.frete.update')->middleware('empresa');
Route::get('/minha-empresa/fretes/{id}/deletar', [FreteController::class, 'destroy'])->name('empresa.frete.destroy')->middleware('empresa');
// ~~~~~~~~


// Caminhoneiro Rotas.
Route::get('/caminhoneiros', [CaminhoneiroController::class, 'lista'])->name('caminhoneiros.lista');
Route::get('/caminhoneiros/{slug}', [CaminhoneiroController::class, 'show'])->name('caminhoneiros.show');
// ~~~~~~~~


// Empresa Rotas.
Route::get('/empresas', [EmpresaController::class, 'lista'])->name('empresas.lista');
Route::get('/empresas/{slug}', [EmpresaController::class, 'show'])->name('empresas.show');

Route::get('/minha-empresa', [EmpresaController::class, 'index'])->name('minhaempresa.index')->middleware('empresa');
Route::get('/minha-empresa/fretes', [EmpresaController::class, 'contaFretes'])->name('minhaempresa.fretes')->middleware('empresa');
Route::get('/minha-empresa/historico', [EmpresaController::class, 'contaHistorico'])->name('minhaempresa.historico')->middleware('empresa');
Route::get('/minha-empresa/configuracoes', [EmpresaController::class, 'contaConfig'])->name('minhaempresa.config')->middleware('empresa');
Route::get('/minha-empresa/sair', [EmpresaController::class, 'contaSair'])->name('minhaempresa.sair')->middleware('empresa');
// ~~~~~~~~

// Assinatura Rotas.
Route::get('/assinatura/prata', [SubscribeController::class, 'prata'])->name('assinatura')->middleware('auth');
Route::get('/assinatura/ouro', [SubscribeController::class, 'ouro'])->name('assinatura')->middleware('auth');
Route::get('/assinatura/diamante', [SubscribeController::class, 'diamante'])->name('assinatura')->middleware('auth');

// ~~~~~~~~
