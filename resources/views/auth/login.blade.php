@extends('layouts.auth', ['title' => 'Login - SantriKoding.com'])

@section('content')

<div class="container mt-5">
    <div class="login-content flex-sm-wrap flex-md-wrap d-lg-flex justify-content-center align-items-center">
        <div class="col-lg-6 login-img">
            <img src="{{url('frontend/images/login.svg')}}" class="img-fluid">
        </div>
        <div class="col-lg-6 md-ml-5 login-card">
            <div class="card border-0 shadow rounded" style="width: 100%;">
                <img src="{{url('frontend/images/Group 29@2x.png')}}" class="card-img-top ml-3 login-logo" alt="...">
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <h4 class="font-weight-semibold login-text">Welcome Back !</h4>
                    <hr>
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="font-weight-bold text-uppercase text-white">Email address</label>
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="EMAIL">
                            @error('email')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>    
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold text-uppercase text-white">Password</label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="PASSWORD">
                            @error('password')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>    
                            @enderror
                        </div>
                            <button type="submit" class="btn btn-primary btn-login btn-block" >
                                LOGIN
                            </button>
                        <hr>        
                    </form>
                    <a href="/register" class="btn btn-block btn-light text-semibold">SIGN UP</a>
                    <a href="/forgot-password" class="forget-pass">Forget Your Password</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
