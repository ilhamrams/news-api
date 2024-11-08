<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Artisan;

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
    return view('welcome')->with('status', 'sealamat datang bejir');
});

Route::get('/generate', function () {
    $publicStoragePath = public_path('storage');

    // Cek apakah symbolic link sudah ada
    if (File::exists($publicStoragePath)) {
        // Hapus symbolic link yang sudah ada
        File::delete($publicStoragePath);
    }

    // Buat symbolic link baru
    Artisan::call('storage:link');

    return redirect()->back()->with('status', 'Storage linked successfully!');
});

Route::get('/migrate-fresh-seed', function () {
    // Menjalankan perintah migrate:fresh --seed
    Artisan::call('migrate:fresh --seed');

    return redirect()->back()->with('status', 'Database refreshed and seeded successfully!');
});

Route::get('/migrate', function () {
    // Menjalankan perintah migrate:fresh --seed
    Artisan::call('migrate');

    return redirect()->back()->with('status', 'Database refreshed and seeded successfully!');
});
