@extends('layouts.app')

@section('content')
<h3>New Course</h3>
<div class="panel-body">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
          <form class="" method="POST" action="{{ url('/professor/update/') }}/{{$professor->id}}">
            {{ csrf_field() }}
            <input type="text" class="form-control" name="name" value="{{ $professor->name }}"><br>
            <button type="submit" class="btn btn-warning">Update</button>
          </form>


      </div>
    </div>
  </div>
</div>
@endsection
