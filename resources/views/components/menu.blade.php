<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="index.html" class="app-brand-link">
        <img src="{{ asset('img/cc.png') }}" width="40px" alt="">
        <span class="app-brand-text demo menu-text fw-bold ms-2">Chatomz</span>
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
        <i class="bx menu-toggle-icon d-none d-xl-block fs-4 align-middle"></i>
        <i class="bx bx-x d-block d-xl-none bx-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-divider mt-0"></div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
      <!-- Dashboards -->
      <li class="menu-item {{ menuAktif('dashboard',$menuaktif) }}">
        <a href="{{ url('dashboard') }}" class='menu-link'>
            <i class="menu-icon tf-icons bx bxs-dashboard"></i>
            <div data-i18n="Dashboard">Dashboard</div>
        </a>
      </li>
      <li class="menu-item {{ menuAktif('informasi',$menuaktif) }}">
        <a href="{{ url('informasi') }}" class='menu-link'>
            <i class="menu-icon tf-icons bx bxs-data"></i>
            <div data-i18n="Informasi">Informasi</div>
        </a>
      </li>
      <li class="menu-item {{ menuAktif('data',$menuaktif) }}">
        <a href="{{ url('data') }}" class='menu-link'>
            <i class="menu-icon tf-icons bx bxs-data"></i>
            <div data-i18n="Pusat Data">Pusat Data</div>
        </a>
      </li>
      {{-- <li class="menu-item {{ fMenuAktif($menuaktif,['dashboard']) }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Dashboard">Dashboard</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item {{ fMenuAktif($menuaktif,'dashboard') }}">
            <a href="{{ url('dashboard') }}" class="menu-link">
              <div data-i18n="Statistik">Statistik</div>
            </a>
          </li> --}}
          {{-- <li class="menu-item">
            <a href="{{ url('daftar') }}" class="menu-link">
              <div data-i18n="Data">Data</div>
            </a>
          </li> --}}
        {{-- </ul> --}}
      {{-- </li> --}}

      <!-- Apps & Pages -->
      {{-- <li class="menu-header small text-uppercase"><span class="menu-header-text">Apps &amp; Pages</span></li> --}}

      <!-- Misc -->
      <li class="menu-header small text-uppercase"><span class="menu-header-text">Template</span></li>
      
      <li class="menu-item">
        <a
          href="https://pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/documentation-bs5/"
          target="_blank"
          class="menu-link"
        >
          <i class="menu-icon tf-icons bx bx-file"></i>
          <div data-i18n="Dokumentasi">Dokumentasi Template</div>
        </a>
      </li>
    </ul>
  </aside>