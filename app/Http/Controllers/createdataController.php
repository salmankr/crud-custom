<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;

class createdataController extends Controller
{
    public function form(){
    	return view('crud.create');
    }
    public function store(request $request){
    	$request->validate([
            'name' => 'required',
            'semester' => 'required',
            'reg_no' => 'required|unique:students',
    	]);
    	if ($request->hasFile('image')) {
    		$image = $request->file('image');
    		$image_name = time().$image->getClientOriginalName();
    		$image->move(public_path().'/images', $image_name);
    	}
        $data = new student;
        $data->name = $request->get('name');
        $data->semester = $request->get('semester');
        $data->reg_no = $request->get('reg_no');
        $data->img_name = $image_name;
        $data->save();
        return redirect('/semester-category')->with('success', 'new student has been added');

    }
}
