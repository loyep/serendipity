<li class="nav-item dropdown">
    <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false"
       data-animation="scale-up" role="button">
        <span class="avatar">
            <img src="{{ Auth::user()->avatar }}" alt="...">
        </span>
    </a>
    <div class="dropdown-menu" role="menu">
        <a class="dropdown-item" href="{{ route('admin.users.profile') }}" role="menuitem">
            <i class="icon md-account" aria-hidden="true"></i> {{ __('Profile') }}
        </a>
        <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
            <i class="icon md-settings" aria-hidden="true"></i> {{ __('Settings') }}
        </a>
        <div class="dropdown-divider" role="presentation"></div>
        <a class="dropdown-item" href="{{ route('admin.lock') }}" role="menuitem">
            <i class="icon md-lock" aria-hidden="true"></i> {{ __('Lock') }}
        </a>
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();document.getElementById('logout-form').submit();"
           role="menuitem">
            <i class="icon md-power" aria-hidden="true"></i> {{ __('Sign out') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</li>