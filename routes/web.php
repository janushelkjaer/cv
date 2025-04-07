<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use Spatie\LaravelPdf\Facades\Pdf;


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
            ->name('cv_jh.pdf');
})->name('about');

require __DIR__.'/auth.php';
