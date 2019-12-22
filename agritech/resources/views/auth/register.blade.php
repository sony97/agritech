@extends('front.master')
@section('title','Register Page')
@section('content')
    <style>
        body{
            background-image:url("dist/images/agri3.jpg");
            background-size: cover;
            margin: 0;
            padding: 0;
            background-position: center;
        }
        .btn{
            color: black;
        }
        </style>
    <br><br><br><br><div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background-color: rgba(0,0,0,0.8);">
                <div class="card-header"style="text-align: center; color: white"><b>{{ __('Register') }}</b></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right" style="color: white;">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" style="background-color: rgba(0,0,0,0.5); color: white" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right" style="color: white;">{{ __('Mobile No') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" style="background-color: rgba(0,0,0,0.5); color: white" class="form-control{{ $errors->has('mobile') ? ' is-invalid' : '' }}" name="mobile" value="{{ old('mobile') }}" required autofocus>

                                @if ($errors->has('mobile'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right" style="color: white;">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" style="background-color: rgba(0,0,0,0.5); color: white" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>






                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right" style="color: white;">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" style="background-color: rgba(0,0,0,0.5); color: white" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right" style="color: white;">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" style="background-color: rgba(0,0,0,0.5); color: white" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
