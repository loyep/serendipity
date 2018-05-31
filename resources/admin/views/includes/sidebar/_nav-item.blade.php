@if($menu->children_count > 0)
    <li class="site-menu-item has-sub">
        <a href="{{ $menu->permalink }}">
            <i class="{{ $menu->icon }}" aria-hidden="true"></i>
            <span class="site-menu-title">{{ $menu->title }}</span>
            <span class="site-menu-arrow"></span>
        </a>
        <ul class="site-menu-sub">
            @each('admin::includes.sidebar._nav-item', $menu->children, 'menu')
        </ul>
    </li>
@else
    <li class="site-menu-item">
        <a class="animsition-link" href="{{ $menu->permalink }}">
            <i class="{{ $menu->icon }}" aria-hidden="true"></i>
            <span class="site-menu-title">{{ $menu->title }}</span>
        </a>
    </li>
@endif