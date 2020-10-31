@extends('layouts.admin')

@section('content')

<div class="container">
    <h1>Daftar Course</h1>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    </div>
    <table class="table mt-5 text-center table-bordered">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID.</th>
            <th scope="col">Course</th>
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
            <td>{{$transaction->course->title}}</td>
            <td>{{$transaction->name}}</td>
            <td>{{$transaction->email}}</td>
            <td>{{$transaction->transaction_status}}</td>
            <td>
              <div class="row d-block justify-content-center ">
                <form action="{{route('transactions.update', $transaction->id)}}" method="POST">
                  @csrf
                  @method('PUT')
                  <button class="btn btn-success mt-2 mb-2">
                    Success
                  </button>
                </form>
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
