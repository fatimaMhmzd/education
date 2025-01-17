@extends('education::mastersDashboard.layout.totalWithMenu')

@section('style')
    <style>
        input[type=radio]:checked{
            border: 0.5px solid #F050AE !important;
            background-color: #F050AE !important;
        }
    </style>
@stop

@section('content')

    <div class="col-md-9 col-change">
        <div class="row ms-md-0 ms-3">
            <div class="col-md-2 d-md-inline-block d-none mt-2 py-2" style="background-color: #66A8FC;border-radius: 0px 8px 8px 0px;">
                <p class="text-center vertical-td" style="margin-right: -7px;margin-top: 8px;font-size:18px;font-weight: 500;color: #FDFEFF">صفحه اساتید</p>
            </div>
            <div class="col-md-4 col-6 mt-2 py-2" style="background-color: #FFF6E7;border-top-right-radius: 0px;border-bottom-left-radius: 8px;margin-right: -10px">
                <div class="card border-0 ms-md-3" style="background-color: #FFF6E7;">
                    <div class="row">
                        <div class="col-md-2 col-4 rounded-circle" style="margin-top: 2px">
                            <div style="background-image: url('/indexImages/Ellipse 175.png');background-position: center;background-size: cover;background-repeat: no-repeat;width: 40px;height: 40px" class="card-img img-fluid rounded-circle"></div>
                        </div>
                        <div class="col-md-10 col-8" style="margin-top: 10px">
                            مرضیه حیدری
                            <i class="fa-solid fa-pen-clip ms-1 d-md-inline d-none"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="seccond-col col-md-6 mt-2 col-6 py-2" style="background-color: #FFF6E7;border-top-left-radius: 8px;border-bottom-left-radius: 8px">
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
                <h6 class="text-start title-start d-md-block d-inline-block ps-md-1">ایجاد دوره جدید</h6>
                <div class="d-md-flex d-none">
                    <span class="ms-md-0 ms-5 pe-md-1" style="margin-left: 40px">گام دوم: توضیحات دوره</span>
                    <div class="row align-items-center pe-1" style="margin-top: -8.5px">
                        <div class="col-12" style="background-color:#FFFBF5 ;border-radius:8px;box-shadow: 1px 1px 39px 8px #FFF6E7 inset;">
                            <div class="d-flex align-items-center p-2">
                                <p class="font-12 text-75 me-4 list-items">راهنما</p>
                                <img src="/indexImages/projectIcon/document-download.png"data-bs-toggle="modal" data-bs-target="#text-helper" class="me-3 list-items">
                                <img src="/indexImages/projectIcon/voice-square.png" id="btn-show-collapse" data-bs-target="#audio-modal" data-bs-toggle="collapse" class="me-3 list-items">
                                <img src="/indexImages/projectIcon/video-play.png" data-bs-toggle="modal" data-bs-target="#video-modal" class="list-items">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card information-card rounded-0 table-yellow" style="background-color: #FFFBF5">
            <div class="card-body mt-3"  id="info-card">
                <p class="font-14 text-75">در این قسمت محتوای دوره رو وارد کنید و مرحله به مرحله پیش روید ابتدا عنوان فصل اول را وارد کنید.</p>
                <hr style="margin-top: 32px;margin-bottom: 32px">
                <div class="forms">
                    <div id="course">
                        <div>
                            <div class="row align-items-center" id="first-des">
                                <div class="col-md-10">
                                    <label class="form-label"> عنوان فصل اول</label>
                                    <input type="text" class="form-control" id="des" onkeyup="activeMake()" placeholder="مبانی دیزاین">
                                </div>
                                <div class="col-md-2" style="margin-top: 30px">
                                    <div class="d-grid">
                                        <button class="btn" id="make" style="height:44px ;color:#FDFEFF ;" onclick="makeCourse()">ایجاد فصل</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3 d-none" style="padding: 0px 12px" id="first-course">
                                <div class="col-12 des-col">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex">
                                            <div class="d-flex justify-content-center align-items-center border-end pe-3" style="border-color: #A3A3A3 !important;">
                                                <p class="font-14 text-75 text-center vertical-td">فصل اول</p>
                                            </div>
                                            <div class="ms-3">
                                                <p class="text-46" id="course-name">مبانی دیزاین</p>
                                                <input type="text" id="edite-course" onkeyup="changeVal(event)" class="form-control vertical-td d-none">
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <img src="/indexImages/educationDetail/edit-2.png" class="vertical-td list-items" onclick="editeName()">
                                            <img src="/indexImages/educationDetail/eye.png" class="ms-2 vertical-td list-items">
                                        </div>
                                    </div>
                                </div>
                                <div style="margin-top: 32px" class="p-0">
                                    <div class="row align-items-center d-none" id="first-lesson">
                                        <div class="col-12" id="m-f-less">
                                            <div class="row align-items-center" id="f-lesson">
                                                <div class="col-md-10">
                                                    <label class="form-label"> عنوان درس اول</label>
                                                    <input type="text" class="form-control" id="des-m-less" onkeyup="activeLess()">
                                                </div>
                                                <div class="col-md-2" style="margin-top: 30px">
                                                    <div class="d-grid">
                                                        <button class="btn" id="m-lesson" style="height:44px ;color:#FDFEFF ;" onclick="makeLesson()">
                                                            <i class="fa-solid fa-plus font-14 me-2 vertical-td" style="font-weight: 400 !important;"></i>
                                                            ایجاد درس
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="lesson-place">
                                        <div class="row align-items-center d-none" style="padding: 0px 12px" id="first-c-lesson">
                                            <div class="col-md-9 less-col">
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex">
                                                        <div class="d-flex justify-content-center align-items-center border-end pe-3" style="border-color: #A3A3A3 !important;">
                                                            <p class="font-14 text-75 text-center vertical-td">درس اول</p>
                                                        </div>
                                                        <div class="ms-3">
                                                            <p class="text-46" id="less-name">آشنایی با فتوشاپ</p>
                                                            <input type="text" id="edite-less" onkeyup="changeLessVal(event)" class="form-control vertical-td d-none">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <img src="/indexImages/educationDetail/edit-2.png" class="vertical-td list-items" onclick="editeLessName()">
                                                        <img src="/indexImages/educationDetail/eye.png" class="ms-2 vertical-td list-items">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 list-items border-start-0 add-less-btn" id="p-d">
                                                <div class="d-flex justify-content-center align-items-center" data-bs-toggle="modal" data-bs-target="#lesson-modal">
                                                    <i class="fa-solid fa-plus me-2 font-14 vertical-td"></i>
                                                    بارگذاری محتوای جدید
                                                </div>
                                            </div>
                                            <div class="modal fade" id="lesson-modal">
                                                <div class="modal-dialog modal-xl modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header justify-content-center" style="height: 56px">
                                                            <h6 style="font-size: 18px" class="text-46">ایجاد محتوای جلسه اول</h6>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <label class="form-label">عنوان محتوا</label>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                                <div class="col-12" style="margin-top:24px">
                                                                    <label class="form-label">توضیح مختصر</label>
                                                                    <textarea class="form-control" style="height: 112px"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-header justify-content-center" style="border-top: 0.5px solid #C6C6C6 !important;margin-top: 40px;height: 56px">
                                                            <h6 style="font-size: 18px" class="text-46">بارگذاری محتوای جلسه اول</h6>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row justify-content-center" style="margin-top: 13px">
                                                                <div class="col-md-7">
                                                                    <div class="row justify-content-center">
                                                                        <div class="col-3">
                                                                            <div class="d-flex form-check font-14 justify-content-center">
                                                                                <input type="radio" name="content" class="form-check-input" checked>
                                                                                <label class="form-check-label ms-2">ویدِئو</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-3">
                                                                            <div class="d-flex form-check font-14 justify-content-center">
                                                                                <input type="radio" name="content" class="form-check-input">
                                                                                <label class="form-check-label ms-2">صوت</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-3">
                                                                            <div class="d-flex form-check font-14 justify-content-center">
                                                                                <input type="radio" name="content" class="form-check-input">
                                                                                <label class="form-check-label ms-2">Pdf</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-3">
                                                                            <div class="d-flex form-check font-14 justify-content-center">
                                                                                <input type="radio" name="content" class="form-check-input">
                                                                                <label class="form-check-label ms-2">متن</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row" style="margin-top: 32px">
                                                                <div class="col-12">
                                                                    <ul class="nav d-md-flex d-none nav-pills nav-fill font-14 text-75">
                                                                        <li class="nav-item select-content list-items" onclick="selectContent(0)">محتوای جلسه اول</li>
                                                                        <li class="nav-item select-content list-items" onclick="selectContent(1)">آپلود فایل‌ها</li>
                                                                        <li class="nav-item select-content list-items" onclick="selectContent(2)">تمرین‌ها و پروژها</li>
                                                                        <li class="nav-item select-content list-items" onclick="selectContent(3)">آزمون درس</li>
                                                                        <li class="nav-item select-content list-items" onclick="selectContent(4)">منابع درس</li>
                                                                    </ul>
                                                                    <ul class="nav d-md-none d-flex nav-pills nav-fill font-14 text-75">
                                                                        <li class="nav-item select-content-sm" onclick="selectContent(0)">محتوا</li>
                                                                        <li class="nav-item select-content-sm" onclick="selectContent(1)">فایل‌ها</li>
                                                                        <li class="nav-item select-content-sm" onclick="selectContent(2)">پروژها</li>
                                                                        <li class="nav-item select-content-sm" onclick="selectContent(3)">آزمون</li>
                                                                        <li class="nav-item select-content-sm" onclick="selectContent(4)">منابع</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex p-0" id="btn-add">
                                        <button class="btn px-3" style="color: #FDFEFF;background-color: #F050AE;height: 44px" onclick="newLesson()">ایجاد درس برای  این  فصل</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr style="margin-top: 32px;margin-bottom: 32px">
                    <p class="list-items" style="font-weight: 600;color: #F050AE" onclick="addCourse()">
                        <i class="fa-solid fa-plus font-14 me-2 vertical-td" style="font-weight: 400 !important;"></i>
                        ایجاد فصل جدید
                    </p>
                </div>

                {{--  helper --}}
                <div class="modal fade" id="video-modal">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content modal-player" id="page-content">
                            <video id="player" playsinline controls>
                                <source src="" type="video/mp4" />
                                <source src="" type="video/webm" />
                            </video>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <div class="collapse audio-collapse" id="audio-modal">
                            <div class="d-flex justify-content-between px-3 py-2" style="padding-right: 20px !important;">
                                <i class="fa-solid fa-close list-items" id="audio-close"></i>
                                <p class="font-12">آموزش نحوه تنظیم ایجاد دوره جدید</p>
                            </div>
                            <audio id="player-audio" controls>
                                <source src="" type="audio/mp3" />
                            </audio>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="text-helper">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content container" style="box-shadow: none;background-color: #FDFEFF">
                            <div class="modal-header justify-content-center px-4 py-4" style="box-shadow: none;background-color: #FDFEFF">
                                <h6 class="modal-title text-46" style="font-size: 24px">آموزش نحوه تنظیم ایجاد دوره جدید</h6>
                            </div>
                            <div class="modal-body">
                                <p class="h6 font-46 font-18" style="margin-top: 40px"> نهادهای اجتماعی</p>
                                <p class="text-75" style="line-height:24px;margin-top: 16px">لطفا نوع نهاد و استان، شهر و منطقه‌ای که در آن فعال هست را انتخاب و ثبت کنید.لطفا نوع نهاد و استان، شهر و منطقه‌ای که در آن فعال هست را انتخاب و ثبت کنید.</p>

                                <p class="h6 font-46 font-18" style="margin-top: 32px">قوانین و مقررات</p>
                                <div class="d-flex align-items-center" style="margin-top: 16px">
                                    <img src="/indexImages/projectIcon/info-circle.png" class="me-2" style="vertical-align: middle">
                                    <p class="font-14 text-75">هدف کارماران به عنوان یک شبکه اجتماعی، کمک به گسترش و تامین مالی پروژه‌های جالب در میان افراد زیادی است. </p>
                                </div>
                                <div class="d-flex align-items-center" style="margin-top: 16px">
                                    <img src="/indexImages/projectIcon/info-circle.png" class="me-2" style="vertical-align: middle">
                                    <p class="font-14 text-75">هدف کارماران به عنوان یک شبکه اجتماعی، کمک به گسترش و تامین مالی پروژه‌های جالب در میان افراد زیادی است. </p>
                                </div>
                                <div class="d-flex align-items-center" style="margin-top: 16px">
                                    <img src="/indexImages/projectIcon/info-circle.png" class="me-2" style="vertical-align: middle">
                                    <p class="font-14 text-75">هدف کارماران به عنوان یک شبکه اجتماعی، کمک به گسترش و تامین مالی پروژه‌های جالب در میان افراد زیادی است. </p>
                                </div>
                                <div class="d-flex align-items-center" style="margin-top: 16px">
                                    <img src="/indexImages/projectIcon/info-circle.png" class="me-2" style="vertical-align: middle">
                                    <p class="font-14 text-75">هدف کارماران به عنوان یک شبکه اجتماعی، کمک به گسترش و تامین مالی پروژه‌های جالب در میان افراد زیادی است. </p>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-8">
                                        <div class="img-helper"></div>
                                    </div>
                                </div>
                                <p class="h6 font-46 font-18" style="margin-top: 32px"> نهادهای اجتماعی</p>
                                <p class="text-75" style="line-height:24px;margin-top: 16px">لطفا نوع نهاد و استان، شهر و منطقه‌ای که در آن فعال هست را انتخاب و ثبت کنید.لطفا نوع نهاد و استان، شهر و منطقه‌ای که در آن فعال هست را انتخاب و ثبت کنید.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@section('script')
    <script src="/newthem/js/thirdPlan.js"></script>
    <script src="/imagUpload/image-uploader.js"></script>
    <script>
        $('.firstImage').imageUploader({
            label: 'فایل ها را بکشید و اینجا رها کنید یا کلیک کنید',
            imagesInputName: 'firstImage',
        });
        $('.seccondImage').imageUploader({
            label: 'فایل ها را بکشید و اینجا رها کنید یا کلیک کنید',
            imagesInputName: 'mainImage',
        });
    </script>
    <script>
        var getSelect = document.getElementsByClassName('select-content');
        var getSelectSm = document.getElementsByClassName('select-content-sm');
        getSelect[0].style.color = '#F050AE';
        getSelectSm[0].style.color = '#F050AE';
        function selectContent(index){

            for (var i = 0 ; i < getSelect.length ; i++){
                if(i == index){
                    getSelect[i].style.color = '#F050AE';
                }
                else {
                    getSelect[i].style.color = '#757575';
                }
            }

            for (var j = 0 ; j < getSelectSm.length; j++ ){
                if(j == index){
                    getSelectSm[j].style.color = '#F050AE';
                }
                else {
                    getSelectSm[j].style.color = '#757575';
                }
            }
        }
    </script>
    <script src="//cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
    <script src="/newthem/js/Tag.js"></script>
@endsection
