<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;

class deletedataController extends Controller
{
    public function delete($id){
    	student::find($id)->delete();
    	return redirect('/semester-category')->with('success', 'Student data has been deleted');
    }
}
