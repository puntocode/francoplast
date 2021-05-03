<!-- Sidebar -->
<div class="bg-white shadow-sm" id="sidebar-wrapper">
    <div class="sidebar-heading py-4"><img src="{{ asset('images/logo-hor.svg') }}" alt="logo" height="45"></div>
    <div class="menu">
        <ul class="menu">
            {{-- <li class="sidebar-title">Menu</li> --}}
            <li class="sidebar-item {{ (request()->is('dashboard')) ? 'active' : '' }}">
                <a href="/dashboard" class='sidebar-link'>
                    <i class="fas fa-chart-pie"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            @can('companies.index')
                <li class="sidebar-item {{ (request()->is('companies*')) ? 'active' : '' }}">
                    <a href="{{ route('companies.index') }}" class='sidebar-link'>
                        <i class="fas fa-building"></i>
                        <span>Empresas</span>
                    </a>
                </li>
            @endcan
            @can('partners.index')
                <li class="sidebar-item {{ (request()->is('partners*')) ? 'active' : '' }}">
                    <a href="{{ route('partners.index') }}" class='sidebar-link'>
                        <i class="fas fa-user-tie"></i>
                        <span>Colaboradores</span>
                    </a>
                </li>
            @endcan
            @can('users.index')
                <li class="sidebar-item {{ (request()->is('users*')) ? 'active' : '' }}">
                    <a href="{{ route('users.index') }}" class='sidebar-link'>
                        <i class="fas fa-user"></i>
                        <span>Usuarios</span>
                    </a>
                </li>
            @endcan
        </ul>
    </div>
</div>
<!-- /#sidebar-wrapper -->
