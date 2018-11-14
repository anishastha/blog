@extends('main')
@section('title','|allPosts')
@section('stylesheets')
<link rel="stylesheet" href="{{('css/style.css')}}">
@endsection
@section('content')
@foreach($data as $row)
<div class="row">
  <div class="col-md-8">
    <div class="post">





      <h3>{{$row->title}}</h3><td> <a href="{{route('posts.edit',$row->id)}}" > <button class="btn btn-primary"> Edit </button> </a>
        <form action="{{route('posts.destroy',$row->id)}}" method="POST" class="d-inline-block">{{csrf_field()}}
        @method('delete')
       <input type="submit" value="Delete" class="btn btn-danger"> </td> </form>
      <p> {{$row->description}} </p>
      <div class="dates">
    <p>  created at: {{$row->created_at}}  </p>

        <p> updated at: {{$row->updated_at}} </p>
      </div>

  </div>

</div>
</div>
@endforeach

@endsection
