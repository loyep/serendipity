<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="TheAdmin - Responsive Bootstrap 4 Admin, Dashboard &amp; WebApp Template">
    <meta name="keywords" content="dashboard, index, main">
    <title>The Admin Template of 2018</title><!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,300i|Dosis:300,500" rel="stylesheet">
    <!-- Styles -->
    <link href="/assets/static/css/core.min.css" rel="stylesheet">
    <link href="/assets/static/css/app.min.css" rel="stylesheet">
    <link href="/assets/static/css/style.min.css" rel="stylesheet">
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/assets/static/img/apple-touch-icon.png">
    <link rel="icon" href="/assets/static/img/favicon.png">
    <!--  Open Graph Tags -->
    <meta property="og:title" content="The Admin Template of 2018!">
    <meta property="og:description"
          content="TheAdmin is a responsive, professional, and multipurpose admin template powered with Bootstrap 4.">
    <meta property="og:image" content="http://thetheme.io/theadmin/assets/img/og-img.jpg">
    <meta property="og:url" content="http://thetheme.io/theadmin/">
    <meta name="twitter:card" content="summary_large_image">
</head>
<body>

@include('admin::includes._preloader')

<!-- Sidebar -->
<aside class="sidebar sidebar-icons-right sidebar-icons-boxed sidebar-expand-lg">
    @include('admin::includes.sidebar._header')

    @include('admin::includes.sidebar._navigation')
</aside><!-- END Sidebar --><!-- Topbar -->
<header class="topbar">
    <div class="topbar-left">
        <span class="topbar-btn sidebar-toggler"><i>&#9776;</i></span>
        <a class="topbar-btn d-none d-md-block" href="#" data-provide="fullscreen tooltip" title="Fullscreen">
            <i class="material-icons fullscreen-default">fullscreen</i>
            <i class="material-icons fullscreen-active">fullscreen_exit</i>
        </a>
        <div class="dropdown d-none d-md-block">
            <span class="topbar-btn" data-toggle="dropdown"><i class="ti-layout-grid3-alt"></i></span>
            <div class="dropdown-menu dropdown-grid">
                <a class="dropdown-item" href="#">
                    <span data-i8-icon="home"></span>
                    <span class="title">Dashboard</span>
                </a>
                <a class="dropdown-item" href="#">
                    <span data-i8-icon="stack_of_photos"></span>
                    <span class="title">Gallery</span>
                </a>
                <a class="dropdown-item" href="#">
                    <span data-i8-icon="search"></span>
                    <span class="title">Search</span>
                </a>
                <a class="dropdown-item" href="#">
                    <span data-i8-icon="calendar"></span>
                    <span class="title">Calendar</span>
                </a>
                <a class="dropdown-item" href="#">
                    <span data-i8-icon="sms"></span>
                    <span class="title">Chat</span>
                </a>
                <a class="dropdown-item" href="#">
                    <span data-i8-icon="invite"></span>
                    <span class="title">Emails</span>
                </a>
                <a class="dropdown-item" href="#">
                    <span data-i8-icon="contacts"></span>
                    <span class="title">Contacts</span>
                </a>
                <a class="dropdown-item" href="#">
                    <span data-i8-icon="bar_chart"></span>
                    <span class="title">Charts</span>
                </a>
                <a class="dropdown-item" href="#">
                    <span data-i8-icon="businessman"></span>
                    <span class="title">Profile</span>
                </a>
            </div>
        </div>
        <div class="topbar-divider d-none d-md-block"></div>
        @include('admin::includes.navbar._search')
    </div>
    <div class="topbar-right">
        <a class="topbar-btn" href="#qv-global" data-toggle="quickview"><i class="ti-align-right"></i></a>
        <div class="topbar-divider">
        </div>
        <ul class="topbar-btns">
            @include('admin::includes.navbar._profile')

            @include('admin::includes.navbar._notifications')

            @include('admin::includes.navbar._messages')
        </ul>
    </div>
