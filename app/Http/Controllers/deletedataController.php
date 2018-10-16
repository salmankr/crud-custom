<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;

class deletedataController extends Controller
{
    public function delete($id){
    	$student = student::find($id);
    	$image_name = $student->img_name;
    	$delete = unlink(public_path().'/images/'.$image_name);
    	if ($delete) {
    		$student->delete();
    		return redirect('/semester-category')->with('success', 'Student data has been deleted');
    	}
    	else{
    		return redirect('/semester-category')->with('success', 'Some error occured');
    	}
    }
}
