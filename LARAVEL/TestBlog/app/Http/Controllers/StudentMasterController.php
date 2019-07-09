<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentMasterController extends Controller
{
    /**
     * Display a listing of the students.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('student/index');
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
     * Store a newly created studnt in database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     * 
     */
    public function store(Request $request)
    {
        //dd($request->get('name'));
        $student = new \App\Student();
        $student->name = $request->get('std_name');
        $student->email = $request->get('std_email');
        $student->sem = $request->get('std_sem');
        $student->gender = $request->get('std_gender');
        
        //store in data base
        $student->save();

        $phone = new \App\Phone();
        $phone->student_id = $student->id;
        $phone->phone= $request->get('std_phone');

        $phone->save();

        redirect('student/');



    }

    /**
     * Display the specified student.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified student.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified student from database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
