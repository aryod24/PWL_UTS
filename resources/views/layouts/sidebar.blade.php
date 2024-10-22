<div class="sidebar">
    <!-- Profil Pengguna -->
    <div class="user-panel mt-2 pb-1 mb-1 d-flex">
        <div class="image">
            @if (session('profile_img_path'))
                <img src="{{ asset(session('profile_img_path')) }}" alt="Profile Picture" class="brand-image img-circle elevation-3" style="opacity: .8; width: 40px; height: 50px;">
            @else
                <img src="{{ asset('path/to/default/profile.jpg') }}" alt="Default Profile Picture" class="brand-image img-circle elevation-3" style="opacity: .8; width: 40px; height: 40px;">
            @endif
        </div>
        <div class="info">
            <a href="{{ url('/profile') }}" class="d-block" style="color: #fff;">{{ auth()->user()->username }}</a> <!-- Menampilkan username pengguna yang terautentikasi dengan warna putih -->
            <small style="color: #fff;">{{ auth()->user()->level->level_nama }}</small> <!-- Menampilkan level pengguna dengan warna putih -->
        </div>
    </div>
  <!-- SidebarSearch Form -->
  <div class="form-inline mt-2">
      <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
              <button class="btn btn-sidebar">
                  <i class="fas fa-search fa-fw"></i>
              </button>
          </div>
      </div>
  </div>
  <!-- Sidebar Menu -->
  <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
              <a href="{{ url('/welcome') }}" class="nav-link {{ ($activeMenu == 'dashboard') ? 'active' : '' }} ">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Dashboard</p>
              </a>
          </li>
          <li class="nav-item">
              <a href="{{ url('/profile') }}" class="nav-link {{ $activeMenu == 'profile' ? 'active' : '' }} ">
                  <i class="nav-icon far fa-address-card"></i>
                  <p>Profile</p>
              </a>
          </li>
          <li class="nav-header">Data Pengguna</li>
          <li class="nav-item">
              <a href="{{ url('/level') }}" class="nav-link {{ ($activeMenu == 'level') ? 'active' : '' }} ">
                  <i class="nav-icon fas fa-layer-group"></i>
                  <p>Level User</p>
              </a>
          </li>
          <li class="nav-item">
              <a href="{{ url('/user') }}" class="nav-link {{ ($activeMenu == 'user') ? 'active' : '' }}">
                  <i class="nav-icon far fa-user"></i>
                  <p>Data User</p>
              </a>
          </li>
          <li class="nav-item">
              <a href="{{ url('/supplier') }}" class="nav-link {{ ($activeMenu == 'supplier') ? 'active' : '' }}">
                  <i class="nav-icon far fa-user"></i>
                  <p>Data Supplier</p>
              </a>
          </li>
          <li class="nav-header">Data Barang</li>
          <li class="nav-item">
              <a href="{{ url('/kategori') }}" class="nav-link {{ ($activeMenu == 'kategori') ? 'active' : '' }} ">
                  <i class="nav-icon far fa-bookmark"></i>
                  <p>Kategori Barang</p>
              </a>
          </li>
          <li class="nav-item">
              <a href="{{ url('/barang') }}" class="nav-link {{ ($activeMenu == 'barang') ? 'active' : '' }} ">
                  <i class="nav-icon far fa-list-alt"></i>
                  <p>Data Barang</p>
              </a>
          </li>
          <li class="nav-header">Data Transaksi</li>
          <li class="nav-item">
              <a href="{{ url('/stok') }}" class="nav-link {{ ($activeMenu == 'stok') ? 'active' : '' }} ">
                  <i class="nav-icon fas fa-cubes"></i>
                  <p>Stok Barang</p>
              </a>
          </li>
          <li class="nav-item">
              <a href="{{ url('/penjualan') }}" class="nav-link {{ ($activeMenu == 'penjualan') ? 'active' : '' }} ">
                  <i class="nav-icon fas fa-cash-register"></i>
                  <p>Transaksi Penjualan</p>
              </a>
          </li>
          <!-- Menambahkan Menu Logout -->
          <li class="nav-item">
              <a href="{{ url('logout') }}" class="nav-link"
                  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <i class="nav-icon fas fa-sign-out-alt"></i>
                  <p>Logout</p>
              </a>
              <form id="logout-form" action="{{ url('logout') }}" method="GET" style="display: none;">
              </form>
          </li>
      </ul>
  </nav>
</div>
