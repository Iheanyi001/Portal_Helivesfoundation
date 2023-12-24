<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentApplicationController extends Controller
{
    public function index(){
        return view('admin.applications.index');
    }
    public function show(){
        return view('admin.applications.show');
    }
}
