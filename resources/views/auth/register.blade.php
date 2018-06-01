@extends('admin::layouts.auth')

@section('title', __('Sign up'))

@section('content')
    <div class="panel">
        <div class="panel-body">
            <div class="brand">
                <img class="brand-img" src="/assets/admin/assets/images/logo-colored.png" alt="...">
                <h2 class="brand-text font-size-18">{{ config('app.name') }}</h2>
            </div>

            <form method="post" action="{{ route('register') }}" autocomplete="off" class="text-left">
                @csrf

                <div class="form-group form-material floating" data-plugin="formMaterial">
                    <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                           name="name" value="{{ old('name') }}"/>
                    <label class="floating-label">{{ __('Name') }}</label>
                    @if ($errors->has('name'))
                        <span class="invalid-feedback">{{ $errors->first('name') }}</span>
                    @endif
                </div>

                <div class="form-group form-material floating" data-plugin="formMaterial">
                    <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                           name="email" value="{{ old('email') }}"/>
                    <label class="floating-label">{{ __('Email') }}</label>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback">{{ $errors->first('email') }}</span>
                    @endif
                </div>

                <div class="form-group form-material floating" data-plugin="formMaterial">
                    <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                           name="password"/>
                    <label class="floating-label">{{ __('Password') }}</label>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback">{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <div class="form-group form-material floating" data-plugin="formMaterial">
                    <input type="password" class="form-control" name="password_confirmation"/>
                    <label class="floating-label">{{ __('Confirm Password') }}</label>
                </div>

                <button type="submit" class="btn btn-primary btn-block btn-lg mt-40">{{ __('Sign up') }}</button>
            </form>
            <br>
            <p>{{ __('Have account already? Please go to') }} <a href="{{ route('login') }}">{{ __('Sign in') }}</a>
            </p>
        </div>
    </div>
    @parent
@endsection