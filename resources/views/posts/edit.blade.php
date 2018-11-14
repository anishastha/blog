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
      <form>



      <div class="form-group">
      <label for="inputEmail4">Title</label>
      <input type="email" class="form-control" id="title"  name="title" value="{{$row->title}}">
      </div>
      <div class="form-group">
      <label for="inputEmail4">Description</label>
      <textarea class="form-control" id="description"  name="description"> {{$row->description}}</textarea>
      </div>
      <label for="created date">Title</label>
      <input type="text" class="form-control" id="created_at"  name="created_at" value="{{$row->created_at}}">
      </div>
      <label for="inputEmail4">Title</label>
      <input type="email" class="form-control" id="updated_at"  name="updated_at" value="{{$row->updated_at}}">
      </div>

      <button type="submit" class="btn btn-primary">Update</button>
      </form>
    </div>

  </div>
  <div class="col-md-2"> </div>
</div>
@section('scripts')
{{!!Html::script('js/parsley.min.js')!!}}

@endsection


@endsection
