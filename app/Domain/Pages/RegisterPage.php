<?php

namespace App\Domain\Pages;

use Livewire\Component;

class RegisterPage extends Component
{
    public $formData = [
        'firstname' => null,
        'lastname' => null,
        'email' => null,
        'og_number' => null,
        'whatsapp_number' => null,
        'gender' => null,
        'dob' => null,
        'grade_level' => null,
        'grade_step' => null,
        'department' => null,
        'cadre' => null,
        'competence_level' => null,
        'area_of_interests' => null,
        'unit' => null,
        'rank' => null,
        '' => null,
    ];

    public $photo;


    public function render()
    {
        return view('pages.register-page');
    }
}
