<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\CheckoutController;



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


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/details', [DetailsController::class, 'index'])->name('details')->middleware('auth', 'verified');
Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('checkout')->middleware('auth', 'verified');
Route::get('/success', [CheckoutController::class, 'success'])->name('success')->middleware('auth', 'verified');

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware(['auth'])->name('verification.notice');



Route::prefix('admin')
        ->namespace('Admin')
        ->group(function() {
            Route::get('/', [DashboardController::class, 'index'])
            ->name('dashboard')
            ->middleware('auth', 'IsAdmin', 'verified');

            Route::resource('courses', CourseController::class)->middleware('auth', 'IsAdmin', 'verified');
            Route::resource('galleries', GalleryController::class)->middleware('auth', 'IsAdmin', 'verified');
            Route::resource('transactions', TransactionsController::class)->middleware('auth', 'IsAdmin', 'verified');
        });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
