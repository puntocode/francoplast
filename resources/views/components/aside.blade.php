<!-- Sidebar -->
<div class="bg-white shadow-sm" id="sidebar-wrapper">
    <div class="sidebar-heading py-4"><img src="{{ asset('images/logo-hor.svg') }}" alt="logo" height="45"></div>
    <div class="menu">
        <ul class="menu">
            {{-- <li class="sidebar-title">Menu</li> --}}
            <li class="sidebar-item {{ (request()->is('dashboard')) ? 'active' : '' }}">
                <a href="/dashboard" class='sidebar-link'>
                    <i class="fas fa-chart-line"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            @can('products.index')
                <li class="sidebar-item {{ (request()->is('products*')) ? 'active' : '' }}">
                    <a href="{{ route('products.index') }}" class='sidebar-link'>
                        <i class="fas fa-shopping-bag"></i>
                        <span>Productos</span>
                    </a>
                </li>
            @endcan
            @can('providers.index')
                <li class="sidebar-item {{ (request()->is('providers*')) ? 'active' : '' }}">
                    <a href="{{ route('providers.index') }}" class='sidebar-link'>
                        <i class="fas fa-truck"></i>
                        <span>Proveedores</span>
                    </a>
                </li>
            @endcan
            @can('customers.index')
                <li class="sidebar-item {{ (request()->is('customers*')) ? 'active' : '' }}">
                    <a href="{{ route('customers.index') }}" class='sidebar-link'>
                        <i class="fas fa-user-tie"></i>
                        <span>Clientes</span>
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
