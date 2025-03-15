<?php

use App\Http\Controllers\AuthentificationController;
use App\Http\Controllers\LanguageController;
use App\Models\Faqs;
use Illuminate\Support\Facades\Route;


Route::get('index', [AuthentificationController::class, 'dashboard']);
Route::get('login', [AuthentificationController::class, 'index']);
Route::post('custom-login', [AuthentificationController::class, 'login']);
Route::post('custom-register', [AuthentificationController::class, 'register']);
Route::get('signout', [AuthentificationController::class, 'signOut']);

Route::get('/', function () {
    if (session()->has('idcandidat')) {
        return redirect()->intended('index')->withSuccess('Bon retour');
    }
    return view('auth.login');
});

//Authentification
Route::get('register', function () {
    return view('auth.register');
});
Route::get('forgot', function () {
    return view('auth.forgot-password');
});
Route::get('email-verif', function () {
    return view('auth.email-verification');
});
Route::get('reset-password', function () {
    return view('auth.reset-password');
});
Route::get('change-success', function () {
    return view('auth.success');
});

//error
Route::fallback(function () {
    return response()->view('errors.error-404', [], 404);
});

//Profile
Route::get('profile', function () {
    return view('profile.profile');
});
Route::get('profile-settings', function () {
    return view('profile.profile-settings');
});
Route::get('notification-settings', function () {
    return view('profile.notification-settings');
});
Route::get('detail-basique', function () {
    return view('profile.detail-basique');
});
Route::get('resume-profile', function () {
    return view('profile.resume-profile');
});
Route::get('info-pro', function () {
    return view('profile.info-pro');
});
Route::get('emploi-profile', function () {
    return view('profile.emploi-profile');
});
Route::get('education-profile', function () {
    return view('profile.education-profile');
});
Route::get('project-profile', function () {
    return view('profile.project-profile');
});
Route::get('skills-profile', function () {
    return view('profile.skills-profile');
});
Route::get('cv-profile', function () {
    return view('profile.cv-profile');
});

// Chat & Call
Route::get('chat', function () {
    return view('applications.chat');
});
Route::get('voice-call', function () {
    return view('applications.voice-call');
});
Route::get('video-call', function () {
    return view('applications.video-call');
});
Route::get('outgoing-call', function () {
    return view('applications.outgoing-call');
});
Route::get('incoming-call', function () {
    return view('applications.incoming-call');
});
Route::get('call-history', function () {
    return view('applications.call-history');
});
Route::get('calendar', function () {
    return view('applications.calendar');
});

//Jobs
Route::get('job-grid', function () {
    return view('jobs.job-list');
});
Route::get('candidates-grid', function () {
    return view('jobs.candidates');
});
Route::get('job-details', function () {
    return view('jobs.job-details');
});

//Blogs
Route::get('blogs', function () {
    return view('blogs.blogs');
});

//FAQs
Route::get('faq', function () {
    $faq = Faqs::all();
    return view('faqs.faq', compact('faq'));
});

//Terms
Route::get('privacy-policy', function () {
    return view('terms.privacy-policy');
});
Route::get('terms-condition', function () {
    return view('terms.terms-condition');
});

//Change Language
Route::post('language-switch', [LanguageController::class, 'languageSwitch'])->name('language.switch');
