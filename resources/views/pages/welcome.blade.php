@extends('main')
@section('title' , '|homepage')
@section('content')
<div class="row" style="margin-top:20px;">
  <a href="{{route('courses.create')}}"> <button class="btn btn-primary"> Add New Course </button></a>
</div>
  <div class="row">

  <div class="jumbotron col-md-12" style="margin-top:20px;">
  <h1 class="display-4">Hello, world!</h1>
  <p class="lead">Welcome to my blog.</p>
  <hr class="my-4">
  <p>this is the blog made with html css and laravel.Please view my latest posts</p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div>
</div>
<div class="row">
  <div class="col-md-8">
    <div class="post">
      <h3> Title </h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sit amet velit quis dolor euismod cursus. Aliquam iaculis placerat rhoncus. Suspendisse aliquam elit sed nisi volutpat luctus. Sed gravida ante ac mi elementum, sed pulvinar dui vehicula. Duis porttitor dui vitae mauris eleifend vulputate. Vestibulum suscipit tellus vel justo rhoncus fermentum. Nam vel risus quis enim molestie maximus. Pellentesque ornare venenatis mauris. </p>
    </div>

  </div>
  <div class="col-md-3 col-md-offset-1">
    <h3> Sidebar </h3>
</div>
</div>
@endsection
