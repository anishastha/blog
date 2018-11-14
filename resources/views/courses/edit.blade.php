@extends('main');
@section('title','|Edit Course')
@section('stylesheets')
<link href="css/style.css" rel="stylesheet">
@endsection
@section('content')

<div class="row courseform">
  <div class="col-md-8 offset-md-2">
    <form action="{{route('courses.update',$row->id)}}" method="POST" data-parsley-validate>{{csrf_field()}}
      @method('put')
 <fieldset>
  <legend> Add New Course </legend>
      <div class="form-group">
        <label for="coursname">Course Name</label>
        <input type="text" class="form-control" id="cname" name="cname" value="{{$row->cname}}">
      </div>
      <div class="form-group">
        <label for="credithours">Credit Hours</label>
        <input type="text" class="form-control" id="credit" name="credit" value="{{$row->credit}}">
      </div>


    <div class="form-group">
      <label for="Teacher">Teacher Name</label>
      <input type="text" class="form-control" id="teacher"  name="teacher" value="{{$row->teacher}}">
    </div>


  <button type="submit" class="btn btn-primary col-md-2">UPDATE</button>
 <fieldset>
</form>
  </div>
</div>
@endsection
