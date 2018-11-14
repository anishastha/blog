@extends('main')
@section('stylesheets')
{!!Html::style('css/parsley.css')!!}
@endsection
@section('title' , '|contact')
@include('partials/inc_message')
@section('content')
  <div class="col-md-8 offset-md-2">
  <form action="{{route('contact.store')}}" method="POST" data-parsley-validate>{{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="memail" name="memail" aria-describedby="emailHelp" placeholder="Enter email" data-parsley-required data-parsley-type="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Subject</label>
    <input type="text" class="form-control" id="msubject" name="msubject" placeholder="Subject" data-parsley-required>
  </div>
  <div class="form-group">
    <label for="message">Message</label>
    <textarea class="form-control" id="message" name="message" data-parsley-required> Send your message</textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@section('scripts')
{{!!Html::script('js/parsley.min.js')!!}}

@endsection

@endsection
