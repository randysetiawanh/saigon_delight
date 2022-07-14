<!-- partial:./partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item sidebar-category">
        <p>Info</p>
        <span></span>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('index') }}">
          <i class="mdi mdi-view-quilt menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="mdi mdi-palette menu-icon"></i>
          <span class="menu-title">Data User</span>
        </a>
      </li> --}}
      <li class="nav-item">
        <a class="nav-link" href="{{ route('daftarmenu.index') }}">
          <i class="mdi mdi-book-multiple-variant menu-icon"></i>
          <span class="menu-title">Daftar Menu</span>
        </a>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link" href="pages/forms/chartjs.html">
          <i class="mdi mdi-chart-pie menu-icon"></i> 
          <span class="menu-title">Data Bahan</span>
        </a>
      </li> --}}
      <li class="nav-item">
        <a class="nav-link" href="/kategori">
          <i class="mdi mdi-nutrition menu-icon"></i>
          <span class="menu-title">Kategori Menu</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/laporan">
          <i class="mdi mdi-cloud-print menu-icon"></i>
          <span class="menu-title">Laporan Penjualan</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
          <i class="mdi mdi-exit-to-app menu-icon"></i>
          <span class="menu-title">Logout</span>
        </a>
      </li>
    </ul>
  </nav>
  <!-- partial -->