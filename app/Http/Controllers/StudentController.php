<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function index()
    {           
        $student = \App\Student::all();
     
        return view('student.index',compact('student'));
    }

    public function create()
    {
        return view('student.create');
    }

    public function store()
    {
        $student = new Student();
        $student->firstname = request('firstname');
        $student->lastname = request('lastname');
        $student->email = request('email');
        
        $student->save();

        return redirect('/students');
    }
}
