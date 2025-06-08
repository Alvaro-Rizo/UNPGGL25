<?php

namespace App\Http\Controllers;

class StudentController extends Controller
{
    public function show($name, $age)
    {
        return view('student.show', compact('name', 'age'));
    }
}
