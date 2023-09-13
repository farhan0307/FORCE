<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Picturecontroller;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// here name of controller is optional
Route::get('/', [Picturecontroller::class,'index'])->name('picture.index');
Route::get('pictures/create', [Picturecontroller::class,'create'])->name('picture.create');
Route::post('pictures/store', [Picturecontroller::class,'store'])->name('picture.store');
