<?php

use App\Providers\AppServiceProvider;
use App\Providers\Filament\AdminPanelProvider;
use App\Providers\Filament\BloggerPanelProvider;
use App\Providers\ViewServiceProvider;

return [
    AppServiceProvider::class,
    AdminPanelProvider::class,
    BloggerPanelProvider::class,
    ViewServiceProvider::class,
];
