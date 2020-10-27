@extends('layouts.application')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="">
        <img src="{{url('frontend/images/Group 29@2x.png')}}" alt="" />
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link text-white" href="#"
              >Home <span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Classes</a>
          </li>
          <li>
            <a class="nav-link text-white" href="#">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="details mt-5" id="details">
    <div class="container">
      <div
        class="flex-md-wrap flex-sm-wrap d-lg-flex justify-content-between"
      >
        <div class="card details-card col-lg-6 shadow rounded" style="width: 100%">
          <h4>Details</h4>
          <img
            src="{{Storage::url($details->gallery->image)}}"
            class="card-img-top img-fluid"
            alt="..."
          />
          <div class="card-body">
            <h5 class="card-title mt-3">What Will You Get</h5>
            <p class="card-text">
              {{$details->about}}
            </p>
            <div class="mentor">
              <p class="d-inline-block mr-3">
                Mentor: {{$details->mentor}}
              </p>
              <img
                src="{{Storage::url($details->gallery->mentor)}}"
                class="rounded-circle img-fluid"
              />
            </div>
          </div>
        </div>

        <div class="card join-card col-lg-5 pb-5 shadow rounded" style="width: 100%">
          <div class="card-body">
            <h5 class="card-title mb-3 text-center">{{$details->title}}
            </h5>
            <ul class="list-group list-group-horizontal text-center">
              <li class="list-group-item text-left flex-fill">
                <span>Location</span>
              </li>
              <li class="list-group-item text-right flex-fill">
                {{$details->location}}
              </li>
            </ul>
            <ul class="list-group list-group-horizontal text-center">
              <li class="list-group-item text-left flex-fill">
                <span>Duration</span>
              </li>
              <li class="list-group-item text-right flex-fill">{{$details->duration}}
              </li>
            </ul>
            <ul class="list-group list-group-horizontal text-center">
              <li class="list-group-item text-left flex-fill">
                <span>Date</span>
              </li>
              <li class="list-group-item text-right flex-fill">
                {{$details->date}}
              </li>
            </ul>
            <ul class="list-group list-group-horizontal text-center">
              <li class="list-group-item text-left flex-fill">
                <span>Time</span>
              </li>
              <li class="list-group-item text-right flex-fill">
                {{$details->time}}
              </li>
            </ul>
            <ul class="list-group list-group-horizontal text-center">
              <li class="list-group-item text-left flex-fill">
                <span>Price</span>
              </li>
              <li class="list-group-item text-right flex-fill">Rp{{number_format($details->price)}}
              </li>
            </ul>
            <hr>
            <form action="{{route('checkout-proccess', $details->id)}}" method="post">
              @csrf
              <button class="btn btn-block mt-5 btn-primary" type="submit">
                Join Now
              </button>
            </form>

          </div>
        </div>
      </div>
    </div>
  </section>


@endsection