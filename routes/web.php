<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\SideController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return redirect('/login');
});

Auth::routes([
    'reset' => false,
    // 'register' => false
]);


Route::get('/dashboard', [MainController::class, 'Dashboard'])->name('dashboard');
Route::get('/resi', [MainController::class, 'Resi'])->name('Resi');
Route::get('/create', [SideController::class, 'create'])->name('create');
Route::get('/delete/{id}', [SideController::class, 'delete'])->name('delete');
Route::get('/edit/{id}', [SideController::class, 'edit'])->name('edit');
Route::get('/print/{id}', [SideController::class, 'print'])->name('print');
Route::get('/show/{id}', [SideController::class, 'show'])->name('show');
Route::post('/store', [SideController::class, 'store'])->name('store');
Route::post('/update/{id}', [SideController::class, 'update'])->name('update');
