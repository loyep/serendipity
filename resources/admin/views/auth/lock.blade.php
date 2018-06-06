@extends('admin::layouts.auth')

@section('title', __('Unlock'))

@section('content')
    <div class="card card-round card-shadowed px-50 py-30 w-400px mb-0 text-center" style="max-width: 100%">
        <div>
            <img class="avatar avatar-xxl" src="{{ Auth::user()->avatar }}" alt="...">
            <br><br>
            <h5 class="lead">{{ Auth::user()->name }}</h5>
            <small>{{ __('Enter your password to retrieve your session') }}</small>
        </div>

        <hr class="w-30px">

        <form class="form-type-material" method="post" action="{{ route('admin.lock') }}">
            @csrf
            <div class="form-group">
                <input type="password" name="password"
                       class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"/>
                <label>{{ __('Password') }}</label>
                @if ($errors->has('password'))
                    <span class="invalid-feedback">{{ trans('auth.failed') }}{{ $errors->first('password') }}</span>
                @endif
            </div>

            <br>
            <button class="btn btn-bold btn-block btn-primary" type="submit"><i class="fa fa-unlock-alt mr-2"></i>
                {{ __('Unlock') }}
            </button>
        </form>

        <p class="text-center text-muted fs-13 mt-20">{{ __('Sign in as a different user') }} ?
            <a class="text-primary fw-500" href="{{ route('login') }}"> {{ __('Sign in') }}</a>
        </p>
    </div>
@endsection