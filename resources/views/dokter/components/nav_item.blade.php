<li class="nav-item">
    <a href="/dokter/dashboard" class="nav-link {{ request()->is('dokter/dashboard') ? 'active' : '' }}">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>Dashboard</p>
    </a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link {{ request()->is('dokter/memeriksa*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-solid fa-stethoscope"></i>
        <p>Memeriksa</p>
    </a>
</li>
<li class="nav-item">
    <a href="/dokter/obat" class="nav-link {{ request()->is('dokter/obat*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-solid fa-capsules"></i>
        <p>Obat</p>
    </a>
</li>
