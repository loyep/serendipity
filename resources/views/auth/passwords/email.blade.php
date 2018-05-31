@extends('admin::layouts.auth')

@section('title', __('Reset Password'))

@section('content')
    <div class="panel text-left">
        <div class="panel-body">
            <div class="brand">
                <h2 class="brand-text font-size-18">{{ __('Reset Password') }}</h2>
            </div>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}" autocomplete="off" class="text-left">
                @csrf
                <div class="form-group form-material floating" data-plugin="formMaterial">
                    <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                           name="email" value="{{ old('email') }}"/>
                    <label class="floating-label">{{ __('Email') }}</label>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <button type="submit"
                        class="btn btn-primary btn-block btn-lg mt-40">{{ __('Send Password Reset Link') }}</button>
            </form>
        </div>
    </div>
@endsection