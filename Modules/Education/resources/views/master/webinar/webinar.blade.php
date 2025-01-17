@extends('education::mastersDashboard.layout.totalCreateCourse')

@section('style')

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
                <h6 class="text-start title-start d-md-block d-inline-block ps-md-1">وبینارهای من</h6>
                <div class="d-md-flex d-none">
                    <span class="ms-md-0 ms-5 pe-md-1" style="margin-left: 40px">تعداد: 3</span>
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
            <div class="card-body mt-3 mb-4">
                <div class="row justify-content-center">
                    <div class="col-4 me-3 mb-3 mt-3" style="width: 290px;">
                        <div class="card border-1 p-3" style="width: 290px;border-color: #C6C6C6 !important;box-shadow: 2px 2px 9px 0px #794BA426;height: 492px">
                            <div class="off-div float-start text-center py-2">
                                <p class="text-light">50%</p>
                                <p class="text-light">Off</p>
                            </div>
                            <div class="card-image">
                                <div  style="border-radius: 8px;height: 241px;;background-image: url('/indexImages/Rectangle 2505.png');background-position: center;background-size: cover;background-repeat: no-repeat"></div>
                            </div>
                            <div class="card-body text-center">
                                <h6 class="card-title" style="font-size: 18px;color: #1F1F1F;">
                                    دوره یادگیری ارز دیجیتال
                                </h6>
                                <p class="card-subtitle mt-2 text-75 font-14 border-bottom pb-3" style="border-color: #C6C6C6 !important;">
                                    آموزش ببینید مهارت کسب کنید.
                                </p>
                                <p class="card-text text-decoration-line-through text-75 font-14"
                                   style="margin-top: 26px;">
                                    14.900,000 تومان
                                </p>
                                <p class="card-text" style="font-size: 18px;font-weight: 500;"> 14.900,000 تومان</p>
                                <div class="d-grid mt-4">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-purple px-4" style="background-color: #F050AE;height: 44px;border-left:0.5px solid #FDFEFF;">
                                            مشاهده دوره
                                        </button>
                                        <button type="button" class="btn btn-purple p-0" style="background-color: #F050AE;height: 44px;border-right:0.5px solid #FDFEFF;">
                                            <img src="/indexImages/edit-10.png" style="vertical-align: middle;" onclick="changeIcon(this)">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mt-3" style="width: 290px;">
                        <div class="card border-1 p-3" style="border-color: #C6C6C6 !important;box-shadow: 2px 2px 9px 0px #794BA426;height: 492px">
                            <div class="off-div float-start text-center py-2">
                                <p class="text-light">50%</p>
                                <p class="text-light">Off</p>
                            </div>
                            <div class="card-image">
                                <img src="/indexImages/Rectangle 2505.png" class="card-img" style="height: 223.64px">
                            </div>
                            <div class="card-body text-center">
                                <h6 class="card-title" style="font-size: 18px;color: #1F1F1F;">
                                    دوره یادگیری ارز دیجیتال
                                </h6>
                                <p class="card-subtitle mt-2 text-75 font-14 border-bottom pb-3" style="border-color: #C6C6C6 !important;">
                                    آموزش ببینید مهارت کسب کنید.
                                </p>
                                <p class="card-text text-decoration-line-through text-75 font-14"
                                   style="margin-top: 26px;">
                                    14.900,000 تومان
                                </p>
                                <p class="card-text" style="font-size: 18px;font-weight: 500;"> 14.900,000 تومان</p>
                                <div class="d-grid mt-4">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-purple px-4" style="background-color: #F050AE;height: 44px;border-left:0.5px solid #FDFEFF;">
                                            مشاهده دوره
                                        </button>
                                        <button type="button" class="btn btn-purple p-0" style="background-color: #F050AE;height: 44px;border-right:0.5px solid #FDFEFF;">
                                            <img src="/indexImages/edit-10.png" style="vertical-align: middle;" onclick="changeIcon(this)">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mt-3" style="width: 290px;">
                        <div class="card border-1 p-3" style="border-color: #C6C6C6 !important;box-shadow: 2px 2px 9px 0px #794BA426;height: 492px">
                            <div class="off-div float-start text-center py-2">
                                <p class="text-light">50%</p>
                                <p class="text-light">Off</p>
                            </div>
                            <div class="card-image">
                                <img src="/indexImages/Rectangle 2505.png" class="card-img" style="height: 223.64px">
                            </div>
                            <div class="card-body text-center">
                                <h6 class="card-title" style="font-size: 18px;color: #1F1F1F;">
                                    دوره یادگیری ارز دیجیتال
                                </h6>
                                <p class="card-subtitle mt-2 text-75 font-14 border-bottom pb-3" style="border-color: #C6C6C6 !important;">
                                    آموزش ببینید مهارت کسب کنید.
                                </p>
                                <p class="card-text text-decoration-line-through text-75 font-14"
                                   style="margin-top: 26px;">
                                    14.900,000 تومان
                                </p>
                                <p class="card-text" style="font-size: 18px;font-weight: 500;"> 14.900,000 تومان</p>
                                <div class="d-grid mt-4">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-purple px-4" style="background-color: #F050AE;height: 44px;border-left:0.5px solid #FDFEFF;">
                                            مشاهده دوره
                                        </button>
                                        <button type="button" class="btn btn-purple p-0" style="background-color: #F050AE;height: 44px;border-right:0.5px solid #FDFEFF;">
                                            <img src="/indexImages/edit-10.png" style="vertical-align: middle;" onclick="changeIcon(this)">
                                        </button>
                                    </div>
                                </div>
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
                                <p class="font-12">آموزش نحوه تنظیم وبینارهای من</p>
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
                                <h6 class="modal-title text-46" style="font-size: 24px">آموزش نحوه تنظیم وبینارهای من</h6>
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
        getImage[3].className = 'img-fluid list-image p-3 li-active';
        getImage[10].className = 'img-fluid list-image p-3 li-active';
    </script>
@endsection
