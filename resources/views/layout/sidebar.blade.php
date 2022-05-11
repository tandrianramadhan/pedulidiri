<aside id="sidebar-wrapper">
    <div class="sidebar-brand" style="background-color: #E67E22">
      <a href="index.html" style="color: #000000">PEDULI DIRI</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.html">PD</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Main Menu</li>
        <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}">
          <a href="/dashboard" class="nav-link"><i></i><span style="color: black">Dashboard</span></a>
        </li>
        <li class="nav-item {{ request()->is('inputPerjalanan') ? 'active' : '' }}">
          <a href="/inputPerjalanan" class="nav-link"><i></i><span style="color: black">Input Data</span></a>
        </li>
  </aside>
