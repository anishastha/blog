@extends('main')
@section('stylesheets')
{{!!Html::style('css/parsley.css')!!}}

@endsection
@section('title','|edit post')
@section('content')
<div class="row justify-content-center">
  <h1> Update POST </h1>
</div>

  <div class="row">
    <div class="col-md-2"> </div>
    <div class="col-md-8">
      <form method="post" action="{{route('posts.update', $row->id)}}">{{csrf_field()}}
@method('put')


      <div class="form-group">
      <label for="inputEmail4">Title</label>
      <input type="text" class="form-control" id="title"  name="title" value="{{$row->title}}">
      </div>
      <div class="form-group">
      <label for="inputEmail4">Description</label>
      <textarea class="form-control" id="description"  name="description"> {{$row->description}}</textarea>
      </div>
      <label for="created date">Created At</label>
      <input type="text" class="form-control" id="created_at"  name="created_at" value="{{date('M j Y H:i ', strtotime($row->created_at))}}" disabled>

      <label for="inputEmail4">Updated At</label>
      <input type="text" class="form-control" id="updated_at"  name="updated_at" value="{{date('M j Y H:i ', strtotime($row->updated_at))}}" disabled>
      </div>
    </div>
<div class="col-md-2 offset-md-2">

      <button type="submit" class="btn btn-primary">Update</button>
    </div>

      </form>
    </div>

  </div>
  <div class="col-md-2"> </div>
</div>
@section('scripts')
{{!!Html::script('js/parsley.min.js')!!}}

@endsection


@endsection
