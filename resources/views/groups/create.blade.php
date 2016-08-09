@extends('layouts.app')

@section('content')
<h3>New Course</h3>
<div class="panel-body">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">

        <form class="" method="POST" action="{{ url('/group/store') }}">
          {{ csrf_field() }}

           <select class="form-control" name="id_professor">
              @foreach($professors as $professor)
                <option value="{{ $professor->id }}">{{ $professor->name }}</option>
              @endforeach
           </select>

           <select class="form-control" name="id_course">
              @foreach($courses as $course)
                <option value="{{ $course->id }}">{{ $course->description }}</option>
              @endforeach
           </select>

          <button class="btn btn-success" type="submit">Create</button>

        </form>


      </div>
    </div>
  </div>
</div>
@endsection
