<li class="dropdown">
    <span class="topbar-btn" data-toggle="dropdown">
        <img class="avatar" src="{{ Auth::user()->avatar }}" alt="...">
    </span>
    <div class="dropdown-menu dropdown-menu-right">
        <a class="dropdown-item" href="{{ route('admin.users.profile') }}">
            <i class="ti-user"></i> {{ __('Profile') }}
        </a>
        <a class="dropdown-item" href="#">
            <i class="ti-settings"></i> {{ __('Settings') }}
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{ route('admin.lock') }}">
            <i class="ti-lock"></i> {{ __('Lock') }}
        </a>
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i
                    class="ti-power-off"></i> {{ __('Sign out') }}</a>
    </div>
</li>