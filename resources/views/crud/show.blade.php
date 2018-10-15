@extends('layouts.structure')
@section('title', 'data')
@section('body')
<div class="row w-100 pt-3">
	<div class="col-lg-6">
		<img class="img-thumbnail rounded-circle" src="{{url('/images', $student->img_name)}}">
	</div>
	<div class="col-lg-6">
		<h3 class="text-muted">Name</h3><p>{{$student->name}}</p>
		<h3 class="text-muted">Semeseter</h3><p>{{$student->semester}}</p>
		<h3 class="text-muted">Registration No#</h3><p>{{$student->reg_no}}</p>
	</div>
</div>
@include('messages.session_success')
@endsection