<?php

namespace App\Livewire;

use Livewire\Component;

class Hero extends Component
{

    public $current_locale;
    public function mount()
    {
        $this->current_locale = app()->getLocale();
    }
    public function render()
    {
        return view('livewire.hero');
    }
}
