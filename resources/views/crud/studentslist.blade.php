@extends('layouts.structure')
@section('title' , 'students')
@section('body')
    <h3>List of available students in semester {{$semester}}</h3>
	<table class="table table-hover">
	  <thead>
	    <tr class="table-primary">
	      <th scope="col">#</th>
	      <th scope="col">Name</th>
	      <th scope="col">Added</th>
	      <th scope="col">Updated</th>
	      <th scope="col">Action</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach($students as $count=>$student)
	    <tr>
	      <th scope="row">{{$count+1}}</th>
	      <td><a href="/semester-category/students-list/{{$student->id}}">{{$student->name}}</a></td>
	      <td>{{$student->created_at->diffForHumans()}}</td>
	      <td>{{$student->updated_at->diffForHumans()}}</td>
	      <td>
	      	<a href="/semester-category/students-list/{{$student->id}}/update" class="btn btn-info">Update</a>
	      	<form class="d-inline" action="/semester-category/students-list/{{$student->id}}/delete" method="post">
       	    	{{csrf_field()}}
       	    	{{method_field('DELETE')}}
       	    	<input class="btn btn-danger" type="submit" name="delete" value="Delete">
	       	</form>
	      </td>
	    </tr>
        @endforeach
      </tbody>
	</table>
@endsection