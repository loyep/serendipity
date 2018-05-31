@extends('admin::layouts.auth')

@section('title', __('Sign in'))

@section('content')
    <div class="panel">
        <div class="panel-body">
            <div class="brand">
                <img class="brand-img" src="/assets/admin/assets/images/logo-colored.png" alt="...">
                <h2 class="brand-text font-size-18">{{ config('app.name') }}</h2>
            </div>

            <form method="post" action="{{ route('login') }}" autocomplete="off" class="text-left">
                @csrf
                <div class="form-group form-material floating" data-plugin="formMaterial">
                    <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                           name="email" value="{{ old('email') }}"/>
                    <label class="floating-label">{{ __('Email') }}</label>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="form-group form-material floating" data-plugin="formMaterial">
                    <input type="password" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                           name="password"/>
                    <label class="floating-label">{{ __('Password') }}</label>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="form-group clearfix">
                    <div class="checkbox-custom checkbox-inline checkbox-primary checkbox-lg float-left">
                        <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label for="remember">{{ __('Remember me') }}</label>
                    </div>
                    <a class="float-right" href="{{ route('password.request') }}">{{ __('Forgot Password?') }}</a>
                </div>
                <button type="submit" class="btn btn-primary btn-block btn-lg mt-40">{{ __('Sign in') }}</button>
            </form>
            <div>
                <hr>
                <a class="btn btn-icon btn-dark text-white waves-effect waves-classic">
                    <i class="icon md-github" aria-hidden="true"></i></a>
                <a class="btn btn-icon btn-danger text-white waves-effect waves-classic">
                    <i class="icon md-google" aria-hidden="true"></i></a>
            </div>
            <br>
            <p>{{ __('Still no account? Please go to') }} <a href="{{ route('register') }}">{{ __('Sign up') }}</a>
            </p>
        </div>
    </div>
    @parent
@endsection