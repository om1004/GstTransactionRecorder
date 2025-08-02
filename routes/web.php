<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GstController;
use App\Http\Controllers\MenuController;

Route::get('/',[MenuController::class,'goToMenu']);
Route::get('/adduser',[GstController::class,'userForm'])->name('user.form');
Route::get('/transaction/store',[GstController::class,'transactionForm'])->name('transaction.form');
Route::post('/users/store',[GstController::class,'store'])->name('user.store');
Route::get('/users/display',[GstController::class,'display'])->name('user.display');