<li class="site-menu-category"></li>
@php
    $role_name = request()->user()->roles()->first()->name;
    $menu = \App\Entities\MenuGroup::display($role_name);
@endphp

@include('admin::includes.sidebar._nav-item', ['menus' => $menu->parent_items->sortBy('order')])
