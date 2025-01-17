<?php

use App\Http\Controllers\Apis\ApiCandidatesController;
use App\Http\Controllers\Apis\ApiFeedbackController;
use App\Http\Controllers\Apis\ApiProfileController;
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
    Route::post('updatepassword', [ApiCandidatesController::class, 'updatePassword']);

    //Profile
    Route::post('resumeprofile', [ApiProfileController::class, 'resumeProfile']);
    Route::post('infoprofile', [ApiProfileController::class, 'infoProProfile']);
    Route::post('emploiprofile', [ApiProfileController::class, 'emploiProfile']);
    Route::post('educationprofile', [ApiProfileController::class, 'educationProfile']);
    Route::post('projectprofile', [ApiProfileController::class, 'projectProfile']);
    Route::post('skillprofile', [ApiProfileController::class, 'skillProfile']);
    Route::post('cvprofile', [ApiProfileController::class, 'cvProfile']);

    Route::get('skillprofile/{id}/get', [ApiProfileController::class, 'getSkillProfile']);
    Route::get('profile/{id}/get', [ApiProfileController::class, 'getInfoProfile']);

    //FeedBack
    Route::post('feedback', [ApiFeedbackController::class, 'feedback']);
});
