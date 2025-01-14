<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
          content="سایت ساز تکنوبای">
    <meta name="keywords"
          content="سایت ساز تکنوبای">
    <meta name="author" content="تکنوبای">
    <title>سایت ساز تکنوبای</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('vendor/sitemanager/app-assets/images/ico/favicon.ico') }}">
    <link href="{{ asset('vendor/sitemanager/app-assets/images/fonts.googleapis.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/sitemanager/app-assets/vendors/css/vendors-rtl.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/sitemanager/app-assets/vendors/css/extensions/tether-theme-arrows.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/sitemanager/app-assets/vendors/css/extensions/tether.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/sitemanager/app-assets/vendors/css/extensions/shepherd-theme-default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/sitemanager/app-assets/css-rtl/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/sitemanager/app-assets/css-rtl/bootstrap-extended.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/sitemanager/app-assets/css-rtl/colors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/sitemanager/app-assets/css-rtl/components.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/sitemanager/app-assets/css-rtl/themes/dark-layout.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/sitemanager/app-assets/css-rtl/themes/semi-dark-layout.min.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('vendor/sitemanager/app-assets/css-rtl/core/menu/menu-types/vertical-menu.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/sitemanager/app-assets/css-rtl/core/colors/palette-gradient.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/sitemanager/app-assets/css-rtl/plugins/tour/tour.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/sitemanager/app-assets/css-rtl/custom-rtl.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/sitemanager/assets/css/style-rtl.css') }}">

    <link rel="stylesheet" type="text/css"
          href="{{ asset('vendor/sitemanager/app-assets/vendors/css/extensions/toastr.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('vendor/sitemanager/app-assets/css-rtl/plugins/extensions/toastr.min.css')}}">

    <link rel="stylesheet" type="text/css"
          href="{{ asset('vendor/sitemanager/app-assets/vendors/css/extensions/sweetalert2.min.css')}}">


    <style>
        /* CSS for loader */
        .loader {
            position: fixed;
            left: 50%;
            top: 50%;
            z-index: 9999;
            width: 100px;
            height: 100px;
            margin: -50px 0 0 -50px;
            border: 16px solid #f3f3f3;
            border-radius: 50%;
            border-top: 16px solid #3498db;
            width: 120px;
            height: 120px;
            -webkit-animation: spin 2s linear infinite;
            animation: spin 2s linear infinite;
            display: none;
        }

        @-webkit-keyframes spin {
            0% { -webkit-transform: rotate(0deg); }
            100% { -webkit-transform: rotate(360deg); }
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>


    @yield('style')
    {{--    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>--}}
    <script src='{{asset('vendor/sitemanager/app-assets/js/jquery.min.js')}}'></script>

</head>
<body class="vertical-layout vertical-menu-modern dark-layout 2-columnsnavbar-floating footer-static" data-open="click"
      data-menu="vertical-menu-modern" data-col="2-columns" data-layout="dark-layout">

<div class="loader" id="loader"></div>

@include('sitemanager::layout.header')

@include('sitemanager::layout.menu')

<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row"></div>
        <div class="content-body">
            @yield('content')
        </div>
    </div>
</div>

<script>
    $(document).ajaxStart(function(){
        alert("aaa")
        $("#loader").show();
    }).ajaxStop(function(){
        $("#loader").hide();
    });
</script>

<script src="{{ asset('vendor/sitemanager/app-assets/vendors/js/vendors.min.js') }}"></script>
<script src="{{ asset('vendor/sitemanager/app-assets/vendors/js/extensions/tether.min.js') }}"></script>
<script src="{{ asset('vendor/sitemanager/app-assets/vendors/js/extensions/shepherd.min.js') }}"></script>
<script src="{{ asset('vendor/sitemanager/app-assets/js/core/app-menu.min.js') }}"></script>
<script src="{{ asset('vendor/sitemanager/app-assets/js/core/app.min.js') }}"></script>
<script src="{{ asset('vendor/sitemanager/app-assets/js/scripts/components.min.js') }}"></script>
<script src="{{ asset('vendor/sitemanager/app-assets/js/scripts/customizer.min.js') }}"></script>
<script src="{{ asset('vendor/sitemanager/app-assets/js/scripts/footer.min.js') }}"></script>


<script src="{{ asset('vendor/sitemanager/app-assets/vendors/js/extensions/toastr.min.js')}}"></script>

<script src="{{ asset('vendor/sitemanager/app-assets/vendors/js/extensions/sweetalert2.all.min.js')}}"></script>
<script src="{{ asset('vendor/sitemanager/app-assets/js/scripts/extensions/sweet-alerts.min.js')}}"></script>

@yield('script')

<script>

    var datatable;

    $(document).ready(function () {

        $('#submit-all-form').on("click", function () {
            var form = $("#form");
            $.ajax({
                type: form.attr('method'),
                url: form.attr('action'),
                data: form.serialize()/*+"&variable="+otherData*/,
                success: function (data) {
                    toastr.success(data.message, 'تبریک', {"progressBar": true})
                    $('#inlineForm').modal('toggle');
                    datatable.ajax.reload();
                    resetForm()
                },
                error: function (xhr) {
                    if (xhr.status === 422) {
                        var errors = xhr.responseJSON.errors;
                        $.each(errors, function (key, value) {
                            toastr.error(value[0], 'اخطار', {"progressBar": true});
                        });
                    } else {
                        toastr.error('خطایی رخ داده است.', 'اخطار', {"progressBar": true});
                    }
                }
            });
        });

        $(document).on('click', '.delete_tag', function () {
            var url = $(this).data('url');
            Swal.fire({
                title: "اخطار!",
                text: " آیا از حذف مطمین هستید؟",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'بله، حذف کن!',
                cancelButtonText: 'لغو'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: url, // آدرس حذف
                        type: 'DELETE',
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function (data) {
                            datatable.ajax.reload();
                            toastr.success(data.message, 'تبریک', {"progressBar": true})
                        },
                        error: function (xhr) {
                            if (xhr.status === 422) {
                                var errors = xhr.responseJSON.errors;
                                $.each(errors, function (key, value) {
                                    toastr.error(value[0], 'اخطار', {"progressBar": true});
                                });
                            } else {
                                toastr.error('خطایی رخ داده است.', 'اخطار', {"progressBar": true});
                            }
                        }
                    });
                }
            })
        });

        $(document).on('click', '.update_tag', function () {
            resetForm()
            $('#action').val('update')
            var url = $(this).data('url');
            $.ajax({
                url: url, // آدرس حذف
                type: 'GET',
                success: function (data) {
                    $('#inlineForm').modal('show');
                    const keys = Object.keys(data.object)
                    $.each(keys, function(index, key) {
                        var input = $('input[name="' + key + '"]');
                        var select = $('select[name="' + key + '"]');

                        if (input.length) {
                            input.val(data.object[key]);
                        }

                        if (select.length) {
                            select.val(data.object[key]).change(); // برای به‌روزرسانی select2 یا پلاگین‌های مشابه
                        }
                    });

                },
                error: function (xhr) {
                    if (xhr.status === 422) {
                        var errors = xhr.responseJSON.errors;
                        $.each(errors, function (key, value) {
                            toastr.error(value[0], 'اخطار', {"progressBar": true});
                        });
                    } else {
                        toastr.error('خطایی رخ داده است.', 'اخطار', {"progressBar": true});
                    }
                }
            });



        });

    });
</script>

<script>
    function resetForm(){
        $('#form')[0].reset();
        $('#action').val('create')
    }
</script>



</body>
</html>
