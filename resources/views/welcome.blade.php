<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#29272a"/>
    <meta name="msapplication-navbutton-color" content="#29272a"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#29272a"/>
    <title>{{ config('app.name') }}</title>
    <link rel='stylesheet' href='/css/style.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='/css/bootstrap.min.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='/css/modified-bootstrap.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='/css/font-awesome.min.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='/css/simple-line-icons.css' type='text/css' media='all'/>
    <link rel='stylesheet'
          href='https://fonts.googleapis.com/css?family=Heebo%3A300%2C400%2C500%2C700%7CAssistant%3A500%2C600%2C700%7CPT+Serif%3A400%2C700%7C%26subset%3Dlatin%2Clatin-ext&amp;ver=1.0.0'
          type='text/css' media='all'/>
    <script type='text/javascript' src='/js/jquery/jquery.js'></script>
    <script type='text/javascript' src='/js/jquery/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='/js/jq-sticky-anything.min.js'></script>
    <link rel="icon" href="/img/cropped-logo-small-32x32.png" sizes="32x32"/>
    <link rel="icon" href="/img/cropped-logo-small-192x192.png" sizes="192x192"/>
    <link rel="apple-touch-icon-precomposed" href="/img/cropped-logo-small-180x180.png"/>
    <meta name="msapplication-TileImage" content="/img/cropped-logo-small-270x270.png"/>
