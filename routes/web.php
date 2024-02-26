<?php

use App\Http\Middleware\EnsurePageNotUnderMaintenance;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/maintenance', function () {
    return view('UnderMaintenance');
});

Route::get('/', function () {
    return Inertia::render('Welcome');
});

Route::get('/administrative', function () {
    return Inertia::render('Administrative/Home');
});

Route::get('/about-us', function() {
    return Inertia::render('AboutUs');
});
