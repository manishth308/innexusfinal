<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');

Route::view('/contact', 'pages.contact')->name('contact');

// Catch-all CMS page route - resolves any single-segment slug against the
// `pages` table (About, Services, and any future page created in the
// admin panel). MUST stay LAST: every named/static route above this line
// is matched first, and anything not explicitly listed here falls through
// to this dynamic lookup instead of 404ing outright.
Route::get('/{slug}', [PageController::class, 'show'])->name('page.show');