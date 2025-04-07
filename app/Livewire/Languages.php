<?php

namespace App\Livewire;

use Livewire\Component;

class Languages extends Component
{
    public $languages = [
        'da' => [
            'name' => 'Danish',
            'flag' => 'https://hatscripts.github.io/circle-flags/flags/dk.svg',
            'description' => 'Mother Tongue'
        ],
        'en' => [
            'name' => 'English',
            'flag' => 'https://hatscripts.github.io/circle-flags/flags/uk.svg',
            'description' => 'Fluent in writing and speaking'
        ],
        
        // Add more languages as needed
    ];

    public function mount()
    {

        if(app()->getLocale() == 'da'){
            $this->languages = [
                'da' => [
                    'name' => 'Dansk',
                    'flag' => 'https://hatscripts.github.io/circle-flags/flags/dk.svg',
                    'description' => 'Modersmål'
                ],
                'en' => [
                    'name' => 'Engelsk',
                    'flag' => 'https://hatscripts.github.io/circle-flags/flags/uk.svg',
                    'description' => 'Flydende i skrift og tale'
                ],
                
                // Add more languages as needed
            ];
        }

      #dd(app()->getLocale());
        
    }
    public function render()
    {
        return view('livewire.languages');
    }
}
