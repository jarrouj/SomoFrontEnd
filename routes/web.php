<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\FranchiseController;
use App\Http\Controllers\RetailMenuController;
use App\Http\Controllers\ConfirmationController;

// {{ Pages }}
Route::get('/' , [HomeController::class , 'index']);
Route::get('/restaurant-menu' , [MenuController::class , 'index']);
Route::get('/about-us' , [AboutController::class , 'index']);
Route::get('/blog' , [BlogController::class , 'index']);
Route::get('/retail-menu' , [RetailMenuController::class , 'index']);
Route::get('/franchise' , [FranchiseController::class , 'index']);
Route::get('/book-now' , [BookingController::class , 'index']);
Route::get('/confirmation' , [ConfirmationController::class , 'index']);
Route::post('/save-location' , [MenuController::class , 'saveLocation']);


Route::get('/menu/{categoryId}', [MenuController::class, 'fetchMenuByCategory']);
Route::get('/retail-menu/{categoryId}', [RetailMenuController::class, 'fetchRetailMenuByCategory']);


Route::post('/contact-mail', [FranchiseController::class, 'sendEmail'])->name('send.email');
