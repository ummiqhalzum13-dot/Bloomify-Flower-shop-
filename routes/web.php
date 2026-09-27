<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/',[StudentController::class,'index'])->name("Student-list");
Route::get('/about',[StudentController::class,'about'])->name("Student-about");
Route::get('/Create',[StudentController::class,'create'])->name("Student-create");
Route::post('/Create',[StudentController::class,'store'])->name("Student-store");
Route::get('/show/{id}',[StudentController::class,'show'])->name("Student-show");
Route::get('/edit/{Student}',[StudentController::class,'edit'])->name("Student-edit");
Route::put('/edit/{Student}',[StudentController::class,'update'])->name("Student-update");
Route::delete('/destroy/{Student}',[StudentController::class,'destroy'])->name("Student-destroy");