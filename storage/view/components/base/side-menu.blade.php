<ul class="side-menu">
    @foreach($menus as $menu)
        @if(isset($menu['children']) && $menu['children'])
            <x-base.side-menu-children :menu="$menu"></x-base.side-menu-children>
        @else
            <x-base.side-menu-item :menu="$menu"></x-base.side-menu-item>
        @endif
    @endforeach
</ul>