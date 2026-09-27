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

    public function about(){
        return view ("Student.about");
    }

    public function create(){
        return view('Student.create');
    }

    public function store(Request $request){
        $Student = $request->validate([
            'nama' => 'required',
            'nim' => 'required|numeric',
            'jenis_kelamin' => 'required',
        ]);

        Student::create($Student);
        return redirect()->route('Student-list')->with('success', 'Data mahasiswa berhasil ditambah');
    }
}
