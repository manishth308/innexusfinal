<?php

use App\Http\Controllers\BloggerApplicationController;
use App\Http\Controllers\ChatbotController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PasswordResetController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::post('/chatbot/ask', [ChatbotController::class, 'ask'])->name('chatbot.ask');
Route::get('/technology', function () {
    return view('technology');
});
Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit')->middleware('throttle:5,1');

Route::get('/blogs/apply', [BloggerApplicationController::class, 'show'])->name('blogs.apply');
Route::post('/blogs/apply', [BloggerApplicationController::class, 'store'])->name('blogs.apply.submit')->middleware('throttle:5,1');

// Route name "password.reset" is required as-is - Laravel's built-in
// ResetPassword notification (used by both Password::sendResetLink() in
// the blogger-invite flow and Filament's own ->passwordReset() on the
// admin/blogs panels) looks this route up by that exact name to build
// the link it emails out.
Route::get('/blogs/reset-password/{token}', [PasswordResetController::class, 'show'])->name('password.reset');
Route::post('/blogs/reset-password', [PasswordResetController::class, 'store'])->name('password.update')->middleware('throttle:5,1');

// Catch-all CMS page route - resolves any single-segment slug against the
// `pages` table (About, Services, and any future page created in the
// admin panel). MUST stay LAST: every named/static route above this line
// is matched first, and anything not explicitly listed here falls through
// to this dynamic lookup instead of 404ing outright.
Route::get('/blog', [\App\Http\Controllers\BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [\App\Http\Controllers\BlogController::class, 'show'])->name('blog.show');

Route::get('/{slug}', [PageController::class, 'show'])->name('page.show');