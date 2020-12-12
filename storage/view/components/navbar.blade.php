<nav class="navbar navbar-expand-lg main-navbar">
    <a class="header-brand" href="#">
        {{ config('app_name') }}
    </a>
    <form class="form-inline mr-auto" action="{{ route('search') }}">
        <ul class="navbar-nav mr-3">
            <li>
                <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg">
                    <i class="ion ion-navicon-round"></i>
                </a>
            </li>
            <li>
                <a href="#" data-toggle="search" class="nav-link nav-link-lg d-md-none navsearch">
                    <i class="ion ion-search"></i>
                </a>
            </li>
        </ul>
        <div class="search-element">
            <input class="form-control" name="package" type="search" placeholder="Search Some Packages..."
                   aria-label="Search">
            <button class="btn btn-primary" type="submit"><i class="ion ion-search"></i></button>
        </div>
    </form>
    <ul class="navbar-nav navbar-right">
        @if(isLogin())
            <x-base.dropdown.full-screen></x-base.dropdown.full-screen>
            <x-base.dropdown.profile></x-base.dropdown.profile>
        @else
            <li class="dropdown dropdown-list-toggle">
                <a href="{{ route('login') }}" class="nav-link nav-link-lg full-screen-link">
                    <i class="ion-log-in"></i>
                </a>
            </li>
        @endif
    </ul>
</nav>