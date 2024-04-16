<?php


use App\Http\Controllers\BebidasAlcholicasController;
use App\Http\Controllers\BolsaController;
use App\Http\Controllers\HamburguesasController;
use App\Http\Controllers\HeladeriaController;
use App\Http\Controllers\ListaPedidosController;
use App\Http\Controllers\ProfileController;
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
Route::get('bolsa', [BolsaController::class, 'index']);
Route::get('lista-pedidos', [ListaPedidosController::class, 'index']);



