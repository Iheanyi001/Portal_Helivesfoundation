<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exam;

class ExamController extends Controller
{
    public function index(){
        return view('admin.exam.index');
    }
    public function create(){
        return view('admin.exam.create', ['exam'=>[]]);
    }
    public function edit(Request $request, $id){
        $exam = Exam::findorFail($id);
        return view('admin.exam.edit', ['exam'=>$exam]);
    }
    public function destroy(Request $request, $id){
        return back();
    }
}
