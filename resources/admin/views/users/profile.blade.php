@extends('admin::layouts.blank')

@section('title', 'Profile')

@section('content')
    <header class="header bg-img" style="background-image: url(/assets/static/img/bg/register.jpg)">
        <div class="header-info h-250px mb-0">
            <div class="media align-items-end">
                <img class="avatar avatar-xl avatar-bordered" src="{{ $user->avatar }}" alt="{{ $user->name }}">
                <div class="media-body">
                    <p class="text-white opacity-90"><strong>{{ $user->name }}</strong></p>
                </div>
            </div>
        </div>
    </header>

    <div class="main-content">
        <div class="row">
            <div class="col-md-12">

            </div>
        </div>
    </div>
    <!--/.main-content -->
@endsection