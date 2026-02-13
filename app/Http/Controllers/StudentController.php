<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //
    public function index()
    {
        $samples = Student::all();
        return view('students.index', ["samples" => $samples]);
    }
    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'course' => 'required',
            'year_level' => 'required'
        ]);

        $newStudent = Student::create($data);

        return redirect(route('students.index'));
    }
}
