<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
class displaydataController extends Controller
{
    public function index(){
        $semesters = student::select('semester')->distinct()->get();
    	return view('crud.index', compact('semesters'));
    }
    public function students(Request $request){
    	$semester = $request->get('semester');
    	$students = student::where('semester', $semester)->get();
    	return view('crud.studentslist', compact('students', 'semester'));
    }
    public function studentdata($id){
    	$student = student::find($id);
    	return view('crud.show', compact('student'));
    }
}
