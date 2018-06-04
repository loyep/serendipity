<li class="site-menu-category"></li>

@each('admin::includes.sidebar._nav-item', \App\Entities\Menu::menus(), 'menu')
