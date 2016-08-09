@extends('layouts.app')

@section('content')
<h3>New Course</h3>
<div class="panel-body">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <form class="" method="POST" action="{{ url('/course/store') }}">
          {{ csrf_field() }}
           <input type="text" class="form-control" name="description" value="" placeholder="Description"><br>
          <button class="btn btn-success" type="submit">Create</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
