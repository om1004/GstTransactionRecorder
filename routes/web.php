<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GstController;
use App\Http\Controllers\MenuController;

Route::get('/',[MenuController::class,'goToMenu']);
Route::get('/adduser',[GstController::class,'userForm'])->name('user.form');
Route::get('/transaction/addtransaction',[GstController::class,'transactionForm'])->name('transaction.form');
Route::post('/transactions/store',[GstController::class,'transactionStore'])->name('transaction.store');
Route::post('/users/store',[GstController::class,'userStore'])->name('user.store');
Route::get('/users/display',[GstController::class,'display'])->name('user.display');