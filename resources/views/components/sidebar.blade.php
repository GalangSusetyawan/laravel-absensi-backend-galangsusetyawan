<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('home') }}">{{ env('APP_NAME') }}</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">

            <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
                <a href="{{ route('home') }}" class="nav-link">
                    <i class="fas fa-fire"></i><span>Dashboard</span></a>

            </li>

            <li class="nav-item {{ request()->routeIs(['users.*']) ? 'active' : '' }}">
                <a href="{{ route('users.index') }}" class="nav-link ">
                    <i class="fas fa-columns"></i>
                    <span>Users</span></a>
            </li>

            <li class="nav-item {{ request()->routeIs(['companies.*']) ? 'active' : '' }}">
                <a href="{{ route('companies.show', 1) }}" class="nav-link">
                    <i class="fas fa-columns"></i>
                    <span>Company</span>
                </a>
            </li>
            <li class="nav-item {{ request()->routeIs(['attendances.*']) ? 'active' : '' }}">
                <a href="{{ route('attendances.index') }}" class="nav-link">
                    <i class="fas fa-columns"></i>
                    <span>Attendances</span>
                </a>
            </li>

            <li class="nav-item {{ request()->routeIs(['permissions.*']) ? 'active' : '' }}">
                <a href="{{ route('permissions.index') }}" class="nav-link">
                    <i class="fas fa-columns"></i>
                    <span>Permission</span>
                </a>
            </li>

    </aside>
</div>
