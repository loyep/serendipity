<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap material admin template">
    <meta name="author" content="">

    <title>{{ __('Reset Password') }} | {{ config('app.name') }}</title>

    <link rel="apple-touch-icon" href="/assets/admin/assets/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="/assets/admin/assets/images/favicon.ico">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="/assets/admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/admin/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="/assets/admin/assets/css/site.min.css">

    <!-- Plugins -->
    <link rel="stylesheet" href="/assets/admin/vendor/animsition/animsition.css">
    <link rel="stylesheet" href="/assets/admin/vendor/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="/assets/admin/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="/assets/admin/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="/assets/admin/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="/assets/admin/vendor/jquery-mmenu/jquery-mmenu.css">
    <link rel="stylesheet" href="/assets/admin/vendor/flag-icon-css/flag-icon.css">
    <link rel="stylesheet" href="/assets/admin/vendor/waves/waves.css">
    <link rel="stylesheet" href="/assets/admin/assets/examples/css/pages/login-v3.css">


    <!-- Fonts -->
    <link rel="stylesheet" href="/assets/admin/fonts/material-design/material-design.min.css">
    <link rel="stylesheet" href="/assets/admin/fonts/brand-icons/brand-icons.min.css">
    {{--<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>--}}

    <style type="text/css">
        @media (min-width: 480px) {
            .page-login-v3:before {
                background: url(/assets/admin/assets/images/register.jpeg) center center no-repeat;
            }
        }
    </style>
    <!--[if lt IE 9]>
    <script src="/assets/admin/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

    <!--[if lt IE 10]>
    <script src="/assets/admin/vendor/media-match/media.match.min.js"></script>
    <script src="/assets/admin/vendor/respond/respond.min.js"></script>
    <![endif]-->

    <!-- Scripts -->
    <script src="/assets/admin/vendor/breakpoints/breakpoints.js"></script>
    @if(config('debug', false))
        <script>
            Breakpoints();
        </script>
    @endif
</head>
<body class="animsition page-login-v3 layout-full">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Page -->
<div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">>
    <div class="page-content vertical-align-middle">
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
                    <button type="submit" class="btn btn-primary btn-block btn-lg mt-40">{{ __('Send Password Reset Link') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Page -->


<!-- Core  -->
<script src="/assets/admin/vendor/babel-external-helpers/babel-external-helpers.js"></script>
<script src="/assets/admin/vendor/jquery/jquery.js"></script>
<script src="/assets/admin/vendor/popper-js/umd/popper.min.js"></script>
<script src="/assets/admin/vendor/bootstrap/bootstrap.js"></script>
<script src="/assets/admin/vendor/animsition/animsition.js"></script>
<script src="/assets/admin/vendor/mousewheel/jquery.mousewheel.js"></script>
<script src="/assets/admin/vendor/asscrollbar/jquery-asScrollbar.js"></script>
<script src="/assets/admin/vendor/asscrollable/jquery-asScrollable.js"></script>
<script src="/assets/admin/vendor/waves/waves.js"></script>

<!-- Plugins -->
<script src="/assets/admin/vendor/jquery-mmenu/jquery.mmenu.min.all.js"></script>
<script src="/assets/admin/vendor/switchery/switchery.js"></script>
<script src="/assets/admin/vendor/intro-js/intro.js"></script>
<script src="/assets/admin/vendor/screenfull/screenfull.js"></script>
<script src="/assets/admin/vendor/slidepanel/jquery-slidePanel.js"></script>
<script src="/assets/admin/vendor/jquery-placeholder/jquery.placeholder.js"></script>

<!-- Scripts -->
<script src="/assets/admin/js/Component.js"></script>
<script src="/assets/admin/js/Plugin.js"></script>
<script src="/assets/admin/js/Base.js"></script>
<script src="/assets/admin/js/Config.js"></script>

<script src="/assets/admin/assets/js/Section/Menubar.js"></script>
<script src="/assets/admin/assets/js/Section/Sidebar.js"></script>
<script src="/assets/admin/assets/js/Section/PageAside.js"></script>
<script src="/assets/admin/assets/js/Section/GridMenu.js"></script>

<!-- Config -->
<script src="/assets/admin/js/config/colors.js"></script>
<script src="/assets/admin/assets/js/config/tour.js"></script>
<script>Config.set('assets', '/assets/admin/assets');</script>

<!-- Page -->
<script src="/assets/admin/assets/js/Site.js"></script>
<script src="/assets/admin/js/Plugin/asscrollable.js"></script>
<script src="/assets/admin/js/Plugin/slidepanel.js"></script>
<script src="/assets/admin/js/Plugin/switchery.js"></script>
<script src="/assets/admin/js/Plugin/jquery-placeholder.js"></script>
<script src="/assets/admin/js/Plugin/material.js"></script>

<script>
    (function (document, window, $) {
        'use strict';

        var Site = window.Site;
        $(document).ready(function () {
            Site.run();
        });
    })(document, window, jQuery);
</script>

</body>
</html>
