@extends('layouts.admin')

@section('content')

<div class="container">
    <h1>Daftar Course</h1>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <a href="{{route('courses.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Tambah Course</a>
    </div>
    <table class="table mt-5 text-center table-bordered">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID.</th>
            <th scope="col">Title</th>
            <th scope="col">Duration</th>
            <th scope="col">Date</th>
            <th scope="col">price</th>
            <th scope="col">location</th>
            <th scope="col">about</th>
            <th scope="col">mentor</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>

          @foreach ($courses as $course)
          <tr>
            <td>{{$course->id}}</td>
            <td>{{$course->title}}</td>
            <td>{{$course->duration}}</td>
            <td>{{$course->date}}</td>
            <td>{{$course->price}}</td>
            <td>{{$course->location}}</td>
            <td>{{$course->about}}</td>
            <td>{{$course->mentor}}</td>
            <td>
              <div class="row justify-content-center ">
              <a href="{{route('courses.edit', $course->id)}}">
                  <div class="btn btn-info ml-2 mr-2">
                    Edit
                  </div>
                </a>
              <form action="{{route('courses.destroy', $course->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger mt-2">
                  Delete
                </button>
              </form>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection
