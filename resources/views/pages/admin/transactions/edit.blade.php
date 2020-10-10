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
  <form class="mt-5" method="POST" action="{{route('transactions.update', $transactions->id)}}">
    @csrf
    @method('PUT')
    <form>
        <fieldset disabled>
          <div class="form-group">
            <label for="course">Course</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="{{$transactions->course->title}}" value="{{$transactions->course->title}}">
          </div>
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="{{$transactions->name}}" value="{{$transactions->name}}">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" class="form-control" placeholder="{{$transactions->email}}" value="{{$transactions->email}}">
          </div>
        </fieldset>
        <div class="form-group">
            <label for="transaction_status">status</label>
            <select name="transaction_status" required class="form-control">
              <option value="{{$transactions->transaction_status}}">
                  {{$transactions->transaction_status}}
              </option>
              <option value="SUCCESS">
                  SUCCESS
              </option>
              <option value="PROCCESED">
                  PROCCESED
              </option>
              <option value="FAILED">
                FAILED
              </option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</form>
</div>
@endsection
