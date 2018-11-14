@extends('main')
@section('stylesheets')
{{!!Html::style('css/parsley.css')!!}}

@endsection
@section('title','|creeate post')
@section('content')
<div class="row justify-content-center">
  <h1> CREATE NEW POST </h1>
</div>

  <div class="row">
    <div class="col-md-2"> </div>
    <div class="col-md-8">
    {!! Form::open(array('route' => 'posts.store','data-parsley-validate'=> '')) !!}

      {{Form::label('title','Title:')}}
      {{ Form::text('title',null,array('class' => 'form-control','required'=>'','maxlength'=>'255','minlength'=>'8'))}}

          {{Form::label('description','Description')}}
      {{ Form::textarea('description',null,array('class' => 'form-control','required'=>''))}}
      {{ Form::submit('Create Post',array('class' => 'btn btn-success btn-lg'))}}


  {!! Form::close() !!}
  </div>
  <div class="col-md-2"> </div>
</div>
@section('scripts')
{{!!Html::script('js/parsley.min.js')!!}}

@endsection


@endsection
