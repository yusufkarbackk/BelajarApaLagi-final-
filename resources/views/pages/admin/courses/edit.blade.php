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
  <form class="mt-5" method="POST" action="{{route('courses.update', $course->id)}}">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="exampleInputEmail1">Title</label>
      <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title" 
      value="{{old('title') ? old('title') : $course->title}}">
      <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Duration</label>
      <input type="text" class="form-control" id="duration" name="duration" 
      value="{{old('duration') ? old('duration') : $course->duration}}">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Price</label>
      <input type="number" class="form-control" id="price" name="price" 
      value="{{old('price') ? old('price') : $course->price}}">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">location</label>
      <input type="text" class="form-control" id="text" name="location" 
      value="{{old('location') ? old('location') : $course->location}}">
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">About</label>
      <textarea class="form-control" id="about" rows="4" name="about" 
      value="{{old('about') ? old('about') : $course->about}}"></textarea>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Date</label>
      <input type="text" class="form-control" id="date" name="date" 
      value="{{old('date') ? old('date') : $course->date}}">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Mentor</label>
      <input type="text" class="form-control" id="mentor" name="mentor" 
      value="{{old('mentor') ? old('mentor') : $course->mentor}}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection
