<?php

use Illuminate\Support\Facades\Route;
use App\Models\Good;

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
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function() {

    Route::get('/dashboard' , function() { return view('dashboard'); } )->name('dashboard');
    Route::get('/goods' , function() { return view('good.index', ['goods' => Good::all()]); } )->name('goods');

});
