<!doctype html>
<html lang="fa">

<head>
    <!-- description -->
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="progogram">
    <meta name="description"
          content="">
    <meta name="keywords" content="">
    <link rel="icon" type="image/x-icon" href="{{asset('/sources/image/favIcon.png')}}">
    <!-- title -->
    <title>کارماران | همه برای یکی</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset('/sources/style/bootstrap-reboot.css')}}">
    <link rel="stylesheet" href="{{asset('/sources/style/bootstrap.rtl.css')}}">
    <link rel="stylesheet" href="{{asset('/sources/style/bootstrap-grid.css')}}">
    <!-- css -->
    <link rel="stylesheet" href="{{asset('/sources/style/pages/oldStyle.css')}}">
    <link rel="stylesheet" href="{{asset('/sources/style/pages/text.css')}}">
    <link rel="stylesheet" href="{{asset('/sources/style/pages/button.css')}}">
    <link rel="stylesheet" href="{{asset('/sources/style/pages/footer.css')}}">
    <link rel="stylesheet" href="{{asset('/sources/style/pages/header.css')}}">
    <link rel="stylesheet" href="{{asset('/sources/style/pages/style.css')}}">
    <!-- animate -->
    <link rel="stylesheet" href="{{asset('/sources/style/component/animate/aos.css')}}">
    <link rel="stylesheet" href="{{asset('/sources/style/component/animate/animate.min.css')}}">
    <!-- Link slider CSS -->
    <link rel="stylesheet" href="{{asset('/sources/style/component/slider/swiper-bundle.min.css')}}">
    <!-- icons -->
    <link rel="stylesheet" href="{{asset('/sources/style/pages/fontIcon.css')}}">

    <link rel="stylesheet" href="{{asset('/panel/app-assets/vendors/css/extensions/toastr.css')}}">
    <link rel="stylesheet" href="{{asset('/panel/app-assets/css-rtl/plugins/extensions/toastr.min.css')}}">

    <link href="{{asset('/select2/dist/css/select2.min.css" rel="stylesheet')}}"/>


    <style>
        /* سبک‌های لودینگ */
        #loading-overlay {
            display: none; /* به طور پیش‌فرض مخفی باشد */
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.8); /* نیمه شفاف */
        }

        #loading-spinner {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border: 16px solid #f3f3f3;
            border-radius: 50%;
            border-top: 16px solid #3498db;
            width: 120px;
            height: 120px;
            -webkit-animation: spin 2s linear infinite;
            animation: spin 2s linear infinite;
        }

        @-webkit-keyframes spin {
            0% {
                -webkit-transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
    </style>


    @yield('style')
</head>

<body>

<div id="loading-overlay">
    <div id="loading-spinner"></div>
</div>

{{--@include('client.layout.header')--}}

<article class="content">
    @yield('content')

</article>

{{--@include('client.layout.footer')--}}


<script>
    // تابع برای نمایش لودینگ
    function showLoading() {
        document.getElementById('loading-overlay').style.display = 'block';
    }

    // تابع برای مخفی کردن لودینگ
    function hideLoading() {
        document.getElementById('loading-overlay').style.display = 'none';
    }
</script>


<!-- scripts -->
<!-- jquery -->
<script src="{{asset('/sources/script/jquery-3.7.1.min.js')}}"></script>
<!-- bootstrap -->
<script src="{{asset('/sources/script/bootstrap.bundle.min.js')}}"></script>
<!-- animate -->
<script src="{{asset('/sources/script/component/animate/aos.js')}}"></script>
<!-- slider -->
<script src="{{asset('/sources/script/component/slider/swiper-bundle.min.js')}}"></script>
<!-- script -->
<script src="{{asset('/sources/script/pages/script.js')}}"></script>
<script src="{{asset('/sources/script/pages/slider.js')}}"></script>

<script src="{{asset('/panel/app-assets/vendors/js/extensions/toastr.min.js')}}"></script>
<script src="{{asset('/select2/dist/js/select2.min.js')}}"></script>
<script>
    $(document).ready(function () {
        $('.city-select').select2({
            placeholder: 'همه شهر ها',

        });
        $('.seccond-select').select2({
            placeholder: 'نوع نهاد',
        });
    })
</script>

<script>
    let interval;

    function countdown() {
        clearInterval(interval);
        interval = setInterval(function () {
            let timer = $('#counter').html();
            timer = timer.split(':');
            let minutes = timer[0];
            let seconds = timer[1];
            seconds -= 1;
            if (minutes < 0) return;
            else if (seconds < 0 && minutes !== 0) {
                minutes -= 1;
                seconds = 59;
            } else if (seconds < 10 && length.seconds !== 2) seconds = '0' + seconds;
            $('#counter').html(minutes + ':' + seconds);
            if (minutes === 0 && seconds === 0) clearInterval(interval);
        }, 1000);
    }

    let interval2;

    function countdown2(timee = "0:00") {

        clearInterval(interval);
        interval = setInterval(function () {
            let timer;
            console.log(timee)
            if (timee != "0:00") {
                console.log("a")
                timer = timee;
            } else {
                console.log('b')
                timer = $('#singup-counter').html();
            }
            timer = timer.split(':');
            let minutes = timer[0];
            let seconds = timer[1];

            console.log(seconds)
            console.log(minutes)

            seconds -= 1;
            if (minutes < 0) return;
            else if (seconds < 0 && minutes !== 0) {
                minutes -= 1;
                seconds = 59;
            } else if (seconds < 10 && length.seconds !== 2) seconds = '0' + seconds;

            console.log(seconds)
            console.log(minutes)
            timee = minutes + ':' + seconds
            $('#singup-counter').html(minutes + ':' + seconds);
            if (minutes === 0 && seconds === 0) {
                $('#sresendClick').on("click", function () {
                    reSendCode();
                });
                clearInterval(interval);
            } else {
                $('#sresendClick').on("click", function () {
                });
            }
        }, 1000);
    }

    function showPass(value, elm, text) {
        let element = document.getElementById(elm);
        let content = document.getElementById(text);
        if (value === 0) {
            element.classList.add('d-none');
            content.classList.remove('d-none');
            $('#withPass').val(1)
        } else {
            element.classList.remove('d-none');
            content.classList.add('d-none');
            document.getElementById('password').value = "";
            $('#withPass').val(0)
        }
    }

    function changeType(elm, input) {
        let eye = document.getElementById(elm);
        let filed = document.getElementById(input);
        if (eye.classList.contains('show')) {
            eye.classList.remove('show');
            eye.classList.add('fa-eye');
            eye.classList.remove('fa-eye-slash');
            filed.type = "password";
        } else {
            eye.classList.add('show');
            eye.classList.remove('fa-eye');
            eye.classList.add('fa-eye-slash');
            filed.type = "text";
        }
    }

    const login = () => {
        let elm = document.getElementById('signup-btn-show');
        let elm_2 = document.getElementById('code-btn-show');
        let token = document.getElementsByName("_token")[0].value;
        let data = {
            mobile: document.getElementById('mobile').value,
            password: document.getElementById('password').value,
            withPass: document.getElementById('withPass').value,
        }
        // make spinner
        let send_btn = document.getElementById('login-send-btn');
        // make spinner
        send_btn.innerHTML = "";
        let spinner = document.createElement('span');
        // style of spinner
        spinner.className = "spinner-border align-middle";
        spinner.style.color = "#FFFFFF";
        spinner.style.marginTop = "-1px"
        send_btn.appendChild(spinner);
        $.ajax({
            url: "/singin",
            method: 'POST',
            headers: {
                'X-CSRF-Token': token
            },
            data: data,
            success: function (data) {
                if (data === "0") {
                    countdown2("2:01")
                    elm.click();
                }
                if (data === "1") {
                    // window.open('/', '_self')
                    location.reload()
                }
                if (data === "2") {
                    countdown2("2:01")
                    elm_2.click();
                }
                let father = document.getElementById('password-collapse');
                let error = document.createElement('p');
                send_btn.innerHTML = "موفق !"
                if (data.password) {
                    error.classList = 'text-danger font-12 mt-2';
                    error.id = 'password-alert';
                    if (!document.getElementById('password-alert')) {
                        error.innerHTML = data.password;
                        father.appendChild(error);
                    }
                    send_btn.innerHTML = "ناموفق !"
                } else {
                    if (document.getElementById('password-alert')) {
                        document.getElementById('password-alert').classList.add('d-none');
                    }
                }
            },
            error: function (data) {
                if (data.responseJSON.errors.mobile) {
                    let error = document.createElement('p');
                    error.classList = 'text-danger font-12 mt-2';
                    error.id = 'mobile-alert';
                    let father = document.getElementById('mobile-filed');
                    if (!document.getElementById('mobile-alert')) {
                        error.innerHTML = data.responseJSON.errors.mobile;
                        father.appendChild(error)
                    }
                }
                send_btn.innerHTML = "ناموفق !"
            }
        });
    }

    const forgetPassword = () => {
        let token = document.getElementsByName("_token")[0].value;
        let data = {
            mobile: document.getElementById('mobile-forgot').value,
            // password: document.getElementById('password').value,
        }
        // make spinner
        let send_btn = document.getElementById('forget-send-btn');
        // make spinner
        send_btn.innerHTML = "";
        let spinner = document.createElement('span');
        // style of spinner
        spinner.className = "spinner-border align-middle";
        spinner.style.color = "#FFFFFF";
        spinner.style.marginTop = "-1px"
        send_btn.appendChild(spinner);
        $.ajax({
            url: "/forgetpass",
            method: 'POST',
            headers: {
                'X-CSRF-Token': token
            },
            data: data,
            success: function (data) {
                if (data.mobile) {
                    let error = document.createElement('p');
                    error.classList = 'text-danger font-12 mt-2';
                    error.id = 'mobile-alert';
                    let father = document.getElementById('mobile-filed-pass');
                    if (!document.getElementById('mobile-alert')) {
                        error.innerHTML = data.mobile;
                        father.appendChild(error)
                    }
                    send_btn.innerHTML = "ناموفق !"
                } else {
                    send_btn.innerHTML = "موفق !"
                    $('#forgot-modal').modal('hide')
                    $('#login-modal').modal('show')
                }

            },
            error: function (data) {
                if (data.responseJSON.errors.mobile) {
                    let error = document.createElement('p');
                    error.classList = 'text-danger font-12 mt-2';
                    error.id = 'mobile-alert';
                    let father = document.getElementById('mobile-filed-pass');
                    if (!document.getElementById('mobile-alert')) {
                        error.innerHTML = data.responseJSON.errors.mobile;
                        father.appendChild(error)
                    }
                }
                send_btn.innerHTML = "ناموفق !"
            }
        });
    }
    const signUp = () => {
        let token = document.getElementsByName("_token")[0].value;
        let data = {
            code: document.getElementById('code-signup').value,
            name: document.getElementById('name').value,
            family: document.getElementById('family').value,
            password: document.getElementById('password-signup').value,
            introducer_social: document.getElementById('introducer_social').value,
        }
        // make spinner
        let send_btn = document.getElementById('signup-send-btn');
        // make spinner
        send_btn.innerHTML = "";
        let spinner = document.createElement('span');
        // style of spinner
        spinner.className = "spinner-border align-middle";
        spinner.style.color = "#FFFFFF";
        spinner.style.marginTop = "-1px"
        send_btn.appendChild(spinner);
        $.ajax({
            url: "/verifyRegister",
            method: 'POST',
            headers: {
                'X-CSRF-Token': token
            },
            data: data,
            success: function (data) {
                let error = document.createElement('p');
                let father = document.getElementById('code-signup-filed');
                send_btn.innerHTML = "موفق !"
                if (data.code) {
                    error.classList = 'text-danger signup-alert font-12 mt-2';
                    error.id = 'code-signup-alert';
                    if (!document.getElementById('code-signup-alert')) {
                        error.innerHTML = data.code;
                        father.appendChild(error);
                    }
                    send_btn.innerHTML = "ناموفق !"
                } else {
                    let alerts = document.getElementsByClassName('signup-alert');
                    for (let i = 0; i < alerts.length; i++) {
                        alerts[i].classList.add('d-none');
                    }
                    send_btn.innerHTML = "موفق !"
                    // window.open('/dashboard/user/profile', '_self');
                    location.reload()
                }
            },
            error: function (data) {
                if (data.responseJSON.errors.code) {
                    let error = document.createElement('p');
                    let father = document.getElementById('code-signup-filed');
                    error.classList = 'text-danger signup-alert font-12 mt-2';
                    error.id = 'code-signup-alert';
                    if (!document.getElementById('code-signup-alert')) {
                        error.innerHTML = data.responseJSON.errors.code[0];
                        father.appendChild(error);
                    }
                } else {
                    if (document.getElementById('code-signup-alert')) {
                        document.getElementById('code-signup-alert').classList.add('d-none');
                    }
                }
                if (data.responseJSON.errors.name) {
                    let error = document.createElement('p');
                    let father = document.getElementById('name-signup-filed');
                    error.classList = 'text-danger signup-alert font-12 mt-2';
                    error.id = 'name-signup-alert';
                    if (!document.getElementById('name-signup-alert')) {
                        error.innerHTML = data.responseJSON.errors.name;
                        father.appendChild(error);
                    }
                } else {
                    if (document.getElementById('name-signup-alert')) {
                        document.getElementById('name-signup-alert').classList.add('d-none');
                    }
                }
                if (data.responseJSON.errors.password) {
                    let error = document.createElement('p');
                    let father = document.getElementById('password-signup-filed');
                    error.classList = 'text-danger signup-alert font-12 mt-2';
                    error.id = 'password-signup-alert';
                    if (!document.getElementById('password-signup-alert')) {
                        error.innerHTML = data.responseJSON.errors.password[0];
                        father.appendChild(error);
                    }
                } else {
                    if (document.getElementById('password-signup-alert')) {
                        document.getElementById('password-signup-alert').classList.add('d-none');
                    }
                }
                send_btn.innerHTML = "ناموفق !"
            }
        });
    }
    const sendCode = () => {
        let token = document.getElementsByName("_token")[0].value;
        let data = {
            code: document.getElementById('code').value,
        }
        // make spinner
        let send_btn = document.getElementById('code-send-btn');
        // make spinner
        send_btn.innerHTML = "";
        let spinner = document.createElement('span');
        // style of spinner
        spinner.className = "spinner-border align-middle";
        spinner.style.color = "#FFFFFF";
        spinner.style.marginTop = "-1px"
        send_btn.appendChild(spinner);
        $.ajax({
            url: "/verify",
            method: 'POST',
            headers: {
                'X-CSRF-Token': token
            },
            data: data,
            success: function (data) {
                let error = document.createElement('p');
                let father = document.getElementById('code-filed');
                send_btn.innerHTML = "موفق !"
                if (data.code) {
                    error.classList = 'text-danger font-12 mt-2';
                    error.id = 'code-alert';
                    if (!document.getElementById('code-alert')) {
                        error.innerHTML = data.code;
                        father.appendChild(error);
                    }
                    send_btn.innerHTML = "ناموفق !";
                } else {
                    if (document.getElementById('code-alert')) {
                        document.getElementById('code-alert').classList.add('d-none');
                    }
                    send_btn.innerHTML = "موفق !"
                    // window.open('/user/profile', '_self');
                    location.reload()
                }
            },
            error: function (data) {
                let error = document.createElement('p');
                let father = document.getElementById('code-filed');
                if (data.responseJSON.errors.code) {
                    error.classList = 'text-danger font-12 mt-2';
                    error.id = 'code-alert';
                    if (!document.getElementById('code-alert')) {
                        error.innerHTML = data.responseJSON.errors.code;
                        father.appendChild(error);
                    }
                }
                send_btn.innerHTML = "ناموفق !";
            }
        });
    }
    const reSendCode = () => {
        let token = document.getElementsByName("_token")[0].value;
        let data = {}
        // make spinner
        let send_btn = document.getElementById('signup-send-btn');
        // make spinner
        send_btn.innerHTML = "";
        let spinner = document.createElement('span');
        // style of spinner
        spinner.className = "spinner-border align-middle";
        spinner.style.color = "#FFFFFF";
        spinner.style.marginTop = "-1px"
        send_btn.appendChild(spinner);
        $.ajax({
            url: "/resendCode",
            method: 'POST',
            headers: {
                'X-CSRF-Token': token
            },
            data: data,
            success: function (data) {
                let error = document.createElement('p');
                let father = document.getElementById('code-filed');
                send_btn.innerHTML = "موفق !"
                if (data.code) {
                    error.classList = 'text-danger font-12 mt-2';
                    error.id = 'code-alert';
                    if (!document.getElementById('code-alert')) {
                        error.innerHTML = data.code;
                        father.appendChild(error);
                    }
                    send_btn.innerHTML = "ناموفق !";
                } else {
                    if (document.getElementById('code-alert')) {
                        document.getElementById('code-alert').classList.add('d-none');
                    }
                    send_btn.innerHTML = "موفق !"
                }
            },
            error: function (data) {
                let error = document.createElement('p');
                let father = document.getElementById('code-filed');
                if (data.responseJSON.errors.code) {
                    error.classList = 'text-danger font-12 mt-2';
                    error.id = 'code-alert';
                    if (!document.getElementById('code-alert')) {
                        error.innerHTML = data.responseJSON.errors.code;
                        father.appendChild(error);
                    }
                }
                send_btn.innerHTML = "ناموفق !";
            }
        });
    }

</script>

<script>
    let gallerySwiper = new Swiper(".mySwiper-project", {
        loop: true,
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
    });
    let swiper2 = new Swiper(".mySwiper2-project", {
        loop: true,
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: gallerySwiper,
        },
    });
</script>
<script src="/sweetAlert/sweetalert2.all.min.js"></script>
<script>
    @if(Session::has('success'))
    Swal.fire({
        title: 'موفق',
        text: "{{ Session::get('message', '') }}",
        icon: 'success',
        confirmButtonText: 'تایید',
    })
    @endif
    @if(Session::has('error'))
    Swal.fire({
        title: 'خطا!',
        text: "{{ Session::get('message', '') }}",
        icon: 'error',
        confirmButtonText: 'تایید',
    })
    @endif
    @if($errors?? null)
    @if(count($errors) > 0 )
    var responseError = "";
    @foreach($errors->all() as $error)
        responseError = responseError + "{{$error}}"
    @endforeach
    Swal.fire({
        title: 'خطا!',
        text: responseError,
        icon: 'error',
        confirmButtonText: 'تایید',
    })
    @endif
    @endif
    function deleteConfirme(url) {
        Swal.fire({
            icon: 'warning',
            title: 'آیا از حذف این گزینه مطمئن هستید؟',
            showCancelButton: true,
            confirmButtonText: `بله`,
            denyButtonText: `خیر`,
            cancelButtonText: `خیر`,
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = url;
            } else if (result.isDenied) {
                Swal.fire('Changes are not saved', '', 'info')
            }
        })
    }
