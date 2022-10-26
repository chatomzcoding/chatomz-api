<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-navbar-fixed layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{ asset('/template/frest/assets') . '/' }}"
  data-template="vertical-menu-template"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>{{ $title }}</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('img/cc.png')}}" />


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-icon/font/bootstrap-icons.css')}}" />
    <link rel="stylesheet" href="{{ asset('template/frest/assets/vendor/fonts/boxicons.css')}}" />
    <link rel="stylesheet" href="{{ asset('template/frest/assets/vendor/fonts/fontawesome.css')}}" />
    <link rel="stylesheet" href="{{ asset('template/frest/assets/vendor/fonts/flag-icons.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('template/frest/assets/vendor/css/rtl/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('template/frest/assets/vendor/css/rtl/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('template/frest/assets/css/demo.css')}}" />

    <!-- Vendors CSS -->
    {{ $vendor_css ?? ''}}
    <link rel="stylesheet" href="{{ asset('template/frest/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
    <link rel="stylesheet" href="{{ asset('template/frest/assets/vendor/libs/typeahead-js/typeahead.css')}}" />
    <link rel="stylesheet" href="{{ asset('template/frest/assets/vendor/libs/spinkit/spinkit.css')}}" />

    <link rel="stylesheet" href="{{ asset('template/frest/assets/vendor/libs/select2/select2.css')}}" />
    <link rel="stylesheet" href="{{ asset('template/frest/assets/vendor/libs/toastr/toastr.css')}}" />
    <link rel="stylesheet" href="{{ asset('template/frest/assets/vendor/libs/animate-css/animate.css')}}" />
    <link rel="stylesheet" href="{{ asset('template/frest/assets/vendor/libs/sweetalert2/sweetalert2.css')}}" />


    {{-- bootstrap datatables --}}
    <link rel="stylesheet" href="{{ asset('template/frest/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}" />
    <link rel="stylesheet" href="{{ asset('template/frest/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}" />
    <link rel="stylesheet" href="{{ asset('template/frest/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css')}}" />
    <link rel="stylesheet" href="{{ asset('template/frest/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}" />
    <link rel="stylesheet" href="{{ asset('template/frest/assets/vendor/libs/flatpickr/flatpickr.css')}}" />

    <!-- Page CSS -->
    {{ $vendor_page ?? ''}}

    <!-- Helpers -->
    <script src="{{ asset('template/frest/assets/vendor/js/helpers.js')}}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js')}} in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js')}}.  -->
    <script src="{{ asset('template/frest/assets/vendor/js/template-customizer.js')}}"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('template/frest/assets/js/config.js')}}"></script>

    <link rel="stylesheet" href="{{ asset('asset/custom.css')}}">
    @livewireStyles
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
          <x-menu menuaktif="{{ $menu }}"></x-menu>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
            <div class="container-fluid">
              <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                  <i class="bx bx-menu bx-sm"></i>
                </a>
              </div>

              <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                <!-- Search -->
                <div class="navbar-nav align-items-center">
                  <div class="nav-item navbar-search-wrapper mb-0">
                    <a class="nav-item nav-link search-toggler px-0" href="javascript:void(0);">
                      <i class="bx bx-search-alt bx-sm"></i>
                      <span class="d-none d-md-inline-block text-muted">Search</span>
                    </a>
                  </div>
                </div>
                <!-- /Search -->

                <ul class="navbar-nav flex-row align-items-center ms-auto">
                  <!-- Style Switcher -->
                  <li class="nav-item me-2 me-xl-0">
                    <a class="nav-link style-switcher-toggle hide-arrow" href="javascript:void(0);">
                      <i class="bx bx-sm"></i>
                    </a>
                  </li>
                  <!--/ Style Switcher -->

                  <!-- Quick links  -->
                  <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-2 me-xl-0">
                    <a
                      class="nav-link dropdown-toggle hide-arrow"
                      href="javascript:void(0);"
                      data-bs-toggle="dropdown"
                      data-bs-auto-close="outside"
                      aria-expanded="false"
                    >
                      <i class="bx bx-grid-alt bx-sm"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end py-0">
                      <div class="dropdown-menu-header border-bottom">
                        <div class="dropdown-header d-flex align-items-center py-3">
                          <h5 class="text-body mb-0 me-auto">Shortcuts</h5>
                          <a
                            href="javascript:void(0)"
                            class="dropdown-shortcuts-add text-body"
                            data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            title="Add shortcuts"
                            ><i class="bx bx-sm bx-plus-circle"></i
                          ></a>
                        </div>
                      </div>
                      <div class="dropdown-shortcuts-list scrollable-container">
                        <div class="row row-bordered overflow-visible g-0">
                          <div class="dropdown-shortcuts-item col">
                            <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                              <i class="bx bx-calendar fs-4"></i>
                            </span>
                            <a href="app-calendar.html" class="stretched-link">Calendar</a>
                            <small class="text-muted mb-0">Appointments</small>
                          </div>
                          <div class="dropdown-shortcuts-item col">
                            <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                              <i class="bx bx-food-menu fs-4"></i>
                            </span>
                            <a href="app-invoice-list.html" class="stretched-link">Invoice App</a>
                            <small class="text-muted mb-0">Manage Accounts</small>
                          </div>
                        </div>
                        <div class="row row-bordered overflow-visible g-0">
                          <div class="dropdown-shortcuts-item col">
                            <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                              <i class="bx bx-user fs-4"></i>
                            </span>
                            <a href="{{ url('orang/create') }}" class="stretched-link">Orang</a>
                            <small class="text-muted mb-0">Tambah Baru</small>
                          </div>
                          <div class="dropdown-shortcuts-item col">
                            <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                              <i class="bx bx-check-shield fs-4"></i>
                            </span>
                            <a href="app-access-roles.html" class="stretched-link">Role Management</a>
                            <small class="text-muted mb-0">Permission</small>
                          </div>
                        </div>
                        <div class="row row-bordered overflow-visible g-0">
                          <div class="dropdown-shortcuts-item col">
                            <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                              <i class="bx bx-pie-chart-alt-2 fs-4"></i>
                            </span>
                            <a href="index.html" class="stretched-link">Dashboard</a>
                            <small class="text-muted mb-0">User Profile</small>
                          </div>
                          <div class="dropdown-shortcuts-item col">
                            <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                              <i class="bx bx-cog fs-4"></i>
                            </span>
                            <a href="pages-account-settings-account.html" class="stretched-link">Setting</a>
                            <small class="text-muted mb-0">Account Settings</small>
                          </div>
                        </div>
                        <div class="row row-bordered overflow-visible g-0">
                          <div class="dropdown-shortcuts-item col">
                            <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                              <i class="bx bx-help-circle fs-4"></i>
                            </span>
                            <a href="pages-help-center-landing.html" class="stretched-link">Help Center</a>
                            <small class="text-muted mb-0">FAQs & Articles</small>
                          </div>
                          <div class="dropdown-shortcuts-item col">
                            <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                              <i class="bx bx-window-open fs-4"></i>
                            </span>
                            <a href="modal-examples.html" class="stretched-link">Modals</a>
                            <small class="text-muted mb-0">Useful Popups</small>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <!-- Quick links -->

                  <!-- Notification -->
                  <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-2">
                    <a
                      class="nav-link dropdown-toggle hide-arrow"
                      href="javascript:void(0);"
                      data-bs-toggle="dropdown"
                      data-bs-auto-close="outside"
                      aria-expanded="false"
                    >
                      <i class="bx bx-bell bx-sm"></i>
                      <span class="badge bg-danger rounded-pill badge-notifications">5</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end py-0">
                      <li class="dropdown-menu-header border-bottom">
                        <div class="dropdown-header d-flex align-items-center py-3">
                          <h5 class="text-body mb-0 me-auto">Notification</h5>
                          <a
                            href="javascript:void(0)"
                            class="dropdown-notifications-all text-body"
                            data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            title="Mark all as read"
                            ><i class="bx fs-4 bx-envelope-open"></i
                          ></a>
                        </div>
                      </li>
                      <li class="dropdown-notifications-list scrollable-container">
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item list-group-item-action dropdown-notifications-item">
                            <div class="d-flex">
                              <div class="flex-shrink-0 me-3">
                                <div class="avatar">
                                  <img src="{{ asset('template/frest/assets/img/avatars/1.png')}}" alt class="w-px-40 h-auto rounded-circle" />
                                </div>
                              </div>
                              <div class="flex-grow-1">
                                <h6 class="mb-1">Congratulation Lettie 🎉</h6>
                                <p class="mb-0">Won the monthly best seller gold badge</p>
                                <small class="text-muted">1h ago</small>
                              </div>
                              <div class="flex-shrink-0 dropdown-notifications-actions">
                                <a href="javascript:void(0)" class="dropdown-notifications-read"
                                  ><span class="badge badge-dot"></span
                                ></a>
                                <a href="javascript:void(0)" class="dropdown-notifications-archive"
                                  ><span class="bx bx-x"></span
                                ></a>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </li>
                      <li class="dropdown-menu-footer border-top">
                        <a href="javascript:void(0);" class="dropdown-item d-flex justify-content-center p-3">
                          Lihat Semua
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!--/ Notification -->

                  <!-- User -->
                  <li class="nav-item navbar-dropdown dropdown-user dropdown">
                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                      <div class="avatar avatar-online">
                        <img src="{{ asset('img/avatar.jpg')}}" alt class="rounded-circle" />
                      </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                      <li>
                        <a class="dropdown-item" href="pages-account-settings-account.html">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar avatar-online">
                                <img src="{{ asset('img/avatar.jpg')}}" alt class="rounded-circle" />
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <span class="fw-semibold d-block lh-1">{{ $user->name }}</span>
                              <small>{{ $user->level }}</small>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <div class="dropdown-divider"></div>
                      </li>
                      @if ($user->level == 'admin')
                        <li>
                          <a class="dropdown-item" href="{{ url('orang/'.Crypt::encryptString($profil->id)) }}">
                            <i class="bx bx-user me-2"></i>
                            <span class="align-middle">Profil</span>
                          </a>
                        </li>
                      @endif
                      <li>
                        <a class="dropdown-item" href="{{ url('user/'.Crypt::encryptString($user->id).'/edit') }}">
                          <i class="bx bx-cog me-2"></i>
                          <span class="align-middle">Pengaturan</span>
                        </a>
                      </li>
                      {{-- <li>
                        <a class="dropdown-item" href="pages-account-settings-billing.html">
                          <span class="d-flex align-items-center align-middle">
                            <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                            <span class="flex-grow-1 align-middle">Billing</span>
                            <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20"
                              >4</span
                            >
                          </span>
                        </a>
                      </li> --}}
                      <li>
                        <div class="dropdown-divider"></div>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">
                          <i class="bx bx-support me-2"></i>
                          <span class="align-middle">Bantuan</span>
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">
                          <i class="bx bx-help-circle me-2"></i>
                          <span class="align-middle">FAQ</span>
                        </a>
                      </li>
                      {{-- <li>
                        <a class="dropdown-item" href="pages-pricing.html">
                          <i class="bx bx-dollar me-2"></i>
                          <span class="align-middle">Pricing</span>
                        </a>
                      </li> --}}
                      <li>
                        <div class="dropdown-divider"></div>
                      </li>
                      <li>
                        <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}"  class="dropdown-item"
                                onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        <i class="bx bx-power-off me-2"></i><span>Keluar</span></a>
                    </form>
                    </li>
                    </ul>
                  </li>
                  <!--/ User -->
                </ul>
              </div>

              <!-- Search Small Screens -->
              <div class="navbar-search-wrapper search-input-wrapper d-none">
                <input
                  type="text"
                  class="form-control search-input container-fluid border-0"
                  placeholder="Search..."
                  aria-label="Search..."
                />
                <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
              </div>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              {{-- <x-sistem.notifikasi/> --}}
             {{ $header ?? ''}}
             {{ $slot ?? ''}}
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-fluid d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made with ❤️ by
                  <a href="https://pixinvent.com" target="_blank" class="footer-link fw-semibold">PIXINVENT</a>
                </div>
                <div>
                  <a href="https://themeforest.net/licenses/standard" class="footer-link me-4" target="_blank"
                    >License</a
                  >
                  <a href="https://1.envato.market/pixinvent_portfolio" target="_blank" class="footer-link me-4"
                    >More Themes</a
                  >

                  <a
                    href="https://pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/documentation-bs5/"
                    target="_blank"
                    class="footer-link me-4"
                    >Documentation</a
                  >

                  <a href="https://pixinvent.ticksy.com/" target="_blank" class="footer-link d-none d-sm-inline-block"
                    >Support</a
                  >
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>
      
      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>

      <!-- Drag Target Area To SlideIn Menu On Small Screens -->
      <div class="drag-target"></div>
    </div>
    {{ $modal ?? '' }}
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js')}} -->
    <script src="{{ asset('template/frest/assets/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{ asset('template/frest/assets/vendor/libs/popper/popper.js')}}"></script>
    <script src="{{ asset('template/frest/assets/vendor/js/bootstrap.js')}}"></script>
    <script src="{{ asset('template/frest/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

    <script src="{{ asset('template/frest/assets/vendor/libs/hammer/hammer.js')}}"></script>

    <script src="{{ asset('template/frest/assets/vendor/libs/i18n/i18n.js')}}"></script>
    <script src="{{ asset('template/frest/assets/vendor/libs/typeahead-js/typeahead.js')}}"></script>

    <script src="{{ asset('template/frest/assets/vendor/js/menu.js')}}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('template/frest/assets/vendor/libs/select2/select2.js')}}"></script>
    <script src="{{ asset('template/frest/assets/vendor/libs/masonry/masonry.js')}}"></script>
    <script src="{{ asset('template/frest/assets/vendor/libs/toastr/toastr.js')}}"></script>
    <script src="{{ asset('template/frest/assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>


    <script src="{{ asset('template/frest/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.js')}}"></script>
    <script src="{{ asset('template/frest/assets/vendor/libs/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{ asset('template/frest/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
    <script src="{{ asset('template/frest/assets/vendor/libs/datatables-responsive/datatables.responsive.js')}}"></script>
    <script src="{{ asset('template/frest/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js')}}"></script>
    <script src="{{ asset('template/frest/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.js')}}"></script>
    <script src="{{ asset('template/frest/assets/vendor/libs/datatables-buttons/datatables-buttons.js')}}"></script>
    <script src="{{ asset('template/frest/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.js')}}"></script>
    <script src="{{ asset('template/frest/assets/vendor/libs/jszip/jszip.js')}}"></script>
    <script src="{{ asset('template/frest/assets/vendor/libs/pdfmake/pdfmake.js')}}"></script>
    <script src="{{ asset('template/frest/assets/vendor/libs/datatables-buttons/buttons.html5.js')}}"></script>
    <script src="{{ asset('template/frest/assets/vendor/libs/datatables-buttons/buttons.print.js')}}"></script>

    <!-- Flat Picker -->
    <script src="{{ asset('template/frest/assets/vendor/libs/moment/moment.js')}}"></script>
    <script src="{{ asset('template/frest/assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
    <!-- Row Group JS -->
    <script src="{{ asset('template/frest/assets/vendor/libs/datatables-rowgroup/datatables.rowgroup.js')}}"></script>
    <script src="{{ asset('template/frest/assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.js')}}"></script>
    <!-- Form Validation -->
    <script src="{{ asset('template/frest/assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
    <script src="{{ asset('template/frest/assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
    <script src="{{ asset('template/frest/assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>

    {{ $vendor_js ?? ''}}
    <script src="{{ asset('js/chatomz.js')}}"></script>
    <script src="{{ asset('js/frest.js')}}"></script>

    <!-- Main JS -->
       <!-- Main JS -->

    <!-- Page JS -->
    <script src="{{ asset('template/frest/assets/js/forms-selects.js')}}"></script>
    {{-- <script src="{{ asset('template/frest/assets/js/tables-datatables-basic.js')}}"></script> --}}

    {{ $kodejs ?? ''}}
    <script type="text/javascript">
      @if(Session::has('ts'))
      toastr.options =
      {
        "closeButton" : true,
        "progressBar" : true
      }
          toastr.success("{{ session('ts') }}");
      @endif

      @if(Session::has('te'))
      toastr.options =
      {
        "closeButton" : true,
        "progressBar" : true
      }
          toastr.error("{{ session('te') }}");
      @endif

      @if(Session::has('ti'))
      toastr.options =
      {
        "closeButton" : true,
        "progressBar" : true
      }
          toastr.info("{{ session('ti') }}");
      @endif

      @if(Session::has('tw'))
      toastr.options =
      {
        "closeButton" : true,
        "progressBar" : true
      }
          toastr.warning("{{ session('tw') }}");
      @endif
    </script>

    <script src="{{ asset('template/frest/assets/js/dashboards-analytics.js')}}"></script>
    <script src="{{ asset('template/frest/assets/vendor/libs/block-ui/block-ui.js')}}"></script>
    <script src="{{ asset('template/frest/assets/js/extended-ui-blockui.js')}}"></script>
    @livewireScripts

  </body>
</html>


