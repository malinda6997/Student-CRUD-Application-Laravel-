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
        $request->validate([
    'name' => 'required|string|min:5|max:50', // Ensures name is a string between 5 to 50 characters
    'email' => 'required|email',              // Ensures a valid email format
    'mobile' => 'required|numeric|digits_between:10,15', // Ensures mobile is numeric and between 10 to 15 digits
]);

        // dd($request->all());
        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->mobile;
        $student->save();

        return redirect('/students')->with('mgs',"Record Added Successfully");
    }

    public function edite($id){
        $student = student::find($id);
        return view('students.edite',compact('student'));

    }

     public function update($id, Request $request){

        $request->validate([
    'name' => 'required|string|min:5|max:50', 
    'email' => 'required|email',              
    'mobile' => 'required|numeric|digits_between:10,15',
    ]);

        $student = student::find($id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->mobile;
        $student->save();

        return redirect('/students')->with('mgs',"Record Updated Successfully");

        

    }


   
}