<?php

use App\Http\Controllers\Apis\ApiCandidatesController;
use App\Http\Controllers\Apis\ApiFeedbackController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('register', [ApiCandidatesController::class, 'register']);
Route::post('login', [ApiCandidatesController::class, 'login']);

//Faqs
Route::get('faqs', [ApiFeedbackController::class, 'faqs']);

Route::middleware(['auth:sanctum', 'api'])->group(function () {
    // Authetification candidate
    Route::post('logout', [ApiCandidatesController::class, 'logout']);
});
