<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('admin.user.list');
    }
    public function create(){
        return view('admin.user.create');
    }
    public function save(){
        return view('admin.user.edit');
    }
    public function edit(){

    }
    public function update(){

    }
    public function delete(){

    }
}
