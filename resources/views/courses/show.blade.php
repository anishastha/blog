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

    <td>   <a href="{{route('courses.edit',$row->id)}}" >  <button class="btn btn-primary"> Edit </button> </a>
         <form action="{{route('courses.destroy',$row->id)}}" method="POST" class="d-inline-block">{{csrf_field()}}
         @method('delete')

         <button class="btn btn-danger"> Delete </button></td>
       </form>

    </tr>

  </tbody>

@endforeach
</table>
@endsection
