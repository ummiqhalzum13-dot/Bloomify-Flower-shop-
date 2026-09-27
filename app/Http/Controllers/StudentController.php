<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        $Student = Student::all();
        return view('Student.index', compact('Student'));
    }
}
