<li class="slide">
    <a class="side-menu__item" data-toggle="slide" href="#">
        <i class="side-menu__icon {{ $menu['icon'] ?? '' }}"></i>
        <span class="side-menu__label">{{ $menu['label'] ?? '#' }}</span>
        <i class="angle fa fa-angle-right"></i>
    </a>
    <ul class="slide-menu">
        @foreach($menu['children'] as $item)
            <li><a class="slide-item" href="{{ $item['url'] ?? '#' }}"><span>{{ $item['label'] ?? '#' }}</span></a></li>
        @endforeach
    </ul>
</li>