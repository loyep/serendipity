<li class="site-menu-category">General</li>
{{--@foreach(\App\Entities\Menu::menus() as $topMenu)--}}
    {{--<li class="site-menu-item{{ $topMenu->children_count > 0 ? ' has-sub' : '' }}">--}}
        {{--<a href="{{ $topMenu->permalink }}">--}}
            {{--<i class="site-menu-icon md-view-compact" aria-hidden="true"></i>--}}
            {{--<span class="site-menu-title">Layouts</span>--}}
            {{--@if($topMenu->children_count > 0)--}}
                {{--<span class="site-menu-arrow"></span>--}}
            {{--@endif--}}
        {{--</a>--}}
        {{--@if($topMenu->children_count > 0)--}}
            {{--<ul class="site-menu-sub">--}}
                {{--@foreach($topMenu->children as $child)--}}
                    {{--<li class="site-menu-item">--}}
                        {{--<a class="animsition-link" href="{{ $child->permalink }}">--}}
                            {{--<span class="site-menu-title">{{ $child->title }}</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                {{--@endforeach--}}
            {{--</ul>--}}
        {{--@endif--}}
    {{--</li>--}}
    {{--@component('')--}}
{{--@endforeach--}}
@each('admin::includes.sidebar._nav-item', \App\Entities\Menu::menus(), 'menu')
{{--<li class="site-menu-item active">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>--}}
{{--<span class="site-menu-title">Dashboard</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item has-sub">--}}
{{--<a href="javascript:void(0)">--}}
{{--<i class="site-menu-icon md-view-compact" aria-hidden="true"></i>--}}
{{--<span class="site-menu-title">Layouts</span>--}}
{{--<span class="site-menu-arrow"></span>--}}
{{--</a>--}}
{{--<ul class="site-menu-sub">--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Menu Collapsed</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Menu Expended</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Grid Scaffolding</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Layout Grid</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Different Headers</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Panel Transition</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Boxed Layout</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Two Columns</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Bordered Header</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Menubar Flipped</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Menubar Native Scrolling</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item has-sub">--}}
{{--<a href="javascript:void(0)">--}}
{{--<span class="site-menu-title">Page Aside</span>--}}
{{--<span class="site-menu-arrow"></span>--}}
{{--</a>--}}
{{--<ul class="site-menu-sub">--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Left Static</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Right Static</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Left Fixed</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Right Fixed</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--</ul>--}}
{{--</li>--}}
{{--</ul>--}}
{{--</li>--}}
{{--<li class="site-menu-item has-sub">--}}
{{--<a href="javascript:void(0)">--}}
{{--<i class="site-menu-icon md-google-pages" aria-hidden="true"></i>--}}
{{--<span class="site-menu-title">Pages</span>--}}
{{--<span class="site-menu-arrow"></span>--}}
{{--</a>--}}
{{--<ul class="site-menu-sub">--}}
{{--<li class="site-menu-item has-sub">--}}
{{--<a href="javascript:void(0)">--}}
{{--<span class="site-menu-title">Errors</span>--}}
{{--<span class="site-menu-arrow"></span>--}}
{{--</a>--}}
{{--<ul class="site-menu-sub">--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">400</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">403</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">404</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">500</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">503</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--</ul>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">FAQ</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Gallery</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Gallery Grid</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Search Result</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item has-sub">--}}
{{--<a href="javascript:void(0)">--}}
{{--<span class="site-menu-title">Maps</span>--}}
{{--<span class="site-menu-arrow"></span>--}}
{{--</a>--}}
{{--<ul class="site-menu-sub">--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Google Maps</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Vector Maps</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--</ul>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Maintenance</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Forgot Password</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Lockscreen</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Login</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Register</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Login V2</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Register V2</span>--}}
{{--<div class="site-menu-label">--}}
{{--<span class="badge badge-info badge-round">new</span>--}}
{{--</div>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Login V3</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Register V3</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">User List</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Invoice</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Blank Page</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item has-sub">--}}
{{--<a href="javascript:void(0)">--}}
{{--<span class="site-menu-title">Email</span>--}}
{{--<span class="site-menu-arrow"></span>--}}
{{--</a>--}}
{{--<ul class="site-menu-sub">--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Articles</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Welcome</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Post</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Thumbnail</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">News</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--</ul>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Code Editor</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Profile</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Profile V2</span>--}}
{{--<div class="site-menu-label">--}}
{{--<span class="badge badge-info badge-round">new</span>--}}
{{--</div>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Profile V3</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Sitemap</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Project</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--</ul>--}}
{{--</li>--}}
{{--<li class="site-menu-category">Elements</li>--}}
{{--<li class="site-menu-item has-sub">--}}
{{--<a href="javascript:void(0)">--}}
{{--<i class="site-menu-icon md-palette" aria-hidden="true"></i>--}}
{{--<span class="site-menu-title">Basic UI</span>--}}
{{--<span class="site-menu-arrow"></span>--}}
{{--</a>--}}
{{--<ul class="site-menu-sub">--}}
{{--<li class="site-menu-item has-sub">--}}
{{--<a href="javascript:void(0)">--}}
{{--<span class="site-menu-title">Panel</span>--}}
{{--<span class="site-menu-arrow"></span>--}}
{{--</a>--}}
{{--<ul class="site-menu-sub">--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Panel Structure</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Panel Actions</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Panel Portlets</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--</ul>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Buttons</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Cards</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Dropdowns</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Icons</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">List</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Tooltip &amp; Popover</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Modals</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Tabs &amp; Accordions</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Images</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Badges</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Progress Bars</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Carousel</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Typography</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Colors</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Utilties</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--</ul>--}}
{{--</li>--}}
{{--<li class="site-menu-item has-sub">--}}
{{--<a href="javascript:void(0)">--}}
{{--<i class="site-menu-icon md-format-color-fill" aria-hidden="true"></i>--}}
{{--<span class="site-menu-title">Advanced UI</span>--}}
{{--<span class="site-menu-arrow"></span>--}}
{{--</a>--}}
{{--<ul class="site-menu-sub">--}}
{{--<li class="site-menu-item hidden-sm-down site-tour-trigger">--}}
{{--<a href="javascript:void(0)">--}}
{{--<span class="site-menu-title">Tour</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Animation</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Highlight</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Lightbox</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Scrollable</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Rating</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Context Menu</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Alertify</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Masonry</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Treeview</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Toastr</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Vector Maps</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Google Maps</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Sortable &amp; Nestable</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Bootbox &amp; Sweetalert</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--</ul>--}}
{{--</li>--}}
{{--<li class="site-menu-item has-sub">--}}
{{--<a href="javascript:void(0)">--}}
{{--<i class="site-menu-icon md-puzzle-piece" aria-hidden="true"></i>--}}
{{--<span class="site-menu-title">Structure</span>--}}
{{--<span class="site-menu-arrow"></span>--}}
{{--</a>--}}
{{--<ul class="site-menu-sub">--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Alerts</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Ribbon</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Pricing Tables</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Overlay</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Cover</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Simple Timeline</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Timeline</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Step</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Comments</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Media</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Chat</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Testimonials</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Nav</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Navbars</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Blockquotes</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Pagination</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Breadcrumbs</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--</ul>--}}
{{--</li>--}}
{{--<li class="site-menu-item has-sub">--}}
{{--<a href="javascript:void(0)">--}}
{{--<i class="site-menu-icon md-widgets" aria-hidden="true"></i>--}}
{{--<span class="site-menu-title">Widgets</span>--}}
{{--<span class="site-menu-arrow"></span>--}}
{{--</a>--}}
{{--<ul class="site-menu-sub">--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Statistics Widgets</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Data Widgets</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Blog Widgets</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Chart Widgets</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Social Widgets</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Weather Widgets</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--</ul>--}}
{{--</li>--}}
{{--<li class="site-menu-item has-sub">--}}
{{--<a href="javascript:void(0)">--}}
{{--<i class="site-menu-icon md-comment-alt-text" aria-hidden="true"></i>--}}
{{--<span class="site-menu-title">Forms</span>--}}
{{--<span class="site-menu-arrow"></span>--}}
{{--</a>--}}
{{--<ul class="site-menu-sub">--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">General Elements</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Material Elements</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Advanced Elements</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Form Layouts</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Form Wizard</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Form Validation</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Form Masks</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item has-sub">--}}
{{--<a href="javascript:void(0)">--}}
{{--<span class="site-menu-title">Editors</span>--}}
{{--<span class="site-menu-arrow"></span>--}}
{{--</a>--}}
{{--<ul class="site-menu-sub">--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Summernote</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Markdown</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Ace Editor</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--</ul>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Image Cropping</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">File Uploads</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--</ul>--}}
{{--</li>--}}
{{--<li class="site-menu-item has-sub">--}}
{{--<a href="javascript:void(0)">--}}
{{--<i class="site-menu-icon md-border-all" aria-hidden="true"></i>--}}
{{--<span class="site-menu-title">Tables</span>--}}
{{--<span class="site-menu-arrow"></span>--}}
{{--</a>--}}
{{--<ul class="site-menu-sub">--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Basic Tables</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Bootstrap Tables</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">floatThead</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Responsive Tables</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Editable Tables</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">jsGrid</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">FooTable</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">DataTables</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Jquery Tabledit</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Table Dragger</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--</ul>--}}
{{--</li>--}}
{{--<li class="site-menu-item has-sub">--}}
{{--<a href="javascript:void(0)">--}}
{{--<i class="site-menu-icon md-chart" aria-hidden="true"></i>--}}
{{--<span class="site-menu-title">Chart</span>--}}
{{--<span class="site-menu-arrow"></span>--}}
{{--</a>--}}
{{--<ul class="site-menu-sub">--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Chart.js</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Gauges</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Flot</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Peity</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Sparkline</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Morris</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Chartist.js</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Rickshaw</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Pie Progress</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">C3</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--</ul>--}}
{{--</li>--}}
{{--<li class="site-menu-category">Apps</li>--}}
{{--<li class="site-menu-item has-sub">--}}
{{--<a href="javascript:void(0)">--}}
{{--<i class="site-menu-icon md-apps" aria-hidden="true"></i>--}}
{{--<span class="site-menu-title">Apps</span>--}}
{{--<span class="site-menu-arrow"></span>--}}
{{--</a>--}}
{{--<ul class="site-menu-sub">--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Contacts</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Calendar</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Notebook</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Taskboard</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item has-sub">--}}
{{--<a href="javascript:void(0)">--}}
{{--<span class="site-menu-title">Documents</span>--}}
{{--<span class="site-menu-arrow"></span>--}}
{{--</a>--}}
{{--<ul class="site-menu-sub">--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Articles</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Categories</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Article</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--</ul>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Forum</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Message</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Projects</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Mailbox</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Media</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Work</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Location</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="site-menu-item">--}}
{{--<a class="animsition-link" href="#">--}}
{{--<span class="site-menu-title">Travel</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--</ul>--}}
{{--</li>--}}