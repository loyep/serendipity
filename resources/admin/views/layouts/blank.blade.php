<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title', 'Dashbaord') | {{ config('app.name') }}</title>

    @include('admin::includes._styles')

    @include('admin::includes._browser-fix')

</head>
<body class="animsition dashboard">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">

    @include('admin::includes.sidebar._header')

    <div class="navbar-container container-fluid">
        <!-- Navbar Collapse -->
        <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
        @include('admin::includes.navbar._toolbar')

        <!-- Navbar Toolbar Right -->
            <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
                @include('admin::includes.navbar._languages')

                @include('admin::includes.navbar._profile')

                @include('admin::includes.navbar._notifications')

                @include('admin::includes.navbar._messages')

                @include('admin::includes.navbar._quick')
            </ul>
            <!-- End Navbar Toolbar Right -->
        </div>
        <!-- End Navbar Collapse -->

        @include('admin::includes.navbar._search')
    </div>
</nav>
<div class="site-menubar">
    <div class="site-menubar-body">
        <div>
            <div>
                <ul class="site-menu" data-plugin="menu">
                    @include('admin::includes.sidebar._navigation')
                </ul>
                <div class="site-menubar-section">
                    @include('admin::includes.sidebar._widget')
                </div>
            </div>
        </div>
    </div>

    <div class="site-menubar-footer">
        @include('admin::includes.sidebar._footer')
    </div>
</div>
<div class="site-gridmenu">
    <div>
        <div>
            <ul>
                @include('admin::includes.sidebar._gridmenu')
            </ul>
        </div>
    </div>
</div>

@yield('content')

<!-- Footer -->
@include('admin::includes._footer')

<!-- Scripts -->
@include('admin::includes._scripts')

</body>
</html>
