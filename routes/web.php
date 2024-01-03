<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\TaskController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\ImportControllerTcc;
use App\Http\Controllers\UploadController;




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
    Route::get('export/exportar', [ImportController::class, 'exportar']);
    Route::get('upload', [UploadController::class,'index'])->name('upload');
    Route::post('upload/infoestatus', [UploadController::class,'importar']);
    Route::post('upload/aldia', [UploadController::class,'aldia']);
    Route::post('upload/ingresar-aldia', [UploadController::class,'ingresarAldia']);
    Route::post('upload/deprisa', [UploadController::class,'deprisa']);
    Route::post('upload/ingresar-deprisa', [UploadController::class,'ingresarDeprisa']);
    Route::post('upload/bluelogistics', [UploadController::class,'bluelogistics']);
    Route::post('upload/ingresar-bluelogistics', [UploadController::class,'ingresarBluelogistics']);
    Route::post('upload/gle', [UploadController::class,'gle']);
    Route::post('upload/ingresar-gle', [UploadController::class,'ingresarGle']);
    Route::post('upload/servientrega', [UploadController::class,'servientrega']);
    Route::post('upload/solistica', [UploadController::class,'solistica']);
    Route::post('upload/ingresar-solistica', [UploadController::class,'ingresarSolistica']);
    Route::post('upload/tcc', [UploadController::class,'tcc']);
    Route::post('upload/ingresar-tcc', [UploadController::class,'ingresarTcc']);
    // Ejemplo de definición de ruta que acepta POST y DELETE en Laravel
    Route::match(['post', 'delete'], 'crosing/actualizarTabla',[ImportController::class, 'actualizarTabla']);


});
