<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\LaptopController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisiteurController;
use App\Http\Controllers\CommandController;
use App\Http\Controllers\BagController;

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

Route::get('/dashboard', DashboardController::class)->name('dashboard');


Route::get('/', [VisiteurController::class, 'index'])->name('home');

Route::resource('/magazin',ProductController::class)->middleware(['auth','role:magazin,admin']);
Route::resource('/admin/users',UserController::class)->middleware(['auth','role:admin']);
Route::resource('/visiteur',VisiteurController::class);

Route::resource('/commande',CommandController::class)->middleware(['auth','role:magazin,admin']);
Route::post('/commande', [CommandController::class, 'store'])->name('commande.store');

Route::resource('/bag',BagController::class)->middleware(['auth']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
