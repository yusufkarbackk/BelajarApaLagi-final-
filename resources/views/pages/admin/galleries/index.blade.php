@extends('layouts.admin')

@section('content')

<div class="container">
    <h1>Daftar Course</h1>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <a href="{{route('galleries.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Tambah Gambar</a>
    </div>
    <table class="table mt-5 text-center table-bordered">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID.</th>
            <th scope="col">course</th>
            <th scope="col">image</th>
            <th scope="col">mentor</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($galleries as $gallery)
            <tr>
              <td>{{$gallery->id}}</td>
              <td>{{$gallery->course->title}}</td>
              <td><img src="{{Storage::url($gallery->image)}}" width="100px"></td>
              <td><img src="{{Storage::url($gallery->mentor)}}" width="100px"></td>
              <td>
                <div class="row d-block justify-content-center align-items-center">
                  <a href="{{route('galleries.edit', $gallery->id)}}">
                      <div class="btn btn-info ml-2 mr-2">
                        Edit
                      </div>
                    </a>
                  <form action="{{route('galleries.destroy', $gallery->id)}}" method="POST">
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
