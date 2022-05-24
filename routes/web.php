<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DepotprojetController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\RedacteurController;
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

Route::get('inscriptionclient',[ClientController::class,'create']);
Route::post('inscriptionclient',[ClientController::class,'store']);

Route::get('inscriptionredacteur',[RedacteurController::class,'create']);
Route::post('inscriptionredacteur',[RedacteurController::class,'store']);


Route::get('deposerprojet',[DepotprojetController::class,'create']);
Route::post('deposerprojet',[DepotprojetController::class,'store']);

Route::get('login',[ProjetController::class,'create']);
Route::get('showprojet',[ProjetController::class,'show']);

Route::get('gereprofile',[AccountController::class,'show']);

