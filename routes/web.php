<?php

use App\Http\Controllers\ChatbotController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::post('/chatbot/ask', [ChatbotController::class, 'ask'])->name('chatbot.ask');
Route::get('/technology', function () {
    return view('technology');
});
Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Catch-all CMS page route - resolves any single-segment slug against the
// `pages` table (About, Services, and any future page created in the
// admin panel). MUST stay LAST: every named/static route above this line
// is matched first, and anything not explicitly listed here falls through
// to this dynamic lookup instead of 404ing outright.
Route::get('/{slug}', [PageController::class, 'show'])->name('page.show');


// Temporary static routes — bypass PageController/DB while intl extension
// is unavailable on the server (blocks Filament admin's Page management).
// Remove once ext-intl is enabled and these pages are added via /admin.
Route::get('/web-development', function () {
    $page = (object) ['activeFaqs' => collect()];
    return view('pages.services.web-development', compact('page'));
})->name('web-development');

Route::get('/software-development', function () {
    $page = (object) ['activeFaqs' => collect()];
    return view('pages.services.software-development.software-development', compact('page'));
})->name('software-development');

Route::get('/custom-software-development', function () {
    $page = (object) ['activeFaqs' => collect()];
    return view('pages.services.software-development.custom-software-development', compact('page'));
})->name('custom-software-development');

Route::get('/enterprise-software-development', function () {
    $page = (object) ['activeFaqs' => collect()];
    return view('pages.services.software-development.enterprise-software-development', compact('page'));
})->name('enterprise-software-development');

Route::get('/crm-development', function () {
    $page = (object) ['activeFaqs' => collect()];
    return view('pages.services.software-development.crm-development', compact('page'));
})->name('crm-development');

Route::get('/about-us', function () {
    $page = (object) ['activeFaqs' => collect()];
    return view('pages.about', compact('page'));
})->name('about-us');
