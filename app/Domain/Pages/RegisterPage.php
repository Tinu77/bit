<?php

namespace App\Domain\Pages;

use App\Domain\Support\Traits\LivewireImageUploader;
use App\Domain\Support\Traits\ResetValidationError;
use Livewire\Component;

class RegisterPage extends Component
{
    use LivewireImageUploader, ResetValidationError;

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
        'area_of_interests' => [],
        'unit' => null,
        'rank' => null,
    ];

    protected $rules = [
        'formData.firstname' => ['required'],
        'formData.lastname' => ['required'],
        'formData.email' => ['email:dns,rfc'],
        'formData.og_number' => ['required'],
        'formData.whatsapp_number' => ['required'],
        'formData.gender' => ['required'],
        'formData.dob' => ['required'],
        'formData.grade_level' => ['required'],
        'formData.grade_step' => ['required'],
        'formData.department' => ['required'],
        'formData.cadre' => ['required'],
        'formData.competence_level' => ['required'],
        'formData.area_of_interests' => ['required'],
        'formData.unit' => ['required'],
        'formData.rank' => ['required'],
    ];

    protected $validationAttributes = [
            'formData.firstname' => "Firstname",
            'formData.lastname' => "Lastname",
            'formData.email' => "Email address",
            'formData.og_number' => "OG Number",
            'formData.whatsapp_number' => "Whatsapp number",
            'formData.gender' => "Gender",
            'formData.dob' => "Date of birth",
            'formData.grade_level' => "Grade level",
            'formData.grade_step' => "Grade step",
            'formData.department' => "Department",
            'formData.cadre' => "Cadre",
            'formData.competence_level' => "Competence level",
            'formData.area_of_interests' => "Area of interests",
            'formData.unit' => "Unit",
            'formData.rank' => "Rank",
        ];

    public $photo;


    public function submitForm(): void
    {
        flash()->overlay('This is my message', 'The Title')->livewire($this);
        //$validated = $this->validate();
        //$this->processForm($validated);
    }

    private function arrayToText($data){
        foreach ($data as $value) {
            $out[] = $value;
        }
    }

    protected function fieldList(): array
    {
        $return = [];
        foreach ($this->formData as $key => $name) {
            $return[] = "formData.$key";
        }
        return $return;
    }


    public function render()
    {
        return view('pages.register-page');
    }
}
