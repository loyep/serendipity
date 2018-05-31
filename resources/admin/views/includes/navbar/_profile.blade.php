<!-- Navbar Toolbar Right -->
<ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
    <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)" data-animation="scale-up"
           aria-expanded="false" role="button">
            <span class="flag-icon flag-icon-us"></span>
        </a>
        <div class="dropdown-menu" role="menu">
            <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                <span class="flag-icon flag-icon-gb"></span> English</a>
            <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                <span class="flag-icon flag-icon-fr"></span> French</a>
            <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                <span class="flag-icon flag-icon-cn"></span> Chinese</a>
            <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                <span class="flag-icon flag-icon-de"></span> German</a>
            <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                <span class="flag-icon flag-icon-nl"></span> Dutch</a>
        </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false"
           data-animation="scale-up" role="button">
            <span class="avatar">
                <img src="{{ Auth::user()->avatar }}" alt="...">
            </span>
        </a>
        <div class="dropdown-menu" role="menu">
            <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon md-account"
                                                                                  aria-hidden="true"></i>
                Profile</a>
            <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon md-card"
                                                                                  aria-hidden="true"></i>
                Billing</a>
            <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon md-settings"
                                                                                  aria-hidden="true"></i>
                Settings</a>
            <div class="dropdown-divider" role="presentation"></div>
            <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon md-lock"
                                                                                  aria-hidden="true"></i>
                Lock</a>
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();document.getElementById('logout-form').submit();"
               role="menuitem">
                <i class="icon md-power" aria-hidden="true"></i> Sign out</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)" title="Notifications"
           aria-expanded="false" data-animation="scale-up" role="button">
            <i class="icon md-notifications" aria-hidden="true"></i>
            <span class="badge badge-pill badge-danger up">5</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
            <div class="dropdown-menu-header">
                <h5>NOTIFICATIONS</h5>
                <span class="badge badge-round badge-danger">New 5</span>
            </div>

            <div class="list-group">
                <div data-role="container">
                    <div data-role="content">
                        <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                            <div class="media">
                                <div class="pr-10">
                                    <i class="icon md-receipt bg-red-600 white icon-circle"
                                       aria-hidden="true"></i>
                                </div>
                                <div class="media-body">
                                    <h6 class="media-heading">A new order has been placed</h6>
                                    <time class="media-meta" datetime="2017-06-12T20:50:48+08:00">5 hours
                                        ago
                                    </time>
                                </div>
                            </div>
                        </a>
                        <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                            <div class="media">
                                <div class="pr-10">
                                    <i class="icon md-account bg-green-600 white icon-circle"
                                       aria-hidden="true"></i>
                                </div>
                                <div class="media-body">
                                    <h6 class="media-heading">Completed the task</h6>
                                    <time class="media-meta" datetime="2017-06-11T18:29:20+08:00">2 days
                                        ago
                                    </time>
                                </div>
                            </div>
                        </a>
                        <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                            <div class="media">
                                <div class="pr-10">
                                    <i class="icon md-settings bg-red-600 white icon-circle"
                                       aria-hidden="true"></i>
                                </div>
                                <div class="media-body">
                                    <h6 class="media-heading">Settings updated</h6>
                                    <time class="media-meta" datetime="2017-06-11T14:05:00+08:00">2 days
                                        ago
                                    </time>
                                </div>
                            </div>
                        </a>
                        <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                            <div class="media">
                                <div class="pr-10">
                                    <i class="icon md-calendar bg-blue-600 white icon-circle"
                                       aria-hidden="true"></i>
                                </div>
                                <div class="media-body">
                                    <h6 class="media-heading">Event started</h6>
                                    <time class="media-meta" datetime="2017-06-10T13:50:18+08:00">3 days
                                        ago
                                    </time>
                                </div>
                            </div>
                        </a>
                        <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                            <div class="media">
                                <div class="pr-10">
                                    <i class="icon md-comment bg-orange-600 white icon-circle"
                                       aria-hidden="true"></i>
                                </div>
                                <div class="media-body">
                                    <h6 class="media-heading">Message received</h6>
                                    <time class="media-meta" datetime="2017-06-10T12:34:48+08:00">3 days
                                        ago
                                    </time>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="dropdown-menu-footer">
                <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                    <i class="icon md-settings" aria-hidden="true"></i>
                </a>
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                    All notifications
                </a>
            </div>
        </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)" title="Messages"
           aria-expanded="false" data-animation="scale-up" role="button">
            <i class="icon md-email" aria-hidden="true"></i>
            <span class="badge badge-pill badge-info up">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
            <div class="dropdown-menu-header" role="presentation">
                <h5>MESSAGES</h5>
                <span class="badge badge-round badge-info">New 3</span>
            </div>

            <div class="list-group" role="presentation">
                <div data-role="container">
                    <div data-role="content">
                        <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                            <div class="media">
                                <div class="pr-10">
                            <span class="avatar avatar-sm avatar-online">
                              <img src="/assets/admin/portraits/2.jpg" alt="..."/>
                              <i></i>
                            </span>
                                </div>
                                <div class="media-body">
                                    <h6 class="media-heading">Mary Adams</h6>
                                    <div class="media-meta">
                                        <time datetime="2017-06-17T20:22:05+08:00">30 minutes ago</time>
                                    </div>
                                    <div class="media-detail">Anyways, i would like just do it</div>
                                </div>
                            </div>
                        </a>
                        <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                            <div class="media">
                                <div class="pr-10">
                            <span class="avatar avatar-sm avatar-off">
                              <img src="/assets/admin/portraits/3.jpg" alt="..."/>
                              <i></i>
                            </span>
                                </div>
                                <div class="media-body">
                                    <h6 class="media-heading">Caleb Richards</h6>
                                    <div class="media-meta">
                                        <time datetime="2017-06-17T12:30:30+08:00">12 hours ago</time>
                                    </div>
                                    <div class="media-detail">I checheck the document. But there seems</div>
                                </div>
                            </div>
                        </a>
                        <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                            <div class="media">
                                <div class="pr-10">
                            <span class="avatar avatar-sm avatar-busy">
                              <img src="/assets/admin/portraits/4.jpg" alt="..."/>
                              <i></i>
                            </span>
                                </div>
                                <div class="media-body">
                                    <h6 class="media-heading">June Lane</h6>
                                    <div class="media-meta">
                                        <time datetime="2017-06-16T18:38:40+08:00">2 days ago</time>
                                    </div>
                                    <div class="media-detail">Lorem ipsum Id consectetur et minim</div>
                                </div>
                            </div>
                        </a>
                        <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                            <div class="media">
                                <div class="pr-10">
                            <span class="avatar avatar-sm avatar-away">
                              <img src="/assets/admin/portraits/5.jpg" alt="..."/>
                              <i></i>
                            </span>
                                </div>
                                <div class="media-body">
                                    <h6 class="media-heading">Edward Fletcher</h6>
                                    <div class="media-meta">
                                        <time datetime="2017-06-15T20:34:48+08:00">3 days ago</time>
                                    </div>
                                    <div class="media-detail">Dolor et irure cupidatat commodo nostrud
                                        nostrud.
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="dropdown-menu-footer" role="presentation">
                <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                    <i class="icon md-settings" aria-hidden="true"></i>
                </a>
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                    See all messages
                </a>
            </div>
        </div>
    </li>
    <li class="nav-item" id="toggleChat">
        <a class="nav-link" data-toggle="site-sidebar" href="javascript:void(0)" title="Chat"
           data-url="site-sidebar.tpl">
            <i class="icon md-comment" aria-hidden="true"></i>
        </a>
    </li>
</ul>
<!-- End Navbar Toolbar Right -->