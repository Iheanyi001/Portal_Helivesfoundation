<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Exam, Questions};

class QuestionsController extends Controller
{
    public function index($id){
        $exam = Exam::findorFail($id);
        $questions = Questions::where(['question_id'=>$exam->id]);
        return view('admin.question.index', ['questions'=>$questions, 'exam'=> $exam]);
    }
    public function create(){
       // return dd('create');
        return view('admin.question.create', ['old_question'=>[]]);
    }
    public function edit(Request $request, $id){
        $old_question = Exam::findorFail($id);
        return view('admin.question.edit', ['old_question'=>$old_question]);
    }
    public function destroy(Request $request, $id){
        return back();
    }
}
