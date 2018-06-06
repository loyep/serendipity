@foreach($menus as $menu)

    @php
        $href = $menu->permalink();
        $listItemClass = ['site-menu-item'];

        $hasChildren = false;

        if (url($href) == url()->current()) {
            array_push($listItemClass, 'active');
        }

        if (!$menu->children->isEmpty()) {
            foreach ($menu->children as $child)
            {
                $hasChildren = $hasChildren || 1;
                if (url($child->permalink()) == url()->current()) {
                    array_push($listItemClass, 'active open');
                }
            }
        } else {

        }

        if ($hasChildren) {
            array_push($listItemClass, 'has-sub');
        }
    @endphp

    <li class="{{ implode(" ", $listItemClass) }}">
        <a href="{{ $href }}">
            <i class="site-menu-icon {{ $menu->icon }}" aria-hidden="true"></i>
            <span class="site-menu-title">{{ $menu->title }}</span>
            @if($hasChildren)
                <span class="site-menu-arrow"></span>
            @endif
        </a>
        @if($hasChildren)
            <ul class="site-menu-sub">
                @include('admin::includes.sidebar._nav-item', ['menus' => $menu->children])
            </ul>
        @endif
    </li>
@endforeach