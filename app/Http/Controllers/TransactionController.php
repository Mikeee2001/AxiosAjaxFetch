<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
     public function Students()
    {
        $students = Students::with('departments','grades')->get();

        return response()->json([
                    "success" => true,
                    "students" => $students
                ],200);
    //      return view("students",compact('students'));
     }

    public function displayDataUsingJs(){
        $student = Students::with('departments', 'grades')->with(['grades' => function($grade){
            $grade->selectRaw("*, COALESCE(CAST((MidtermGrade + FinalGrade) / 2 AS DECIMAL(10,2)), 0) AS cumulativeGrade");
        }])
        ->get();

        return response()->json(["success" => true, "students" =>  $student], 200);
    }

    public function getStudent(){


        // return response()->json([
        //                  "success" => true,
        //                  "students" => $student
        //                 ],200);
       return view("student",);
        //return response()->json(["success" => true, "students" =>  $student], 200);
    }

}