</script>
<script>
    $('body').keypress(function (e) {
        if (e.keyCode == 13) {
            $('#searchForm').submit();
        }
    });
    $("#searchImage").click(function () {
        $("#searchForm").submit();
    });

    function commaSeparateNumber(val) {

        if (val != "") {

            val = val.toString().replace(/,/g, ''); //remove existing commas first
            val = val.toString().replace(/تومان/g, ''); //remove existing commas first
            var valRZ = val.replace(/^0+/, ''); //remove leading zeros, optional
            var valSplit = valRZ.split('.'); //then separate decimals
            while (/(\d+)(\d{3})/.test(valSplit[0].toString())) {
                valSplit[0] = valSplit[0].toString().replace(/(\d+)(\d{3})/, '$1' + ',' + '$2');
            }
            if (valSplit.length == 2) { //if there were decimals
                val = valSplit[0] + "." + valSplit[1]; //add decimals back
            } else {
                val = valSplit[0];
            }
            return val /*+ 'تومان'*/;
        }
        return "";
    }

    /*$(document).ready(function () {
        $('.prices').each(function () {
            $(this).on('input', function () {
                var pattern = /^[0-9,]*$/g;
                if ($(this).val().match(pattern)) {
                    $(this).bind('keypress', function (e) {
                        var regex = new RegExp("^[0-9,]+$");
                        var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
                        if (regex.test(str)) return true;
                        e.preventDefault();
                        return false;
                    });
                    $(this).val(commaSeparateNumber($(this).val()));
                }
            });
        });
    });*/

    $(document).ready(function () {
        $('.prices').each(function () {
            $(this).on('input', function () {
                var pattern = /^[0-9,]*$/g;
                // تبدیل اعداد فارسی به انگلیسی
                var newValue = convertPersianToEnglish($(this).val());

                if (newValue.match(pattern)) {
                    $(this).bind('keypress', function (e) {
                        var regex = new RegExp("^[0-9,]+$");
                        var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
                        if (regex.test(str)) return true;
                        e.preventDefault();
                        return false;
                    });
                    // جدا کردن سه رقم سه رقم
                    $(this).val(commaSeparateNumber(newValue));
                }
            });
        });

        // تابع برای تبدیل اعداد فارسی به انگلیسی
        function convertPersianToEnglish(input) {
            var persianNumbers = [/۰/g, /۱/g, /۲/g, /۳/g, /۴/g, /۵/g, /۶/g, /۷/g, /۸/g, /۹/g];
            var englishNumbers = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];

            for (var i = 0; i < 10; i++) {
                input = input.replace(persianNumbers[i], englishNumbers[i]);
            }
            return input;
        }

        // تابع جدا کردن سه رقم سه رقم
        function commaSeparateNumber(val) {
            return val.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }
    });

    function convertPersianNumbersToEnglish(str) {
        if (str != 0) {
            const persianNumbers = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
            const englishNumbers = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];

            return str.replace(/[\u06F0-\u06F9]/g, function (w) {
                return englishNumbers[persianNumbers.indexOf(w)];
            });
        } else {
            return 0;
        }
    }

    $('#back-page').on('click', () => {
        window.history.back();
    })


