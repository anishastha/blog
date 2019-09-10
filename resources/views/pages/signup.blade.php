@extends('main')
@section('stylesheets')
{!!Html::style('css/parsley.css')!!}
@endsection
@section('title','|Signup')
@include('partials/inc_message')
@section('content')
<div class="row">
<a href="{{route('signup.index')}}"> <button type="submit" class="btn btn-primary">View all Students</button> </a>
</div>
<div class="row" style="margin-top:30px;">
  <div class="col-md-8 offset-md-2">
    <form action="{{route('signup.store')}}" method="POST" data-parsley-validate enctype="multipart/form-data">{{csrf_field()}}
      <div class="form-row">
      <div class="form-group col-md-6">
        <label for="firstname">First Name</label>
        <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name">
      </div>
      <div class="form-group col-md-6">
        <label for="firstname">Last Name</label>
        <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name">
      </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="email"  name="email" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div>
  </div>

  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="contact">Contact </label>
    <input type="text" class="form-control" id="contact" name="contact" placeholder="Mobile no">
  </div>

    <div class="form-group col-md-6">
      <label for="inputState">State</label>
      <select id="country" name="country" class="form-control">
        <option selected> Nepal</option>
        <option>India</option>
        <option>China</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="photp">Profile Image </label>
    <input type="file" class="form-control" id="photo" name="photo">
  </div>

  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
  </div>
</div>


@endsection
