@extends('layouts.main-layout')
@section('content')
  <h2>
    LOCATION:
    {{$loc -> name}}
  </h2>
  <div class="main-container">
    <ul>
      <li>
        &#8226; Street: <br>
        {{$loc -> street}}
      </li>
      <li>
        &#8226; City: <br>
        {{$loc -> city}}
      </li>
      <li>
        &#8226; State: <br>
        {{$loc -> state}}
      </li>
      <li>
        &#8226; Employees: <br>
        <ul>
          @foreach ($loc -> employees as $emp)
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
