@extends('layouts.application')

@section('content')
<div class="container">

</div>
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="#"> <img src="frontend/images/Group 29@2x.png" alt=""> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link text-white" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Classes</a>
        </li>
              <a class="nav-link text-white" href="#">Contact Us</a>
        </li>
      </ul>
      @guest
      <form class="form-inline my-2 my-lg-0">
        @csrf
        <button class="signup-button mx-sm-0 mx-lg-3 px-3 py-1" type="button" 
        onclick="event.preventDefault(); location.href='{{url('register')}}';">
            Sign Up
        </button>
        <button class="signin-button mx-3 px-3 py-1" type="submit"
        onclick="event.preventDefault(); location.href='{{url('login')}}';">
            Sign In
        </button>
      </form>
      @endguest

      @auth
        <form action="{{url('logout')}}" method="POST">
          @csrf
          @method('POST')
          <button class="signin-button mx-3 px-3 py-1" type="submit">
            Logout
        </button>
        </form>
      @endauth
    </div>
    </div>
</nav>

<section id="hero">
    <div class="container">
        <div class="row d-flex align-items-center mt-5">
            <div class="col-sm-12 col-md-6 col-xl-6 hero-text">
                <h1><span>Learn</span> New Skills <br> With The <span>Best</span> Tutors </h1>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-6 hero-image">
                <img class="img-fluid" src="frontend/images/undraw_tutorial_video_vtd1@2x.png" alt="">
            </div>
        </div>
        <div>
          <form action="">
            <button class="btn px-4 shadow-lg btn-hero">
              Join Now
            </button>
          </form>  
        </div>
    </div>
</section>

<section class="section-classes-bg" id="section-classes">
  <div class="container">
    <div class="row">
      <div class="col mt-5 text-center section-classes-heading">
        <h2> Our Top Classes </h2>
      </div>
    </div>
  </div>
</section>

<section id="classes-content">
  <div class="container">
    <div class="section-classes row justify-content-center align-items-center">
      <div class="col-sm-12 col-md-4 col-xl-3">
        <div class="card-class text-center d-flex flex-column" 
        style="background-image: url('frontend/images/erik-mclean-9XK7vgoGSgc-unsplash@2x.png');
                width: 100%;
                background-position: center;">
          <div class="judul">Photography Class</div>
          <div>
            <form action="{{route('details')}}">
              <button class="btn px-5 btn-join">
                Join Now
              </button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-4 col-xl-3">
        <div class="card-class text-center d-flex flex-column" 
        style="background-image: url('frontend/images/art@2x.jpg');
                width: 100%;
                background-position: center;">
          <div class="judul">Art Class</div>
          <div>
            <form action="#">
              <button class="btn px-5 btn-join">
                Join Now
              </button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-4 col-xl-3">
        <div class="card-class text-center d-flex flex-column" 
        style="background-image: url('frontend/images/barista\ class@2x.png');
                width: 100%;
                background-position: center;">
          <div class="judul">Barista Class</div>
          <div>
            <form action="#">
              <button class="btn px-5 btn-join">
                Join Now
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="reason" id="reason">
  <div class="container">
    <div class="reason-heading d-flex justify-content-center text-center">
      <h2>Why You Should Join Our Class?</h2>
    </div>
    <div class="row mt-5 reason-content d-flex text-center align-items-center justify-content-around">
      <div class="col-sm-12 col-md-4 col-xl-4">
        <img class="img-fluid" src="frontend/images/savings@2x.png" alt="">
        <h4>Cheap</h4>
        <p>
          Our class are much cheaper than our competitors.
          When you join the class, lunch and snack are included
          so you don’t have to be worry for your tummy.
        </p>
      </div>
      <div class="col-sm-12 col-md-4 col-xl-5">
        <img class="img-fluid" src="frontend/images/expert-illus@2x.png" alt="">
        <h4>Experts</h4>
        <p>
          You will be trained by the experts on their field.
          With their experience, they will teach you
          the knowledge and the competence that
          the world needs.
        </p>
      </div>
    </div>
    <div class="d-flex justify-content-center text-center">
      <form action="">
        <button class="btn-reason px-5 py-2 mt-4">
          Join Now
        </button>
      </form>
    </div>
  </div>
</section>

@endsection