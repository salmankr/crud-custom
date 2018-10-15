@extends('layouts.structure')
@section('title' , 'students')
@section('body')
    <div class="list-group col-lg-8">
        <h3>List of available students in semester {{$semester}}</h3>
        @foreach($students as $student)
	        <div class="list-group-item list-group-item-action d-flex justify-content-between">
	       	    <a href="/semester-category/students-list/{{$student->id}}" class="h3">{{$student->name}}</a>
	       	   <p class="d-inline">Added {{$student->created_at->diffForHumans()}}</p>
	       	   <p class="d-inline">Updated {{$student->updated_at->diffForHumans()}}</p>
	       	    <a href="/semester-category/students-list/{{$student->id}}/update" class="btn btn-info">Update</a>
	       	    <form action="/semester-category/students-list/{{$student->id}}/delete" method="post">
	       	    	{{csrf_field()}}
	       	    	{{method_field('DELETE')}}
	       	    	<input class="btn btn-danger" type="submit" name="delete" value="Delete">
	       	    </form>
	        </div>
        @endforeach
    </div>
@endsection