<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\PraticienController;
use App\Http\Controllers\CompteRenduController;


use App\Http\Controllers\AddAccount;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('home');



Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/praticiens', [PraticienController::class, 'index'])->name('praticiens.index');
    Route::get('/praticiens/search', [PraticienController::class, 'search'])->name('praticiens.search');


    Route::get('/Compte_Rendu', [CompteRenduController::class, 'index'])->name('compteRendu.index');
    Route::post('/Compte_Rendu', [CompteRenduController::class, 'store'])->name('compteRendu.store');
    Route::get('/compteRendu/download/{id}', [CompteRenduController::class, 'download']);


    Route::get('/AddAccount', [AddAccount::class, 'index'])->name('AddAccount.index');

    Route::post('/AddAccount/importcsv', [AddAccount::class, 'importcsv'])->name('AddAccount.importcsv');
});

require __DIR__ . '/auth.php';
