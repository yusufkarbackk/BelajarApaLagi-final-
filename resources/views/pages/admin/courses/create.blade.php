@extends('layouts.admin')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container">
  <h1>Tambah Course</h1>
  <form class="mt-5" method="POST" action="{{route('courses.store')}}">
    @csrf
    <div class="form-group">
      <label for="email">Title</label>
      <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title" value="{{old('title')}}">
      <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
      <label for="duration">Duration</label>
      <input type="text" class="form-control" id="duration" name="duration" value="{{old('duration')}}">
    </div>
    <div class="form-group">
      <label for="price">Price</label>
      <input type="number" class="form-control" id="price" name="price" value="{{old('price')}}">
    </div>
    <div class="form-group">
      <label for="location">location</label>
      <input type="text" class="form-control" id="text" name="location" value="{{old('location')}}">
    </div>
    <div class="form-group">
      <label for="about">About</label>
      <textarea class="form-control" id="about" rows="4" name="about" value="{{old('about')}}"></textarea>
    </div>
    <div class="form-group">
      <label for="date">Date</label>
      <input type="date" class="form-control" id="date" name="date" value="{{old('date')}}">
    </div>
    <div class="form-group">
      <label for="time">Time</label>
      <input type="time" class="form-control" id="time" name="time" value="{{old('time')}}">
    </div>
    <div class="form-group">
      <label for="mentor">Mentor</label>
      <input type="text" class="form-control" id="mentor" name="mentor" value="{{old('mentor')}}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection
