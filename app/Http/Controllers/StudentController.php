<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    private $subjects;
    private $students;
    private $student;

    public function index()
    {
        return view('student.index');
    }

    public function manage()
    {
        $this->students = Student::all();
        return view('student.manage', ['students' => $this->students]);
    }

    public function create(Request $request)
    {
        Student::newStudent($request);
        return redirect()->back()->with('message', 'Student info save successfully.');
    }

    public function edit($id)
    {
        $this->student = Student::find($id);
        $this->subjects = explode(", ", $this->student->subject);
        return view('student.edit', ['student' => $this->student, 'subjects' => $this->subjects]);
    }

    public function update(Request $request, $id)
    {
        Student::updateStudent($request, $id);
        return redirect('/manage-student')->with('message', 'Student info update successfully.');
    }

    public function delete($id)
    {
        Student::deleteStudent($id);
        return redirect('/manage-student')->with('message', 'Student info delete successfully.');
    }
}
