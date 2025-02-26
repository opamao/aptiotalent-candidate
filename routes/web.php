<?php

use App\Http\Controllers\LanguageController;
use App\Models\Faqs;
use Illuminate\Support\Facades\Route;

//Authentification
Route::get('/', function () {
    return view('auth.login');
});
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
Route::get('security-settings', function () {
    return view('profile.security-settings');
});
Route::get('notification-settings', function () {
    return view('profile.notification-settings');
});
Route::get('connected-apps', function () {
    return view('profile.connected-apps');
});
Route::get('bussiness-settings', function () {
    return view('profile.bussiness-settings');
});
Route::get('seo-settings', function () {
    return view('profile.seo-settings');
});
Route::get('prefixes', function () {
    return view('profile.prefixes');
});
Route::get('preferences', function () {
    return view('profile.preferences');
});
Route::get('currencies', function () {
    return view('profile.currencies');
});
Route::get('tax-rates', function () {
    return view('profile.tax-rates');
});
Route::get('payment-gateways', function () {
    return view('profile.payment-gateways');
});
Route::get('sms-settings', function () {
    return view('profile.sms-settings');
});
Route::get('sms-template', function () {
    return view('profile.sms-template');
});
Route::get('email-template', function () {
    return view('profile.email-template');
});
Route::get('email-settings', function () {
    return view('profile.email-settings');
});
Route::get('leave-type', function () {
    return view('profile.leave-type');
});

//Dashboard companie
Route::get('employee-dashboard', function () {
    return view('dashboard.entreprises.employee-dashboard');
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
