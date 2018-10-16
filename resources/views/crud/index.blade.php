@extends('layouts.structure')
@section('title', 'index')
@section('body')
  <form class="col-lg-6 col-sm-8 col-xs-12" action="/semester-category/students-list" method="post">
    {{csrf_field()}}
    <div class="form-group">
      <label for="exampleFormControlSelect1"><b>Select Semester:</b></label>
      <select class="form-control" name="semester">
        <option>...</option>
        @foreach($semesters as $semester)
          <option>
            {{$semester->semester}}
          </option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
    	<input type="submit" name="sub_btn" class="btn btn-primary" value="submit">
    </div>
  </form>
  @include('messages.session_success')
  @include('messages.session_err')
@endsection