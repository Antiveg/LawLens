<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'viewHome']);
Route::get('/home', [PageController::class, 'viewHome']);
Route::get('/login', [PageController::class, 'viewLogin']);
Route::get('/register', [PageController::class, 'viewRegister']);
Route::get('/service',  [PageController::class, 'viewService']);
Route::get('/news',  [PageController::class, 'viewNews']);
Route::get('/news-detail', [PageController::class, 'viewNewsDetail']);
Route::get('/profile',  [PageController::class, 'viewProfile']);
Route::get('/about-us',  [PageController::class, 'viewAboutUs']);
Route::get('/law-library',  [PageController::class, 'viewLawLibrary']);
Route::get('/library-detail',  [PageController::class, 'viewLawLibraryDetail']);
Route::get('/service-payment',  [PageController::class, 'viewServicePayment']);
Route::get('/service-chat',  [PageController::class, 'viewServiceChat']);
Route::get('/service-review',  [PageController::class, 'viewServiceReview']);