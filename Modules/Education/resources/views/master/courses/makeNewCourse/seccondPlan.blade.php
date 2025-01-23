{{--@extends('education::mastersDashboard.layout.totalWithMenu')--}}
@extends('education::master.layout.totalWithMenu')

@section('style')
    <style>
        .label-info {
            border-radius: 4px !important;
            padding: 4px !important;
            border: 0px !important;
            background-color: #F050AE !important;
            color: #FDFEFF !important;
        }
    </style>
@stop

@section('content')

    <div class="col-md-9 col-change">
        <div class="row ms-md-0 ms-3">
            <div class="col-md-2 d-md-inline-block d-none mt-2 py-2"
                 style="width: 153px;background-color: #66A8FC;border-radius: 0px 8px 8px 0px;">
                <p class="text-center vertical-td"
                   style="margin-right: -7px;margin-top: 8px;font-size:18px;font-weight: 500;color: #FDFEFF">صفحه
                    اساتید</p>
            </div>
            <div class="col-md-4 col-6 mt-2 py-2"
                 style="background-color: #FFF6E7;border-top-right-radius: 0px;border-bottom-left-radius: 8px;margin-right: -10px">
                <div class="card border-0 ms-md-3" style="background-color: #FFF6E7;">
                    <div class="row">
                        <div class="col-md-2 col-4 rounded-circle" style="margin-top: 2px">
                            <div
                                style="background-image: url('/indexImages/Ellipse 175.png');background-position: center;background-size: cover;background-repeat: no-repeat;width: 40px;height: 40px"
                                class="card-img img-fluid rounded-circle"></div>
                        </div>
                        <div class="col-md-10 col-8" style="margin-top: 10px">
                            مرضیه حیدری
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
                <h6 class="text-start title-start d-md-block d-inline-block ps-md-1">ایجاد دوره جدید</h6>
                <div class="d-md-flex d-none">
                    <span class="ms-md-0 ms-5 pe-md-1" style="margin-left: 40px">گام دوم: توضیحات دوره</span>
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
            <div class="card-body mt-3" id="info-card">
                <p class="font-14 text-75">در این قسمت توضیحات دوره رو وارد کنید.
                    <a class="ms-3" href="#" style="color: #5E457E !important;"><span>راهنما</span></a>
                </p>
                <hr style="margin-top: 32px;margin-bottom: 32px">
                <form id="fomm" method="post" action="{{route("education_master_course_update_secondStepStore")}}"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="forms">
                        <div class="row">
                            <div class="col-12">
                                <label class="form-label">9) تصویر شاخص
                                    @if($data->image)
                                        <img src="{{$data->image}}" style="max-width: 100px"/>
                                    @endif
                                </label>
                                <div class="card-item card border border-1" style="padding-top: 6px;padding-right: 6px">
                                    <div class="card-body">
                                        <div class="row">
                                            <div
                                                class="col-md-3 col-6 card-image mt-md-0 mt-3 text-md-start text-center rounded-3"
                                                id="hea">
                                                <img src="" class="img-fluid rounded-3 p-img-class"
                                                     style="height: 150px">
                                            </div>
                                            <div class="firstImage col-md-4 offset-md-1 text-center"
                                                 style="margin-top: -40px">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 32px">
                            <div class="col-12">
                                <label class="form-label">10) لینک ویدئوی معرفی دوره</label>
                                <input type="text" name="video" class="form-control" value="{{$data->video}}">
                            </div>
                        </div>
                        <div class="row" style="margin-top: 32px">
                            <div class="col-12">
                                <label class="form-label">11) تصویر کاور ویدئو
                                    @if($data->videoCover)
                                        <img src="{{$data->videoCover}}" style="max-width: 100px"/>
                                    @endif
                                </label>
                                <div class="card-item card border border-1" style="padding-top: 6px;padding-right: 6px">
                                    <div class="card-body">
                                        <div class="row">
                                            <div
                                                class="col-md-3 col-6 card-image mt-md-0 mt-3 text-md-start text-center rounded-3"
                                                id="hea">
                                                <img src=""
                                                     class="img-fluid rounded-3 p-img-class" style="height: 150px">
                                            </div>
                                            <div class="seccondImage col-md-4 text-center offset-md-1"
                                                 style="margin-top: -40px">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 32px">
                            <div class="col-12">
                                <label class="form-label">12) توضیحات مختصر در مورد دوره</label>
                                <textarea id="description" name="description" class="form-control">{{$data->description}}</textarea>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 32px">
                            <div class="col-12">
                                <label class="form-label">13) دوره مناسب چه کسانی هست؟</label>
                                <input type="text" name="appropriate" id="tag-input" value="{{$data->appropriate}}"
                                       data-role="tagsinput"
                                       class="form-control" placeholder="بنویسید و دکمه اینتر را بزنید">
                            </div>
                        </div>
                        <div class="row" style="margin-top: 32px">
                            <div class="col-12">
                                <label class="form-label">14) ویژگی‌های کلیدی دوره چیست؟</label>
                                <input type="text" name="properties" id="tag-input" data-role="tagsinput"
                                       class="form-control" placeholder="بنویسید و دکمه اینتر را بزنید"
                                       value="{{$data->properties}}">
                            </div>
                        </div>
                  {{--      @foreach($data->qas as $qa)
                            <div class="row" style="margin-top: 32px">
                                <div class="col-12" style="margin-top: 10px">
                                    <label class="form-label">سوال</label>
                                    <input type="text" name="qaTitle[]" value="{{$qa->title}}" class="form-control">
                                </div>
                                <div class="col-12" style="margin-top: 16px">
                                    <label class="form-label">پاسخ سوال</label>
                                    <textarea class="form-control" style="height:219px"
                                              name="qaDescription[]">{{$qa->description}}</textarea>
                                </div>
                                <input name="qaId[]" value="{{$qa->id}}" style="display: none">
                            </div>
                        @endforeach--}}

                        <div class="row" id="qa" style="margin-top: 32px">
                            <label class="form-label">15) سوالات متداول این دوره را با پاسخ آن اضافه کنید.</label>
                            <div class="col-12" style="margin-top: 10px">
                                <label class="form-label">سوال</label>
                                <input type="text" name="qaTitle[]" class="form-control">
                            </div>
                            <div class="col-12" style="margin-top: 16px">
                                <label class="form-label">پاسخ سوال</label>
                                <textarea class="form-control" style="height:219px" name="qaDescription[]"></textarea>
                            </div>
                        </div>
                        <p style="color: #F050AE;margin-top: 16px" class="list-items" onclick="addQA()">
                            <i class="fa fa-solid fa-plus vertical-td me-1"></i>
                            سوال دیگر
                        </p>
                        <div class="d-flex justify-content-center" style="margin-top: 32px;margin-bottom: 15px">
                            <button type="submit" class="btn px-4"
                                    style="height: 56px;background-color: #F050AE;color: #FDFEFF">ذخیره و مرحله بعد
                            </button>
                        </div>
                    </div>

                </form>

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
                                <p class="font-12">آموزش نحوه تنظیم ایجاد دوره جدید</p>
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
                                <h6 class="modal-title text-46" style="font-size: 24px">آموزش نحوه تنظیم ایجاد دوره
                                    جدید</h6>
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
        document.getElementById('fomm').onkeypress = function (e) {
            var key = e.charCode || e.keyCode || 0;
            if (key == 13) {
                return false;
            }
        }
    </script>

    <script>
        var getImage = document.getElementsByClassName('list-image')
        getImage[2].className = 'img-fluid list-image p-3 li-active';
        getImage[9].className = 'img-fluid list-image p-3 li-active';

        var getQA = document.getElementById('qa');

        function addQA() {
            var newQa = document.createElement('div');
            newQa.className = 'mt-3'
            newQa.innerHTML = `
               <div class="col-12" style="margin-top: 10px">
                     <label class="form-label">سوال</label>
                     <input type="text" class="form-control" name="qaTitle[]">
               </div>
               <div class="col-12" style="margin-top: 16px">
                     <label class="form-label">پاسخ سوال</label>
                     <textarea class="form-control" style="height:219px" name="qaDescription[]"></textarea>
               </div>

            `;
            getQA.appendChild(newQa)
        }
    </script>
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
{{--    <script src="//cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>--}}
{{--    <script>--}}
{{--        CKEDITOR.replace('description', {--}}
{{--            language: 'fa',--}}
{{--            content: 'fa',--}}
{{--            filebrowserUploadMethod: 'form'--}}
{{--        });--}}
{{--    </script>--}}
    <script src="/newthem/js/Tag.js"></script>
@endsection
