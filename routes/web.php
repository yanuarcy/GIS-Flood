<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilterController;

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

Route::get('/MapJatim', function () {
    return view('Map.maps');
})->name('MapJatim');

Route::get('/Tables', function () {
    return view('Tables.FloodArea');
})->name('Tables.FloodArea');

Route::get('/Charts', function() {
    return view('Charts.FloodArea');
})->name('Charts.FloodArea');

Route::post('/Map', [FilterController::class, 'filter'])->name('Filter');

// Route::get('/geojson', 'GeoJSONController@index');

