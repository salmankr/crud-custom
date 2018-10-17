@extends('layouts.structure')
@section('title', 'update')
@section('body')
    <h2 class="text-muted">Update form for {{$student->name}}</h2>
	<form class="col-lg-6 col-sm-8 col-xs-12" action="/semester-category/students-list/{{$student->id}}/update" method="post" enctype="multipart/form-data">
		{{csrf_field()}}
		{{method_field('PUT')}}
	  <div class="form-group">
	    <label for="name">Name</label>
	    <input type="text" class="form-control" value="{{$student->name}}" name="name">
	  </div>
	  <div class="form-group">
	    <label for="semester">Enter Semester Number</label>
	    <input type="text" type="text" pattern="[1-8]{1}" class="form-control" value="{{$student->semester}}" name="semester">
	  </div>
	  <div class="form-group">
	    <label for="registrationnumber">Reg. Number</label>
	    <input type="text" pattern="[0-9]{3}-[0-9]{2}" class="form-control" value="{{$student->reg_no}}" name="reg_no">
	  </div>
	  <div class="form-group">
	    <label for="image">Upload image</label>
	    <input class="d-block" type="file" name="image">
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
@include('messages.validationerr')
@include('messages.session_err')
@endsection