</script>

<script>
    let inputs = document.querySelectorAll('.prices');
    inputs.forEach((item) => {
        item.addEventListener('keyup', () => {
            let value = item.value;
            value = value.replace(/\,/g, '')
            let regExp = "^\\d+$";
            const newValue = item;
            if (value.match(regExp)) {
                newValue.value.replace(/\,/g, '')
                newValue.value = value.match(regExp);
                let valueRe = item.value;
                valueRe = String(valueRe);
                valueRe = valueRe.replace(',', '');
                let x = valueRe.split('.');
                let y = x[0];
                let z = x.length > 1 ? '.' + x[1] : '';
                let rgx = /(\d+)(\d{3})/;
                while (rgx.test(y))
                    y = y.replace(rgx, '$1' + ',' + '$2');
                item.value = y + z;
            } else {
                newValue.value = "";
            }
        })
    })
</script>

<script>
    $(document).ready(function () {
            $('#signup-modal').on('shown.bs.modal', function (e) {
                $(this).find('.select-search-modal').select2({
                    language: "fa",
                    placeholder: "یک گزینه را انتخاب کنید",
                    dropdownParent: $(this).find('.modal-content')
                });
            });

            $('.select-search').select2({
                language: "fa",
                placeholder: "یک گزینه را انتخاب کنید",
            });
    });
</script>


<script>
    @if(Session::has('successToast'))
    toastr.success('{{Session::get('message', '')}}', 'موفق', {"progressBar": true, "closeButton": true});
    @endif

    @if(Session::has('errorToast'))
    toastr.error('{{Session::get('message', '')}}', 'خطا', {
        "progressBar": true,
        "closeButton": true
    });

    @endif
</script>

<script>
    var isAuthUSer = 2;
    @if(\Illuminate\Support\Facades\Auth::check())

        isAuthUSer = 1;
    @endif
</script>


@yield('script')
</body>
