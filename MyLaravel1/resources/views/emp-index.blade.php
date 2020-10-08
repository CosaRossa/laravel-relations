@extends('layouts.main-layout')
@section('content')
  <h2>EMPLOYEES:</h2>
  <div class="main-container">
    <ul>
      @foreach ($emps as $emp)
        <li>
          &#8226;
          <a href="{{route('emp.show', $emp -> id)}}">
            {{$emp -> firstname}}
            {{$emp -> lastname}}
          </a>
        </li>
      @endforeach
    </ul>
    <br><br>
    <a href="{{route('emp.create')}}">NEW EMPLOYEE</a>
  </div>
@endsection
