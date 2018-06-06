@extends('admin::layouts.auth')

@section('title', __('Reset Password'))

@section('content')
    <div class="card card-round card-shadowed px-50 py-30 w-400px mb-0" style="max-width: 100%;">
        <h5 class="text-uppercase">{{ __('Reset Password') }}</h5>
        <br>

        <form class="form-type-material" method="post" action="{{ route('password.request') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
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
            <button class="btn btn-bold btn-block btn-primary" type="submit">{{ __('Reset Password') }}</button>
        </form>
    </div>
@endsection