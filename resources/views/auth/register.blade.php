@extends('admin::layouts.auth')

@section('title', __('Sign up'))

@section('content')
    <div class="card card-round card-shadowed px-50 py-30 w-400px mb-0" style="max-width: 100%;">
        <h5 class="text-uppercase">{{ __('Sign up') }}</h5>
        <br>

        <form class="form-type-material" method="post" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                       name="name" value="{{ old('name') }}"/>
                <label>{{ __('Name') }}</label>
                @if ($errors->has('name'))
                    <span class="invalid-feedback">{{ $errors->first('name') }}</span>
                @endif
            </div>

            <div class="form-group">
                <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                       name="email" value="{{ old('email') }}"/>
                <label>{{ __('Email') }}</label>
                @if ($errors->has('email'))
                    <span class="invalid-feedback">{{ $errors->first('email') }}</span>
                @endif
            </div>

            <div class="form-group">
                <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                       name="password"/>
                <label>{{ __('Password') }}</label>
                @if ($errors->has('password'))
                    <span class="invalid-feedback">{{ $errors->first('password') }}</span>
                @endif
            </div>

            <div class="form-group">
                <input type="password" class="form-control" name="password_confirmation"/>
                <label>{{ __('Confirm Password') }}</label>
            </div>

            <br>
            <button class="btn btn-bold btn-block btn-primary" type="submit">{{ __('Sign up') }}</button>
        </form>

        <hr class="w-30px">

        <p class="text-center text-muted fs-13 mt-20">{{ __('Have account already? Please go to') }}
            <a class="text-primary fw-500" href="{{ route('login') }}">{{ __('Sign in') }}</a>
        </p>
    </div>
@endsection