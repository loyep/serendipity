@php
    $role_name = request()->user()->roles()->first()->name;
    $menu = \App\Entities\MenuGroup::display($role_name);
@endphp

<nav class="sidebar-navigation">
    <ul class="menu">
        <br>
        @include('admin::includes.sidebar._nav-item', ['menus' => $menu->parent_items->sortBy('order'), 'depth' => 0])
    </ul>
</nav>