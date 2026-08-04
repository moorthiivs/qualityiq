<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DunkTankController;

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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
     Route::get('/modals', [DunkTankController::class, 'listModals'])->name('list.modals');
     Route::get('/dunktank', [DunkTankController::class, 'dunktank'])->name('dunktank');
 });

Route::get('/rejectionentry', function () {
    return view('rejectentry');
})->middleware(['auth', 'verified'])->name('rejectentry');

Route::get('/search', function () {
    return view('search');
})->middleware(['auth', 'verified'])->name('search');

Route::get('/fishbone', function () {
    return view('fishbone');
})->middleware(['auth', 'verified'])->name('fishbone');

Route::get('/causeauctionentry', function () {
    return view('causeauctionentry');
})->middleware(['auth', 'verified'])->name('causeauctionentry');
Route::get('/why-why-analysis', function () {
    return view('why-why-analysis');
})->middleware(['auth', 'verified'])->name('why-why-analysis');


require __DIR__.'/auth.php';

