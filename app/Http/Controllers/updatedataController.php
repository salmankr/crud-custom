<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
class updatedataController extends Controller
{
    public function updateform($id){
        $student = student::find($id);
        return view('crud.update', compact('student'));
    }
    public function updatedata(Request $request, $id){
    	if ($request->hasFile('image')) {
    		$image = $request->file('image');
    		$image_name = time().$image->getClientOriginalName();
    		$image->move(public_path().'/images', $image_name);
    	}
    	$request->validate([
            'name' => 'required',
            'semester' => 'required',
            'reg_no' => 'required',
    	]);
    	$data = student::find($id);
    	$data->name = $request->get('name');
        $data->semester = $request->get('semester');
        $data->reg_no = $request->get('reg_no');
        $data->img_name = $image_name;
        $data->save();
        return redirect('/semester-category/students-list/'.$id)->with('success', 'Student data has been updated');
    }
}
