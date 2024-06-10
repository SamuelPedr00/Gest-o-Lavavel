<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');

Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class, 'sobrenos'])->name('site.sobrenos');

Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');

Route::get('/login', [\App\Http\Controllers\ContatoController::class, 'contato']);


Route::prefix('/app')->group(function () {
    Route::get('/cliente', [\App\Http\Controllers\ClienteController::class, 'contato']);

    Route::get('/fornecedor', [\App\Http\Controllers\FornecedorController::class, 'contato']);

    Route::get('/produto', [\App\Http\Controllers\ProdutoController::class, 'contato']);
});

Route::get('/teste/{p1}/{p2}', [\App\Http\Controllers\TesteController::class, 'parametro']);

Route::fallback(function(){
    echo "volte ao inicio";
});