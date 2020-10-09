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
  <h1>Edit Gambar</h1>
  <form class="mt-5" method="POST" action="{{route('galleries.update', $galleries->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="course_id">Course Image</label>
      <select name="course_id" required class="form-control">
          <option value="{{$galleries->course->id}}">{{$galleries->course->title}}</option>
          
      </select>
    </div>
    <div class="form-group">
      <label for="image">Course Image</label>
      <input type="file" id="image" name="image" value="{{old('image') }} ">
    </div>
    <div class="form-group">
      <label for="mentor">Mentor Image</label>
      <input type="file" id="mentor" name="mentor" value="{{old('mentor')}}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection
