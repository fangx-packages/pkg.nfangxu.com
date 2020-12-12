<li>
    <a class="side-menu__item" href="{{ $menu['url'] ?? '#' }}">
        <i class="side-menu__icon {{ $menu['icon'] ?? '' }}"></i>
        <span class="side-menu__label">{{ $menu['label'] ?? '#' }}</span>
    </a>
</li>