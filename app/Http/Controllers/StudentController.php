<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller {
    public function __construct(Student $student) {
        $this->student = $student;
    }

    public function getAll() {
        $students = $this->student::all();

        return response()->json($students);
    }

    public function show($id) {
        $student = $this->student::find($id);

        return response()->json($student);
    }

    public function create(Request $request) {
        $studentCreated = $this->student::create($request->all());

        return response()->json($studentCreated);
    }

    public function update($id, Request $request) {
        $studentUpdated = $this->student::findOrFail($id);
        $studentUpdated->update($request->all());

        return response()->json($studentUpdated);
    }
}