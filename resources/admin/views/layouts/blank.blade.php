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
                <a class="dropdown-item" href="dashboard/general.html">
                    <span data-i8-icon="home"></span>
                    <span class="title">Dashboard</span>
                </a>
                <a class="dropdown-item" href="page/gallery.html">
                    <span data-i8-icon="stack_of_photos"></span>
                    <span class="title">Gallery</span>
                </a>
                <a class="dropdown-item" href="page/search.html">
                    <span data-i8-icon="search"></span>
                    <span class="title">Search</span>
                </a>
                <a class="dropdown-item" href="page-app/calendar.html">
                    <span data-i8-icon="calendar"></span>
                    <span class="title">Calendar</span>
                </a>
                <a class="dropdown-item" href="page-app/chat.html">
                    <span data-i8-icon="sms"></span>
                    <span class="title">Chat</span>
                </a>
                <a class="dropdown-item" href="page-app/mailbox.html">
                    <span data-i8-icon="invite"></span>
                    <span class="title">Emails</span>
                </a>
                <a class="dropdown-item" href="page-app/users.html">
                    <span data-i8-icon="contacts"></span>
                    <span class="title">Contacts</span>
                </a>
                <a class="dropdown-item" href="widget/chart.html">
                    <span data-i8-icon="bar_chart"></span>
                    <span class="title">Charts</span>
                </a>
                <a class="dropdown-item" href="page/profile.html">
                    <span data-i8-icon="businessman"></span>
                    <span class="title">Profile</span>
                </a>
            </div>
        </div>
        <div class="topbar-divider d-none d-md-block">
        </div>
        <div class="lookup d-none d-md-block topbar-search" id="theadmin-search">
            <input class="form-control w-300px" type="text">
            <div class="lookup-placeholder">
                <i class="ti-search"></i>
                <span data-provide="typing"
                      data-type="&lt;strong&gt;Type&lt;/strong&gt; Button|&lt;strong&gt;Type&lt;/strong&gt; Slider|&lt;strong&gt;Type&lt;/strong&gt; Layout|&lt;strong&gt;Type&lt;/strong&gt; Modal|&lt;strong&gt;Try&lt;/strong&gt; typing any keyword..."
                      data-loop="false" data-type-speed="90" data-back-speed="50" data-show-cursor="false"></span>
            </div>
        </div>
    </div>
    <div class="topbar-right">
        <a class="topbar-btn" href="#qv-global" data-toggle="quickview"><i class="ti-align-right"></i></a>
        <div class="topbar-divider">
        </div>
        <ul class="topbar-btns">
            <li class="dropdown">
                <span class="topbar-btn" data-toggle="dropdown"><img class="avatar"
                                                                     src="/assets/static/img/avatar/1.jpg"
                                                                     alt="..."></span>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="page/profile.html"><i class="ti-user"></i> Profile</a>
                    <a class="dropdown-item" href="page-app/mailbox.html">
                        <div class="flexbox">
                            <i class="ti-email"></i>
                            <span class="flex-grow">Inbox</span>
                            <span class="badge badge-pill badge-info">5</span>
                        </div>
                    </a>
                    <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
                    <div class="dropdown-divider">
                    </div>
                    <a class="dropdown-item" href="page-extra/user-lock-1.html"><i class="ti-lock"></i> Lock</a>
                    <a class="dropdown-item" href="page-extra/user-login-3.html"><i class="ti-power-off"></i> Logout</a>
                </div>
            </li>
            <!-- Notifications -->
            <li class="dropdown d-none d-md-block">
                <span class="topbar-btn has-new" data-toggle="dropdown"><i class="ti-bell"></i></span>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="media-list media-list-hover media-list-divided media-list-xs">
                        <a class="media media-new" href="#">
                            <span class="avatar bg-success"><i class="ti-user"></i></span>
                            <div class="media-body">
                                <p>
                                    New user registered
                                </p>
                                <time datetime="2018-07-14 20:00">Just now</time>
                            </div>
                        </a>
                        <a class="media" href="#">
                            <span class="avatar bg-info"><i class="ti-shopping-cart"></i></span>
                            <div class="media-body">
                                <p>
                                    New order received
                                </p>
                                <time datetime="2018-07-14 20:00">2 min ago</time>
                            </div>
                        </a>
                        <a class="media" href="#">
                            <span class="avatar bg-warning"><i class="ti-face-sad"></i></span>
                            <div class="media-body">
                                <p>
                                    Refund request from <b>Ashlyn Culotta</b>
                                </p>
                                <time datetime="2018-07-14 20:00">24 min ago</time>
                            </div>
                        </a>
                        <a class="media" href="#">
                            <span class="avatar bg-primary"><i class="ti-money"></i></span>
                            <div class="media-body">
                                <p>
                                    New payment has made through PayPal
                                </p>
                                <time datetime="2018-07-14 20:00">53 min ago</time>
                            </div>
                        </a>
                    </div>
                    <div class="dropdown-footer">
                        <div class="left">
                            <a href="#">Read all notifications</a>
                        </div>
                        <div class="right">
                            <a href="#" data-provide="tooltip" title="Mark all as read"><i
                                        class="fa fa-circle-o"></i></a>
                            <a href="#" data-provide="tooltip" title="Update"><i class="fa fa-repeat"></i></a>
                            <a href="#" data-provide="tooltip" title="Settings"><i class="fa fa-gear"></i></a>
                        </div>
                    </div>
                </div>
            </li>
            <!-- END Notifications -->
            <!-- Messages -->
            <li class="dropdown d-none d-md-block">
                <span class="topbar-btn" data-toggle="dropdown"><i class="ti-email"></i></span>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="media-list media-list-divided media-list-hover media-list-xs scrollable"
                         style="height: 290px">
                        <a class="media media-new1" href="page-app/mailbox-single.html">
				<span class="avatar status-success">
				<img src="/assets/static/img/avatar/1.jpg" alt="...">
				</span>
                            <div class="media-body">
                                <p>
                                    <strong>Maryam Amiri</strong>
                                    <time class="float-right" datetime="2018-07-14 20:00">23 min ago</time>
                                </p>
                                <p class="text-truncate">
                                    Authoritatively exploit resource maximizing technologies before
                                    technically.
                                </p>
                            </div>
                        </a>
                        <a class="media media-new1" href="page-app/mailbox-single.html">
				<span class="avatar status-warning">
				<img src="/assets/static/img/avatar/2.jpg" alt="...">
				</span>
                            <div class="media-body">
                                <p>
                                    <strong>Hossein Shams</strong>
                                    <time class="float-right" datetime="2018-07-14 20:00">48 min ago</time>
                                </p>
                                <p class="text-truncate">
                                    Continually plagiarize efficient interfaces after
                                    bricks-and-clicks niches.
                                </p>
                            </div>
                        </a>
                        <a class="media" href="page-app/mailbox-single.html">
				<span class="avatar status-dark">
				<img src="/assets/static/img/avatar/3.jpg" alt="...">
				</span>
                            <div class="media-body">
                                <p>
                                    <strong>Helen Bennett</strong>
                                    <time class="float-right" datetime="2018-07-14 20:00">3 hours ago</time>
                                </p>
                                <p class="text-truncate">
                                    Objectively underwhelm cross-unit web-readiness before sticky
                                    outsourcing.
                                </p>
                            </div>
                        </a>
                        <a class="media" href="page-app/mailbox-single.html">
                            <span class="avatar status-success bg-purple">FT</span>
                            <div class="media-body">
                                <p>
                                    <strong>Fidel Tonn</strong>
                                    <time class="float-right" datetime="2018-07-14 20:00">21 hours ago</time>
                                </p>
                                <p class="text-truncate">
                                    Interactively innovate transparent relationships with holistic
                                    infrastructures.
                                </p>
                            </div>
                        </a>
                        <a class="media" href="page-app/mailbox-single.html">
				<span class="avatar status-danger">
				<img src="/assets/static/img/avatar/4.jpg" alt="...">
				</span>
                            <div class="media-body">
                                <p>
                                    <strong>Freddie Arends</strong>
                                    <time class="float-right" datetime="2018-07-14 20:00">Yesterday</time>
                                </p>
                                <p class="text-truncate">
                                    Collaboratively visualize corporate initiatives for web-enabled
                                    value.
                                </p>
                            </div>
                        </a>
                        <a class="media" href="page-app/mailbox-single.html">
				<span class="avatar status-success">
				<img src="/assets/static/img/avatar/5.jpg" alt="...">
				</span>
                            <div class="media-body">
                                <p>
                                    <strong>Freddie Arends</strong>
                                    <time class="float-right" datetime="2018-07-14 20:00">Yesterday</time>
                                </p>
                                <p class="text-truncate">
                                    Interactively reinvent standards compliant supply chains
                                    through next-generation bandwidth.
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="dropdown-footer">
                        <div class="left">
                            <a href="#">Read all messages</a>
                        </div>
                        <div class="right">
                            <a href="#" data-provide="tooltip" title="Mark all as read"><i
                                        class="fa fa-circle-o"></i></a>
                            <a href="#" data-provide="tooltip" title="Settings"><i class="fa fa-gear"></i></a>
                        </div>
                    </div>
                </div>
            </li>
            <!-- END Messages -->
        </ul>
    </div>
