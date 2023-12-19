<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Exam;
use Illuminate\Support\Facades\Validator;
use App\Models\{Questions,QuestionOption};

class QuestionForm extends Component
{
    public $exam_title='';
    public $question=[];
    public $optiona=[];
    public $optionb=[];
    public $optionc=[];
    public $optiond=[];
    public $answer=[];
    public $old_question;
    public $exams;

    public $inputs = [];
    public $mn = 1;


    public function add($mn)
    {
        $mn += 1;
        $this->mn = $mn;
        array_push($this->inputs ,$mn);
    }

    public function mount(){
        $this->exams = Exam::all();
    }
    public function create(){
       // return dd($this->all());
        $validatedDate = $this->validate([
            'exam_title' => 'required',
            'question.0' => 'required',
            'optiona.0' => 'required',
            'optionb.0' => 'required',
            'optionc.0' => 'required',
            'optiond.0' => 'required',
            'answer.0' => 'required',


            'question.*' => 'required',
            'optiona.*' => 'required',
            'optionb.*' => 'required',
            'optionc.*' => 'required',
            'optiond.*' => 'required',
            'answer.*' => 'required',
        ],
        [
            'exam_title' => 'Exam title field is required',
            'question.0.required' => 'Question field is required',
            'optiona.0.required' => 'Option A field is required',
            'optionb.0.required' => 'Option B field is required',
            'optionc.0.required' => 'Option C field is required',
            'optiond.0.required' => 'Option D field is required',
            'answer.0.required' => 'Answer is required',
            'question.*.required' => 'Question field is required',
            'optiona.*.required' => 'Option A field is required',
            'optionb.*.required' => 'Option B field is required',
            'optionc.*.required' => 'Option C field is required',
            'optiond.*.required' => 'Option D field is required',
            'answer.*.required' => 'Answer is required'

        ]
    );

    foreach($this->question as $qkey => $qvalue){
        $options = [$this->optiona[$qkey], $this->optionb[$qkey], $this->optionc[$qkey], $this->optiond[$qkey]];
        $savedQues = Questions::create([
            'question' => $qvalue,
            'exam_id' => $this->exam_title,
            'answer' => $options[$this->answer[$qkey]],
        ]);
        foreach($options as $option){
            QuestionOption::create([
            'question_id' => $savedQues->id,
            'option' => $option
        ]);
        }
    }

        session()->flash('success', 'Data successfully updated.');
        return redirect(route('exam.list'));
    }
    public function render()
    {
        return view('livewire.question-form');
    }
}
