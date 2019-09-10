@extends('layouts.app')

@section('content')
<div class="container">

<div class="row">
  <div class="col-md-2">
      <a href="{{route('signup.create')}}"> <button class="btn btn-primary"> Add New Student </button></a>
    </div>
    <div class="col-md-2">
    <a href="{{route('courses.create')}}"> <button class="btn btn-primary"> Add New Course </button></a>
  </div>

  <div class="col-md-2">
  <a href="{{route('posts.create')}}"> <button class="btn btn-primary"> Add New Post </button></a>
</div>



</div>

                </div>

@endsection
