<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;


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
    return view('welcome');
});



Route::prefix('admin')
        ->namespace('Admin')
        ->group(function() {
            Route::get('/', [DashboardController::class, 'index'])
            ->name('dashboard');

            Route::resource('courses', CourseController::class);
            Route::resource('galleries', GalleryController::class);
        });
