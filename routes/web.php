<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CatequistaController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::resource('catequistas', CatequistaController::class);

Route::get('/catequistas', [CatequistaController::class, 'index']);

Route::get('/catequistas/create', [CatequistaController::class, 'create']);

Route::post('/catequistas/create', [CatequistaController::class, 'store']);

Route::get('/catequistas/show/{id}', [CatequistaController::class, 'show']);

Route::get('/catequistas/edit/{id}', [CatequistaController::class, 'edit']);

Route::put('/catequistas/edit/{id}', [CatequistaController::class, 'update']);

Route::get('/catequistas/destroy/{id}', [CatequistaController::class, 'destroy']);
