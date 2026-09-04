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
Route::get('/blog', [\App\Http\Controllers\BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [\App\Http\Controllers\BlogController::class, 'show'])->name('blog.show');

Route::get('/{slug}', [PageController::class, 'show'])->name('page.show');