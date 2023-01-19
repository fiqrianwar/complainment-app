<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ComplainController;
use App\Models\Complainment;
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

Route::get('/', [AuthController::class, 'loginView']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/registration', [AuthController::class, 'registrationView']);
Route::post('/registerUser', [AuthController::class, 'registration']);
Route::post('/loginAuth', [AuthController::class, 'loginAuth']);

    
    Route::get('/dashboard', [ComplainController::class, 'index']);
    Route::get('detail-complain/{id}', [ComplainController::class, 'detailComplain']);
    
    Route::post('submitComplain',[ComplainController::class,'postComplain']);







// Complain