</header>
<!-- END Topbar -->
<!-- Main container -->
<main class="main-container">
    <div class="main-content">
        <div class="row">
            <div class="col-12 text-center">
                <br>
                <br>
                <h1 class="text-primary font-dosis fw-500 ls-2 display-4">TheAdmin</h1>
                <br>
                <h2 class="font-dosis fw-300">Responsive Bootstrap 4 Admin, Dashboard<br>
                    and WebApp Template</h2>
                <br>
                <p class="lead fw-400 opacity-60">
                    Huge library of hight quality UI/UX components, perfectly crafted for
                    your next project.
                </p>
                <ul class="list-unstyled d-flex justify-content-center gap-items my-5">
                    <li><img src="/assets/static/img/icon/html5.png" alt="HTML5"></li>
                    <li><img src="/assets/static/img/icon/css3.png" alt="CSS3"></li>
                    <li><img src="/assets/static/img/icon/bootstrap.png" alt="Bootstrap 4"></li>
                    <li><img src="/assets/static/img/icon/sass.png" alt="sass"></li>
                    <li><img src="/assets/static/img/icon/grunt.png" alt="grunt"></li>
                </ul>
                <div class="container-full">
                    <div class="bg-img h-900px"
                         style="background-image: url(/assets/static/img/preview/landing-intro.jpg)">
                    </div>
                </div>
                <br>
                <br>
            </div>
            <div class="col-12 text-center">
                <div class="card card-body">
                    <br>
                    <br>
                    <h1 class="font-dosis fw-500">Swift Development</h1>
                    <br>
                    <p class="lead fw-400 opacity-60">
                        Speed up your programming phase with a huge library of
                        customizable elements, beautiful widgets, and ready pages.
                    </p>
                    <br>
                    <div class="bg-img h-700px"
                         style="background-image: url(/assets/static/img/preview/landing-pages.jpg); margin-left: -20px; margin-right: -20px;">
                    </div>
                </div>
                <br>
                <br>
            </div>
            <div class="col-12 col-md-6 col-xl-4">
                <a class="card card-body card-hover-shadow p-40" href="#" target="_blank">
                    <img src="/assets/static/img/preview/landing-layout.jpg" alt="theadmin">
                    <br>
                    <h2 class="fw-400 font-dosis">Customizable Layout</h2>
                    <p class="lead opacity-70">
                        Sidebar, Topbar, Header, Aside, etc.
                    </p>
                </a>
            </div>
            <div class="col-12 col-md-6 col-xl-4">
                <a class="card card-body card-hover-shadow p-40" href="#" target="_blank">
                    <img src="/assets/static/img/preview/landing-icons.jpg" alt="theadmin">
                    <br>
                    <h2 class="fw-400 font-dosis">Free Collection of Icons</h2>
                    <p class="lead opacity-70">
                        Linear, Normal, Colorful, Emoji, etc.
                    </p>
                </a>
            </div>
            <div class="col-12 col-md-6 col-xl-4">
                <a class="card card-body card-hover-shadow p-40" href="#" target="_blank">
                    <img src="/assets/static/img/preview/landing-inputs.jpg" alt="theadmin">
                    <br>
                    <h2 class="fw-400 font-dosis">Unique Input Variations</h2>
                    <p class="lead opacity-70">
                        Round, Line, Material, Combine, etc.
                    </p>
                </a>
            </div>
            <div class="col-12 col-md-6 col-xl-4">
                <a class="card card-body card-hover-shadow p-40" href="#" target="_blank">
                    <img src="/assets/static/img/preview/landing-uikit.jpg" alt="theadmin">
                    <br>
                    <h2 class="fw-400 font-dosis">Huge UI Library</h2>
                    <p class="lead opacity-70">
                        Buttons, Modals, Dropdown, etc.
                    </p>
                </a>
            </div>
            <div class="col-12 col-md-6 col-xl-4">
                <a class="card card-body card-hover-shadow p-40" href="#" target="_blank">
                    <img src="/assets/static/img/preview/landing-charts.jpg" alt="theadmin">
                    <br>
                    <h2 class="fw-400 font-dosis">Well-Known Charts</h2>
                    <p class="lead opacity-70">
                        Chartjs, Morris, Sparkline, etc.
                    </p>
                </a>
            </div>
            <div class="col-12 col-md-6 col-xl-4">
                <a class="card card-body card-hover-shadow p-40" href="#" target="_blank">
                    <img src="/assets/static/img/preview/landing-apps.jpg" alt="theadmin">
                    <br>
                    <h2 class="fw-400 font-dosis">Ready Apps & Pages</h2>
                    <p class="lead opacity-70">
                        Mailbox, Chat, Gallery, etc.
                    </p>
                </a>
            </div>
        </div>
        <br>
    </div>
    <!--/.main-content -->
    @include('admin::includes._footer')
</main>
<!-- END Main container --><!-- Global quickview -->
<div id="qv-global" class="quickview" data-url="/assets/static/data/quickview-global-for-index.html">
    <div class="spinner-linear">
        <div class="line">
        </div>
    </div>
</div>
<!-- END Global quickview -->
<!-- Scripts -->
<script src="/assets/static/js/core.min.js"></script>
<script src="/assets/static/js/app.min.js"></script>
<script src="/assets/static/js/script.min.js"></script>
</body>
</html>