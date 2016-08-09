@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
    <table class="table table-striped">
        <a href="/professor/create" class="btn_create btn-success">Add Professor</a>
        <tr>
          <th>Name</th>
          <th>Code</th>
          <th></th>
          <th></th>
          <th></th>
        </tr>
        @foreach($courses as $course)
        <tr>
          <td>{{ $course->description }}</td>
          <td>{{ $course->codigo }}</td>
          <td>
            <a href="/professor/show/{{$course->id}}">
              <i class="fa fa-eye icon" aria-hidden="true"></></i>
            </a>
          </td>
          <td>
            <a href="/professor/edit/{{$course->id}}">
              <i class="fa fa-pencil icon" aria-hidden="true"></></i>
            </a>
          </td>
          <td>
            <a href="/professor/delete/{{$professor->id}}">
              <i class="fa fa-trash icon" aria-hidden="false"></i>
            </a>
          </td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
</div>
@endsection

