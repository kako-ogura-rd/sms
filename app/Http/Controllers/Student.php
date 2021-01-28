<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;
use App\Models\Student as StudentModel;

class Student extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = StudentModel::all();
        return view('student',['students' => $students,'layout' => 'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = StudentModel::all();
        return view('student',['students' => $students,'layout' => 'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'bail|required|max:10',
            'lastname' => 'required|max:10',
            'age' => 'required',
            'major' => 'required',
            'subject' => 'required',
            'credit' => 'required'
        ]);
        $student = new StudentModel();
        $student->firstname = $request->input('firstname');
        $student->lastname = $request->input('lastname');
        $student->age = $request->input('age');
        $student->save();

        $course = new Courses();
        $course->student_id = $student->id;
        $course->major = $request->input('major');
        $course->subject = $request->input('subject');
        $course->credit = $request->input('credit');
        $course->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = StudentModel::find($id);
        $students = StudentModel::all();
        return view('student',['student' => $student,'students' => $students, 'layout' => 'show']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = StudentModel::find($id);
        $students = StudentModel::all();
        return view('student',['student' => $student,'students' => $students, 'layout' => 'edit']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = StudentModel::find($id);
        $student->firstname = $request->input('firstname');
        $student->lastname = $request->input('lastname');
        $student->age = $request->input('age');
        $student->major = $request->input('major');
        $student->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->destroy();
        return redirect('/');
    }
}
