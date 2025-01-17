<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>آموزش کارماران</title>
    <link rel="apple-touch-icon" href="/panel/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="/panel/app-assets/images/ico/favicon.ico">
    <link href="/panel/app-assets/images/fonts.googleapis.css" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="/panel/app-assets/vendors/css/vendors-rtl.min.css">
    <link rel="stylesheet" type="text/css" href="/panel/app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="/panel/app-assets/vendors/css/extensions/tether-theme-arrows.css">
    <link rel="stylesheet" type="text/css" href="/panel/app-assets/vendors/css/extensions/tether.min.css">
    <link rel="stylesheet" type="text/css" href="/panel/app-assets/vendors/css/extensions/shepherd-theme-default.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="/panel/app-assets/css-rtl/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/panel/app-assets/css-rtl/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="/panel/app-assets/css-rtl/colors.min.css">
    <link rel="stylesheet" type="text/css" href="/panel/app-assets/css-rtl/components.min.css">
    <link rel="stylesheet" type="text/css" href="/panel/app-assets/css-rtl/themes/dark-layout.min.css">
    <link rel="stylesheet" type="text/css" href="/panel/app-assets/css-rtl/themes/semi-dark-layout.min.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="/panel/app-assets/css-rtl/core/menu/menu-types/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="/panel/app-assets/css-rtl/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="/panel/app-assets/css-rtl/pages/dashboard-analytics.min.css">
    <link rel="stylesheet" type="text/css" href="/panel/app-assets/css-rtl/pages/card-analytics.min.css">
    <link rel="stylesheet" type="text/css" href="/panel/app-assets/css-rtl/plugins/tour/tour.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="/panel/app-assets/css-rtl/custom-rtl.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style-rtl.css">
    <!-- END: Custom CSS-->

    @yield('style')

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

<!-- BEGIN: Header-->

@include('education::admin.layout.header')

<!-- END: Header-->


<!-- BEGIN: Main Menu-->
@include('education::admin.layout.menu')

<!-- END: Main Menu-->

<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        @yield('content')
    </div>
</div>
<!-- END: Content-->


