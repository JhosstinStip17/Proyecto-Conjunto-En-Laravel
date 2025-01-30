<?php



use App\Http\Controllers\SancionesController;
use App\Http\Controllers\ApartamentoController;
use App\Http\Controllers\ConjuntoController;
use App\Http\Controllers\ParqueaderoController;
use App\Http\Controllers\TorreController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

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

// RUTAS DEL CRUD DE CONJUNTOS
Route::get('conjuntos', [ConjuntoController::class, 'index'])->name('conjunto.index');
Route::get('conjuntos/create', [ConjuntoController::class,'create'])->name('conjunto.create');
Route::get('conjuntos/{conjunto}/edit', [ConjuntoController::class, 'edit'])->name('conjunto.edit');
Route::post('conjuntos', [ConjuntoController::class, 'store'])->name('conjunto.store');
Route::put('conjunto/{conjunto}', [ConjuntoController::class,'update'])->name('conjunto.update');
Route::get('conjunto/{conjunto}/delete', [ConjuntoController::class, 'destroy'])->name('conjunto.delete');

// RUTAS DEL CRUD DE TORRES
Route::get('torres', [TorreController::class, 'index'])->name('torre.index');
Route::get('torres/create', [TorreController::class,'create'])->name('torre.create');
Route::get('torres/{torre}/edit', [TorreController::class, 'edit'])->name('torre.edit');
Route::post('torres', [TorreController::class, 'store'])->name(name: 'torre.store');
Route::put('torre/{torre}', [TorreController::class,'update'])->name('torre.update');
Route::get('torre/{torre}/delete', [TorreController::class, 'destroy'])->name('torre.delete');

// RUTAS DEL CRUD DE APARTAMENTO
Route::get('apartamento', [ApartamentoController::class,'index'])->name('apartamento.index');
Route::get('apartamento/create', [ApartamentoController::class,'create'])->name('apartamento.create');
Route::get('apartamento/{apartamento}/edit', [ApartamentoController::class, 'edit'])->name('apartamento.edit');
Route::post('apartamento', [ApartamentoController::class, 'store'])->name('apartamento.store');
Route::put('apartamento/{apartamento}', [ApartamentoController::class,'update'])->name('apartamento.update');
Route::get('apartamento/{apartamento}/delete', [ApartamentoController::class, 'destroy'])->name('apartamento.delete');

// RUTAS DEL CRUD DE USUARIO
Route::get('usuario', [UsuarioController::class,'index'])->name('usuario.index');
Route::get('usuario/create', [UsuarioController::class,'create'])->name('usuario.create');
Route::get('usuario/{usuario}/edit', [UsuarioController::class, 'edit'])->name('usuario.edit');
Route::post('usuario', [UsuarioController::class, 'store'])->name('usuario.store');
Route::put('usuario/{usuario}', [UsuarioController::class,'update'])->name('usuario.update');
Route::get('usuario/{usuario}/delete', [UsuarioController::class, 'destroy'])->name('usuario.delete');

// RUTAS DEL CRUD DE SANCION '

Route::get('sancion', [SancionesController::class,'index'])->name('sancion.index');
Route::get('sancion/create', [SancionesController::class,'create'])->name('sancion.create');
Route::get('sancion/{sancion}/edit', [SancionesController::class, 'edit'])->name('sancion.edit');
Route::post('sancion', [SancionesController::class, 'store'])->name('sancion.store');
Route::put('sancion/{sancion}', [SancionesController::class,'update'])->name('sancion.update');
Route::get('sancion/{sancion}/delete', [SancionesController::class, 'destroy'])->name('sancion.delete');

//RUTAS DE PARQUEADERO

Route::get('parqueadero', [ParqueaderoController::class, 'index'])->name('parqueadero.index');
Route::get('parqueadero/create' , [ParqueaderoController::class,'create'])->name('parqueadero.create');
Route::post('parqueadero', [ParqueaderoController::class,'store'])->name('parqueadero.store');

