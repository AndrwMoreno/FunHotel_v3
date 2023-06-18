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

    // crear usuario
    Route::get('/create-user', [UserController::class, 'create'])->name('users.create');
    // show usuario
    Route::get('/show-user/{id}', [UserController::class, 'show'])->name('users.show');
    // edit usuario
    // Route::get('/edit-user/{id}', [UserController::class, 'edit'])->name('users.edit');
    
    // create rol
    Route::get('/create-rol', [RoleController::class, 'create'])->name('roles.create');
    // show rol
    Route::get('/show-rol/{id}', [RoleController::class, 'show'])->name('roles.show');
    // edit rol
    Route::get('/edit-rol/{id}', [RoleController::class, 'edit'])->name('roles.edit');
    
    
    Route::resource('/groups', GroupController::class);
    // Ruta para añadir usuarios a un grupo
    Route::post('/groups/{group}/add-user', [GroupController::class, 'addUser'])->name('groups.addUser');
    // Ruta para eliminar usuarios de un grupo
    Route::delete('groups/{group}/users/{user}', [GroupController::class, 'removeUser'])->name('groups.users.remove');
});