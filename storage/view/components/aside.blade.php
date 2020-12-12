<aside class="app-sidebar">
    <div class="app-sidebar__user">
        <div class="dropdown">
            <a class="nav-link pl-2 pr-2 leading-none d-flex" data-toggle="dropdown" href="#">
                <img alt="image" src="{{ assets('img/avatar/avatar.jpeg') }}" class=" avatar-md rounded-circle">
                <span class="ml-2 d-lg-block">
                    <span class="text-white app-sidebar__user-name mt-5">FangXu Niu</span><br>
                    <span class="text-muted app-sidebar__user-name text-sm">PHP Programmer</span>
                </span>
            </a>
        </div>
    </div>
    <x-base.side-menu :menus="config('heybye.menus')"></x-base.side-menu>
</aside>