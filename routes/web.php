<?php

use App\Http\Controllers\LoginController;
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



Route::get('/', [WebController::class, 'index']);
Route::get('/registration', [WebController::class, 'regis']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/admin/login', [LoginController::class, 'login']);

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    
    Route::get('/', [WebController::class, 'dashboard'])->name('dashboard');

    Route::get('/logout', [LoginController::class, 'logout']);

    Route::group(['prefix' => 'admin'], function(){
        Route::controller(UserController::class)->group(function(){
            Route::get('/', 'index')->name('admin');
            Route::get('/create', 'create');
            Route::get('/show/{user}','show');
            Route::post('/','store')->name('storeAdmin');
        });
    });
    
    Route::group(['prefix' => 'patient'], function(){
        Route::controller(PatientsController::class)->group(function(){
            Route::get('/', 'index')->name('patient');
            Route::get('/create', 'create')->name('createPatient');
            Route::get('/show/{patients}', 'show');
            Route::post('/', 'store')->name('storePatient');
            Route::post('/delete/{patients}', 'delete');
            
            Route::post('/create/medicine/{patients}', 'createMedicine');
            Route::post('/update/medicine/{patients}/{history}', 'updateMedicine');
            Route::post('/delete/medicine/{patients}/{history}', 'deleteMedicine');

            Route::post('/create/lab-result/{patients}', 'storeLabPhoto');
            Route::post('/update/lab-result/{patients}/{labResults}', 'updateLabPhoto');
            Route::post('/delete/lab-result/{patients}/{labResults}', 'deleteLabPhoto');
            
            Route::post('/create/disease-history/{patients}', 'createDiseaseHistory');
            Route::post('/update/disease-history/{patients}/{disease}', 'updateDiseaseHistory');
            Route::post('/delete/disease-history/{patients}/{disease}', 'deleteDiseaseHistory');

            Route::post('/create/note/{patients}', 'createNote');
            Route::post('/update/note/{patients}/{note}', 'updateNote');
            Route::post('/delete/note/{patients}/{note}', 'deleteNote');

        });
    });
});

