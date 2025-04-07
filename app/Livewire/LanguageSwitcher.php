<?php

namespace App\Livewire;

use Livewire\Component;

class LanguageSwitcher extends Component
{
    public $available_locales = [];
    public $current_locale = 'en';

    public function mount()
    {
        $this->available_locales = config('app.available_locales');
        $this->current_locale = app()->getLocale();
    }
    public function render()
    {
        return view('livewire.language-switcher');
    }
}
