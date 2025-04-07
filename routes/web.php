<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use Spatie\LaravelPdf\Facades\Pdf;
use Spatie\Browsershot\Browsershot;


Route::get('/', function() {
    return response()->redirectTo('/en');
});

Route::get('/{locale?}', function ($locale = null) {
    if (isset($locale) && in_array($locale, config('app.available_locales'))) {
        app()->setLocale($locale);
    }
    
    return view('welcome');
})->name('home');

Route::get('/{locale?}/download', function ($locale = null) {
    if (isset($locale) && in_array($locale, config('app.available_locales'))) {
        app()->setLocale($locale);
    }
    
    return Pdf::view('welcome')
            ->format('a4')
            ->name('cv_jh.pdf')
            ->withBrowsershot(function (Browsershot $browsershot) {
                $browsershot->setNodeBinary('/usr/bin/node');
                $browsershot->setNodeModulePath('/usr/lib/node_modules');
                $browsershot->setChromiumBinary('/usr/bin/chromium');
            });
})->name('about');

require __DIR__.'/auth.php';
