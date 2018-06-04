@foreach($menus as $menu)
    @php
        $href = $menu->permalink();
        $listItemClass = ['site-menu-item'];

        $hasChildren = false;

        if ($menu->children_count > 0) {
            array_push($listItemClass, 'has-sub');
        }

        if (!$menu->children->isEmpty()) {
            foreach ($menu->children as $child)
            {
                $hasChildren = $hasChildren || 1;
            }
        } else {

        }
    @endphp

    <li class="dd-item dd-item-alt" data-id="{{ $menu->id }}">
        <div class="dd-handle"></div>
        <div class="dd-content">{{ $menu->title }}
            <a href="#"><i class="float-right md-edit"></i></a>
        </div>
        @if($hasChildren)
            <ul class="dd-list">
                @include('admin::components.menus._menus-item', ['menus' => $menu->children])
            </ul>
        @endif
    </li>
@endforeach