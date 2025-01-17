<!doctype html>
<html lang="fa">
<head dir="rtl">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>کارماران</title>
    <link rel="stylesheet" href="/newthem/css/bootstrap.rtl.css">
    <link rel="stylesheet" href="/newthem/css/bootstrap-grid.rtl.css">
    <link rel="stylesheet" href="/newthem/css/styleSelect.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />
    @yield('style')

</head>
<body>
{{--@include('client.layout.nav')--}}

<section class="container-fluid mt-2 content-div-mother">
    <div class="row">
        @include('education::master.layout.menu')
        @yield('content')

    </div>
</section>
<footer style="margin-top: 70px">
    <section>
        <div class="footer py-3">
            <div class="first-footer-text">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <p class="first-f-text">در شبکه های اجتماعی همراه ما باشید</p>
                        </div>
                        <div class="line-div col-md-5 col-11"></div>
                        <div class="col-md-3 mt-md-0 mt-4 mb-md-0 mb-4">
                            <div class="d-flex justify-content-md-end justify-content-center">
                                <img src="/indexImages/facebook.png" class="img-fluid me-3 img-action">
                                <img src="/indexImages/Group 176.png" class="img-fluid me-3 img-action">
                                <img src="/indexImages/Group 175.png" class="img-fluid me-3 img-action">
                                <img src="/indexImages/instagram.png" class="img-fluid me-3 img-action">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row mt-3">
                        <div class="col-12">
                            <ul class="nav nav-fill nav-pills seccond-f-text">
                                <li class="foter-p-item nav-item py-3 px-md-0 px-2 img-action">حق مالکیت: کارماران </li>
                                <li class="foter-p-item nav-item py-3 px-md-0 px-2 img-action">قوانین و مقرارات </li>
                                <li class="foter-p-item nav-item py-3 px-md-0 px-2 img-action">سیاست حفظ حریم خصوصی کاربران </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>



<script src="/newthem/js/jquery-3.6.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script src="/newthem/js/easy-number-separator.js"></script>

<script src="/educationn/js/sideBar.js"></script>

<script src="https://cdn.plyr.io/3.7.8/plyr.polyfilled.js"></script>

<script>
    $('.price').each(function(i, obj) {
        var numb = obj.innerHTML.match(/\d/g);
        numb = numb.join("");
        obj.innerHTML=parseInt(numb).toLocaleString('fa-IR')
    });
</script>

<script>
    const player = new Plyr('#player');
    const playerAudio = new Plyr('#player-audio');

    var getCaudio = document.getElementById('audio-close');
    $("#audio-close").click(function(){
        $(".audio-collapse").collapse('hide');
    });
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
</script>

@yield('script')



</body>
</html>
