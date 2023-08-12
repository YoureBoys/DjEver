<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DbController;
use App\Http\Controllers\ProfileController;

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

Route::get('/db',[DbController::class, 'index'])->name('db'); 

Route::get('/tambahdata',[DbController::class, 'tambahdata'])->name('tambahdata');
Route::post('/insertdata',[DbController::class, 'insertdata'])->name('insertdata');

Route::get('/tampilkandata/{id}',[DbController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}',[DbController::class, 'updatedata'])->name('updatedata');

Route::get('/delete/{id}',[DbController::class, 'delete'])->name('delete');



Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
