<a href="{{ route('admin.users.profile') }}" class="fold-show" data-placement="top" data-toggle="tooltip"
   data-original-title="{{ __('Settings') }}">
    <span class="icon md-settings" aria-hidden="true"></span>
</a>
<a href="{{ route('admin.lock') }}" data-placement="top" data-toggle="tooltip" data-original-title="{{ __('Lock') }}">
    <span class="icon md-eye-off" aria-hidden="true"></span>
</a>
<a href="{{ route('logout') }}"
   onclick="event.preventDefault();document.getElementById('logout-form').submit();" data-placement="top"
   data-toggle="tooltip" data-original-title="{{ __('Sign out') }}">
    <span class="icon md-power" aria-hidden="true"></span>
</a>