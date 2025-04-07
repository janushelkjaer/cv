<?php

namespace App\Livewire;

use Livewire\Component;

class WorkExperience extends Component
{
    public $workExperiences = [];
    public $currentLanguage = 'da';

    public function mount()
    {
        // Set the default language based on the user's preference or system settings
        $this->currentLanguage = app()->getLocale(); // or 'da' for Danish

        $this->workExperiences = [
            [
               'da' => [
                    'company' => 'Selvstændig',
                'position' => 'Teknisk Marketingkonsulent',
                'start_date' => '2024',
                'end_date' => '',
                'description' => ''
               ],
               'en' => [
                    'company' => 'Self-employed',
                    'position' => 'Technical Marketing Consultant',
                    'start_date' => '2024',
                    'end_date' => '',
                    'description' => ''
                ]
            ],
            [
               'da' => [
                    'company' => 'kugleland',
                'position' => 'Founder',
                'start_date' => '2024',
                'end_date' => '',
                'description' => ''
               ],
               'en' => [
                    'company' => 'kugleland',
                    'position' => 'Founder',
                    'start_date' => '2024',
                    'end_date' => '',
                    'description' => ''
                ]
            ],
            [
               'da' => [
                    'company' => 'Mindmill Denmark Aps',
                'position' => 'Marketing Automation Specialist',
                'start_date' => '2022',
                'end_date' => '2023',
                'description' => 'Strategisk og praktisk arbejde med automati on fl ows i marketi ng- og salg,primært for Sass, samt
                    virksomheder i produkti onsindustrien. Low-code/no-code integrati oner ti l 3. parts
                    systemer.Undervisning/onboarding af kunder og medarbejdere i brug af systemer.'
               ],
               'en' => [
                    'company' => 'Mindmill Denmark Aps',
                    'position' => 'Marketing Automation Specialist',
                    'start_date' => '2022',
                    'end_date' => '2023',
                    'description' => 'Strategic and practical work with automation flows in marketing and sales, primarily for SaaS, as well as companies in the product industry. Low-code/no-code integrations to 3rd party systems. Teaching/onboarding of customers and employees in the use of systems.'
                ]
            ],
            [
               'da' => [
                    'company' => 'Mindmill Denmark Aps',
                'position' => 'Lead Web Developer',
                'start_date' => '2012',
                'end_date' => '2022',
                'description' => "Full Stack arbejde i udvikling af eCommerce (Magento, WooCommerce,mfl .), Wordpress websites (plugins + themes), skræddersyede apps ti lkunder (intranet, portaler, mm.), integrati oner ti l 3. parts API'er, samtmange interne værktøjer.
                                \n Arbejde både med server opsætning/drift , backend udvikling, frontendudvikling.
                                \n Specifikationsudformning, konventionsudvikling, masser af direktekundekontakt."
               ],
               'en' => [
                    'company' => 'Mindmill Denmark Aps',
                    'position' => 'Lead Web Developer',
                    'start_date' => '2012',
                    'end_date' => '2022',
                    'description' => "Full Stack work in the development of eCommerce (Magento, WooCommerce, etc.), WordPress websites (plugins + themes), custom apps for customers (intranet, portals, etc.), integrations to 3rd party APIs, and many internal tools.
                                    \n Work with server setup/operation, backend development, frontend development.
                                    \nSpecification design, convention development, and lots of direct customer contact."
                ]
            ],
            // eversoft
            [
               'da' => [
                    'company' => 'Eversoft',
                    'position' => 'Frontend Udvikler & Grafisk Designer',
                    'start_date' => '2011',
                    'end_date' => '2012',
                    'description' => "Website design og udvikling, primært i PHP og HTML/CSS. Udvikling af grafisk materiale til web og print. Udvikling af interne værktøjer til administration af kunder og systemer."
               ],
               'en' => [
                    'company' => 'Eversoft',
                    'position' => 'Frontend Developer & Graphic Designer',
                    'start_date' => '2011',
                    'end_date' => '2012',
                    'description' => "Website design and development, primarily in PHP and HTML/CSS. Development of graphic materials for web and print. Development of internal tools for customer and system administration."
                ]
            ],

            // aauu

            [
               'da' => [
                    'company' => 'Aarhus Universitetshospital',
                    'position' => 'IT-medarbejder',
                    'start_date' => '2011',
                    'end_date' => '2011',
                    'description' => "Website management og digitalisering af trykte materialer, samt patientjournaler. Diverse IT-support."
               ],
               'en' => [
                    'company' => 'Aarhus Universitetshospital',
                    'position' => 'IT Employee',
                    'start_date' => '2011',
                    'end_date' => '2011',
                    'description' => "Website management and digitization of printed materials, as well as patient records. Various IT support."
                ]
            ],
           
        ];
    }
    public function render()
    {
        return view('livewire.work-experience');
    }
}
