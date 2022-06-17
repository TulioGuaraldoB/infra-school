<?php

namespace App\Http\Controllers;

use App\Repositories\StudentRepository;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function __construct(StudentRepository $studentRepository)
    {
        $this->studentRepository = $studentRepository;
    }

    public function getAllStudents()
    {
        return response()->json($this->studentRepository->getAll());
    }

    public function showStudent($id)
    {
        return response()->json($this->studentRepository->show($id));
    }

    public function insertStudent(Request $request)
    {
        return response()->json($this->studentRepository->create($request));
    }

    public function updateStudent($id, Request $request)
    {
        return response()->json($this->studentRepository->update($id, $request));
    }
}
