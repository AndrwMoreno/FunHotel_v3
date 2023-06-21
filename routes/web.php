<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; // Import Auth class
use App\Http\Controllers\ClienteController; // Import controller class
use App\Http\Controllers\ServicioController; // Import controller class
use App\Http\Controllers\CatalogoController; // Import controller class
use App\Http\Controllers\VentaControlador; // Import controller class
use App\Http\Controllers\CategoriaController; // Import controller class
use App\Http\Controllers\HabitacionController; // Import controller class
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\CheckinController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('/clientes', ClienteController::class);
    Route::resource('/servicios', ServicioController::class);
    Route::resource('/catalogos', CatalogoController::class);
    Route::resource('/ventas', VentaControlador::class);
    Route::resource('/categorias', CategoriaController::class);
    Route::resource('/habitaciones', HabitacionController::class);
    Route::resource('/roles', RoleController::class);
    Route::resource('/users', UserController::class);
    Route::resource('/reservas', ReservaController::class);
    Route::resource('/products', ProductController::class);
    Route::resource('/groups', GroupController::class);
    Route::resource('/checkins', CheckinController::class);
    
    // show usuario
    Route::get('/show-user/{id}', [UserController::class, 'show'])->name('users.show');
    
    // Ruta para añadir usuarios a un grupo
    Route::post('/groups/{group}/add-user', [GroupController::class, 'addUser'])->name('groups.addUser');
    // Ruta para eliminar usuarios de un grupo
    Route::delete('groups/{group}/users/{user}', [GroupController::class, 'removeUser'])->name('groups.users.remove');
});