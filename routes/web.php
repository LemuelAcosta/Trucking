<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TruckController;
use App\Http\Controllers\WasherController;
use Illuminate\Support\Facades\Auth;
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
    return view('auth.login');
});

// Route::get('/truck', function () {
//     return view('Truck.index');
// });

// Route::get('/truck/create',[truckController::class, 'create']);


Auth::routes(
    [
        'reset'=>false,
    ]
);
Route::resource('truck', truckController::class)->middleware('auth');
Route::resource('truck.washers', WasherController::class)->middleware('auth');

Route::get('/home', [truckController::class, 'index'])->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [truckController::class, 'index'])->name('home');
});
