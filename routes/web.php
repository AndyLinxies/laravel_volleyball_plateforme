<?php

use App\Http\Controllers\AllEquipeController;
use App\Http\Controllers\AllJoueurController;
use App\Http\Controllers\ContinentController;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\JoueurController;
use App\Http\Controllers\RoleController;
use App\Models\Equipe;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('/dashboard/readEquipes', EquipeController::class);
Route::resource('/dashboard/readJoueurs', JoueurController::class);
Route::resource('/dashboard/readContinents', ContinentController::class);
Route::resource('/dashboard/readRoles', RoleController::class);
Route::resource('/all', AllEquipeController::class);
Route::resource('/allJ', AllJoueurController::class);

