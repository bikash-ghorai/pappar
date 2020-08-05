<!DOCTYPE html>
<html lang="en">
  <!-- begin::Head -->
  <head>
    <base href="../../../">
    <meta charset="utf-8" />
    <title>Papparazzme | Forgot Password</title>
    <meta name="description" content="Login page example">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--begin::Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">
    <!--end::Fonts -->
    <!--begin::Page Custom Styles(used by this page) -->
    <link href="{{ asset('public/assets/css/pages/login/login-3.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Page Custom Styles -->
    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="{{ asset('public/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles -->
    <!--begin::Layout Skins(used by all pages) -->
    <link href="{{ asset('public/assets/css/skins/header/base/light.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/css/skins/header/menu/light.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/css/skins/brand/dark.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/css/skins/aside/dark.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Layout Skins -->
    <link rel="shortcut icon" href="{{ asset('public/assets/media/logos/favicon.png') }}" />
  </head>
  <!-- end::Head -->
  <!-- begin::Body -->
  <body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">
    <!-- begin:: Page -->
    <div class="kt-grid kt-grid--ver kt-grid--root">
      <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v3 kt-login--signin" id="kt_login">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="background-image: url({{ asset('public/assets/media/bg/bg-3.jpg') }});">
          <div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
            <div class="kt-login__container">
              <div class="kt-login__logo">
                <a href="#">
                  <img src="{{ asset('public/assets/media/logos/logo-5.png') }}" style="height: auto; width: 200px;">
                </a>
              </div>
              <div class="kt-login__signin">
                <div class="kt-login__head">
                  <h3 class="kt-login__title">Forgot Password</h3>
                </div>
                @if(\Session::has('error'))
                  <div class="alert alert-warning">
                    <strong>Warning!! </strong> {{\Session::get('error')}}
                  </div>
                @endif
                <form class="kt-form" method="post" action="{{ url('password-change') }}">
                  {{ csrf_field() }}
                  <div class="input-group">
                    <input class="form-control" type="email" placeholder="Enter Email-ID" name="email" autocomplete="off">
                  </div>
                  <div class="input-group">
                    <input class="form-control" type="password" placeholder="Password" name="password">
                  </div>
                  <div class="input-group">
                    <input class="form-control" type="password" placeholder="Confirm Password" name="confirm_password">
                  </div>
                  <div class="row kt-login__extra">
                    <div class="col">
                      
                    </div>
                    <div class="col kt-align-right">
                      <a href="{{ url('login') }}" id="kt_login_forgot" class="kt-login__link">Back to login</a>
                    </div>
                  </div>
                  <div class="kt-login__actions">
                    <button id="kt_login_signin_submit" class="btn btn-brand btn-elevate kt-login__btn-primary">Change Password</button>
                  </div>
                </form>
              </div>
              <div class="kt-login__forgot">
                <div class="kt-login__head">
                  <h3 class="kt-login__title">Back to login</h3>
                  <div class="kt-login__desc">Enter your email to reset your password:</div>
                </div>
                <form class="kt-form" action="">
                  <div class="input-group">
                    <input class="form-control" type="text" placeholder="Email" name="email" id="kt_email" autocomplete="off">
                  </div>
                  <div class="kt-login__actions">
                    <button id="kt_login_forgot_submit" class="btn btn-brand btn-elevate kt-login__btn-primary">Request</button>&nbsp;&nbsp;
                    <button id="kt_login_forgot_cancel" class="btn btn-light btn-elevate kt-login__btn-secondary">Cancel</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end:: Page -->
    <!-- begin::Global Config(global config for global JS sciprts) -->
    <script>
      var KTAppOptions = {
        "colors": {
          "state": {
            "brand": "#5d78ff",
            "dark": "#282a3c",
            "light": "#ffffff",
            "primary": "#5867dd",
            "success": "#34bfa3",
            "info": "#36a3f7",
            "warning": "#ffb822",
            "danger": "#fd3995"
          },
          "base": {
            "label": [
              "#c5cbe3",
              "#a1a8c3",
              "#3d4465",
              "#3e4466"
            ],
            "shape": [
              "#f0f3ff",
              "#d9dffa",
              "#afb4d4",
              "#646c9a"
            ]
          }
        }
      };
    </script>
    <!-- end::Global Config -->
    <!--begin::Global Theme Bundle(used by all pages) -->
    <script src="{{ asset('public/assets/plugins/global/plugins.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/assets/js/scripts.bundle.js') }}" type="text/javascript"></script>
    <!--end::Global Theme Bundle -->
  </body>
  <!-- end::Body -->
</html>