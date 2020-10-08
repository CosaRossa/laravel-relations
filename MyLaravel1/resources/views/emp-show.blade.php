@extends('layouts.main-layout')
@section('content')
  <h2>
    EMPLOYEE:
    {{$emp -> firstname}}
    {{$emp -> lastname}}
  </h2>
  <div class="main-container">
    <ul>
      <li>
        &#8226; Date of Birth: <br>
        {{$emp -> date_of_birth}}
      </li>
      <li>
        &#8226; Private Code: <br>
        {{$emp -> private_code}}
      </li>
      <li>
        &#8226; Location: <br>
        <a href="{{route('loc.show', $emp -> location -> id)}}">
          {{$emp -> location -> street}} -
          {{$emp -> location -> city}} -
          {{$emp -> location -> state}}
        </a>
      </li>
      <li>
        &#8226; Tasks: <br>
        <ul>
          @foreach ($emp -> tasks as $tas)
            <li>
              <a href="{{route('task.show', $tas -> id)}}">
                {{$tas -> name}}:
              </a>
              {{$tas -> start_date}} - {{$tas -> end_date}}
            </li>
          @endforeach
        </ul>
      </li>
    </ul>
    <br>
    <a href="#">EDIT</a>
    <br>
    <a href="{{route('emp.destroy', $emp -> id)}}">DELETE</a>
    <br>
  </div>
@endsection
