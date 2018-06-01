@extends('admin::layouts.auth')

@section('title', __('Unlock'))

@section('content')
    <div class="panel">
        <div class="panel-body">
            <div class="avatar avatar-lg">
                <img src="{{ Auth::user()->avatar }}" alt="...">
                <p class="locked-user">{{ Auth::user()->name }}</p>
            </div>
            <form data-plugin="formMaterial" method="post" action="{{ route('admin.lock') }}"
                  class="form-group form-material{{ $errors->has('password') ? ' has-danger' : '' }}"
                  autocomplete="off">
                @csrf
                <div class="input-group">
                    <div class="form-control-wrap">
                        <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                               placeholder="Enter password"/>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback">{{ trans('auth.failed') }}{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-primary">
                            <span class="icon md-lock-open" aria-hidden="true"></span>
                        </button>
                    </span>
                </div>
            </form>
            <br>
            <p>Enter your password to retrieve your session</p>
            <p><a href="{{ route('login') }}">Or sign in as a different user</a></p>
        </div>
    </div>
@endsection