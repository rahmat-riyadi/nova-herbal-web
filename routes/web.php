<?php

use App\Http\Controllers\PatientsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebController;
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


Route::get('/', [WebController::class, 'index'])->name('index');


Route::group(['prefix' => 'admin'], function(){

    Route::group(['prefix' => 'admin'], function(){
    
        Route::get('/', [UserController::class, 'index'])->name('admin');
        Route::get('/create', [UserController::class, 'create']);
        Route::get('/show/{user}', [UserController::class, 'show']);
        Route::post('/', [UserController::class, 'store'])->name('storeAdmin');
    
    });
    
    Route::group(['prefix' => 'patient'], function(){
    
        Route::get('/', [PatientsController::class, 'index'])->name('patient');
        Route::get('/create', [PatientsController::class, 'create'])->name('createPatient');
        Route::get('/show/{patients}', [PatientsController::class, 'show']);
        Route::post('/', [PatientsController::class, 'store'])->name('storeAdmin');
    
    });
});

