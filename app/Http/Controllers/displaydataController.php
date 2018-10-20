<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
class displaydataController extends Controller
{
    public function index(){
        $students = student::all();
    	return view('crud.index', compact('students'));
    }
    public function studentdata($id){
    	$student = student::find($id);
    	return view('crud.show', compact('student'));
    }
}
