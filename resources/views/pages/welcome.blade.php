@extends('main')
@section('title' , '|homepage')
@section('content')
@include('partials.inc_message')
<div class="row" style="margin-top:20px;">



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


<div class="modal fade" id="addteacher" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Press Release Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('teacher.store')}}" method="POST"> {{csrf_field()}}

          <div>

          <div class="form-group row">
            <div class="col-md-2">
              <label for="english_title" class="col-form-label"> First Name </label>
            </div>
            <div class="col-md-10">
              <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-2">
              <label for="nepalititle" class="col-form-label">Last Name</label>
            </div>
            <div class="col-md-10">
              <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name">
            </div>
            </div>

            <div class="form-group row">
              <div class="col-md-2">
              <label for="published_date" class="col-form-label"> Email </label>
            </div>
              <div class="col-md-10">
              <input type="email" class="form-control" id="email" name="email" placeholder="Email"/>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-2">
              <label for="link" class="col-form-label">Password</label>
            </div>
              <div class="col-md-10">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
              </div>
            </div>


        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Add</button>
        <button type="reset" class="btn btn-danger"> Reset </button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal"> Close</button>
      </form>
      </div>
    </div>
  </div>
</div>




@endsection
