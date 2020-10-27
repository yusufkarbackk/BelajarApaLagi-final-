@extends('layouts.application')

@section('content')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="{{url('frontend/library/bootstrap/bootstrap-4.5.2-dist/css/bootstrap.css')}}"
    />
    <link rel="stylesheet" href="{{url('frontend/styles/style.css')}}" />
    <title>Document</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand mx-auto" href="#">
          <img src="{{url('frontend/images/Group 29@2x.png')}}" alt="" />
        </a>
      </div>
    </nav>

    <section class="success" id="content">
      <div class="container">
        <div class="d-flex justify-content-center">
          <div class="flex-wrap">
            <div class="success-image">
              <img
                src="{{url('frontend/images/success@2x.png')}}"
                class="img-fluid rounded mx-auto d-block mt-4"
              />
            </div>
            <div class="success-text text-center mt-3">
              <h2>Payment Success!</h2>
              <p>
                Your payment confirmation  <br />
                Don’t forget to check it, see you in class!
              </p>
            </div>
            <a href="{{route('home')}}" class="btn btn-primary btn-block btn-success mt-4"
                  >Back To Home</a
                >
          </div>
        </div>
      </div>
    </section>
  </body>
</html>

@endsection