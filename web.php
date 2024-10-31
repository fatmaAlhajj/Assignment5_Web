<?php

use App\Http\Controllers\NameFaile;
use App\Http\Controllers\NmaeFaile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ValidContrller;

// Route::get('/abccc',[ValidContrller::class,'create'])->name('create');
// Route::post('/abcd',[ValidContrller::class,'store'])->name('validate.store');



Route::get('/upload', [NameFaile::class, 'create'])->name('upload.form');
   
Route::post('/upload', [NameFaile::class, 'store'])->name('upload.store');
    