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
    	$request->validate([
            'name' => 'required',
            'semester' => 'required',
            'reg_no' => 'required',
            'image' => 'required',
        ]);
        if ($request->hasFile('image')) {
    		$image = $request->file('image');
    		$orignal_name = $image->getClientOriginalName();
            $ext = $image->getClientOriginalExtension();
            $name_wt = time().$orignal_name;
            $image_name = md5($name_wt).".".$ext;
            if ($ext == 'png' or $ext == 'jpg' or $ext == 'jpeg') {
                $image->move(public_path().'/images', $image_name);
                $data = student::find($id);
                $prv_imgname = $data->img_name;
                unlink(public_path().'/images/'.$prv_imgname);
                $data->name = $request->get('name');
                $data->semester = $request->get('semester');
                $data->reg_no = $request->get('reg_no');
                $data->img_name = $image_name;
                $data->save();
                return redirect('/students-list/'.$id)->with('success', 'Student data has been updated');
            }
    		else{
                return redirect('/students-list/'.$id.'/update')->with('error', 'file type not allowed');
            }
    	}
    	
    }
}
