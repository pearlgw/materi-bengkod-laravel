<li class="nav-item">
    <a href="/pasien/dashboard" class="nav-link {{ request()->is('pasien/dashboard') ? 'active' : '' }}">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>Dashboard</p>
    </a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link {{ request()->routeIs('pasien.periksa') ? 'active' : '' }}">
        <i class="nav-icon fas fa-solid fa-hospital"></i>
        <p>Periksa</p>
    </a>
</li>
