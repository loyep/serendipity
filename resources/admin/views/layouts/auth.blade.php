<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title') | {{ config('app.name') }}</title>

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
                background: url(@yield('bg-img', '/assets/admin/assets/images/login-bg.jpg')) center center no-repeat;
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
        @section('content')
            <footer class="page-copyright page-copyright-inverse">
                <div class="social">
                    <a class="btn btn-icon btn-pure" target="_blank" href="https://weibo.com/u/3966998081">
                        <i class="icon bd-qq" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-icon btn-pure" target="_blank" href="https://www.linkedin.com/in/lorenliuz/">
                        <i class="icon bd-linkedin" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-icon btn-pure" target="_blank" href="https://github.com/lorenliuz">
                        <i class="icon bd-github" aria-hidden="true"></i>
                    </a>
                </div>
                <br>
                <p>© {{ date('Y') }}. All Right Reserved.</p>
            </footer>
        @show
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
