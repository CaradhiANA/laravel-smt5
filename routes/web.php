<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;

Route::get('/', fn() => view('welcome'));

//route resource
Route::resource('/posts', \App\Http\Controllers\PostController::class);

Route::get('/karyawan', [KaryawanController::class, 'karyawan']);

//tambah
Route::post('/karyawan/store', [KaryawanController::class, 'store'])->middleware('checkRole:owner');

//delete
Route::get('/karyawan/hapus/{id}', [KaryawanController::class, 'hapus'])->middleware('checkRole:owner');

//edit
Route::post('/karyawan/update', [KaryawanController::class, 'update'])->middleware('checkRole:owner');
Route::get('/karyawan/edit/{id}', [KaryawanController::class, 'edit'])->middleware('checkRole:owner');