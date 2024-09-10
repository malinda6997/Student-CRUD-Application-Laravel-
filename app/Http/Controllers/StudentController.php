<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index',compact('students'));
        //return view('students.index',['students' => $students]);
    }

    public function create()
    {
        return view('students.create');
    }

    public function Store(Request $request)
    {
        // dd($request->all());
        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->mobile;
        $student->save();

        return redirect('/students')->with('mgs',"Record Added Successfully");
    }

   
}