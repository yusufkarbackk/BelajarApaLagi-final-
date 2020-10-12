@extends('layouts.application')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="#">
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
        <div class="card details-card col-lg-6" style="width: 100%">
          <h4>Details</h4>
          <img
            src="{{url('frontend/images/erik-mclean-9XK7vgoGSgc-unsplash@2x.png')}}"
            class="card-img-top img-fluid"
            alt="..."
          />
          <div class="card-body">
            <h5 class="card-title mt-3">What Will You Get</h5>
            <p class="card-text">
              You will learn how to use your camera, and how to set for the
              perfect shots on every occasion. And you will learn about angle
              to deliver the beautiful message in your photos.
            </p>
            <div class="mentor">
              <p class="d-inline-block mr-3">
                Mentor: Jhonnny, CEO of Photos
              </p>
              <img
                src="{{url('frontend/images/mentor.jpg')}}"
                class="rounded-circle img-fluid"
              />
            </div>
          </div>
        </div>

        <div class="card join-card col-lg-5" style="width: 100%">
          <div class="card-body">
            <h5 class="card-title mb-3 text-center">Photography Class</h5>
            <ul class="list-group list-group-horizontal text-center">
              <li class="list-group-item text-left flex-fill">
                <span>Location</span>
              </li>
              <li class="list-group-item text-right flex-fill">
                Green Office Park
              </li>
            </ul>
            <ul class="list-group list-group-horizontal text-center">
              <li class="list-group-item text-left flex-fill">
                <span>Duration</span>
              </li>
              <li class="list-group-item text-right flex-fill">1 Hour</li>
            </ul>
            <ul class="list-group list-group-horizontal text-center">
              <li class="list-group-item text-left flex-fill">
                <span>Date/Time</span>
              </li>
              <li class="list-group-item text-right flex-fill">
                Saturday, 5 October 2021
              </li>
            </ul>
            <ul class="list-group list-group-horizontal text-center">
              <li class="list-group-item text-left flex-fill">
                <span>Price</span>
              </li>
              <li class="list-group-item text-right flex-fill">Rp100.000</li>
            </ul>

            <a href="{{route('checkout')}}" class="btn btn-block mt-5 btn-primary"
              >Join This Class</a
            >
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer" id="footer">
    <hr class="mt-5" />
    <div class="container">
      <div class="footer-content row d-flex justify-content-around">
        <div class="col-sm-3 col-md-3 col-xl-3">
          <ul>
            <p>Social</p>
            <li>Instagram</li>
            <li>Facebook</li>
            <li>Twitter</li>
          </ul>
        </div>
        <div class="col-sm-3 col-md-3 col-xl-3">
          <ul>
            <p>Social</p>
            <li>Instagram</li>
            <li>Facebook</li>
            <li>Twitter</li>
          </ul>
        </div>
        <div class="col-sm-3 col-md-3 col-xl-3">
          <ul>
            <p>Social</p>
            <li>Instagram</li>
            <li>Facebook</li>
            <li>Twitter</li>
          </ul>
        </div>
        <div class="col-sm-3 col-md-3 col-xl-3">
          <ul>
            <p>Social</p>
            <li>Instagram</li>
            <li>Facebook</li>
            <li>Twitter</li>
          </ul>
        </div>
      </div>
    </div>
    <hr />
    <p class="copyright text-center">
      Copyright BelajarApaLagi 2020. All Rights Reserved
    </p>
  </footer>


@endsection