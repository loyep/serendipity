@extends('admin::layouts.auth')

@section('title', __('Reset Password'))

@section('content')
    <div class="panel">
        <div class="panel-body">
            <div class="brand">
                <img class="brand-img" src="/assets/admin/assets/images/logo-colored.png" alt="...">
                <h2 class="brand-text font-size-18">{{ config('app.name') }}</h2>
            </div>

            <form method="post" action="{{ route('password.request') }}" autocomplete="off" class="text-left">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

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

                <div class="form-group form-material floating" data-plugin="formMaterial">
                    <input type="password" class="form-control" name="password_confirmation"/>
                    <label class="floating-label">{{ __('Confirm Password') }}</label>
                </div>

                <button type="submit" class="btn btn-primary btn-block btn-lg mt-40">{{ __('Reset Password') }}</button>
            </form>
        </div>
    </div>
    @parent
@endsection