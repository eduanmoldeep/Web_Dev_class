<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the Students.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = \App\Student::all();
        return view('student.index',compact('students'));
    }

    /**
     * Show the form for creating a new student.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created student in database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'std_name' => 'required',
            'std_email' => 'required|unique:students'
        ]);

        $student = new \App\Student();
        $student->name = $request->get('std_name');
        $student->email = $request->get('std_email');
        $student->sem = $request->get('std_sem');
        $student->gender = $request->get('std_gender');

        $student->save();
    }

    /**
     * Display the specified student.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = \App\Student::find($id);
        return view('student.show',compact('student'));
    }

    /**
     * Show the form for editing the specified student.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = \App\Student::find($id);
        return view('student.edit',compact('student'));
    }

    /**
     * Update the specified student in database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'std_name' => 'required',
            'std_email' => 'required'
        ]);

        $student = \App\Student::find($id);
        
        $student->name = $request->get('std_name');
        $student->email = $request->get('std_email');
        $student->sem = $request->get('std_sem');
        $student->gender = $request->get('std_gender');

        $student->save();
    }

    /**
     * Remove the specified student from database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student  = \App\Student::find($id);
        $student->delete();
    }
}