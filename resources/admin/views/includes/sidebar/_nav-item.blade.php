@foreach($menus as $menu)

    @php
        $href = $menu->permalink();
        $listItemClass = ['menu-item'];

        $hasChildren = false;

        if (url($href) == url()->current()) {
            array_push($listItemClass, 'active');
            if ($depth == 0) array_push($listItemClass, 'open');
        }

        $user = Auth::user();
        if ($depth == 0 && !$menu->children->isEmpty()) {
            foreach ($menu->children as $child)
            {
                $hasChildren = $hasChildren || $user->can('browse', $child);
                if (url($child->permalink()) == url()->current()) {
                    array_push($listItemClass, 'active');
                   if ($depth == 0) array_push($listItemClass, 'open');
                }
            }
        } else {
            if ( !$user->can('browse', $menu)) {
                continue;
            }
        }
    @endphp

    <li class="{{ implode(" ", $listItemClass) }}">
        <a class="menu-link" href="{{ $href }}">
            <span class="icon {{ $menu->icon ?: 'dot' }}"></span>
            <span class="title">{{ $menu->title }}</span>
            @if($hasChildren)
                <span class="arrow"></span>
            @endif
        </a>
        @if($hasChildren)
            <ul class="menu-submenu">
                @include('admin::includes.sidebar._nav-item', ['menus' => $menu->children, 'depth' => ($depth + 1) ])
            </ul>
        @endif
    </li>
@endforeach