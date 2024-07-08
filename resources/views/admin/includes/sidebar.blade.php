
<div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary text-decoration-none" style="width: 250px;">
  <a href="/admin/dashboard" class="transition duration-500 h-8 justify-content-center">
    <img src="{{url('/images/laporin dark.png')}}" class="h-full" />
  </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('admin/dashboard') ? 'active':'text-dark' }} mb-2" href="/admin/dashboard" aria-current="page">
            <i class="fa-solid fa-gauge fa-lg mr-2"></i>
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('admin/laporan') ? 'active':'text-dark' }} mb-2" href="/admin/laporan">
            <i class="fa-solid fa-folder fa-lg mr-2"></i>
          Laporan Masuk
        </a>
      </li>
      <li>
        <a href="/admin/subjeklaporan" class="nav-link {{ Request::is('admin/subjeklaporan') ? 'active':'text-dark' }} mb-2">
            <i class="fa-solid fa-bars-staggered fa-lg mr-2"></i>
          Subjek Laporan
        </a>
      </li>
      <li>
        <a href="/admin/statuspelapor" class="nav-link {{ Request::is('admin/statuspelapor') ? 'active':'text-dark' }} mb-2">
          <i class="fa-solid fa-user-tag fa-lg mr-2"></i>
          Status Pelapor
        </a>
      </li>
      <li>
        <a href="/admin/klasifikasilaporan" class="nav-link {{ Request::is('admin/klasifikasilaporan') ? 'active':'text-dark' }} mb-2">
          <i class="fa-solid fa-folder-tree fa-lg mr-2"></i>
          Klasifikasi Laporan
        </a>
      </li>
      <li>
        <a href="/admin/tentanglaporin" class="nav-link {{ Request::is('admin/tentanglaporin') ? 'active':'text-dark' }} mb-2">
            <i class="fa-solid fa-list fa-lg mr-2"></i>
          Tentang Laporin
        </a>
      </li>
      <li>
        <a href="/admin/panduanlaporan" class="nav-link {{ Request::is('admin/panduanlaporan') ? 'active':'text-dark' }} mb-2">
            <i class="fa-solid fa-circle-info fa-lg mr-2"></i>
          Panduan Laporan
        </a>
      </li>
      <li>
        <a href="/admin/user" class="nav-link {{ Request::is('admin/user') ? 'active':'text-dark' }} mb-2">
            <i class="fa-solid fa-user-group fa-lg mr-2"></i>
          Users
        </a>
      </li>
      <li>
        <a href="/admin/adduser" class="nav-link {{ Request::is('admin/adduser') ? 'active':'text-dark' }} mb-2">
            <i class="fa-solid fa-user-plus fa-lg mr-2"></i>
            Add User
        </a>
      </li>
    </ul>
    {{-- <hr> --}}
    {{-- <div class="dropdown">
      <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>mdo</strong>
      </a>
      <ul class="dropdown-menu text-small shadow">
        <li><a class="dropdown-item" href="#">New project...</a></li>
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Sign out</a></li>
      </ul>
    </div> --}}
  </div>