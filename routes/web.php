<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');

Route::post('/contact', [PageController::class, 'submitContact'])
    ->middleware('throttle:5,1')
    ->name('contact.submit');

// Catch-all page route - must stay LAST so it never shadows the routes
// above, or any blog/menu routes we add later.
Route::get('/{slug}', [PageController::class, 'show'])->name('page.show');

Route::get('/about-us', function () {
    return view('pages.about');
});
Route::view('/contact', 'pages.contact')->name('contact');
