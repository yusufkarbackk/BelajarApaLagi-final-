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
            <th scope="col">Course ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>

          </tr>
        </thead>
        <tbody>

          @foreach ($transactions as $transaction)
          <tr>
            <td>{{$transaction->id}}</td>
            <td>{{$transaction->course->id}}</td>
            <td>{{$transaction->name}}</td>
            <td>{{$transaction->email}}</td>
            <td>{{$transaction->status}}</td>
            <td>
              <div class="row d-block justify-content-center ">
              <a href="{{route('transactions.edit', $transaction->id)}}">
                  <div class="btn btn-info ml-2 mr-2">
                    Edit
                  </div>
                </a>
              <form action="{{route('transactions.destroy', $transaction->id)}}" method="POST">
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
