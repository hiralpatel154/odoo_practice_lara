<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/',[CustomerController::class,'index']);
Route::get('markup',[CustomerController::class,'markup'])->name('markup');