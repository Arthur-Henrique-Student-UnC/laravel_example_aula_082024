<?php

use Illuminate\Support\Facades\Route;
/*
        /* 'diretorio', função de callback 
Route::get('/', function () {
    echo 'Hello World!';
});

Route::get('/about-us', function(){
    echo 'Sobre nós!';
});
/* objeto::método ('diretorio', 'string com controller')
Route::get('/testando', [\App\Http\Controllers\exemplo::class, 'testando']);

Route::get('/blade', [\App\Http\Controllers\exemplo::class, 'showBlade']);

*/

Route::get('/', [\App\Http\Controllers\SiteController::class, 'home'])->name('site.index');
Route::get('/sobre', [\App\Http\Controllers\SiteController::class, 'sobre']);
Route::get('/contato', [\App\Http\Controllers\SiteController::class, 'contato']);

//objeto route::metodo prefixo ('nome do agrupamento', metodo group função de callback)
Route::prefix('admin')->group(function(){
    Route::get('/login', [\App\Http\Controllers\SiteController::class, 'login']);
    Route::get('/admin', [\App\Http\Controllers\SiteController::class, 'admin']);
});

Route::get('/teste/{p1}/{p2}', [App\Http\Controllers\parametros::class, 'passandoParametros']);

