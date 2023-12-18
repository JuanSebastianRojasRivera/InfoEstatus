<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\TaskController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\ImportControllerTcc;
use App\Http\Controllers\ModalController;




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



Route::view('/', 'auth.login');



Auth::routes();

Route::middleware(['auth'])->group(function () 
{

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('/tasks', TaskController::class); 
      
    Route::get('import', [ImportController::class, 'index']);
    Route::post('import/importar', [ImportController::class, 'importar']);

    Route::get('importtcc', [ImportControllerTcc::class, 'index']);
    Route::post('importtcc/importartcc', [ImportControllerTcc::class, 'importartcc']);
 
    Route::get('export/exportar', [ImportController::class, 'exportar']);
    Route::get('importar', [ModalController::class, 'show']);
 
 
    // Ejemplo de definición de ruta que acepta POST y DELETE en Laravel
Route::match(['post', 'delete'], 'crosing/actualizarTabla',[ImportController::class, 'actualizarTabla']);


});
