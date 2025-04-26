<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function getStudents()
    {
        $students = Student::all();
        return response()->json($students);
    }

    public function createStudent(Request $request)
    {
        try {

            $request->validate([
                'firstname' => 'required|string|max:255',
                'lastname' => 'required|string|max:255',
                'age' => 'required|integer|min:1',
                'gender' => 'required|string',
            ]);


            $student = Student::create($request->all());


            return response()->json([
                'status' => 'success',
                'message' => 'Student created successfully',
                'data' => $student,
            ], 201);

        } catch (\Exception $e) {

            return response()->json([
                'status' => 'error',
                'message' => 'Failed to create student',
                'error' => $e->getMessage(),
            ], 500);
        }
    }


    public function updateStudent(Request $request, $id)
    {
        $student = Student::find($id);

        if (!$student) {
            return response()->json([
                'status' => 'error',
                'message' => 'Student not found'
            ], 404);
        }

        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'age' => 'required|integer|min:1',
            'gender' => 'required|string',
        ]);

        $student->update($request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'Student updated successfully',
            'student' => $student
        ], 200);
    }


    public function deleteStudent($id)
    {
        try {
            $student = Student::findOrFail($id);
            $student->delete();

            return response()->json([
                'status' => 'success',
                'message' => 'Student has been deleted successfully'
            ], 200);
        } catch (\Exception $e) {

            return response()->json([
                'status' => 'error',
                'message' => 'Failed to delete the student'
            ], 500);
        }
    }

    public function showStudent($id)
    {
        $student = Student::find($id);

        if (!$student) {
            return response()->json(["error" => "Student not found"], 404);
        }

        return response()->json($student);
    }


}
