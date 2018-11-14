@extends('main')
@section('stylesheets')
{!!Html::style('css/parsley.css')!!}
@endsection
@section('title','|Edit Details')
@include('partials/inc_message')
@section('content')
<div class="row">
<a href="{{route('signup.index')}}"> <button type="submit" class="btn btn-primary">View all Students</button> </a>
</div>
<div class="row" style="margin-top:30px;">
  <div class="col-md-8 offset-md-2">

    <form action="{{route('signup.update',$row->id)}}" method="POST" data-parsley-validate>{{csrf_field()}}
      @method('put')
      <div class="form-row">
      <div class="form-group col-md-6">
        <label for="firstname">First Name</label>
        <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" value="{{$row->fname}}">
      </div>
      <div class="form-group col-md-6">
        <label for="firstname">Last Name</label>
        <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" value="{{$row->lname}}">
      </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="email"  name="email" placeholder="Email" value="{{$row->email}}">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="{{$row->password}}" disabled>
    </div>
  </div>

  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="contact">Contact </label>
    <input type="text" class="form-control" id="contact" name="contact" placeholder="Mobile no" value="{{$row->contact}}">
  </div>

    <div class="form-group col-md-6">
      <label for="inputState">State</label>
      <select id="country" name="country" class="form-control" value="{{$row->country}}">
        <option> Nepal</option>
        <option>India</option>
        <option>China</option>
      </select>
    </div>
  </div>

  <button type="submit" class="btn btn-primary">Update</button>
</form>
  </div>
</div>


@endsection
