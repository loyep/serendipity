{{--<li class="nav-item dropdown">--}}
    {{--<a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false"--}}
       {{--data-animation="scale-up" role="button">--}}
        {{--<span class="avatar">--}}
            {{--<img src="{{ Auth::user()->avatar }}" alt="...">--}}
        {{--</span>--}}
    {{--</a>--}}
    {{--<div class="dropdown-menu" role="menu">--}}
        {{--<a class="dropdown-item" href="{{ route('admin.users.profile') }}" role="menuitem">--}}
            {{--<i class="icon md-account" aria-hidden="true"></i> {{ __('Profile') }}--}}
        {{--</a>--}}
        {{--<a class="dropdown-item" href="javascript:void(0)" role="menuitem">--}}
            {{--<i class="icon md-settings" aria-hidden="true"></i> {{ __('Settings') }}--}}
        {{--</a>--}}
        {{--<div class="dropdown-divider" role="presentation"></div>--}}
        {{--<a class="dropdown-item" href="{{ route('admin.lock') }}" role="menuitem">--}}
            {{--<i class="icon md-lock" aria-hidden="true"></i> {{ __('Lock') }}--}}
        {{--</a>--}}
        {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
           {{--onclick="event.preventDefault();document.getElementById('logout-form').submit();"--}}
           {{--role="menuitem">--}}
            {{--<i class="icon md-power" aria-hidden="true"></i> {{ __('Sign out') }}--}}
        {{--</a>--}}
        {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
            {{--@csrf--}}
        {{--</form>--}}
    {{--</div>--}}
{{--</li>--}}

<li class="dropdown">
    <span class="topbar-btn" data-toggle="dropdown">
        <img class="avatar" src="/assets/static/img/avatar/1.jpg" alt="...">
    </span>
    <div class="dropdown-menu dropdown-menu-right">
        <a class="dropdown-item" href="page/profile.html">
            <i class="ti-user"></i> {{ __('Profile') }}
        </a>
        <a class="dropdown-item" href="page-app/mailbox.html">
            <div class="flexbox">
                <i class="ti-email"></i>
                <span class="flex-grow">Inbox</span>
                <span class="badge badge-pill badge-info">5</span>
            </div>
        </a>
        <a class="dropdown-item" href="#">
            <i class="ti-settings"></i> {{ __('Settings') }}
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="page-extra/user-lock-1.html">
            <i class="ti-lock"></i> {{ __('Lock') }}
        </a>
        <form method="post" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="dropdown-item"><i class="ti-power-off"></i> {{ __('Sign out') }}</button>
        </form>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i
                    class="ti-power-off"></i> {{ __('Sign out') }}</a>
    </div>
</li>