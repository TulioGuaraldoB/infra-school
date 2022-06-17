<?php

namespace App\Repositories;

use App\Models\Student;

class StudentRepository
{
    public function __construct(Student $studentModel)
    {
        $this->studentModel = $studentModel;
    }

    public function getAll()
    {
        try {
            $students = $this->studentModel::all();

            return $students;
        } catch (\Exception $ex) {
            return $ex;
        }
    }

    public function show($id)
    {
        try {
            $student = $this->studentModel::find($id);

            return $student;
        } catch (\Exception $ex) {
            return $ex;
        }
    }

    public function create($request)
    {
        try {
            $student = $this->studentModel::create($request->all());

            return  $student;
        } catch (\Exception $ex) {
            return $ex;
        }
    }

    public function update($id, $request)
    {
        try {
            $student = $this->studentModel::findOrFail($id);
            $student->update($request->all());

            return $student;
        } catch (\Exception $ex) {
            return $ex;
        }
    }
}
