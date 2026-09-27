<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/',[StudentController::class,'index'])->name("Student-list");
Route::get('/about',[StudentController::class,'about'])->name("Student-about");
Route::get('/Create',[StudentController::class,'create'])->name("Student-create");
Route::post('/Create',[StudentController::class,'store'])->name("Student-store");


