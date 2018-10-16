@extends('layouts.structure')
@section('title', 'create')
@section('body')
	<form class="col-lg-6 col-sm-8 col-xs-12" action="/add-new-student" method="post" enctype="multipart/form-data">
		{{csrf_field()}}
	  <div class="form-group">
	    <label for="name">Name</label>
	    <input type="text" class="form-control" placeholder="Enter name" name="name">
	  </div>
	  <div class="form-group">
	    <label for="semester">Enter Semester Number</label>
	    <input type="number" class="form-control" placeholder="Enter Semester" name="semester">
	  </div>
	  <div class="form-group">
	    <label for="registrationnumber">Reg. Number</label>
	    <input type="number" class="form-control" placeholder="Enter registration Number" name="reg_no">
	  </div>
	  <div class="form-group">
	    <label for="image">Upload image</label>
	    <input class="d-block" type="file" name="image" required="required">
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
@include('messages.validationerr')
@include('messages.session_err')
@endsection