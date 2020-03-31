<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::OrderBy('id', 'desc')->paginate(5);
        return view('student.index')->with('students', $students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'country' => 'required',
            'city' => 'required',
            'address' => 'required',
            'gender' => 'required',
        ]);
        $student = array(
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'country' => $request->country,
            'city' => $request->city,
            'address' => $request->address,
            'gender' => $request->gender,
        );

        Student::create($student);

        return redirect()->route('student.index')->with('success', 'User Created Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $student = array(
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'country' => $request->country,
            'city' => $request->city,
            'address' => $request->address,
            'gender' => $request->gender,
        );

        Student::findOrfail($request->student_id)->update($student);

        return redirect()->route('student.index')->with('success', 'Student Information Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $student)
    {
        $delete = Student::findOrfail($student->student_id);
        $delete->delete();
        return redirect()->route('student.index')->with('success', 'Student Deleted Successfully');
    }
}