</head>
<body>
<div class="site">
    <div class="sticky-header align-items-center">
        <div class="container">
            <div class="sticky-logo">
                <a href="#">
                    <img src="/img/logo-small.png" alt=""></a>
            </div>
            <nav class="main-navigation sticky">
                <div class="menu-menu1-container">
                    <ul id="menu-menu1" class="menu">
                        <li class="menu-item  current-menu-ancestor menu-item-has-children ">
                            <a href="#">Features</a>
                            <ul class="sub-menu">
                                <li class="menu-item  menu-item-has-children ">
                                    <a href="#">Post Styles</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item  menu-item-has-children ">
                                            <a href="#">Default</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item  ">
                                                    <a href="#">Default Sidebar Right</a></li>
                                                <li class="menu-item  ">
                                                    <a href="#">Default Sidebar Left</a></li>
                                                <li class="menu-item  ">
                                                    <a href="#">Default No Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item  menu-item-has-children ">
                                            <a href="#">Default Boxed</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item  ">
                                                    <a href="#">Default Boxed Sidebar Right</a></li>
                                                <li class="menu-item  ">
                                                    <a href="#">Default Boxed Sidebar Left</a></li>
                                                <li class="menu-item  ">
                                                    <a href="#">Default Boxed No Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item  menu-item-has-children ">
                                            <a href="#">Classic</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item  ">
                                                    <a href="#">Classic Sidebar Right</a></li>
                                                <li class="menu-item  ">
                                                    <a href="#">Classic Sidebar Left</a></li>
                                                <li class="menu-item  ">
                                                    <a href="#">Classic No Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item  menu-item-has-children ">
                                            <a href="#">Classic Boxed</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item  ">
                                                    <a href="#">Classic Boxed Sidebar Right</a></li>
                                                <li class="menu-item  ">
                                                    <a href="#">Classic Boxed Sidebar Left</a></li>
                                                <li class="menu-item  ">
                                                    <a href="#">Classic Boxed No Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item  menu-item-has-children ">
                                            <a href="#">Classic Full Width</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item  ">
                                                    <a href="#">Classic Full Width Sidebar Right</a></li>
                                                <li class="menu-item  ">
                                                    <a href="#">Classic Full Width Sidebar Left</a></li>
                                                <li class="menu-item  ">
                                                    <a href="#">Classic Full Width No Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item  ">
                                            <a href="#">Video</a></li>
                                        <li class="menu-item  ">
                                            <a href="#">Gallery</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item  current-menu-ancestor current-menu-parent menu-item-has-children ">
                                    <a href="#">Header Styles</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item  current-menu-item current_page_item menu-item-home ">
                                            <a href="#">Normal</a></li>
                                        <li class="menu-item  ">
                                            <a href="#">Centered</a></li>
                                        <li class="menu-item  ">
                                            <a href="#">Ad</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="neori-mega-menu menu-item menu-item-type-taxonomy menu-item-object-category ">
                            <a href="#">Editorials</a>
                            <ul class="submenu-mega row align-items-start wz">
                                <li>
                                    <a href="#">
                                        <div class="mega-menu-img">
                                            <img width="300" height="200" src="/img/bg-demo.jpg"
                                                 class="attachment-medium size-medium wp-post-image" alt=""
                                                 {{--srcset="wp-content/uploads/2018/03/editorials1-comprezor-300x200.jpg 300w, wp-content/uploads/2018/03/editorials1-comprezor-768x512.jpg 768w, wp-content/uploads/2018/03/editorials1-comprezor-1024x682.jpg 1024w, wp-content/uploads/2018/03/editorials1-comprezor-600x400.jpg 600w" --}} sizes="(max-width: 300px) 100vw, 300px"/>
                                        </div>
                                        <p>
                                            Aenean sed ipsum non risus pharetra dapibus sit amet quis leo
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="mega-menu-img">
                                            <img width="300" height="194" src="/img/bg-demo.jpg"
                                                 class="attachment-medium size-medium wp-post-image" alt=""
                                                 {{--srcset="wp-content/uploads/2018/03/editorials2-comprezor-300x194.jpg 300w, wp-content/uploads/2018/03/editorials2-comprezor-768x497.jpg 768w, wp-content/uploads/2018/03/editorials2-comprezor-1024x663.jpg 1024w, wp-content/uploads/2018/03/editorials2-comprezor-600x389.jpg 600w" --}} sizes="(max-width: 300px) 100vw, 300px"/>
                                        </div>
                                        <p>
                                            Pellentesque, condimentum sem eleifend tempor purus
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="mega-menu-img">
                                            <img width="300" height="200" src="/img/bg-demo.jpg"
                                                 class="attachment-medium size-medium wp-post-image" alt=""
                                                 {{--srcset="wp-content/uploads/2018/03/editorials3-comprezor-300x200.jpg 300w, wp-content/uploads/2018/03/editorials3-comprezor-768x512.jpg 768w, wp-content/uploads/2018/03/editorials3-comprezor-1024x682.jpg 1024w, wp-content/uploads/2018/03/editorials3-comprezor-600x400.jpg 600w" --}} sizes="(max-width: 300px) 100vw, 300px"/>
                                        </div>
                                        <p>
                                            Vel viverra eros tristique. In nec pellentesque nisi condimentum ligula
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="mega-menu-img">
                                            <img width="300" height="181" src="/img/bg-demo.jpg"
                                                 class="attachment-medium size-medium wp-post-image" alt=""
                                                 {{--srcset="wp-content/uploads/2018/03/editorials4-comprezor-300x181.jpg 300w, wp-content/uploads/2018/03/editorials4-comprezor-768x462.jpg 768w, wp-content/uploads/2018/03/editorials4-comprezor-1024x616.jpg 1024w, wp-content/uploads/2018/03/editorials4-comprezor-600x361.jpg 600w" --}} sizes="(max-width: 300px) 100vw, 300px"/>
                                        </div>
                                        <p>
                                            Massa aenean sagittis diam ac urna tempor, quis cursus urna
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="mega-menu-img">
                                            <img width="300" height="225" src="/img/bg-demo.jpg"
                                                 class="attachment-medium size-medium wp-post-image" alt=""
                                                 {{--srcset="wp-content/uploads/2018/03/editorials5-comprezor-300x225.jpg 300w, wp-content/uploads/2018/03/editorials5-comprezor-768x577.jpg 768w, wp-content/uploads/2018/03/editorials5-comprezor-1024x769.jpg 1024w, wp-content/uploads/2018/03/editorials5-comprezor-600x451.jpg 600w" --}} sizes="(max-width: 300px) 100vw, 300px"/>
                                        </div>
                                        <p>
                                            Sodales lacinia consequat duis sem ipsum varius a fermentum quis
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="mega-menu menu-item menu-item-type-taxonomy menu-item-object-category ">
                            <a href="#">Art</a>
                            <ul class="submenu-mega row align-items-start wz">
                                <li>
                                    <a href="#">
                                        <div class="mega-menu-img">
                                            <img width="300" height="200" src="/img/bg-demo.jpg"
                                                 class="attachment-medium size-medium wp-post-image" alt=""
                                                 sizes="(max-width: 300px) 100vw, 300px"/>
                                        </div>
                                        <p>
                                            Dapibus congue orci in blandit purus proin sodales eros eu tortor
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="mega-menu-img">
                                            <img width="207" height="300" src="/img/bg-demo.jpg"
                                                 class="attachment-medium size-medium wp-post-image" alt=""
                                                 sizes="(max-width: 207px) 100vw, 207px"/>
                                        </div>
                                        <p>
                                            Ac mauris consectetur, et pharetra nisl aliquet nam ac quam vel felis
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="mega-menu-img">
                                            <img width="300" height="225" src="/img/bg-demo.jpg"
                                                 class="attachment-medium size-medium wp-post-image" alt=""
                                                 sizes="(max-width: 300px) 100vw, 300px"/>
                                        </div>
                                        <p>
                                            Tincidunt nisi, non vestibulum enim sed nec eros ex
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="mega-menu-img">
                                            <img width="300" height="200" src="/img/bg-demo.jpg"
                                                 class="attachment-medium size-medium wp-post-image" alt=""
                                                 {{--srcset="wp-content/uploads/2018/03/art4-comprezor-300x200.jpg 300w, wp-content/uploads/2018/03/art4-comprezor-768x512.jpg 768w, wp-content/uploads/2018/03/art4-comprezor-1024x683.jpg 1024w, wp-content/uploads/2018/03/art4-comprezor-600x400.jpg 600w" --}} sizes="(max-width: 300px) 100vw, 300px"/>
                                        </div>
                                        <p>
                                            Odio vitae, rhoncus tortor. Aenean ac vulputate est sed
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="mega-menu-img">
                                            <img width="225" height="300" src="/img/bg-demo.jpg"
                                                 class="attachment-medium size-medium wp-post-image" alt=""
                                                 {{--srcset="wp-content/uploads/2018/03/art5-comprezor-225x300.jpg 225w, wp-content/uploads/2018/03/art5-comprezor-768x1024.jpg 768w, wp-content/uploads/2018/03/art5-comprezor-600x800.jpg 600w" --}} sizes="(max-width: 225px) 100vw, 225px"/>
                                        </div>
                                        <p>
                                            Vel mi malesuada interdum, suspendisse sed ligula in magna dapibus
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item  ">
                            <a href="#">Blog</a></li>
                        <li class="menu-item  ">
                            <a href="#">Shop</a></li>
                        <li class="menu-item menu-item-_type menu-item-object-page ">
                            <a href="#">Contact</a></li>
                    </ul>
                </div>
            </nav>
            <a href="#">
                <i class="fa fa-shopping-cart cart-icon"></i>
            </a>
            <form id="navbarsearchformsticky" class="navbarsearchform" role="search" action="#" method="get">
                <input type="search" name="s" value="">
            </form>
        </div>
    </div>
    <div class="container">
        <header>
            <div class="header-upper" style="height: 69px">
                <div class="logo" style="background-image: url('/img/logo.png'); width: 163px; height: 69px;">
                    <a href="index.html">
                        <h1>{{ config('app.name') }}</h1>
                    </a>
                </div>
                <div class="logo-right" style="height: 69px">
                    <div class="social-icons">
                        <a href="https://facebook.com" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="https://twitter.com" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="https://instagram.com" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-shopping-cart cart-icon"></i>
                        </a>
                        <form class="navbarsearchform" role="search" action="index.html" method="get">
                            <input type="search" name="s" value=" ">
                        </form>
                    </div>
                </div>
            </div>
            <div class="header-lower">
                <nav class="main-navigation">
                    <div class="menu-menu1-container">
                        <ul id="menu-menu1-1" class="menu">
                            <li class="menu-item  current-menu-ancestor menu-item-has-children ">
                                <a href="#">Features</a>
                                <ul class="sub-menu">
                                    <li class="menu-item  menu-item-has-children ">
                                        <a href="#">Post Styles</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item  menu-item-has-children ">
                                                <a href="#">Default</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item  ">
                                                        <a href="mi-sit-amet-mi-suscipit-dictum-ut-placerat-efficitur-augue-vitaedt/index.html">Default
                                                            Sidebar Right
                                                        </a></li>
                                                    <li class="menu-item  ">
                                                        <a href="mi-sit-amet-mi-suscipit-dictum-ut-placerat-efficitur-augue-vitaeds/index.html">Default
                                                            Sidebar Left
                                                        </a></li>
                                                    <li class="menu-item  ">
                                                        <a href="mi-sit-amet-mi-suscipit-dictum-ut-placerat-efficitur-augue-vitaedn/index.html">Default
                                                            No Sidebar
                                                        </a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item  menu-item-has-children ">
                                                <a href="#">Default Boxed</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item  ">
                                                        <a href="mi-sit-amet-mi-suscipit-dictum-ut-placerat-efficitur-augue-vitaedb/index.html">Default
                                                            Boxed Sidebar Right
                                                        </a></li>
                                                    <li class="menu-item  ">
                                                        <a href="mi-sit-amet-mi-suscipit-dictum-ut-placerat-efficitur-augue-vitaedbs/index.html">Default
                                                            Boxed Sidebar Left
                                                        </a></li>
                                                    <li class="menu-item  ">
                                                        <a href="mi-sit-amet-mi-suscipit-dictum-ut-placerat-efficitur-augue-vitaedbn/index.html">Default
                                                            Boxed No Sidebar
                                                        </a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item  menu-item-has-children ">
                                                <a href="#">Classic</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item  ">
                                                        <a href="mi-sit-amet-mi-suscipit-dictum-ut-placerat-efficitur-augue-vitaec/index.html">Classic
                                                            Sidebar Right
                                                        </a></li>
                                                    <li class="menu-item  ">
                                                        <a href="mi-sit-amet-mi-suscipit-dictum-ut-placerat-efficitur-augue-vitaecs/index.html">Classic
                                                            Sidebar Left
                                                        </a></li>
                                                    <li class="menu-item  ">
                                                        <a href="mi-sit-amet-mi-suscipit-dictum-ut-placerat-efficitur-augue-vitaecn/index.html">Classic
                                                            No Sidebar
                                                        </a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item  menu-item-has-children ">
                                                <a href="#">Classic Boxed</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item  ">
                                                        <a href="mi-sit-amet-mi-suscipit-dictum-ut-placerat-efficitur-augue-vitaecb/index.html">Classic
                                                            Boxed Sidebar Right
                                                        </a></li>
                                                    <li class="menu-item  ">
                                                        <a href="mi-sit-amet-mi-suscipit-dictum-ut-placerat-efficitur-augue-vitaecbs/index.html">Classic
                                                            Boxed Sidebar Left
                                                        </a></li>
                                                    <li class="menu-item  ">
                                                        <a href="mi-sit-amet-mi-suscipit-dictum-ut-placerat-efficitur-augue-vitaecbn/index.html">Classic
                                                            Boxed No Sidebar
                                                        </a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item  menu-item-has-children ">
                                                <a href="#">Classic Full Width</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item  ">
                                                        <a href="#">Classic Full Width Sidebar Right</a></li>
                                                    <li class="menu-item  ">
                                                        <a href="#">Classic Full Width Sidebar Left</a></li>
                                                    <li class="menu-item  ">
                                                        <a href="#">Classic Full Width No Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item  ">
                                                <a href="#">Video</a></li>
                                            <li class="menu-item  ">
                                                <a href="#">Gallery</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item  current-menu-ancestor current-menu-parent menu-item-has-children ">
                                        <a href="#">Header Styles</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item  current-menu-item current_page_item menu-item-home ">
                                                <a href="#">Normal</a></li>
                                            <li class="menu-item  ">
                                                <a href="#">Centered</a></li>
                                            <li class="menu-item  ">
                                                <a href="#">Ad</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="mega-menu menu-item menu-item-type-taxonomy menu-item-object-category ">
                                <a href="#">Editorials</a>
                                <ul class="submenu-mega row align-items-start wz">
                                    <li>
                                        <a href="#">
                                            <div class="mega-menu-img">
                                                <img width="300" height="200" src="/img/bg-demo.jpg"
                                                     class="attachment-medium size-medium wp-post-image" alt=""
                                                     sizes="(max-width: 300px) 100vw, 300px"/>
                                            </div>
                                            <p>
                                                Aenean sed ipsum non risus pharetra dapibus sit amet quis leo
                                            </p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="mega-menu-img">
                                                <img width="300" height="194" src="/img/bg-demo.jpg"
                                                     class="attachment-medium size-medium wp-post-image" alt=""
                                                     sizes="(max-width: 300px) 100vw, 300px"/>
                                            </div>
                                            <p>
                                                Pellentesque, condimentum sem eleifend tempor purus
                                            </p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="mega-menu-img">
                                                <img width="300" height="200" src="/img/bg-demo.jpg"
                                                     class="attachment-medium size-medium wp-post-image" alt=""
                                                     sizes="(max-width: 300px) 100vw, 300px"/>
                                            </div>
                                            <p>
                                                Vel viverra eros tristique. In nec pellentesque nisi condimentum
                                                ligula
                                            </p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="mega-menu-img">
                                                <img width="300" height="181" src="/img/bg-demo.jpg"
                                                     class="attachment-medium size-medium wp-post-image" alt=""
                                                     sizes="(max-width: 300px) 100vw, 300px"/>
                                            </div>
                                            <p>
                                                Massa aenean sagittis diam ac urna tempor, quis cursus urna
                                            </p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="mega-menu-img">
                                                <img width="300" height="225" src="/img/bg-demo.jpg"
                                                     class="attachment-medium size-medium wp-post-image" alt=""
                                                     sizes="(max-width: 300px) 100vw, 300px"/>
                                            </div>
                                            <p>
                                                Sodales lacinia consequat duis sem ipsum varius a fermentum quis
                                            </p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="mega-menu menu-item menu-item-type-taxonomy menu-item-object-category ">
                                <a href="#">Art</a>
                                <ul class="submenu-mega row align-items-start wz">
                                    <li>
                                        <a href="#">
                                            <div class="mega-menu-img">
                                                <img width="300" height="200" src="/img/bg-demo.jpg"
                                                     class="attachment-medium size-medium wp-post-image" alt=""
                                                     sizes="(max-width: 300px) 100vw, 300px"/>
                                            </div>
                                            <p>
                                                Dapibus congue orci in blandit purus proin sodales eros eu tortor
                                            </p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="mega-menu-img">
                                                <img width="207" height="300" src="/img/bg-demo.jpg"
                                                     class="attachment-medium size-medium wp-post-image" alt=""
                                                     sizes="(max-width: 207px) 100vw, 207px"/>
                                            </div>
                                            <p>
                                                Ac mauris consectetur, et pharetra nisl aliquet nam ac quam vel felis
                                            </p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="mega-menu-img">
                                                <img width="300" height="225" src="/img/bg-demo.jpg"
                                                     class="attachment-medium size-medium wp-post-image" alt=""
                                                     sizes="(max-width: 300px) 100vw, 300px"/>
                                            </div>
                                            <p>
                                                Tincidunt nisi, non vestibulum enim sed nec eros ex
                                            </p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="mega-menu-img">
                                                <img width="300" height="200" src="/img/bg-demo.jpg"
                                                     class="attachment-medium size-medium wp-post-image" alt=""
                                                     sizes="(max-width: 300px) 100vw, 300px"/>
                                            </div>
                                            <p>
                                                Odio vitae, rhoncus tortor. Aenean ac vulputate est sed
                                            </p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="mega-menu-img">
                                                <img width="225" height="300" src="/img/bg-demo.jpg"
                                                     class="attachment-medium size-medium wp-post-image" alt=""
                                                     sizes="(max-width: 225px) 100vw, 225px"/>
                                            </div>
                                            <p>
                                                Vel mi malesuada interdum, suspendisse sed ligula in magna dapibus
                                            </p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item  ">
                                <a href="blog/index.html">Blog</a></li>
                            <li class="menu-item  ">
                                <a href="shop/index.html">Shop</a></li>
                            <li class="menu-item menu-item-_type menu-item-object-page ">
                                <a href="contact/index.html">Contact</a></li>
                        </ul>
                    </div>
                </nav>
                <div class="offcanvas-navigation">
                    <i class="fa fa-close offcanvas-close"></i>
                    <div class="social-icons">
                        <a href="https://facebook.com">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="https://twitter.com">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="https://instagram.com">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-shopping-cart cart-icon"></i>
                        </a>
                        <form class="navbarsearchform" role="search" action="#" method="get">
                            <input type="search" name="s" value=" ">
                        </form>
                    </div>
                    <div class="menu-menu1-container">
                        <ul id="menu-menu1-2" class="menu">
                            <li class="menu-item  current-menu-ancestor menu-item-has-children ">
                                <a href="#">Features</a>
                                <ul class="sub-menu">
                                    <li class="menu-item  menu-item-has-children ">
                                        <a href="#">Post Styles</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item  menu-item-has-children ">
                                                <a href="#">Default</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item  ">
                                                        <a href="#">Default Sidebar Right</a></li>
                                                    <li class="menu-item  ">
                                                        <a href="#">Default Sidebar Left</a></li>
                                                    <li class="menu-item  ">
                                                        <a href="#">Default No Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item  menu-item-has-children ">
                                                <a href="#">Default Boxed</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item  ">
                                                        <a href="#">Default Boxed Sidebar Right</a></li>
                                                    <li class="menu-item  ">
                                                        <a href="#">Default Boxed Sidebar Left</a></li>
                                                    <li class="menu-item  ">
                                                        <a href="#">Default Boxed No Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item  menu-item-has-children ">
                                                <a href="#">Classic</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item  ">
                                                        <a href="#">Classic Sidebar Right</a></li>
                                                    <li class="menu-item  ">
                                                        <a href="#">Classic Sidebar Left</a></li>
                                                    <li class="menu-item  ">
                                                        <a href="#">Classic No Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item  menu-item-has-children ">
                                                <a href="#">Classic Boxed</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item  ">
                                                        <a href="#">Classic Boxed Sidebar Right</a></li>
                                                    <li class="menu-item  ">
                                                        <a href="#">Classic Boxed Sidebar Left</a></li>
                                                    <li class="menu-item  ">
                                                        <a href="#">Classic Boxed No Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item  menu-item-has-children ">
                                                <a href="#">Classic Full Width</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item  ">
                                                        <a href="#">Classic Full Width Sidebar Right</a></li>
                                                    <li class="menu-item  ">
                                                        <a href="#">Classic Full Width Sidebar Left</a></li>
                                                    <li class="menu-item  ">
                                                        <a href="#">Classic Full Width No Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item  ">
                                                <a href="#">Video</a></li>
                                            <li class="menu-item  ">
                                                <a href="#">Gallery</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item  current-menu-ancestor current-menu-parent menu-item-has-children ">
                                        <a href="#">Header Styles</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item  current-menu-item current_page_item menu-item-home ">
                                                <a href="#">Normal</a></li>
                                            <li class="menu-item  ">
                                                <a href="#">Centered</a></li>
                                            <li class="menu-item  ">
                                                <a href="#">Ad</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="mega-menu menu-item menu-item-type-taxonomy menu-item-object-category ">
                                <a href="#">Editorials</a>
                                <ul class="submenu-mega row align-items-start wz">
                                    <li>
                                        <a href="#">
                                            <div class="mega-menu-img">
                                                <img width="300" height="200" src="/img/bg-demo.jpg"
                                                     class="attachment-medium size-medium wp-post-image" alt=""
                                                     sizes="(max-width: 300px) 100vw, 300px"/>
                                            </div>
                                            <p>
                                                Aenean sed ipsum non risus pharetra dapibus sit amet quis leo
                                            </p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="mega-menu-img">
                                                <img width="300" height="194" src="/img/bg-demo.jpg"
                                                     class="attachment-medium size-medium wp-post-image" alt=""
                                                     sizes="(max-width: 300px) 100vw, 300px"/>
                                            </div>
                                            <p>
                                                Pellentesque, condimentum sem eleifend tempor purus
                                            </p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="mega-menu-img">
                                                <img width="300" height="200" src="/img/bg-demo.jpg"
                                                     class="attachment-medium size-medium wp-post-image" alt=""
                                                     sizes="(max-width: 300px) 100vw, 300px"/>
                                            </div>
                                            <p>
                                                Vel viverra eros tristique. In nec pellentesque nisi condimentum
                                                ligula
                                            </p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="mega-menu-img">
                                                <img width="300" height="181" src="/img/bg-demo.jpg"
                                                     class="attachment-medium size-medium wp-post-image" alt=""
                                                     sizes="(max-width: 300px) 100vw, 300px"/>
                                            </div>
                                            <p>
                                                Massa aenean sagittis diam ac urna tempor, quis cursus urna
                                            </p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="mega-menu-img">
                                                <img width="300" height="225" src="/img/bg-demo.jpg"
                                                     class="attachment-medium size-medium wp-post-image" alt=""
                                                     sizes="(max-width: 300px) 100vw, 300px"/>
                                            </div>
                                            <p>
                                                Sodales lacinia consequat duis sem ipsum varius a fermentum quis
                                            </p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="mega-menu menu-item menu-item-type-taxonomy menu-item-object-category ">
                                <a href="#">Art</a>
                                <ul class="submenu-mega row align-items-start wz">
                                    <li>
                                        <a href="#">
                                            <div class="mega-menu-img">
                                                <img width="300" height="200" src="/img/bg-demo.jpg"
                                                     class="attachment-medium size-medium wp-post-image" alt=""
                                                     sizes="(max-width: 300px) 100vw, 300px"/>
                                            </div>
                                            <p>
                                                Dapibus congue orci in blandit purus proin sodales eros eu tortor
                                            </p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="mega-menu-img">
                                                <img width="207" height="300" src="/img/bg-demo.jpg"
                                                     class="attachment-medium size-medium wp-post-image" alt=""
                                                     sizes="(max-width: 207px) 100vw, 207px"/>
                                            </div>
                                            <p>
                                                Ac mauris consectetur, et pharetra nisl aliquet nam ac quam vel felis
                                            </p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="mega-menu-img">
                                                <img width="300" height="225" src="/img/bg-demo.jpg"
                                                     class="attachment-medium size-medium wp-post-image" alt=""
                                                     sizes="(max-width: 300px) 100vw, 300px"/>
                                            </div>
                                            <p>
                                                Tincidunt nisi, non vestibulum enim sed nec eros ex
                                            </p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="mega-menu-img">
                                                <img width="300" height="200" src="/img/bg-demo.jpg"
                                                     class="attachment-medium size-medium wp-post-image" alt=""
                                                     sizes="(max-width: 300px) 100vw, 300px"/>
                                            </div>
                                            <p>
                                                Odio vitae, rhoncus tortor. Aenean ac vulputate est sed
                                            </p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="mega-menu-img">
                                                <img width="225" height="300" src="/img/bg-demo.jpg"
                                                     class="attachment-medium size-medium wp-post-image" alt=""
                                                     sizes="(max-width: 225px) 100vw, 225px"/>
                                            </div>
                                            <p>
                                                Vel mi malesuada interdum, suspendisse sed ligula in magna dapibus
                                            </p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item  ">
                                <a href="blog/index.html">Blog</a></li>
                            <li class="menu-item  ">
                                <a href="shop/index.html">Shop</a></li>
                            <li class="menu-item menu-item-_type menu-item-object-page ">
                                <a href="contact/index.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <div class="offcanvas-menu-button">
        <i class="fa fa-bars"></i>
    </div>
    <div class="container">
        <div class="row">
            <div class="content col-lg-12 mx-auto align-items-center">
                <article class=" page type-page hentry">
                    <div class="entry-content">
                        <div id="carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img width="1921" height="1573" src="/img/bg-demo.jpg"
                                         class="d-block w-100 carousel-image wp-post-image" alt="" title="First slide"
                                         srcset="/img/bg-demo.jpg 1921w, /img/bg-demo.jpg 300w, /img/bg-demo.jpg 768w, /img/bg-demo.jpg 1024w, /img/bg-demo.jpg 600w"
                                         sizes="(max-width: 1921px) 100vw, 1921px"/>
                                    <div class="carousel-caption d-block">
                                        <h3>
                                            <a href="#">Pretium ac placerat dui interdum nunc in eros urna morbi</a>
                                        </h3>
                                        <p class="d-sm-block d-md-none">
                                            <a href="pretium-ac-placerat-dui-interdum-nunc-in-eros-urna-morbi/index.html">Lorem
                                                ipsum dolor sit amet, consectetur adipiscing elit. Ut viverra...
                                            </a>
                                        </p>
                                        <p class="d-none d-md-block">
                                            <a href="pretium-ac-placerat-dui-interdum-nunc-in-eros-urna-morbi/index.html">Lorem
                                                ipsum dolor sit amet, consectetur adipiscing elit. Ut viverra nisl
                                                rutrum, pretium lectus nec, sagittis dolor. Phasellus eleifend
                                                efficitur...
                                            </a>
                                        </p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img width="1922" height="1281" src="/img/bg-demo.jpg"
                                         class="d-block w-100 carousel-image wp-post-image" alt="" title="Second Slide"
                                         srcset="/img/bg-demo.jpg 1922w, /img/bg-demo.jpg 300w, /img/bg-demo.jpg 768w, /img/bg-demo.jpg 1024w, /img/bg-demo.jpg 600w"
                                         sizes="(max-width: 1922px) 100vw, 1922px"/>
                                    <div class="carousel-caption d-block">
                                        <h3>
                                            <a href="#">Aliquam vitae efficitur purus cras sem odio vehicula at diam
                                                ac
                                            </a></h3>
                                        <p class="d-sm-block d-md-none">
                                            <a href="aliquam-vitae-efficitur-purus-cras-sem-odio-vehicula-at-diam-ac/index.html">Lorem
                                                ipsum dolor sit amet, consectetur adipiscing elit. Ut viverra...
                                            </a>
                                        </p>
                                        <p class="d-none d-md-block">
                                            <a href="aliquam-vitae-efficitur-purus-cras-sem-odio-vehicula-at-diam-ac/index.html">Lorem
                                                ipsum dolor sit amet, consectetur adipiscing elit. Ut viverra nisl
                                                rutrum, pretium lectus nec, sagittis dolor. Phasellus eleifend
                                                efficitur...
                                            </a>
                                        </p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img width="1927" height="1285" src="/img/bg-demo.jpg"
                                         class="d-block w-100 carousel-image wp-post-image" alt="" title="Second Slide"
                                         sizes="(max-width: 1927px) 100vw, 1927px"/>
                                    <div class="carousel-caption d-block">
                                        <h3>
                                            <a href="#">Quis cursus urna faucibus nulla rhoncus molestie erat at
                                                luctus
                                            </a></h3>
                                        <p class="d-sm-block d-md-none">
                                            <a href="quis-cursus-urna-faucibus-nulla-rhoncus-molestie-erat-at-luctus/index.html">Lorem
                                                ipsum dolor sit amet, consectetur adipiscing elit. Ut viverra...
                                            </a>
                                        </p>
                                        <p class="d-none d-md-block">
                                            <a href="quis-cursus-urna-faucibus-nulla-rhoncus-molestie-erat-at-luctus/index.html">Lorem
                                                ipsum dolor sit amet, consectetur adipiscing elit. Ut viverra nisl
                                                rutrum, pretium lectus nec, sagittis dolor. Phasellus eleifend
                                                efficitur...
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            </a>
                        </div>
                        <div class="slice type1">
                            <a href="#">
                                <h2 class="slice-title">world</h2>
                            </a>
                            <div class="card-deck">
                                <div class="card">
                                    <article class=" post hentry ">
                                        <a href="#">
                                            <img width="768" height="523" src="/img/bg-demo.jpg"
                                                 class="card-img-top wp-post-image" alt=""
                                                 sizes="(max-width: 768px) 100vw, 768px"/></a>
                                        <div class="card-body">
                                            <h3 class="card-title">
                                                <a href="in-ultricies-nunc-ut-mi-finibus-congue-porttitor-vec/index.html">In
                                                    ultricies nunc ut mi finibus congue porttitor vec
                                                </a></h3>
                                            <p class="card-text">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Ut viverra nisl rutrum, pretium lectus nec, sagittis dolor....
                                            </p>
                                            <p class="card-meta">
                                                <img src='https://2.gravatar.com/avatar/ee009ffd2d2d1827217bf8c3a968fd16?s=20&amp;d=mm&amp;r=g'
                                                     srcset='https://2.gravatar.com/avatar/ee009ffd2d2d1827217bf8c3a968fd16?s=40&amp;d=mm&amp;r=g 2x'
                                                     class='useravatar avatar-20 photo' height='20' width='20'/>
                                                <span class="author">
										<a href="#" title="Posts by Lora" rel="author">Lora</a></span>
                                                <span class="date">January 28, 2018</span>
                                            </p>
                                        </div>
                                    </article>
                                </div>
                                <div class="card">
                                    <article class=" post hentry ">
                                        <a href="#">
                                            <img width="768" height="521" src="/img/bg-demo.jpg"
                                                 class="card-img-top wp-post-image" alt=""
                                                 sizes="(max-width: 768px) 100vw, 768px"/></a>
                                        <div class="card-body">
                                            <h3 class="card-title">
                                                <a href="class-aptent-taciti-sociosqu-ad-litora-torquent-per-conubia/index.html">Class
                                                    aptent taciti sociosqu ad litora torquent per conubia
                                                </a></h3>
                                            <p class="card-text">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Ut viverra nisl rutrum, pretium lectus nec, sagittis dolor....
                                            </p>
                                            <p class="card-meta">
                                                <img src='https://2.gravatar.com/avatar/ee009ffd2d2d1827217bf8c3a968fd16?s=20&amp;d=mm&amp;r=g'
                                                     srcset='https://2.gravatar.com/avatar/ee009ffd2d2d1827217bf8c3a968fd16?s=40&amp;d=mm&amp;r=g 2x'
                                                     class='useravatar avatar-20 photo' height='20' width='20'/>
                                                <span class="author">
										<a href="#" title="Posts by Lora" rel="author">Lora</a></span>
                                                <span class="date">January 28, 2018</span>
                                            </p>
                                        </div>
                                    </article>
                                </div>
                                <div class="card">
                                    <article class=" post hentry ">
                                        <a href="#">
                                            <img width="768" height="510" src="/img/bg-demo.jpg"
                                                 class="card-img-top wp-post-image" alt=""
                                                 sizes="(max-width: 768px) 100vw, 768px"/></a>
                                        <div class="card-body">
                                            <h3 class="card-title">
                                                <a href="praesent-urna-magna-laoreet-ac-ante-ultrices/index.html">Praesent
                                                    urna magna, laoreet ac ante ultrices
                                                </a></h3>
                                            <p class="card-text">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Ut viverra nisl rutrum, pretium lectus nec, sagittis dolor....
                                            </p>
                                            <p class="card-meta">
                                                <img src='https://2.gravatar.com/avatar/ee009ffd2d2d1827217bf8c3a968fd16?s=20&amp;d=mm&amp;r=g'
                                                     srcset='https://2.gravatar.com/avatar/ee009ffd2d2d1827217bf8c3a968fd16?s=40&amp;d=mm&amp;r=g 2x'
                                                     class='useravatar avatar-20 photo' height='20' width='20'/>
                                                <span class="author">
										<a href="#" title="Posts by Lora" rel="author">Lora</a></span>
                                                <span class="date">January 28, 2018</span>
                                            </p>
                                        </div>
                                    </article>
                                </div>
                                <div class="card">
                                    <article class=" post hentry ">
                                        <a href="#">
                                            <img width="768" height="1055" src="/img/bg-demo.jpg"
                                                 class="card-img-top wp-post-image" alt=""
                                                 sizes="(max-width: 768px) 100vw, 768px"/></a>
                                        <div class="card-body">
                                            <h3 class="card-title">
                                                <a href="vestibulum-vitae-leo-ut-lacus-ullamcorper-sollicitudin-sed/index.html">Vestibulum
                                                    vitae leo ut lacus ullamcorper sollicitudin sed
                                                </a></h3>
                                            <p class="card-text">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Ut viverra nisl rutrum, pretium lectus nec, sagittis dolor....
                                            </p>
                                            <p class="card-meta">
                                                <img src='https://2.gravatar.com/avatar/ee009ffd2d2d1827217bf8c3a968fd16?s=20&amp;d=mm&amp;r=g'
                                                     srcset='https://2.gravatar.com/avatar/ee009ffd2d2d1827217bf8c3a968fd16?s=40&amp;d=mm&amp;r=g 2x'
                                                     class='useravatar avatar-20 photo' height='20' width='20'/>
                                                <span class="author">
										<a href="#" title="Posts by Lora" rel="author">Lora</a></span>
                                                <span class="date">January 28, 2018</span>
                                            </p>
                                        </div>
                                    </article>
                                </div>
                                <div class="card">
                                    <article class=" post hentry ">
                                        <a href="#">
                                            <img width="768" height="512" src="/img/bg-demo.jpg"
                                                 class="card-img-top wp-post-image" alt=""
                                                 sizes="(max-width: 768px) 100vw, 768px"/></a>
                                        <div class="card-body">
                                            <h3 class="card-title">
                                                <a href="quisque-eget-tortor-eu-ex-fringilla-feugiat-nunc-congue/index.html">Quisque
                                                    eget tortor eu ex fringilla feugiat. Nunc congue
                                                </a></h3>
                                            <p class="card-text">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Ut viverra nisl rutrum, pretium lectus nec, sagittis dolor....
                                            </p>
                                            <p class="card-meta">
                                                <img src='https://2.gravatar.com/avatar/ee009ffd2d2d1827217bf8c3a968fd16?s=20&amp;d=mm&amp;r=g'
                                                     srcset='https://2.gravatar.com/avatar/ee009ffd2d2d1827217bf8c3a968fd16?s=40&amp;d=mm&amp;r=g 2x'
                                                     class='useravatar avatar-20 photo' height='20' width='20'/>
                                                <span class="author">
										<a href="#" title="Posts by Lora" rel="author">Lora</a></span>
                                                <span class="date">January 28, 2018</span>
                                            </p>
                                        </div>
                                    </article>
                                </div>
                                <div class="card">
                                    <article class="post hentry ">
                                        <a href="#">
                                            <img width="768" height="512" src="/img/bg-demo.jpg"
                                                 class="card-img-top wp-post-image" alt=""
                                                 sizes="(max-width: 768px) 100vw, 768px"/></a>
                                        <div class="card-body">
                                            <h3 class="card-title">
                                                <a href="nam-arcu-justo-vestibulum-nec-purus-pulvinar/index.html">Nam
                                                    arcu justo, vestibulum nec purus pulvinar
                                                </a></h3>
                                            <p class="card-text">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Ut viverra nisl rutrum, pretium lectus nec, sagittis dolor....
                                            </p>
                                            <p class="card-meta">
                                                <img src='https://2.gravatar.com/avatar/ee009ffd2d2d1827217bf8c3a968fd16?s=20&amp;d=mm&amp;r=g'
                                                     srcset='https://2.gravatar.com/avatar/ee009ffd2d2d1827217bf8c3a968fd16?s=40&amp;d=mm&amp;r=g 2x'
                                                     class='useravatar avatar-20 photo' height='20' width='20'/>
                                                <span class="author">
										<a href="#" title="Posts by Lora" rel="author">Lora</a></span>
                                                <span class="date">January 28, 2018</span>
                                            </p>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="slice type2">
                            <a href="#">
                                <h2 class="slice-title">lifestyle</h2>
                            </a>
                            <div class="card-deck">
                                <div class="card">
                                    <article class="post hentry ">
                                        <a href="#">
                                            <img width="768" height="510" src="/img/bg-demo.jpg"
                                                 class="card-img-top wp-post-image" alt=""
                                                 sizes="(max-width: 768px) 100vw, 768px"/></a>
                                        <div class="card-body">
                                            <h3 class="card-title">
                                                <a href="donec-non-massa-a-ipsum-tempus-suscipit-pellentesque-habitant/index.html">Donec
                                                    non massa a ipsum tempus suscipit pellentesque habitant
                                                </a></h3>
                                            <p class="card-text">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Ut viverra nisl rutrum, pretium lectus nec, sagittis dolor.
                                                Phasellus eleifend efficitur gravida. Maecenas auctor...
                                            </p>
                                            <p class="card-meta">
                                                <img src='https://2.gravatar.com/avatar/ee009ffd2d2d1827217bf8c3a968fd16?s=20&amp;d=mm&amp;r=g'
                                                     srcset='https://2.gravatar.com/avatar/ee009ffd2d2d1827217bf8c3a968fd16?s=40&amp;d=mm&amp;r=g 2x'
                                                     class='useravatar avatar-20 photo' height='20' width='20'/>
                                                <span class="author">
										<a href="#" title="Posts by Lora" rel="author">Lora</a></span>
                                                <span class="date">January 28, 2018</span>
                                            </p>
                                        </div>
                                    </article>
                                </div>
                                <div class="card">
                                    <article class=" post hentry ">
                                        <a href="#">
                                            <img width="768" height="433" src="/img/bg-demo.jpg"
                                                 class="card-img-top wp-post-image" alt=""
                                                 sizes="(max-width: 768px) 100vw, 768px"/></a>
                                        <div class="card-body">
                                            <h3 class="card-title">
                                                <a href="in-tempus-vitae-nisi-ut-cursus-proin-eleifend-tellus-quis-nunc/index.html">In
                                                    tempus vitae nisi ut cursus. Proin eleifend tellus quis nunc
                                                </a>
                                            </h3>
                                            <p class="card-text">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Ut viverra nisl rutrum, pretium lectus nec, sagittis dolor.
                                                Phasellus eleifend efficitur gravida. Maecenas auctor...
                                            </p>
                                            <p class="card-meta">
                                                <img src='https://2.gravatar.com/avatar/ee009ffd2d2d1827217bf8c3a968fd16?s=20&amp;d=mm&amp;r=g'
                                                     srcset='https://2.gravatar.com/avatar/ee009ffd2d2d1827217bf8c3a968fd16?s=40&amp;d=mm&amp;r=g 2x'
                                                     class='useravatar avatar-20 photo' height='20' width='20'/>
                                                <span class="author">
										<a href="#" title="Posts by Lora" rel="author">Lora</a></span>
                                                <span class="date">January 28, 2018</span>
                                            </p>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="slice type3">
                            <a href="#">
                                <h2 class="slice-title">art</h2>
                            </a>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="card">
                                        <article class=" post hentry ">
                                            <a href="#">
                                                <img width="768" height="512" src="/img/bg-demo.jpg"
                                                     class="card-img-top wp-post-image" alt=""
                                                     sizes="(max-width: 768px) 100vw, 768px"/></a>
                                            <div class="card-body">
                                                <h3 class="card-title">
                                                    <a href="dapibus-congue-orci-in-blandit-purus-proin-sodales-eros-eu-tortor/index.html">Dapibus
                                                        congue orci in blandit purus proin sodales eros eu tortor
                                                    </a>
                                                </h3>
                                                <p class="card-text">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    elit. Ut viverra nisl rutrum, pretium lectus nec, sagittis dolor.
                                                    Phasellus eleifend efficitur gravida. Maecenas auctor...
                                                </p>
                                                <p class="card-meta">
                                                    <img src='https://2.gravatar.com/avatar/ee009ffd2d2d1827217bf8c3a968fd16?s=20&amp;d=mm&amp;r=g'
                                                         srcset='https://2.gravatar.com/avatar/ee009ffd2d2d1827217bf8c3a968fd16?s=40&amp;d=mm&amp;r=g 2x'
                                                         class='useravatar avatar-20 photo' height='20' width='20'/>
                                                    <span class="author">
											<a href="#" title="Posts by Lora" rel="author">Lora</a></span>
                                                    <span class="date">January 28, 2018</span>
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                                <div class="slice type31 col-12 col-lg-6">
                                    <article class="blog-post row align-items-center post hentry ">
                                        <div class="blog-post-thumbnail-zone col-12 col-lg-6">
                                            <a href="#">
                                                <img width="768" height="1114" src="/img/bg-demo.jpg"
                                                     class="blog-post-thumbnail wp-post-image" alt=""
                                                     sizes="(max-width: 768px) 100vw, 768px"/></a>
                                        </div>
                                        <div class="blog-post-text-zone col-12 col-lg-6">
                                            <h2>
                                                <a href="#">Ac mauris consectetur, et pharetra nisl aliquet nam ac quam
                                                    vel felis
                                                </a></h2>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut viverra nisl
                                                rutrum, pretium lectus nec, sagittis dolor. Phasellus eleifend efficitur
                                                gravida. Maecenas auctor eleifend mi, gravida lacinia arcu vehicula
                                                nec....
                                            </p>
                                            <p class="card-meta">
                                                <img src='https://2.gravatar.com/avatar/ee009ffd2d2d1827217bf8c3a968fd16?s=20&amp;d=mm&amp;r=g'
                                                     srcset='https://2.gravatar.com/avatar/ee009ffd2d2d1827217bf8c3a968fd16?s=40&amp;d=mm&amp;r=g 2x'
                                                     class='useravatar avatar-20 photo' height='20' width='20'/>
                                                <span class="author">
										<a href="#" title="Posts by Lora" rel="author">Lora</a></span>
                                                <span class="date">January 28, 2018</span>
                                            </p>
                                        </div>
                                    </article>
                                    <article class="blog-post row align-items-center post hentry ">
                                        <div class="blog-post-thumbnail-zone col-12 col-lg-6">
                                            <a href="#">
                                                <img width="768" height="576" src="/img/bg-demo.jpg"
                                                     class="blog-post-thumbnail wp-post-image" alt=""
                                                     sizes="(max-width: 768px) 100vw, 768px"/></a>
                                        </div>
                                        <div class="blog-post-text-zone col-12 col-lg-6">
                                            <h2>
                                                <a href="#">Tincidunt nisi, non vestibulum enim sed nec eros ex</a></h2>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut viverra nisl
                                                rutrum, pretium lectus nec, sagittis dolor. Phasellus eleifend efficitur
                                                gravida. Maecenas auctor eleifend mi, gravida lacinia arcu vehicula
                                                nec....
                                            </p>
                                            <p class="card-meta">
                                                <img src='https://2.gravatar.com/avatar/ee009ffd2d2d1827217bf8c3a968fd16?s=20&amp;d=mm&amp;r=g'
                                                     srcset='https://2.gravatar.com/avatar/ee009ffd2d2d1827217bf8c3a968fd16?s=40&amp;d=mm&amp;r=g 2x'
                                                     class='useravatar avatar-20 photo' height='20' width='20'/>
                                                <span class="author">
										<a href="#" title="Posts by Lora" rel="author">Lora</a></span>
                                                <span class="date">January 28, 2018</span>
                                            </p>
                                        </div>
                                    </article>
                                    <article class="blog-post row align-items-center post hentry ">
                                        <div class="blog-post-thumbnail-zone col-12 col-lg-6">
                                            <a href="#">
                                                <img width="768" height="512" src="/img/bg-demo.jpg"
                                                     class="blog-post-thumbnail wp-post-image" alt=""
                                                     sizes="(max-width: 768px) 100vw, 768px"/></a>
                                        </div>
                                        <div class="blog-post-text-zone col-12 col-lg-6">
                                            <h2>
                                                <a href="#">Odio vitae, rhoncus tortor. Aenean ac vulputate est sed</a>
                                            </h2>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut viverra nisl
                                                rutrum, pretium lectus nec, sagittis dolor. Phasellus eleifend efficitur
                                                gravida. Maecenas auctor eleifend mi, gravida lacinia arcu vehicula
                                                nec....
                                            </p>
                                            <p class="card-meta">
                                                <img src='https://2.gravatar.com/avatar/ee009ffd2d2d1827217bf8c3a968fd16?s=20&amp;d=mm&amp;r=g'
                                                     srcset='https://2.gravatar.com/avatar/ee009ffd2d2d1827217bf8c3a968fd16?s=40&amp;d=mm&amp;r=g 2x'
                                                     class='useravatar avatar-20 photo' height='20' width='20'/>
                                                <span class="author">
										<a href="#" title="Posts by Lora" rel="author">Lora</a></span>
                                                <span class="date">January 28, 2018</span>
                                            </p>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="slice type4">
                            <a href="#">
                                <h2 class="slice-title">science</h2>
                            </a>
                            <div class="card-deck">
                                <div class="card">
                                    <article class=" post hentry ">
                                        <a href="#">
                                            <img width="768" height="512" src="/img/bg-demo.jpg"
                                                 class="card-img wp-post-image" alt=""
                                                 sizes="(max-width: 768px) 100vw, 768px"/></a>
                                        <div class="card-img-overlay">
                                            <h3 class="card-title">
                                                <a href="#">Quis orci tincidunt, porta consequat metus condimentum sed
                                                    vel
                                                </a></h3>
                                            <p class="card-meta">
                                                <img src='https://2.gravatar.com/avatar/ee009ffd2d2d1827217bf8c3a968fd16?s=20&amp;d=mm&amp;r=g'
                                                     srcset='https://2.gravatar.com/avatar/ee009ffd2d2d1827217bf8c3a968fd16?s=40&amp;d=mm&amp;r=g 2x'
                                                     class='useravatar avatar-20 photo' height='20' width='20'/>
                                                <span class="author">
										<a href="#" title="Posts by Lora" rel="author">Lora</a></span>
                                                <span class="date">January 28, 2018</span>
                                            </p>
                                        </div>
                                    </article>
                                </div>
                                <div class="card">
                                    <article class=" post hentry ">
                                        <a href="#">
                                            <img width="768" height="512" src="/img/bg-demo.jpg"
                                                 class="card-img wp-post-image" alt=""
                                                 sizes="(max-width: 768px) 100vw, 768px"/></a>
                                        <div class="card-img-overlay">
                                            <h3 class="card-title">
                                                <a href="#">Risus donec sit amet blandit nibh curabitur sit</a></h3>
                                            <p class="card-meta">
                                                <img src='https://2.gravatar.com/avatar/ee009ffd2d2d1827217bf8c3a968fd16?s=20&amp;d=mm&amp;r=g'
                                                     srcset='https://2.gravatar.com/avatar/ee009ffd2d2d1827217bf8c3a968fd16?s=40&amp;d=mm&amp;r=g 2x'
                                                     class='useravatar avatar-20 photo' height='20' width='20'/>
                                                <span class="author">
										<a href="#" title="Posts by Lora" rel="author">Lora</a></span>
                                                <span class="date">January 28, 2018</span>
                                            </p>
                                        </div>
                                    </article>
                                </div>
                                <div class="card">
                                    <article class=" post hentry ">
                                        <a href="#">
                                            <img width="768" height="1010" src="/img/bg-demo.jpg"
                                                 class="card-img wp-post-image" alt=""
                                                 {{--srcset="wp-content/uploads/2018/03/science3-comprezor-768x1010.jpg 768w, wp-content/uploads/2018/03/science3-comprezor-228x300.jpg 228w, wp-content/uploads/2018/03/science3-comprezor-778x1024.jpg 778w, wp-content/uploads/2018/03/science3-comprezor-600x789.jpg 600w" --}} sizes="(max-width: 768px) 100vw, 768px"/></a>
                                        <div class="card-img-overlay">
                                            <h3 class="card-title">
                                                <a href="#">Pellentesque vitae odio ac ante ullamcorper auctor</a></h3>
                                            <p class="card-meta">
                                                <img src='https://2.gravatar.com/avatar/ee009ffd2d2d1827217bf8c3a968fd16?s=20&amp;d=mm&amp;r=g'
                                                     srcset='https://2.gravatar.com/avatar/ee009ffd2d2d1827217bf8c3a968fd16?s=40&amp;d=mm&amp;r=g 2x'
                                                     class='useravatar avatar-20 photo' height='20' width='20'/>
                                                <span class="author">
										<a href="#" title="Posts by Lora" rel="author">Lora</a></span>
                                                <span class="date">January 28, 2018</span>
                                            </p>
                                        </div>
                                    </article>
                                </div>
                                <div class="card">
                                    <article class=" post hentry ">
                                        <a href="#">
                                            <img width="768" height="970" src="/img/bg-demo.jpg"
                                                 class="card-img wp-post-image" alt=""
                                                 {{--srcset="wp-content/uploads/2018/03/science4-comprezor-768x970.jpg 768w, wp-content/uploads/2018/03/science4-comprezor-237x300.jpg 237w, wp-content/uploads/2018/03/science4-comprezor-810x1024.jpg 810w, wp-content/uploads/2018/03/science4-comprezor-600x758.jpg 600w" --}} sizes="(max-width: 768px) 100vw, 768px"/></a>
                                        <div class="card-img-overlay">
                                            <h3 class="card-title">
                                                <a href="duis-hendrerit-ullamcorper-lacus-vel-venenatis-est-auctor-id-cras/index.html">Duis
                                                    hendrerit ullamcorper lacus vel venenatis est auctor id cras
                                                </a>
                                            </h3>
                                            <p class="card-meta">
                                                <img src='https://2.gravatar.com/avatar/ee009ffd2d2d1827217bf8c3a968fd16?s=20&amp;d=mm&amp;r=g'
                                                     srcset='https://2.gravatar.com/avatar/ee009ffd2d2d1827217bf8c3a968fd16?s=40&amp;d=mm&amp;r=g 2x'
                                                     class='useravatar avatar-20 photo' height='20' width='20'/>
                                                <span class="author">
										<a href="#" title="Posts by Lora" rel="author">Lora</a></span>
                                                <span class="date">January 28, 2018</span>
                                            </p>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="slice type6">
                            <a href="#">
                                <h2 class="slice-title">stories</h2>
                            </a>
                            <div class="card-deck">
                                <div class="card">
                                    <article class=" post hentry ">
                                        <a href="#">
                                            <img width="768" height="512" src="/img/bg-demo.jpg"
                                                 class="card-img-top wp-post-image" alt=""
                                                 {{--srcset="wp-content/uploads/2018/03/stories1-comprezor-768x512.jpg 768w, wp-content/uploads/2018/03/stories1-comprezor-300x200.jpg 300w, wp-content/uploads/2018/03/stories1-comprezor-1024x683.jpg 1024w, wp-content/uploads/2018/03/stories1-comprezor-600x400.jpg 600w" --}} sizes="(max-width: 768px) 100vw, 768px"/></a>
                                        <div class="card-body">
                                            <h3 class="card-title">
                                                <a href="in-eleifend-luctus-nunc-quis-porta-orci-ultrices-ut-donec/index.html">In
                                                    eleifend luctus nunc quis porta orci ultrices ut donec
                                                </a></h3>
                                            <p class="card-text">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Ut viverra nisl rutrum, pretium lectus nec, sagittis dolor.
                                                Phasellus eleifend efficitur gravida. Maecenas auctor...
                                            </p>
                                            <p class="card-meta">
                                                <img src='https://2.gravatar.com/avatar/ee009ffd2d2d1827217bf8c3a968fd16?s=20&amp;d=mm&amp;r=g'
                                                     srcset='https://2.gravatar.com/avatar/ee009ffd2d2d1827217bf8c3a968fd16?s=40&amp;d=mm&amp;r=g 2x'
                                                     class='useravatar avatar-20 photo' height='20' width='20'/>
                                                <span class="author">
										<a href="#" title="Posts by Lora" rel="author">Lora</a></span>
                                                <span class="date">January 28, 2018</span>
                                            </p>
                                        </div>
                                    </article>
                                </div>
                                <div class="card">
                                    <article class=" post hentry ">
                                        <a href="#">
                                            <img width="768" height="513" src="/img/bg-demo.jpg"
                                                 class="card-img-top wp-post-image" alt=""
                                                 {{--srcset="wp-content/uploads/2018/03/stories2-comprezor-768x513.jpg 768w, wp-content/uploads/2018/03/stories2-comprezor-300x200.jpg 300w, wp-content/uploads/2018/03/stories2-comprezor-1024x683.jpg 1024w, wp-content/uploads/2018/03/stories2-comprezor-600x400.jpg 600w" --}} sizes="(max-width: 768px) 100vw, 768px"/></a>
                                        <div class="card-body">
                                            <h3 class="card-title">
                                                <a href="malesuada-ligula-dolor-ac-laoreet-tellus-tristique-non-morbi-metus/index.html">Malesuada
                                                    ligula dolor ac laoreet tellus tristique non morbi metus
                                                </a></h3>
                                            <p class="card-text">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Ut viverra nisl rutrum, pretium lectus nec, sagittis dolor.
                                                Phasellus eleifend efficitur gravida. Maecenas auctor...
                                            </p>
                                            <p class="card-meta">
                                                <img src='https://2.gravatar.com/avatar/ee009ffd2d2d1827217bf8c3a968fd16?s=20&amp;d=mm&amp;r=g'
                                                     srcset='https://2.gravatar.com/avatar/ee009ffd2d2d1827217bf8c3a968fd16?s=40&amp;d=mm&amp;r=g 2x'
                                                     class='useravatar avatar-20 photo' height='20' width='20'/>
                                                <span class="author">
										<a href="#" title="Posts by Lora" rel="author">Lora</a></span>
                                                <span class="date">January 28, 2018</span>
                                            </p>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="slice type5">
                            <a href="#">
                                <h2 class="slice-title">travel</h2>
                            </a>
                            <div class="card-deck">
                                <div class="card">
                                    <article class=" post hentry ">
                                        <a href="#">
                                            <img width="768" height="512" src="/img/bg-demo.jpg"
                                                 class="card-img wp-post-image" alt=""
                                                 {{--srcset="wp-content/uploads/2018/03/travel1-comprezor-768x512.jpg 768w, wp-content/uploads/2018/03/travel1-comprezor-300x200.jpg 300w, wp-content/uploads/2018/03/travel1-comprezor-1024x682.jpg 1024w, wp-content/uploads/2018/03/travel1-comprezor-600x400.jpg 600w" --}} sizes="(max-width: 768px) 100vw, 768px"/></a>
                                        <div class="card-img-overlay">
                                            <h3 class="card-title">
                                                <a href="aliquam-vitae-efficitur-purus-cras-sem-odio-vehicula-at-diam-ac/index.html">Aliquam
                                                    vitae efficitur purus cras sem odio vehicula at diam ac
                                                </a></h3>
                                            <p class="card-meta">
                                                <img src='https://2.gravatar.com/avatar/ee009ffd2d2d1827217bf8c3a968fd16?s=20&amp;d=mm&amp;r=g'
                                                     srcset='https://2.gravatar.com/avatar/ee009ffd2d2d1827217bf8c3a968fd16?s=40&amp;d=mm&amp;r=g 2x'
                                                     class='useravatar avatar-20 photo' height='20' width='20'/>
                                                <span class="author">
										<a href="#" title="Posts by Lora" rel="author">Lora</a></span>
                                                <span class="date">January 28, 2018</span>
                                            </p>
                                        </div>
                                    </article>
                                </div>
                                <div class="card">
                                    <article class=" post hentry ">
                                        <a href="#">
                                            <img width="768" height="576" src="/img/bg-demo.jpg"
                                                 class="card-img wp-post-image" alt=""
                                                 {{--srcset="wp-content/uploads/2018/03/travel2-comprezor-768x576.jpg 768w, wp-content/uploads/2018/03/travel2-comprezor-300x225.jpg 300w, wp-content/uploads/2018/03/travel2-comprezor-1024x768.jpg 1024w, wp-content/uploads/2018/03/travel2-comprezor-600x450.jpg 600w" --}} sizes="(max-width: 768px) 100vw, 768px"/></a>
                                        <div class="card-img-overlay">
                                            <h3 class="card-title">
                                                <a href="#">Tristique tincidunt orci feugiat ac duis eu elementum
                                                    elit
                                                </a></h3>
                                            <p class="card-meta">
                                                <img src='https://2.gravatar.com/avatar/ee009ffd2d2d1827217bf8c3a968fd16?s=20&amp;d=mm&amp;r=g'
                                                     srcset='https://2.gravatar.com/avatar/ee009ffd2d2d1827217bf8c3a968fd16?s=40&amp;d=mm&amp;r=g 2x'
                                                     class='useravatar avatar-20 photo' height='20' width='20'/>
                                                <span class="author">
										<a href="#" title="Posts by Lora" rel="author">Lora</a></span>
                                                <span class="date">January 28, 2018</span>
                                            </p>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="slice type7">
                            <a href="#">
                                <h2 class="slice-title">editorials</h2>
                            </a>
                            <div class="card-deck more-posts-deck">
                                <article class="blog-post row align-items-center post hentry ">
                                    <div class="blog-post-thumbnail-zone col-12 col-lg-6">
                                        <a href="#">
                                            <img width="768" height="512" src="/img/bg-demo.jpg"
                                                 class="blog-post-thumbnail wp-post-image" alt=""
                                                 sizes="(max-width: 768px) 100vw, 768px"/></a>
                                    </div>
                                    <div class="blog-post-text-zone col-12 col-lg-6">
                                        <div class="author align-items-end">
                                            <img src='https://2.gravatar.com/avatar/ee009ffd2d2d1827217bf8c3a968fd16?s=35&amp;d=mm&amp;r=g'
                                                 srcset='https://2.gravatar.com/avatar/ee009ffd2d2d1827217bf8c3a968fd16?s=70&amp;d=mm&amp;r=g 2x'
                                                 class='useravatar avatar-35 photo' height='35' width='35'/>
                                            <div class="author-info">
                                                <a href="#" title="Posts by Lora" rel="author">Lora</a>
                                            </div>
                                        </div>
                                        <h2>
                                            <a href="#">Aenean sed ipsum non risus pharetra dapibus sit amet quis
                                                leo
                                            </a></h2>
                                        <div class="meta">
                                            <span class="date">February 1, 2018</span>
                                            <span class="category"><a href="#">Editorials</a></span>
                                            <span class="comments"><a href="#">3 Comments</a></span>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut viverra nisl
                                            rutrum, pretium lectus nec, sagittis dolor. Phasellus eleifend efficitur
                                            gravida. Maecenas auctor eleifend mi, gravida lacinia arcu vehicula
                                            nec....
                                        </p>
                                    </div>
                                </article>
                                <article class="blog-post row align-items-center post hentry ">
                                    <div class="blog-post-thumbnail-zone col-12 col-lg-6">
                                        <a href="#">
                                            <img width="768" height="497" src="/img/bg-demo.jpg"
                                                 class="blog-post-thumbnail wp-post-image" alt=""
                                                 sizes="(max-width: 768px) 100vw, 768px"/></a>
                                    </div>
                                    <div class="blog-post-text-zone col-12 col-lg-6">
                                        <div class="author align-items-end">
                                            <img src='https://2.gravatar.com/avatar/ee009ffd2d2d1827217bf8c3a968fd16?s=35&amp;d=mm&amp;r=g'
                                                 srcset='https://2.gravatar.com/avatar/ee009ffd2d2d1827217bf8c3a968fd16?s=70&amp;d=mm&amp;r=g 2x'
                                                 class='useravatar avatar-35 photo' height='35' width='35'/>
                                            <div class="author-info">
                                                <a href="#" title="Posts by Lora" rel="author">Lora</a>
                                            </div>
                                        </div>
                                        <h2>
                                            <a href="#">Pellentesque, condimentum sem eleifend tempor purus</a></h2>
                                        <div class="meta">
                                            <span class="date">January 28, 2018</span>
                                            <span class="category"><a href="#" title="Editorials">Editorials</a></span>
                                            <span class="comments"><a href="#">3 Comments</a></span>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut viverra nisl
                                            rutrum, pretium lectus nec, sagittis dolor. Phasellus eleifend efficitur
                                            gravida. Maecenas auctor eleifend mi, gravida lacinia arcu vehicula
                                            nec....
                                        </p>
                                    </div>
                                </article>
                                <article class="blog-post row align-items-center post hentry ">
                                    <div class="blog-post-thumbnail-zone col-12 col-lg-6">
                                        <a href="#">
                                            <img width="768" height="512" src="/img/bg-demo.jpg"
                                                 class="blog-post-thumbnail wp-post-image" alt=""
                                                 {{--srcset="wp-content/uploads/2018/03/editorials3-comprezor-768x512.jpg 768w, wp-content/uploads/2018/03/editorials3-comprezor-300x200.jpg 300w, wp-content/uploads/2018/03/editorials3-comprezor-1024x682.jpg 1024w, wp-content/uploads/2018/03/editorials3-comprezor-600x400.jpg 600w" --}} sizes="(max-width: 768px) 100vw, 768px"/></a>
                                    </div>
                                    <div class="blog-post-text-zone col-12 col-lg-6">
                                        <div class="author align-items-end">
                                            <img src='https://2.gravatar.com/avatar/ee009ffd2d2d1827217bf8c3a968fd16?s=35&amp;d=mm&amp;r=g'
                                                 srcset='https://2.gravatar.com/avatar/ee009ffd2d2d1827217bf8c3a968fd16?s=70&amp;d=mm&amp;r=g 2x'
                                                 class='useravatar avatar-35 photo' height='35' width='35'/>
                                            <div class="author-info">
                                                <a href="#" title="Posts by Lora" rel="author">Lora</a>
                                            </div>
                                        </div>
                                        <h2>
                                            <a href="#">Vel viverra eros tristique. In nec pellentesque nisi condimentum
                                                ligula
                                            </a>
                                        </h2>
                                        <div class="meta">
                                            <span class="date">January 27, 2018</span>
                                            <span class="category"><a href="#">Editorials</a></span>
                                            <span class="comments"><a href="#">3 Comments</a></span>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut viverra nisl
                                            rutrum, pretium lectus nec, sagittis dolor. Phasellus eleifend efficitur
                                            gravida. Maecenas auctor eleifend mi, gravida lacinia arcu vehicula
                                            nec....
                                        </p>
                                    </div>
                                </article>
                                <article class="blog-post row align-items-center post hentry ">
                                    <div class="blog-post-thumbnail-zone col-12 col-lg-6">
                                        <a href="#">
                                            <img width="768" height="462" src="/img/bg-demo.jpg"
                                                 class="blog-post-thumbnail wp-post-image" alt=""
                                                 {{--srcset="wp-content/uploads/2018/03/editorials4-comprezor-768x462.jpg 768w, wp-content/uploads/2018/03/editorials4-comprezor-300x181.jpg 300w, wp-content/uploads/2018/03/editorials4-comprezor-1024x616.jpg 1024w, wp-content/uploads/2018/03/editorials4-comprezor-600x361.jpg 600w" --}} sizes="(max-width: 768px) 100vw, 768px"/></a>
                                    </div>
                                    <div class="blog-post-text-zone col-12 col-lg-6">
                                        <div class="author align-items-end">
                                            <img src='https://2.gravatar.com/avatar/ee009ffd2d2d1827217bf8c3a968fd16?s=35&amp;d=mm&amp;r=g'
                                                 srcset='https://2.gravatar.com/avatar/ee009ffd2d2d1827217bf8c3a968fd16?s=70&amp;d=mm&amp;r=g 2x'
                                                 class='useravatar avatar-35 photo' height='35' width='35'/>
                                            <div class="author-info">
                                                <a href="#" title="Posts by Lora" rel="author">Lora</a>
                                            </div>
                                        </div>
                                        <h2>
                                            <a href="#">Massa aenean sagittis diam ac urna tempor, quis cursus urna</a>
                                        </h2>
                                        <div class="meta">
                                            <span class="date">January 27, 2018</span>
                                            <span class="category"><a href="#">Editorials</a></span>
                                            <span class="comments"><a href="#">3 Comments</a></span>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut viverra nisl
                                            rutrum, pretium lectus nec, sagittis dolor. Phasellus eleifend efficitur
                                            gravida. Maecenas auctor eleifend mi, gravida lacinia arcu vehicula
                                            nec....
                                        </p>
                                    </div>
                                </article>
                                <div class="blog-post row align-items-center post hentry ">
                                    <div class="content mx-auto align-items-center ">
                                        <div class="pagination">
                                            <div class="next-posts-link">

                                            </div><!-- /.next-posts-link -->

                                            <div class="next-posts-link">

                                                <a href="http://litmotion.net/demo/neori/author/admin/page/2/">Older
                                                    Posts
                                                    <i class="fa fa-angle-right"></i></a>
                                            </div><!-- /.previous-posts-link -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--<div class="load-more-posts-container">--}}
                            {{--<a class="btn-load-more-posts" data-page="1"--}}
                            {{--data-url="https://litmotion.net/demo/neori/wp-admin/admin-ajax.php">--}}
                            {{--<span class="icon1"><i class="fa fa-angle-double-down"></i></span>--}}
                            {{--<span class="icon2"><i class="fa fa-refresh"></i></span>--}}
                            {{--<span class="text">More Posts</span></a>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="social-icons">
                <a href="https://facebook.com" target="_blank">
                    <i class="fa fa-facebook"></i>
                </a>
                <a href="https://twitter.com" target="_blank">
                    <i class="fa fa-twitter"></i>
                </a>
                <a href="https://instagram.com" target="_blank">
                    <i class="fa fa-instagram"></i>
                </a>
                <a href="https://youtube.com" target="_blank">
                    <i class="fa fa-youtube"></i>
                </a>
                <a href="https://pinterest.com" target="_blank">
                    <i class="fa fa-pinterest"></i>
                </a>
                <a href="https://plus.google.com" target="_blank">
                    <i class="fa fa-google-plus"></i>
                </a>
            </div>
            <p class="additional-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit integer a urna vitae sem
                tempus.
            </p>
            <nav class="main-navigation">
                <div class="menu-menu2-container">
                    <ul id="menu-menu2" class="menu">
                        <li class="menu-item  ">
                            <a href="#">Disclamer</a></li>
                        <li class="menu-item  ">
                            <a href="#">Privacy</a></li>
                        <li class="menu-item  ">
                            <a href="#">Contact</a></li>
                    </ul>
                </div>
            </nav>
            <p class="copyright">
                Copyright &copy;2018 {{ config('app.name') }}
            </p>
            <p class="credit">
                Neori theme, designed by
                <a href="#">litMotion Templates</a>
            </p>
        </div>
    </footer>
    <a href="#0" class="buttontop-top">
        <i class="fa fa-arrow-up"></i>
    </a>
</div>
<script type='text/javascript'>/* <![CDATA[ */
    var sticky_anything_engage = {
        "element": ".sidebar",
        "topspace": "0",
        "minscreenwidth": "991",
        "maxscreenwidth": "999999",
        "zindex": "1",
        "legacymode": "",
        "dynamicmode": "",
        "debugmode": "",
        "pushup": ".footer",
        "adminbar": "1"
    };
    /* ]]> */
</script>
<script type='text/javascript' src='/js/stickThis.js'></script>
<script type='text/javascript' src='/js/general-scripts.js'></script>
<script type='text/javascript' src='/js/popper.min.js'></script>
<script type='text/javascript' src='/js/bootstrap.min.js'></script>
</body>
</html>