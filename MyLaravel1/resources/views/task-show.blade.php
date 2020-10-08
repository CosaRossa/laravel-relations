@extends('layouts.main-layout')
@section('content')
  <h2>
    TASK:
    {{$task -> name}}
  </h2>
  <div class="main-container">
    <ul>
      <li>
        &#8226; Start Date: <br>
        {{$task -> start_date}}
      </li>
      <li>
        &#8226; End Date: <br>
        {{$task -> end_date}}
      </li>
      <li>
        &#8226; Description: <br>
        {{$task -> description}}
      </li>
      <li>
        &#8226; Employees: <br>
        <ul>
          @foreach ($task -> employees as $emp)
            <li>
              -
              <a href="{{route('emp.show', $emp -> id)}}">
                {{$emp -> firstname}} {{$emp -> lastname}}
              </a>
            </li>
          @endforeach
        </ul>
      </li>
    </ul>
  </div>
@endsection