<!-- BEGIN: Customizer-->
<div class="customizer d-none d-md-block"><a class="customizer-close" href="#"><i class="feather icon-x"></i></a><a class="customizer-toggle" href="#"><i class="feather icon-settings fa fa-spin fa-fw white"></i></a><div class="customizer-content p-2">
        <h4 class="text-uppercase mb-0">تنظیم کننده تم</h4>
        <small>سفارشی سازی کنید و در لحظه پیش نمایش را ببینید</small>
        <hr>
        <!-- Menu Colors Starts -->
        <div id="customizer-theme-colors">
            <h5>رنگ های منو</h5>
            <ul class="list-inline unstyled-list">
                <li class="color-box bg-primary selected" data-color="theme-primary"></li>
                <li class="color-box bg-success" data-color="theme-success"></li>
                <li class="color-box bg-danger" data-color="theme-danger"></li>
                <li class="color-box bg-info" data-color="theme-info"></li>
                <li class="color-box bg-warning" data-color="theme-warning"></li>
                <li class="color-box bg-dark" data-color="theme-dark"></li>
            </ul>
        </div>
        <!-- Menu Colors Ends -->
        <hr>
        <!-- Theme options starts -->
        <h5 class="mt-1">تم صفحه</h5>
        <div class="theme-layouts">
            <div class="d-flex justify-content-start">
                <div class="mx-50 lidht">
                    <fieldset>
                        <div class="vs-radio-con vs-radio-primary">
                            <input type="radio" name="layoutOptions" value="false" class="layout-name" data-layout="" checked>
                            <span class="vs-radio">
              <span class="vs-radio--border"></span>
              <span class="vs-radio--circle"></span>
            </span>
                            <span class="">روشن</span>
                        </div>
                    </fieldset>
                </div>
                <div class="mx-50 dark">
                    <fieldset>
                        <div class="vs-radio-con vs-radio-primary">
                            <input type="radio" name="layoutOptions" value="false" class="layout-name" data-layout="dark-layout">
                            <span class="vs-radio">
              <span class="vs-radio--border"></span>
              <span class="vs-radio--circle"></span>
            </span>
                            <span class="">تاریک</span>
                        </div>
                    </fieldset>
                </div>
                <div class="mx-50 semi-dark">
                    <fieldset>
                        <div class="vs-radio-con vs-radio-primary">
                            <input type="radio" name="layoutOptions" value="false" class="layout-name" data-layout="semi-dark-layout">
                            <span class="vs-radio">
              <span class="vs-radio--border"></span>
              <span class="vs-radio--circle"></span>
            </span>
                            <span class="">نیمه روشن</span>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
        <!-- Theme options starts -->
        <hr>

        <!-- Collapse sidebar switch starts -->
        <div class="collapse-sidebar d-flex justify-content-between">
            <div class="collapse-option-title">
                <h5 class="pt-25 collapse_sidebar">نوار کناری</h5>
                <h5 class="pt-25 collapse_menu d-none">منو Collapse</h5>
            </div>
            <div class="collapse-option-switch">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="collapse-sidebar-switch">
                    <label class="custom-control-label" for="collapse-sidebar-switch"></label>
                </div>
            </div>
        </div>
        <!-- Collapse sidebar switch Ends -->
        <hr>

        <!-- Navbar colors starts -->
        <div id="customizer-navbar-colors">
            <h5>رنگ های نوار</h5>
            <ul class="list-inline unstyled-list">
                <li class="color-box bg-white border selected" data-navbar-default=""></li>
                <li class="color-box bg-primary" data-navbar-color="bg-primary"></li>
                <li class="color-box bg-success" data-navbar-color="bg-success"></li>
                <li class="color-box bg-danger" data-navbar-color="bg-danger"></li>
                <li class="color-box bg-info" data-navbar-color="bg-info"></li>
                <li class="color-box bg-warning" data-navbar-color="bg-warning"></li>
                <li class="color-box bg-dark" data-navbar-color="bg-dark"></li>
            </ul>
            <hr>
        </div>
        <!-- Navbar colors starts -->
        <!-- Navbar Type Starts -->
        <div id="navbar-type">
            <h5 class="navbar_type">وضعیت نوار</h5>
            <h5 class="menu_type d-none">وضعیت منو</h5>
            <div class="navbar-type d-flex justify-content-start">
                <div class="mx-50">
                    <fieldset>
                        <div class="vs-radio-con vs-radio-primary">
                            <input type="radio" name="navbarType" value="false" id="navbar-hidden">
                            <span class="vs-radio">
              <span class="vs-radio--border"></span>
              <span class="vs-radio--circle"></span>
            </span>
                            <span class="">مخفی</span>
                        </div>
                    </fieldset>
                </div>
                <div class="mx-50">
                    <fieldset>
                        <div class="vs-radio-con vs-radio-primary">
                            <input type="radio" name="navbarType" value="false" id="navbar-static">
                            <span class="vs-radio">
              <span class="vs-radio--border"></span>
              <span class="vs-radio--circle"></span>
            </span>
                            <span class="">ایستا</span>
                        </div>
                    </fieldset>
                </div>
                <div class="mx-50">
                    <fieldset>
                        <div class="vs-radio-con vs-radio-primary">
                            <input type="radio" name="navbarType" value="false" id="navbar-sticky">
                            <span class="vs-radio">
              <span class="vs-radio--border"></span>
              <span class="vs-radio--circle"></span>
            </span>
                            <span class="">چسبیده</span>
                        </div>
                    </fieldset>
                </div>
                <div class="mx-50">
                    <fieldset>
                        <div class="vs-radio-con vs-radio-primary">
                            <input type="radio" name="navbarType" value="false" id="navbar-floating" checked>
                            <span class="vs-radio">
              <span class="vs-radio--border"></span>
              <span class="vs-radio--circle"></span>
            </span>
                            <span class="">شناور</span>
                        </div>
                    </fieldset>
                </div>
            </div>
            <hr>
        </div>
        <!-- Navbar Type Starts -->

        <!-- Footer Type Starts -->
        <h5>وضعیت پاورقی</h5>
        <div class="footer-type d-flex justify-content-start">
            <div class="mx-50">
                <fieldset>
                    <div class="vs-radio-con vs-radio-primary">
                        <input type="radio" name="footerType" value="false" id="footer-hidden">
                        <span class="vs-radio">
            <span class="vs-radio--border"></span>
            <span class="vs-radio--circle"></span>
          </span>
                        <span class="">مخفی</span>
                    </div>
                </fieldset>
            </div>
            <div class="mx-50">
                <fieldset>
                    <div class="vs-radio-con vs-radio-primary">
                        <input type="radio" name="footerType" value="false" id="footer-static" checked>
                        <span class="vs-radio">
            <span class="vs-radio--border"></span>
            <span class="vs-radio--circle"></span>
          </span>
                        <span class="">ایستا</span>
                    </div>
                </fieldset>
            </div>
            <div class="mx-50">
                <fieldset>
                    <div class="vs-radio-con vs-radio-primary">
                        <input type="radio" name="footerType" value="false" id="footer-sticky">
                        <span class="vs-radio">
            <span class="vs-radio--border"></span>
            <span class="vs-radio--circle"></span>
          </span>
                        <span class="">چسبیده</span>
                    </div>
                </fieldset>
            </div>
        </div>
        <!-- Footer Type Ends -->
        <hr>

        <!-- Hide Scroll To Top Starts-->
        <div class="hide-scroll-to-top d-flex justify-content-between py-25">
            <div class="hide-scroll-title">
                <h5 class="pt-25">پیمایش به بالا</h5>
            </div>
            <div class="hide-scroll-top-switch">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="hide-scroll-top-switch">
                    <label class="custom-control-label" for="hide-scroll-top-switch"></label>
                </div>
            </div>
        </div>
        <!-- Hide Scroll To Top Ends-->
    </div>
</div>
<!-- End: Customizer-->

<!-- Buynow Button-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light">
    <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">حقوق کپی رایت &copy; 1399<a class="text-bold-800 grey darken-2" href="https://www.nparoco.com" target="_blank">تکنوبای</a>کلیه حقوق محفوظ است</span><span class="float-md-right d-none d-md-block">دست ساز و ساخته شده با<i class="feather icon-heart pink"></i></span>
        <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
    </p>
</footer>
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
<script src="/panel/app-assets/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="/panel/app-assets/vendors/js/charts/apexcharts.min.js"></script>
<script src="/panel/app-assets/vendors/js/extensions/tether.min.js"></script>
<script src="/panel/app-assets/vendors/js/extensions/shepherd.min.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="/panel/app-assets/js/core/app-menu.min.js"></script>
<script src="/panel/app-assets/js/core/app.min.js"></script>
<script src="/panel/app-assets/js/scripts/components.min.js"></script>
<script src="/panel/app-assets/js/scripts/customizer.min.js"></script>
<script src="/panel/app-assets/js/scripts/footer.min.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="/panel/app-assets/js/scripts/pages/dashboard-analytics.min.js"></script>
<!-- END: Page JS-->

@yield('script')

</body>
<!-- END: Body-->
</html>
