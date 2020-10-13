@extends('layouts.application')

@section('content')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="{{url('frontend/library/bootstrap/bootstrap-4.5.2-dist/css/bootstrap.css')}}"
    />
    <link rel="stylesheet" href="{{url('frontend/styles/style.css')}}" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand mx-auto" href="#">
          <img src="{{url('frontend/images/Group 29@2x.png')}}" alt="" />
        </a>
      </div>
    </nav>
    <section class="checkout" id="checkout">
      <div class="container">
        <div>
          <div class="checkout-header">
            <h2 class="text-center mt-4">Checkout</h2>
          </div>
          <div
            class="checkout-content flex-sm-wrap flex-md-wrap d-lg-flex justify-content-between align-items-center mt-5"
          >
            <div class="checkout-illust col-lg-5">
              <img
                src="{{url('frontend/images/undraw_online_payments_luau@2x.png')}}"
                class="img-fluid"
              />
            </div>
            <div
              class="card text-center checkout-card col-lg-6"
              style="width: 100%"
            >
              <div class="card-body">
                <h5 class="card-title">{{$transaction->course->title}}</h5>
                <ul class="list-group list-group-horizontal text-center">
                  <li class="list-group-item text-left flex-fill">
                    <span>Name</span>
                  </li>
                  <li class="list-group-item text-right flex-fill">
                    {{$transaction->transaction_belongs->name}}
                  </li>
                </ul>
                <ul class="list-group list-group-horizontal text-center">
                  <li class="list-group-item text-left flex-fill">
                    <span>Email</span>
                  </li>
                  <li class="list-group-item text-right flex-fill">
                    {{$transaction->transaction_belongs->email}}                  
                  </li>
                </ul>
                <ul class="list-group list-group-horizontal text-center">
                  <li class="list-group-item text-left flex-fill">
                    <span>Transaction ID</span>
                  </li>
                  <li class="list-group-item text-right flex-fill">
                    {{$transaction->id}}
                  </li>
                </ul>
                <hr />
                <div class="bank-details">
                  <div class="bank-item">
                    <img
                      src="{{url('frontend/images/debit-card@2x.png')}}"
                      class="bank-image"
                    />
                    <div class="bank-desc">
                      <p>Bank BCA</p>
                      <p>Ridwan Ade</p>
                      <p>1243562356</p>
                    </div>
                  </div>
                  <div class="bank-item">
                    <img
                      src="{{url('frontend/images/debit-card@2x.png')}}"
                      class="bank-image"
                    />
                    <div class="bank-desc">
                      <p>Bank BCA</p>
                      <p>Ridwan Ade</p>
                      <p>1243562356</p>
                    </div>
                  </div>
                </div>
                <a href="{{route('success')}}" class="btn btn-primary btn-block btn-pay"
                  >I Have Paid</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>

@endsection