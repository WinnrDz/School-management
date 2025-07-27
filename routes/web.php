<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolClassController;

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

Route::get('/', [SchoolClassController::class, "index"])->name("schollClasses.index");

Route::get('/create', [SchoolClassController::class, "create"])->name("schoolClasses.create");

Route::post('/store', [SchoolClassController::class, "store"])->name("schoolClasses.store");
