@extends('main')
@section('title','|All Students')

@section('content')
@include('partials/inc_message')
<div class="row justify-content-center">
  <h1> All Students </h1>
</div>
<table class="table table-striped">
  <thead>
    <tr>

      <th scope="col">Fname</th>
      <th scope="col">Lname</th>
      <th scope="col">Contact</th>
      <th scope="col">Country </th>
    </tr>
  </thead>
@foreach($students as $row)

  <tbody>
    <tr>

      <td>{{$row->fname}}</td>
      <td>{{$row->lname}}</td>
      <td>{{$row->contact}}</td>
        <td>{{$row->country}}</td>


        @if(Auth::user()->role=='admin')
    <td>   <a href="{{route('signup.edit',$row->id)}}" >  <button class="btn btn-primary"> Edit </button> </a>
         <form action="{{route('signup.destroy',$row->id)}}" method="POST" class="d-inline-block">{{csrf_field()}}
         @method('delete')

         <button class="btn btn-danger"> Delete </button>
       </form>
     </td>
     @endif

    </tr>

  </tbody>

@endforeach
</table>
@endsection
