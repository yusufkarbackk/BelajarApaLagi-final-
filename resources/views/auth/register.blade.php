@extends('layouts.auth', ['title' => 'Login - SantriKoding.com'])

@section('content')

<div class="container mt-5">
    <div class="register-content flex-sm-wrap flex-md-wrap d-lg-flex justify-content-center align-items-center">
        <div class="col-lg-6 login-img">
            <img src="{{url('frontend/images/register-img.svg')}}" class="img-fluid">
        </div>
        <div class="col-lg-6 md-ml-5 register-card">
            <div class="card border-0 shadow rounded" style="width: 100%;">
                <img src="{{url('frontend/images/Group 29@2x.png')}}" class="card-img-top ml-3 login-logo" alt="...">
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <hr>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
            
                        <div class="form-group">
                            <label class="font-weight-bold text-uppercase text-white"> Name </label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" placeholder="Name">
                            @error('email')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>    
                            @enderror
                        </div>
            
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
                            <label for="password" value="{{ __('Password') }}" class="font-weight-bold text-uppercase text-white"> Password </label>
                            <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" placeholder="Password" />
                        </div>
            
                        <div class="mt-4">
                            <label for="password_confirmation" value="{{ __('Confirm Password') }}"class="font-weight-bold text-uppercase text-white"> Confirm Password </label>
                            <x-jet-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" />
                        </div>
                        <button type="submit" class="btn btn-primary btn-register btn-block mt-4 text-white text-regular" >
                            SIGN UP
                        </button>
                        <div class="flex text-center mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 already-regist" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
