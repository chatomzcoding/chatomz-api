<!DOCTYPE html>
<html
  lang="en"
  class="light-style customizer-hide"
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

    <title>LOGIN</title>

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
    <link rel="stylesheet" href="{{ asset('template/frest/assets/vendor/fonts/boxicons.css')}}" />
    <link rel="stylesheet" href="{{ asset('template/frest/assets/vendor/fonts/fontawesome.css')}}" />
    <link rel="stylesheet" href="{{ asset('template/frest/assets/vendor/fonts/flag-icons.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('template/frest/assets/vendor/css/rtl/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('template/frest/assets/vendor/css/rtl/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('template/frest/assets/css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('template/frest/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
    <link rel="stylesheet" href="{{ asset('template/frest/assets/vendor/libs/typeahead-js/typeahead.css')}}" />
    <!-- Vendor -->
    <link rel="stylesheet" href="{{ asset('template/frest/assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('template/frest/assets/vendor/css/pages/page-auth.css')}}" />
    <!-- Helpers -->
    <script src="{{ asset('template/frest/assets/vendor/js/helpers.js')}}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js')}} in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js')}}.  -->
    <script src="{{ asset('template/frest/assets/vendor/js/template-customizer.js')}}"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('template/frest/assets/js/config.js')}}"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-4">
          <!-- Register -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="index.html" class="app-brand-link gap-2">
                  <img src="{{ asset('img/cc.png') }}" width="40px" alt="">
                  <span class="app-brand-text demo h3 mb-0 fw-bold">Chatomz Api</span>
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-2">Selamat Datang! 👋</h4>

              <form id="formAuthentication" class="mb-3" action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Enter your email or username"
                    autofocus
                  />
                </div>
                <div class="mb-3 form-password-toggle">
                  {{-- <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label>
                    <a href="#">
                      <small>Lupa Password?</small>
                    </a>
                  </div> --}}
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>
                {{-- <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember-me" />
                    <label class="form-check-label" for="remember-me"> Remember Me </label>
                  </div>
                </div> --}}
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit">LOGIN</button>
                </div>
              </form>

              {{-- <p class="text-center">
                <span>New on our platform?</span>
                <a href="auth-register-basic.html">
                  <span>Create an account</span>
                </a>
              </p> --}}

              {{-- <div class="divider my-4">
                <div class="divider-text">or</div>
              </div> --}}

              {{-- <div class="d-flex justify-content-center">
                <a href="javascript:;" class="btn btn-icon btn-label-facebook me-3">
                  <i class="tf-icons bx bxl-facebook"></i>
                </a>

                <a href="javascript:;" class="btn btn-icon btn-label-google-plus me-3">
                  <i class="tf-icons bx bxl-google-plus"></i>
                </a>

                <a href="javascript:;" class="btn btn-icon btn-label-twitter">
                  <i class="tf-icons bx bxl-twitter"></i>
                </a>
              </div> --}}
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>

    <!-- / Content -->

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
    <script src="{{ asset('template/frest/assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
    <script src="{{ asset('template/frest/assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
    <script src="{{ asset('template/frest/assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>

    <!-- Main JS -->
    <script src="{{ asset('template/frest/assets/js/main.js')}}"></script>

    <!-- Page JS -->
    <script src="{{ asset('template/frest/assets/js/pages-auth.js')}}"></script>
  </body>
</html>