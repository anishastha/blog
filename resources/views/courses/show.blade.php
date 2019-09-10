@extends('main')
@section('title','|All Courses')

@section('content')
@include('partials/inc_message')
<div class="row justify-content-center">
  <h1> All Courses</h1>
</div>
<table class="table table-striped">
  <thead>
    <tr>

      <th scope="col">Course Name</th>
      <th scope="col">Credit Hours</th>
      <th scope="col">Teacher</th>
    </tr>
  </thead>
@foreach($data as $row)

  <tbody>
    <tr>

      <b> <td>{{$row->cname}}</td> </b>
      <td>{{$row->credit}}</td>
      <td>{{$row->teacher}}</td>


      @if(!Auth::user()->role=='user')


    <td>   <button class="btn btn-primary" class="btn btn-primary" data-toggle="modal" data-target="#editcourse{{$row->id}}"> Edit </button>
         <form action="{{route('courses.destroy',$row->id)}}" method="POST" class="d-inline-block">{{csrf_field()}}
         @method('delete')

         <button class="btn btn-danger"> Delete </button>

       </form>
     </td>
       @endif

    </tr>

  </tbody>

@endforeach
</table>
<!--modal form -->
@foreach($data as $rows)
<div class="modal fade" id="editcourse{{$rows->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Course</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('courses.update',$rows->id)}}" method="POST" data-parsley-validate>{{csrf_field()}}
          @method('put')

          <div class="form-group">
            <label for="coursname">Course Name</label>
            <input type="text" class="form-control" id="cname" name="cname" value="{{$rows->cname}}">
          </div>
          <div class="form-group">
            <label for="credithours">Credit Hours</label>
            <input type="text" class="form-control" id="credit" name="credit" value="{{$rows->credit}}">
          </div>


        <div class="form-group">
          <label for="Teacher">Teacher Name</label>
          <input type="text" class="form-control" id="teacher"  name="teacher" value="{{$rows->teacher}}">
        </div>


      <button type="submit" class="btn btn-primary col-md-2">UPDATE</button>

    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endforeach
@endsection
