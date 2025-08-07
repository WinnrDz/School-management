<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Student;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $grades = Grade::all();

        return view("grades.index",compact("grades"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $subjects = Subject::all();
        $students = Student::all();

        return view("grades.create", compact("students","subjects"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'grade' => 'required',
            'subject_id' => 'required',
            'student_id' => 'required'
        ]
        );

        Grade::create($validatedData);
        return redirect()->route('grades.index')->with('success', "grade created.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Grade $grade)
    {
    }
}