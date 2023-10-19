<?php

use App\Http\Controllers\DemandeadmissionController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\FilieresController;
use App\Http\Controllers\HomeController;
use Faker\Guesser\Name;
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

Route::get('/', [HomeController::class, 'home']);
Route::get('/admission', function () {
    return view('admission');
});
Route::post('/admission', function () {
    return view('admission');
});
Route::get('/form', function () {
    return view('formulaire');
});
Route::get('/confirmationadmission', function () {
    return view('confirmationadmission');
});

Route::prefix('publications')->name('publications.')->group(function () {
    Route::get('/', [PublicationController::class, 'index']);
    Route::get('/new', [PublicationController::class, 'create'])->name('create');
    Route::post('/new', [PublicationController::class, 'store']);
    Route::get('/{slug}', [PublicationController::class, 'show']);
});

Route::post('/form', [DemandeadmissionController::class, 'store']);

$filieres = ['lsf', 'rsf', 'lsc', 'mgpsr', 'msias', 'merce', 'mpgps', 'meab', 'mcgh'];

// Créer des routes pour les filières
Route::resource('filieres', FilieresController::class, [
    'names' => [
        'show' => 'filieres.show',
    ],
]);


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('demandeadmission', [DemandeadmissionController::class, 'show']);
});
