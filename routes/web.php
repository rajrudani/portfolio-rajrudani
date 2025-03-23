<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\IndexController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('portfolio/{company}', [IndexController::class, 'viewPortfolio'])->name('view-portfolio');
Route::get('download-document/{docType}', [IndexController::class, 'downloadDocument'])->name('download-document');

