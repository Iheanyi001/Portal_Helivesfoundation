<?php

namespace App\Livewire\Applications;

use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Models\StudentApplication;
use App\Mail\StudentApplication as StudentApplicationMail;
use Illuminate\Support\Facades\Mail;

class Students extends Component
{
    #[Validate('required')]
    public $full_name = '';
    #[Validate('required|email|unique:student_application')]
    public $email= '';
    #[Validate('required')]
    public $phone = '';
    #[Validate('required')]
    public $age= '';
    #[Validate('required')]
    public $education='';
    #[Validate('required')]
    public $occupation='';
    #[Validate('required')]
    public $interest='';
    #[Validate('required')]
    public $skills='';
    #[Validate('required')]
    public $experience='';
    #[Validate('required')]
    public $apply_skills='';
    #[Validate('required')]
    public $ict_experience='';
    #[Validate('required')]
    public $how_you_heard='';
    public $uni = '';

    public function save(){
        $this->validate();
        $this->uni = uniqid();

        $student = StudentApplication::create($this->only(['uni', 'full_name','email', 'phone', 'age', 'education', 'occupation', 'interest', 'skills',
        'experience', 'apply_skills','ict_experience', 'how_you_heard']));

        Mail::to($this->email)->send(new StudentApplicationMail($student));

        //$this->js("Thank you for your interest, " .$this->full_name. " ");
        $this->js("alert('Thank you for your interest, Check your email for further information about the next steps in the application process.')");

        return redirect('/');
    }


    public function render()
    {
        return view('livewire.applications.students');
    }
}
