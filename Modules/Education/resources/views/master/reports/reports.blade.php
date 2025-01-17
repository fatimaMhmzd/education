@extends('education::mastersDashboard.layout.totalCreateCourse')

@section('style')
    <style>
        canvas{
            height: 284px !important;
        }
    </style>
@stop

@section('content')

    <div class="col-md-9 col-change">
        <div class="row ms-md-0 ms-3">
            <div class="col-md-2 d-md-inline-block d-none mt-2 py-2"
                 style="background-color: #66A8FC;border-radius: 0px 8px 8px 0px;">
                <p class="text-center vertical-td"
                   style="margin-right: -7px;margin-top: 8px;font-size:18px;font-weight: 500;color: #FDFEFF">صفحه
                    اساتید</p>
            </div>
            <div class="col-md-4 col-6 mt-2 py-2"
                 style="background-color: #FFF6E7;border-top-right-radius: 0px;border-bottom-left-radius: 8px;margin-right: -10px">
                <div class="card border-0 ms-md-3" style="background-color: #FFF6E7;">
                    <div class="row">
                        <div class="col-md-2 col-4 rounded-circle" style="margin-top: 2px">
                            <div style="background-image: url('{{\Illuminate\Support\Facades\Auth::user()->image}}');background-position: center;background-size: cover;background-repeat: no-repeat;width: 40px;height: 40px"
                                 class="card-img img-fluid rounded-circle"></div>
                        </div>
                        <div class="col-md-10 col-8" style="margin-top: 10px">
                            {{\Illuminate\Support\Facades\Auth::user()->name}}
                            <i class="fa-solid fa-pen-clip ms-1 d-md-inline d-none"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="seccond-col col-md-6 mt-2 col-6 py-2"
                 style="background-color: #FFF6E7;border-top-left-radius: 8px;border-bottom-left-radius: 8px">
                <div class="d-flex justify-content-end" style="margin-top: 10px">
                    <a href="#"><img class="img-action me-md-4 me-2" src="/indexImages/clipboard-tick.png"></a>
                    <a href="#"><img class="img-action me-md-4 me-2" src="/indexImages/calendar.png"></a>
                    <a href="#"><img class="img-action me-md-4 me-2 " src="/indexImages/messages-2.png"></a>
                    <a href="#"><img class="img-action me-md-2" src="/indexImages/arrow-right.png"></a>
                    <a href="#"><img class="img-action" src="/indexImages/arrow-left.png"></a>
                </div>
            </div>
        </div>
        <div class="page-title p-3 mt-2" style="height: 56px">
            <div class="d-flex justify-content-between">
                <button class="btn btn-sm d-md-none d-inline-block" data-bs-toggle="offcanvas"
                        data-bs-target="#page-offcanvas" style="background-color: #FFD987;color: aliceblue;">
                    <i class="fa-solid fa-navicon"></i>
                </button>
                <h6 class="text-start title-start d-md-block d-inline-block ps-md-1">گزارشات</h6>
                <div class="d-md-flex d-none">
                    <div class="row align-items-center pe-1" style="margin-top: -8.5px">
                        <div class="col-12"
                             style="background-color:#FFFBF5 ;border-radius:8px;box-shadow: 1px 1px 39px 8px #FFF6E7 inset;">
                            <div class="d-flex align-items-center p-2">
                                <p class="font-12 text-75 me-4 list-items">راهنما</p>
                                <img src="/indexImages/projectIcon/document-download.png" data-bs-toggle="modal"
                                     data-bs-target="#text-helper" class="me-3 list-items">
                                <img src="/indexImages/projectIcon/voice-square.png" id="btn-show-collapse"
                                     data-bs-target="#audio-modal" data-bs-toggle="collapse" class="me-3 list-items">
                                <img src="/indexImages/projectIcon/video-play.png" data-bs-toggle="modal"
                                     data-bs-target="#video-modal" class="list-items">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card information-card rounded-0 table-yellow" style="background-color: #FFFBF5">
            <div class="card-body mt-3 mb-3">
                <div class="row align-items-center mt-2">
                    <div class="col-md-3">
                        <input type="text" class="form-control" placeholder="کلید واژه ">
                    </div>
                    <div class="col-md-3 offset-md-6 offset-0 mt-md-0 mt-3">
                        <div class="d-grid">
                            <button class="btn btn-purple" style="height: 44px;">
                                <i class="fa-solid fa-search"></i>
                                جستجو کنید...
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="chart-card card" style="height: 384px;box-shadow: 1px 1px 39px 8px #FFF6E7 inset;">
                                    <div class="card-body">
                                        <h6 class="card-title mb-3 font-12">نمودار فروش محصولات در شش ماه اخیر
                                            <img src="/indexImages/icom-user-page/document-download-2.svg" class="float-end">
                                        </h6>
                                        <canvas id="myChart1"></canvas>
                                        <div class="d-flex justify-content-center align-items-center mt-3">
                                            <div class="d-flex me-2 rounded-circle" style="background-color: #F050AE;width:10px;height: 10px;"></div>
                                            <p class="font-10">فروش محصولات</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-md-0 mt-3">
                                <div class="chart-card card" style="height: 384px;box-shadow: 1px 1px 39px 8px #FFF6E7 inset;">
                                    <div class="card-body">
                                        <h6 class="card-title mb-3 font-12">بازدید این هفته</h6>
                                        <canvas id="myChart2"></canvas>
                                        <ul class="list-group list-group-horizontal justify-content-center list-unstyled mt-3">
                                            <li class="border-0 font-10 text-center d-flex">
                                                <div class="d-flex me-2 rounded-circle" style="background-color: #FFB7FF;width:10px;height: 10px;margin-top: 2px"></div>
                                                <p>کل بازدید روزانه</p>
                                                <div class="d-flex me-2 rounded-circle ms-4" style="background-color: #1FC96E;width:10px;height: 10px;margin-top: 2px"></div>
                                                <p>ثبت نام</p>
                                                <div class="d-flex me-2 rounded-circle ms-4" style="background-color: #FF4D38;width:10px;height: 10px;margin-top: 2px"></div>
                                                <p>خروج</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center" style="margin-top: 24px">
                    <div class="col-md-6 mt-md-0">
                        <div class="card py-3 px-4" style="height: 166px;border-radius: 8px;background-color: #FDFEFF;">
                            <div class="card-body">
                                <p class="card-text mb-3 text-75 font-14" style="margin-top: 2px;">تعداد دوره‌های برگزار شده:
                                    <span class="float-end text-46">11</span>
                                </p>
                                <p class="card-text mb-3 text-75 font-14">تعداد وبینارها:
                                    <span class="float-end text-46">15</span>
                                </p>
                                <p class="card-text mb-3 text-75 font-14">تعداد هنرجو‌ها:
                                    <span class="float-end text-46">500</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-md-0 mt-3">
                        <div class="card py-3 px-4" style="height: 166px;border-radius: 8px;background-color: #FDFEFF;">
                            <div class="card-body">
                                <p class="card-text mb-3 text-75 font-14" style="margin-top: 2px;">تعداد پرسش و پاسخ:
                                    <span class="float-end text-46">11</span>
                                </p>
                                <p class="card-text mb-3 text-75 font-14">تعداد کل فروش این ماه:
                                    <span class="float-end text-46">15</span>
                                </p>
                                <p class="card-text mb-3 text-75 font-14">تعداد هنرجو‌های این ماه:
                                    <span class="float-end text-46">12</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                {{--  helper --}}
                <div class="modal fade" id="video-modal">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content modal-player" id="page-content">
                            <video id="player" playsinline controls>
                                <source src="" type="video/mp4"/>
                                <source src="" type="video/webm"/>
                            </video>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <div class="collapse audio-collapse" id="audio-modal">
                            <div class="d-flex justify-content-between px-3 py-2"
                                 style="padding-right: 20px !important;">
                                <i class="fa-solid fa-close list-items" id="audio-close"></i>
                                <p class="font-12">آموزش نحوه تنظیم گزارشات</p>
                            </div>
                            <audio id="player-audio" controls>
                                <source src="" type="audio/mp3"/>
                            </audio>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="text-helper">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content container" style="box-shadow: none;background-color: #FDFEFF">
                            <div class="modal-header justify-content-center px-4 py-4"
                                 style="box-shadow: none;background-color: #FDFEFF">
                                <h6 class="modal-title text-46" style="font-size: 24px">آموزش نحوه تنظیم گزارشات</h6>
                            </div>
                            <div class="modal-body">
                                <p class="h6 font-46 font-18" style="margin-top: 40px"> نهادهای اجتماعی</p>
                                <p class="text-75" style="line-height:24px;margin-top: 16px">لطفا نوع نهاد و استان، شهر
                                    و منطقه‌ای که در آن فعال هست را انتخاب و ثبت کنید.لطفا نوع نهاد و استان، شهر و
                                    منطقه‌ای که در آن فعال هست را انتخاب و ثبت کنید.</p>

                                <p class="h6 font-46 font-18" style="margin-top: 32px">قوانین و مقررات</p>
                                <div class="d-flex align-items-center" style="margin-top: 16px">
                                    <img src="/indexImages/projectIcon/info-circle.png" class="me-2"
                                         style="vertical-align: middle">
                                    <p class="font-14 text-75">هدف کارماران به عنوان یک شبکه اجتماعی، کمک به گسترش و
                                        تامین مالی پروژه‌های جالب در میان افراد زیادی است. </p>
                                </div>
                                <div class="d-flex align-items-center" style="margin-top: 16px">
                                    <img src="/indexImages/projectIcon/info-circle.png" class="me-2"
                                         style="vertical-align: middle">
                                    <p class="font-14 text-75">هدف کارماران به عنوان یک شبکه اجتماعی، کمک به گسترش و
                                        تامین مالی پروژه‌های جالب در میان افراد زیادی است. </p>
                                </div>
                                <div class="d-flex align-items-center" style="margin-top: 16px">
                                    <img src="/indexImages/projectIcon/info-circle.png" class="me-2"
                                         style="vertical-align: middle">
                                    <p class="font-14 text-75">هدف کارماران به عنوان یک شبکه اجتماعی، کمک به گسترش و
                                        تامین مالی پروژه‌های جالب در میان افراد زیادی است. </p>
                                </div>
                                <div class="d-flex align-items-center" style="margin-top: 16px">
                                    <img src="/indexImages/projectIcon/info-circle.png" class="me-2"
                                         style="vertical-align: middle">
                                    <p class="font-14 text-75">هدف کارماران به عنوان یک شبکه اجتماعی، کمک به گسترش و
                                        تامین مالی پروژه‌های جالب در میان افراد زیادی است. </p>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-8">
                                        <div class="img-helper"></div>
                                    </div>
                                </div>

                                <p class="h6 font-46 font-18" style="margin-top: 32px"> نهادهای اجتماعی</p>
                                <p class="text-75" style="line-height:24px;margin-top: 16px">لطفا نوع نهاد و استان، شهر
                                    و منطقه‌ای که در آن فعال هست را انتخاب و ثبت کنید.لطفا نوع نهاد و استان، شهر و
                                    منطقه‌ای که در آن فعال هست را انتخاب و ثبت کنید.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@section('script')
    <script>
        var getImage = document.getElementsByClassName('list-image')
        getImage[6].className = 'img-fluid list-image p-3 li-active';
        getImage[13].className = 'img-fluid list-image p-3 li-active';
    </script>
    <script>
        const ctx1 = document.getElementById('myChart1');
        new Chart(ctx1, {
            type: 'line',
            data: {
                labels: ['مهر', 'آبان', 'آذر', 'دی', 'بهمن', 'اسفند'],
                datasets: [
                    {
                        label: 'فروش محصولات',
                        data: [0, 59, 80, 81, 56, 55, 40],
                        borderColor: '#F050AE',
                        backgroundColor: '#F050AE',
                    },
                ]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                maintainAspectRatio: false,
            }
        });
        const ctx2 = document.getElementById('myChart2');
        new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: ['امروز', 'جمعه', 'پنج‌شنبه', 'چهارشنبه', 'سه‌شنبه', 'دوشنبه', 'یکشنبه'],
                datasets: [
                    {
                        label: 'کل بازدید روزانه',
                        data: [6, 2.3, 4.2, 7, 5, 6.3],
                        borderWidth: 1,
                        backgroundColor: "#FFB7FF",
                        borderRadius: "20",
                    },
                    {
                        label: 'خروج',
                        data: [1, 0.5, 2, 0.5, 1, 0.5],
                        borderWidth: 1,
                        backgroundColor: "#FF4D38",
                        borderRadius: "20",
                    },
                    {
                        label: 'ثبت نام',
                        data: [2, 0.1, 1, 2, 0.1, 1],
                        borderWidth: 1,
                        backgroundColor: "#1FC96E",
                        borderRadius: "20",
                    },
                ],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                maintainAspectRatio: false,
            }
        });
    </script>
@endsection
