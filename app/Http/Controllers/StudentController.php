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

    public function show(String $id){
        $Student = Student::findOrFail($id);
        return view('Student.show', compact('Student'));
    }

     public function edit(String $id){
        $Student = \App\Models\Student::findOrFail($id);
        return view('Student.edit', compact('Student'));
    }

    public function update(Request $request, Student $Student){
        $data = $request->validate([
            'nama' => 'required',
            'nim' => 'required|numeric',
            'jenis_kelamin' => 'required',
        ]);

        $Student->update($data);

        return redirect()->route('Student-list')->with('success', 'Data mahasiswa berhasil diubah');
    }

    public function destroy(Student $Student){
        
        $Student->delete();

        return redirect()->route('Student-list')->with('success', 'Data mahasiswa berhasil dihapus');
    }
}

