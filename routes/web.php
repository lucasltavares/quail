<?php

use App\Http\Controllers\QuailController;
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

Route::get('/', [QuailController::class, 'index']);
Route::get('/create/quail', [QuailController::class, 'create']);
Route::post('/store/quail', [QuailController::class, 'store']);
