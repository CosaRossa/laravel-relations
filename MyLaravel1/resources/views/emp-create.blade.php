@extends('layouts.main-layout')
@section('content')
  <h2>NEW EMPLOYEES</h2>
  <div class="main-container">
    <form action="{{route('emp.store')}}" method="post">
      @csrf
      @method('POST')
      <div class="form-group">
        <label for="firstname">Firstname:</label> <br>
        <input type="text" name="firstname" value="">
      </div>
      <br>
      <div class="form-group">
        <label for="lastname">Lastname:</label> <br>
        <input type="text" name="lastname" value="">
      </div>
      <br>
      <div class="form-group">
        <label for="date_of_birth">Date of Birth:</label> <br>
        <input type="date" name="date_of_birth" value="">
      </div>
      <br>
      <div class="form-group">
        <label for="private_code">Private Code:</label> <br>
        <input type="number" name="private_code" value="">
      </div>
      <br>
      <div class="form-group">
        <label for="location_id">Location:</label> <br>
        <select name="location_id">
          @foreach ($locs as $loc)
            <a href="{{route('loc.show', $loc -> id)}}">
              <option value="{{$loc -> id}}">{{$loc -> name}} - {{$loc -> city}}</option>
            </a>
          @endforeach
        </select>
      </div>
      <br>
      <button type="submit" name="button">SAVE</button>
    </form>
  </div>
@endsection
