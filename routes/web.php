<?php


use Illuminate\Support\Facades\Route;

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

Route::Fallback(function () {
    return 'Maaf tidak ada halaman yang anda maksud';
});

Route::get('/', function () {
    return view('app.dashboard');
})->name('Dashboard');

Route::get('/Map', function () {
    return view('Map.map');
})->name('Map');

Route::get('/Tables', function () {
    return view('Tables.FloodArea');
})->name('Tables.FloodArea');
