<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [\App\Http\Controllers\SiteController::class,'index']);
Route::get('/creditorural', [\App\Http\Controllers\SiteController::class,'creditorural']);
Route::get('/topografia', [\App\Http\Controllers\SiteController::class,'topografia']);
Route::get('/ambiental', [\App\Http\Controllers\SiteController::class,'ambiental']);
Route::get('/custeioagricola', [\App\Http\Controllers\SiteController::class,'custeioagricola']);
Route::get('/custeiopecuario', [\App\Http\Controllers\SiteController::class,'custeiopecuario']);
Route::get('/twitter', [\App\Http\Controllers\SiteController::class,'twitter']);
//Painel
// Route::get('/painel', [\App\Http\Controllers\PainelController::class,'index']);
// Route::get('/painelsecundario', [\App\Http\Controllers\PainelController::class,'secundario']);
// Route::post('/upload', [\App\Http\Controllers\PainelController::class,'upload']);
// Route::post('/uploadsecundario', [\App\Http\Controllers\PainelController::class,'uploadsecundario']);
// Route::get('/apagarsecundario/{id}', [\App\Http\Controllers\PainelController::class,'apagarsecundario']);






Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
