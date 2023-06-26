<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index()
    {
        $students = student::all();

        return view('auth.index', compact('student'));
    }

}
