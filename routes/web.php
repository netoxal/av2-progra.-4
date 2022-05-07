<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroController;
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


                                        /*rotas para criar URLS DO SITE*/

Route::get('/', function () {
    return view('index');
});




/* Grupo de rotas "cadastro" */

Route::prefix('/cadastro')->group(function () {

    /* rota da página CADASTRO levanto para /cadastro */
    Route::get('/', function () {
        return view('/cadastro.cadastro');
    });

     /* rota da página CADASTRO levanto para /cadastro */
     Route::get('/login', function () {
        return view('/cadastro.login');
    });

    /* rota da página CADASTRO levanto para /cadastro */

    Route::post('/usuario', [CadastroController::class, 'listar']);
  
});

/*-------------------------------------------------------------------------------*/




/* Grupo de rotas "atendimentos" */

Route::prefix('/atendimentos')->group(function () {
   
    /* rota da página ATENDIMENTOS levanto para /geral */
    Route::get('/', function () {
        return view('/atendimentos.geral');
    });

    /* rota da página BANHOETOSA levanto para /atendimentos/banhoetosa */
    Route::get('/banhoetosa', function () {
        return view('/atendimentos.banhoetosa');
    });

});

/*-------------------------------------------------------------------------------*/


