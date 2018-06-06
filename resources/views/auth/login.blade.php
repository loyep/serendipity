@extends('admin::layouts.auth')

@section('title', __('Sign in'))

@section('content')
    <div class="card card-round card-shadowed px-50 py-30 w-400px mb-0" style="max-width: 100%">
        <h5 class="text-uppercase">{{ __('Sign in') }}</h5>
        <br>
        <form class="form-type-material" action="{{ route('login') }}" method="post">
            @csrf
            <div class="form-group">
                <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                       value="{{ old('email') }}"/>
                <label>{{ __('Email') }}</label>
            </div>

            <div class="form-group">
                <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                       name="password"/>
                <label>{{ __('Password') }}</label>
                @if ($errors->has('password'))
                    <span class="invalid-feedback">{{ $errors->first('password') }}</span>
                @endif
            </div>

            <div class="form-group flexbox">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" checked>
                    <label class="custom-control-label">{{ __('Remember me') }}</label>
                </div>

                <a class="text-muted hover-primary fs-13"
                   href="{{ route('password.request') }}">{{ __('Forgot Password?') }}</a>
            </div>

            <div class="form-group">
                <button class="btn btn-bold btn-block btn-primary" type="submit">{{ __('Sign in') }}</button>
            </div>
        </form>

        <div class="divider">Or Sign In With</div>
        <div class="text-center">
            <a class="btn btn-square btn-facebook" href="#"><i class="fa fa-facebook"></i></a>
            <a class="btn btn-square btn-google" href="#"><i class="fa fa-google"></i></a>
            <a class="btn btn-square btn-twitter" href="#"><i class="fa fa-twitter"></i></a>
        </div>

        <hr class="w-30px">

        <p class="text-center text-muted fs-13 mt-20">{{ __('Still no account? Please go to') }}
            <a class="text-primary fw-500" href="{{ route('register') }}">{{ __('Sign up') }}</a>
        </p>
    </div>
@endsection