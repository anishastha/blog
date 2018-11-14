@extends('main');
@section('title','|Add new Course')
@section('stylesheets')
<link href="css/style.css" rel="stylesheet">
@endsection
@section('content')
@include('partials/inc_message')
<div class="row">
<a href="{{route('courses.index')}}"> <button type="submit" class="btn btn-primary">View all course</button> </a>
</div>
<div class="row courseform">
  <div class="col-md-8 offset-md-2">
    <form action="{{route('courses.store')}}" method="POST" data-parsley-validate>{{csrf_field()}}
 <fieldset>
  <legend> Add New Course </legend>
      <div class="form-group">
        <label for="coursname">Course Name</label>
        <input type="text" class="form-control" id="cname" name="cname" placeholder="Course Name" required>
      </div>
      <div class="form-group">
        <label for="credithours">Credit Hours</label>
        <input type="text" class="form-control" id="credit" name="credit" placeholder="Credit Hours" required>
      </div>


    <div class="form-group">
      <label for="Teacher">Teacher Name</label>
      <input type="text" class="form-control" id="teacher"  name="teacher" placeholder="Teacher" required>
    </div>


  <button type="submit" class="btn btn-primary col-md-2">ADD</button>
 <fieldset>
</form>
  </div>
</div>
@endsection
