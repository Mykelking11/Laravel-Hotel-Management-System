<?php

use App\Http\Controllers\ProfileController;
<<<<<<< HEAD
use App\Http\Controllers\Reservation\ReservationController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
=======
use Illuminate\Support\Facades\Route;
>>>>>>> 9a4cab685a4f0b64334d46c6214bd1a2266f4792

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
<<<<<<< HEAD

    return view('welcome');
    
=======
    return view('welcome');
>>>>>>> 9a4cab685a4f0b64334d46c6214bd1a2266f4792
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
<<<<<<< HEAD
    Route::get('/reservation', [ReservationController::class, 'create'])->name('reservation.create');
=======
>>>>>>> 9a4cab685a4f0b64334d46c6214bd1a2266f4792
});

require __DIR__.'/auth.php';
