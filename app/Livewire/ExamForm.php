<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Models\Exam;
use Illuminate\Support\Facades\URL;

class ExamForm extends Component
{
    #[Validate('required')]
    public $title = '';
    #[Validate('required')]
    public $time = '';
    public $tag= '';
    public $description='';
    public $uni = '';
    public $exam;

    public function mount()
    {
        $this->title = $this->exam ? $this->exam->title : '';
        $this->time = $this->exam ? $this->exam->time : '';
        $this->tag = $this->exam ? $this->exam->tag : '';
        $this->description = $this->exam ? $this->exam->description : '';
    }

    public function create(){
        $this->validate();
        $this->uni = uniqid();
        $exam = Exam::create($this->only(['title', 'time', 'tag', 'description', 'uni']));
        return redirect(route('exam.list'));
    }

    public function update(){
        $this->validate();
        $exam = Exam::where(['id'=>$this->exam->id])->update([
            'title' => $this->title,
            'time'  => $this->time,
            'tag'   => $this->tag,
            'description'  => $this->description,
        ]);
        session()->flash('success', 'Data successfully updated.');
        return redirect(route('exam.list'));
    }
    public function render()
    {


        return view('livewire.exam-form');
    }
}
