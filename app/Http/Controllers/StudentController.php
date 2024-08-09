<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index()
    {
        $students = Student::latest()->paginate(5);

        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'std' => 'required',
        ]);

        $name = ucwords($request->input('name'));
        $std = ucwords($request->input('std'));

        Student::create([
            'name' => $name,
            'gender' => $request->input('gender'),
            'std' => $std,
        ]);

        return redirect()->route('students.index')
            ->with('success', 'Student created successfully.');
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'std' => 'required',
        ]);

        $formattedName = ucwords($request->input('name'));
        $formattedStd = ucwords($request->input('std'));

        $student->update([
            'name' => $formattedName,
            'gender' => $request->input('gender'),
            'std' => $formattedStd,
        ]);
        return redirect()->route('students.index')
            ->with('success', 'Student updated successfully');
    }


    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')
            ->with('success', 'Student deleted successfully');
    }
}
