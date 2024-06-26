<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aqui é onde você pode registrar rotas web para sua aplicação. Essas
| rotas são carregadas pelo RouteServiceProvider e todas elas serão
| atribuídas ao grupo de middleware "web". Faça algo incrível!
|
*/
use App\Http\Controllers\EventController;
// Rota para a página inicial
Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);

// Rota para a página de contato
Route::get('/contact', function () {
    return view('contact');
});

// Rota para a página de produtos
Route::get('/produtos', function () {
    $busca = request('search');
    return view('products', ['busca' => $busca]);
});

// Rota para a página de um produto específico com base no ID
Route::get('/produtos_teste/{id?}', function ($id = null) {
    // Retorno da view 'product' com a variável 'id' passada para a view
    return view('product', ['id' => $id]);
});
