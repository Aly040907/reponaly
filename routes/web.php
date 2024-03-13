<?php

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




Route::get('/alunos', [App\Http\Controllers\AlunoController::class, 'listar']) -> name('alunos.listar');
Route::get('/alunos/{id}', [App\Http\Controllers\AlunoController::class, 'listarID']);

Route::get('novoAluno', [App\Http\Controllers\AlunoController::class, 'criar']);

Route::post('salvarAluno', [App\Http\Controllers\AlunoController::class, 'store']) -> name('alunos.salvar');

Route::post('editarAluno', [App\Http\Controllers\AlunoController::class, 'update']) -> name('alunos.editar');

