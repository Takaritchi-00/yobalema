<?php

namespace  App\Http\Controllers;

use App\Models\Vehicule;
use App\Models\Chauffeur;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use SebastianBergmann\CodeCoverage\Driver\Driver;
use App\Http\Controllers\AdminPanel\AdminController;

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
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/menu', function () {
    return view('menu');
})->middleware(['auth', 'verified'])->name('menu');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::resource('clients', ClientController::class);
    Route::get('services', [UserController::class, 'services'])->name('services');
    Route::get('details/{id}', [UserController::class, 'lesdetails'])->name('details');
    Route::get('louer', [UserController::class, 'louer'])->name('louer');
    Route::post('store', [UserController::class, 'store'])->name('store');
    Route::get('liste', [UserController::class, 'liste'])->name('liste');
    Route::get('paiement/{id}', [UserController::class, 'paiement'])->name('paiement');
    Route::put('Paiement/{id}', [UserController::class, 'paidUpdate'])->name('payer');
});



require __DIR__ . '/auth.php';





/*Admin*/
Route::middleware('admin')->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('locations', [AdminController::class, 'liste'])->name('locations');
});
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
    Route::post('/login_submit', [AdminController::class, 'login_submit'])->name('admin.login_submit');
    Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');
});

Route::middleware('admin')->group(function () {
    Route::resource('vehicules', VehiculeController::class);
    Route::resource('chauffeurs', ChauffeurController::class);

});

