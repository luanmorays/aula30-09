<?php

use Illuminate\Support\Facades\Route;

// inclusão de arquivos no PHP8
use \App\Http\Controllers\VendasController;
use \App\Http\Controllers\UsuarioController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jumbo', function () {
    return view('site.jumbo');
});

// Route::get('/contato', function () {
//     return view('site.contato');
// });

Route::get('/login/{dia}/{mes}/{ano}', function ($dia, $mes, $ano) {
    return view('site.login', ['dia' => $dia, 'mes' => $mes, 'ano' => $ano]);
});

Route::get('/vendas', [VendasController::class, 'index']);
Route::get('/vendas/relatorio/{mes}/{departamento}', [VendasController::class, 'relatorio']);

// 1º passo: criar a rota
Route::any('/contato', [UsuarioController::class, 'contato']);

// rota para a página de e-commerce
Route::get('/produtos', [VendasController::class, 'produtos']);