</header><!-- END Topbar --><!-- Main container -->
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
                <a class="card card-body card-hover-shadow p-40" href="layout/sidebar.html" target="_blank">
                    <img src="/assets/static/img/preview/landing-layout.jpg" alt="theadmin">
                    <br>
                    <h2 class="fw-400 font-dosis">Customizable Layout</h2>
                    <p class="lead opacity-70">
                        Sidebar, Topbar, Header, Aside, etc.
                    </p>
                </a>
            </div>
            <div class="col-12 col-md-6 col-xl-4">
                <a class="card card-body card-hover-shadow p-40" href="content/icons.html" target="_blank">
                    <img src="/assets/static/img/preview/landing-icons.jpg" alt="theadmin">
                    <br>
                    <h2 class="fw-400 font-dosis">Free Collection of Icons</h2>
                    <p class="lead opacity-70">
                        Linear, Normal, Colorful, Emoji, etc.
                    </p>
                </a>
            </div>
            <div class="col-12 col-md-6 col-xl-4">
                <a class="card card-body card-hover-shadow p-40" href="form/input-default.html" target="_blank">
                    <img src="/assets/static/img/preview/landing-inputs.jpg" alt="theadmin">
                    <br>
                    <h2 class="fw-400 font-dosis">Unique Input Variations</h2>
                    <p class="lead opacity-70">
                        Round, Line, Material, Combine, etc.
                    </p>
                </a>
            </div>
            <div class="col-12 col-md-6 col-xl-4">
                <a class="card card-body card-hover-shadow p-40" href="uikit/buttons.html" target="_blank">
                    <img src="/assets/static/img/preview/landing-uikit.jpg" alt="theadmin">
                    <br>
                    <h2 class="fw-400 font-dosis">Huge UI Library</h2>
                    <p class="lead opacity-70">
                        Buttons, Modals, Dropdown, etc.
                    </p>
                </a>
            </div>
            <div class="col-12 col-md-6 col-xl-4">
                <a class="card card-body card-hover-shadow p-40" href="chart/morris.html" target="_blank">
                    <img src="/assets/static/img/preview/landing-charts.jpg" alt="theadmin">
                    <br>
                    <h2 class="fw-400 font-dosis">Well-Known Charts</h2>
                    <p class="lead opacity-70">
                        Chartjs, Morris, Sparkline, etc.
                    </p>
                </a>
            </div>
            <div class="col-12 col-md-6 col-xl-4">
                <a class="card card-body card-hover-shadow p-40" href="page-app/mailbox.html" target="_blank">
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
    <!--/.main-content --><!-- Footer -->
    <footer class="site-footer">
        <div class="row">
            <div class="col-md-6">
                <p class="text-center text-md-left">
                    Copyright © 2018 <a href="http://thetheme.io/theadmin">TheAdmin</a>.
                    All rights reserved.
                </p>
            </div>
            <div class="col-md-6">
                <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
                    <li class="nav-item">
                        <a class="nav-link" href="help/articles.html">Documentation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="help/faq.html">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                           href="https://themeforest.net/item/theadmin-responsive-bootstrap-4-admin-dashboard-webapp-template/20475359?license=regular&amp;open_purchase_for_item_id=20475359&amp;purchasable=source&amp;ref=thethemeio">Purchase
                            Now
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer><!-- END Footer --></main><!-- END Main container --><!-- Global quickview -->
<div id="qv-global" class="quickview" data-url="/assets/static/data/quickview-global-for-index.html">
    <div class="spinner-linear">
        <div class="line">
        </div>
    </div>
</div>
<!-- END Global quickview --><!-- Scripts -->
<script src="/assets/static/js/core.min.js"></script>
<script src="/assets/static/js/app.min.js"></script>
<script src="/assets/static/js/script.min.js"></script>
</body>
</html>