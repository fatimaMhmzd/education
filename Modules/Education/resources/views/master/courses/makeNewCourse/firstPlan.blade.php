{{--@extends('education::mastersDashboard.layout.totalWithMenu')--}}
@extends('education::master.layout.totalWithMenu')
@section('style')

    <link rel="stylesheet" href="/datepicker/css/persianDatepicker-default.css"/>
    <link rel="stylesheet" href="https://unpkg.com/@majidh1/jalalidatepicker/dist/jalalidatepicker.min.css">
    <style>
        .select2-search{
            margin-top: 4px;
            margin-right: 4px;
        }
        .select2-selection{
            outline: 0px !important;
            box-shadow: none !important;
            border: 1px solid #ced4da !important;
            height: 44px !important;
        }
        .select2-dropdown{
            border-radius: 4px !important;
            border-top-left-radius: 0px !important;
            border-top-right-radius: 0px !important;
            direction: rtl !important;
            margin-top: 5px !important;
            box-shadow: none !important;
            border: 1px solid #ced4da !important;
        }
        .select2-results__option{
            background-color: transparent !important;
            color: #1a1a1a !important;
        }
        .select2-selection__choice{
            padding: 4px !important;
            border: 0px !important;
            background-color: #F050AE !important;
            color: #FDFEFF !important;
        }
        .select2-selection__choice__remove{
            color: #FDFEFF !important;
        }
        .select2-results__option{
            font-size: 14px !important;
            color: #757575 !important;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="/panel/app-assets/vendors/css/forms/select/select2.min.css">
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
                            <div style="background-image: url('{{--{{\Illuminate\Support\Facades\Auth::user()->image}}--}}');background-position: center;background-size: cover;background-repeat: no-repeat;width: 40px;height: 40px" class="card-img img-fluid rounded-circle"></div>
                        </div>
                        <div class="col-md-10 col-8" style="margin-top: 10px">
                           {{-- {{\Illuminate\Support\Facades\Auth::user()->name}}--}}
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
                    <span class="ms-md-0 ms-5 pe-md-1" style="margin-left: 40px">گام اول: اطلاعات دوره </span>
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
            <div class="card-body mt-3" id="info-card">
                <p class="font-14 text-75">در این قسمت اطلاعات دوره رو وارد کنید.
               F     <a class="ms-3" href="#" style="color: #5E457E !important;"><span>راهنما</span></a>
                </p>
                <hr style="margin-top: 32px;margin-bottom: 32px">
                <div class="forms">
                    <form method="post" action="{{route("education_master_course_update_firstStepStore")}}">
                        @csrf
                        <input name="id" value="{{$data->id}}" style="display:none;">
                        <div class="row">
                            <div class="col-12">
                                <label class="form-label">1) عنوان دوره</label>
                                <input type="text" name="title" class="form-control" value="{{$data->title}}">
                            </div>
                        </div>
                        <div class="row" style="margin-top: 32px">
                            <div class="col-md-6">
                                <label class="form-label">2) نوع دوره</label>
                                <select class="form-select font-14 text-75" name="typeId">
                                    <option selected>نوع دوره خود را انتخاب کنید</option>
                                    @foreach($types as $item)
                                        <option value="{{$item->id}}">{{$item->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12 mt-md-0 mt-3">
                                <label class="form-label">2) مدت زمان دوره(28:35)</label>
                                <input type="text" class="form-control" name="length" value="{{$data->length}}">
                            </div>
                        </div>
                        <div class="row" style="margin-top: 32px">
                            <label class="form-label" style="margin-bottom: 20px">3) تاریخ شروع و پایان دروه را وارد
                                کنید</label>
                            <div class="col-md-6">
                                <label class="form-label">تاریخ شروع</label>
                                <input data-jdp class="form-control" name="start" value="{{$data->start}}">
                            </div>
                            <div class="col-md-6 mt-md-0 mt-3">
                                <label class="form-label">تاریخ پایان</label>
                                <input data-jdp class="form-control" name="end" value="{{$data->end}}">
                            </div>
                        </div>
                        <div class="row" style="margin-top: 32px">
                            <div class="col-md-6">
                                <label class="form-label">4) قیمت دوره</label>
                                <div class="input-group">
                                    <input type="text" name="price" class="form-control text-center prices" value="{{$data->price}}">
                                    <label class="input-group-text"
                                           style="background-color:#FDFEFF !important; ">تومان</label>
                                </div>
                            </div>
                            <div class="col-md-6 mt-md-0 mt-3">
                                <div class="row">
                                    <div class="col-6">
                                        <label class="form-label">درصد تخفیف</label>
                                        <input type="number" max="100" min="0" name="offPercent" id=""
                                               class="form-control text-center" value="{{$data->offPercent}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 32px">
                            <div class="col-12">
                                <label class="form-label"> 5) گروه کاربران</label>
                                <select class="select2 form-control font-14 text-75" multiple="multiple"
                                        name="userType[]">
                                    <option value="1" {{--@if(in_array(1,$data->userIds)) selected @endif--}}>صاحبان پروژه</option>
                                    <option value="2" {{--@if(in_array(2,$data->userIds)) selected @endif--}}>کلبه کار</option>
                                    <option value="3" {{--@if(in_array(3,$data->userIds)) selected @endif--}}>نهاد اجتماعی</option>
                                </select>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 32px">
                            <div class="col-12">
                                <label class="form-label">6) دسته بندی</label>
                                <select class="select2 form-control" multiple="multiple"
                                        name="groupId[]">
                                    @foreach($groups as $item)
                                        <option value="{{$item->id}}">{{$item->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 32px">
                            <div class="col-12">
                                <label class="form-label">7) سطح دسترسی</label>
                                <select class="select2 form-control" multiple="multiple"
                                        name="permission[]">
                                    <option value="1">کاربر ثبت نام شده</option>
                                    <option value="2">کاربر با پروژه</option>
                                    <option value="3">کاربر پروژه تکمیل شده</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center" style="margin-top: 32px;margin-bottom: 15px">
                            <button type="submit" class="btn px-4"
                                    style="height: 56px;background-color: #F050AE;color: #FDFEFF">ذخیره و مرحله بعد
                            </button>
                        </div>
                    </form>
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
    <script type="text/javascript" src="https://unpkg.com/@majidh1/jalalidatepicker/dist/jalalidatepicker.min.js"></script>
    <script>
        jalaliDatepicker.startWatch();
    </script>
    <script>
        var getImage = document.getElementsByClassName('list-image')
        getImage[2].className='img-fluid list-image p-3 li-active';
        getImage[9].className='img-fluid list-image p-3 li-active';
    </script>
    <script>
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
        $(document).ready(function () {
            $('.prices').each(function () {

                $(this).on('input', function () {
                    var pattern = /^[0-9,]*$/g;

                    if($(this).val().match(pattern)){

                        $(this).bind('keypress',function(e){
                            var regex = new RegExp("^[0-9,]+$");
                            var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
                            if (regex.test(str)) return true;
                            e.preventDefault();
                            return false;
                        });

                        $(this).val(commaSeparateNumber($(this).val()));
                    }

                });

                //$(this).html(commaSeparateNumber($(this).html()));
            });
        });
    </script>
    <script src="/panel/app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="/panel/app-assets/js/scripts/forms/select/form-select2.min.js"></script>
@endsection
