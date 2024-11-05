<?php

use App\Http\Controllers\Api\{AuthApiController, AuthController, BeritaApiController, KategoriApiController};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route untuk login (tidak perlu middleware auth karena ini untuk autentikasi awal)
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');

// Route dengan middleware auth:sanctum untuk memastikan hanya user yang sudah login yang bisa logout
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);

Route::middleware(['auth:sanctum'])->group(function () {

    Route::group(['prefix' => 'beritas'], function () {
        Route::get('/', [BeritaApiController::class, 'index']);
        Route::get('/{id}', [BeritaApiController::class, 'show']);
        Route::post('/', [BeritaApiController::class, 'store']);
    });

    Route::group(['prefix' => 'kategoris'], function () {
        Route::get('/', [KategoriApiController::class, 'index']);
        Route::get('/store', [KategoriApiController::class, 'testStore']);
        Route::get('/{id}', [KategoriApiController::class, 'show']);
        Route::post('/', [KategoriApiController::class, 'store']);
    });
    // php artisan serve --host=0.0.0.0 --port=8000
});