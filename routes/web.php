<?php

use App\Http\Controllers\BebidasAlcholicasController;
use App\Http\Controllers\BebidasController;
use App\Http\Controllers\BolsaController;
use App\Http\Controllers\CombosController;
use App\Http\Controllers\ComidasRapidasController;
use App\Http\Controllers\HamburguesasController;
use App\Http\Controllers\HeladeriaController;
use App\Http\Controllers\ListaPedidosController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\EditarProductoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RolesController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/auth', function () {
    return view('bebidas_alcoholicas');
});

require __DIR__.'/auth.php';

/* crear rutas desde aqui */
Route::get('bebidas-alcoholicas', [BebidasAlcholicasController::class, 'index']);
Route::get('hamburguesas', [HamburguesasController::class, 'index']);
Route::get('heladeria', [HeladeriaController::class, 'index']);
Route::get('comidas-rapidas', [ComidasRapidasController::class, 'index']);
Route::get('bebidas', [BebidasController::class, 'index']);
Route::get('combos', [CombosController::class, 'index']);
Route::get('bolsa', [BolsaController::class, 'index']);
Route::get('lista-pedidos', [ListaPedidosController::class, 'index']);
Route::get('pedidos', [PedidosController::class, 'index']);
Route::get('editar-productos', [EditarProductoController::class, 'index']);
Route::get('roles', [RolesController::class, 'index']);
Route::get('admin', [AdministradorController::class, 'index']);


Route::post('roles', [RolesController::class, 'store'])->name('roles.store');
Route::post('editar-productos', [EditarProductoController::class, 'store']) ->name('editar-productos.store');



