@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
    <table class="table table-striped">
        <a href="/group/create" class="btn_create btn-success">Add Group</a>
        <tr>
          <th>Professor</th>
          <th>Course</th>
          <th></th>
          <th></th>
          <th></th>
        </tr>
        @foreach($groups as $group)
        <tr>
          <td>{{ $group->id_professor->name }}</td>
          <td>{{ $group->id_course->description}}</td>
          <td>
            <a href="/group/show/{{$group->id}}">
              <i class="fa fa-eye icon" aria-hidden="true"></></i>
            </a>
          </td>
          <td>
            <a href="/group/edit/{{$group->id}}">
              <i class="fa fa-pencil icon" aria-hidden="true"></></i>
            </a>
          </td>
          <td>
            <a href="/group/delete/{{$group->id}}">
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
