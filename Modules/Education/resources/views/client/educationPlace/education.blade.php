@extends('newTheme.dashboard.layout.total')

@section('style')
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css"/>

    <style>

        canvas {
            height: 47px !important;
            width: 47px !important;
        }

        .re-edu a:visited {
            color: #464646 !important;
        }

        .re-edu a:link {
            color: #F050AE !important;
        }

        .upload-text {
            cursor: pointer;
            font-size: 12px;
            color: #757575;
            margin-top: 65px;
        }

        .upload-text p {
            display: block;
            font-style: normal;
            padding-bottom: 12px;
            font-size: 12px;
            color: #757575;
        }

        .upload-text span {
            display: block;
            font-style: normal;
            padding-bottom: 12px;
            font-size: 12px;
            color: #757575;
        }

        .uploaded-image::-webkit-scrollbar {
            display: none !important;
        }

        .image-uploader .uploaded .uploaded-image embed {
            width: 100%;
            height: 200px;
            margin-top: 17px;
            border-radius: 8px;
        }

        .image-uploader .uploaded .uploaded-image .delete-image {
            display: none;
        }

        /* Hide the text if there is at least one uploaded image */
        .image-uploader.has-files .upload-text {
            display: none;
        }

        @media screen and (max-width: 900px) {
            canvas {
                height: 77px !important;
                width: 77px !important;
            }

            .up-edu {
                height: 155px !important;
            }

            .upload-text {
                cursor: pointer;
                font-size: 12px;
                color: #757575;
                margin-top: 30px !important;
            }

            .image-uploader .uploaded .uploaded-image embed {
                width: 116px;
                height: 116px;
                margin-top: -3px !important;
                border-radius: 8px;
            }

            .upload-text p {
                display: none;
            }

            .upload-text span {
                display: none;

            }
        }
    </style>
@stop

@section('content')
    <section class="container-fluid">
        <div class="row">
            <div class="col-md-8 content-edu-card order-md-first order-last">
                <div class="container">
                    <div style="padding-top: 42px;padding-bottom: 42px">
                        <div class="row d-md-flex d-none border-bottom pb-3" style="border-color: #C6C6C6 !important;">
                            <div class="col-3">
                                <p class="text-center edu-lesson-list list-items" onclick="showItems(0)"
                                   style="color: #909090">محتوای دوره</p>
                            </div>
                            <div class="col-2">
                                <p class="text-center edu-lesson-list list-items" onclick="showItems(1)"
                                   style="color: #909090">فایل‌ها</p>
                            </div>
                            <div class="col-3">
                                <p class="text-center edu-lesson-list list-items" onclick="showItems(2)"
                                   style="color: #909090">تمرین‌ها و پروژه‌ها</p>
                            </div>
                            <div class="col-2">
                                <p class="text-center edu-lesson-list list-items" onclick="showItems(3)"
                                   style="color: #909090">آزمون</p>
                            </div>
                            <div class="col-2">
                                <p class="text-center edu-lesson-list list-items" onclick="showItems(4)"
                                   style="color: #909090">منابع دوره</p>
                            </div>
                        </div>
                        <div class="row justify-content-center d-md-none d-flex border-bottom pb-3"
                             style="border-color: #C6C6C6 !important;">
                            <div class="col-2">
                                <p class="text-center edu-lesson-list-sm" onclick="showItems(0)" style="color: #909090">
                                    محتوا</p>
                            </div>
                            <div class="col-2">
                                <p class="text-center edu-lesson-list-sm" onclick="showItems(1)" style="color: #909090">
                                    فایل</p>
                            </div>
                            <div class="col-2">
                                <p class="text-center edu-lesson-list-sm" onclick="showItems(2)" style="color: #909090">
                                    تمرین</p>
                            </div>
                            <div class="col-2">
                                <p class="text-center edu-lesson-list-sm" onclick="showItems(3)" style="color: #909090">
                                    آزمون</p>
                            </div>
                            <div class="col-2">
                                <p class="text-center edu-lesson-list-sm" onclick="showItems(4)" style="color: #909090">
                                    منابع</p>
                            </div>
                        </div>
                        @if(isset($currentPlayerData))
                            <div class="edu-place-content" id="video">
                                <div class="row " style="margin-top: 40px;">
                                    <div class="col-12 border-bottom pb-2 text-center px-4"
                                         style="border-color: #C6C6C6 !important;">
                                        {{--video-content--}}
                                        @if($currentPlayerData->netType == 1)
                                            <div class="video-place">
                                                <video id="edu-video"
                                                       {{--poster="/indexImages/educationDetail/Rectangle 2615.png"--}}
                                                       playsinline controls style="height: 527px !important;">
                                                    <source
                                                        src="{{'/'.$currentPlayerData->url.$currentPlayerData->title}}" {{--type="video/mp4"--}}/>
                                                    {{--<source src="" type="video/webm"/>--}}
                                                </video>
                                            </div>
                                        @endif

                                        {{--end video-content--}}

                                        {{--audio-content--}}
                                        @if($currentPlayerData->netType == 2)
                                            <div class="audio-place">
                                                <div class="d-flex justify-content-center px-3 py-4"
                                                     style="padding-right: 20px !important;">
                                                    <p style="font-size: 18px;font-weight: 500">آموزش نحوه تنظیم همه
                                                        تست‌ها</p>
                                                </div>
                                                <audio id="player-audio" controls>
                                                    <source
                                                        src="{{'/'.$currentPlayerData->url.$currentPlayerData->title}}"/>
                                                </audio>
                                            </div>
                                        @endif
                                        {{--end audio-content--}}

                                        {{--text-content--}}
                                        @if($currentPlayerData->netType == 3)
                                            <div class="card pb-4 project-edu-card">
                                                {{--<div class="card-header align-items-center project-edu-head">
                                                    <div class="row">
                                                        <div class="col-md-3 col-8 font-14" style="color: #FFCF52">
                                                            <p>فصل اول: تبلیغات</p>
                                                        </div>
                                                        <div class="col-6 d-md-flex d-none line-div-edu"></div>
                                                        <div class="col-3 d-md-inline-block d-none text-center font-14"
                                                             style="color: #FFCF52">درس اول: تبلیغات چیست
                                                        </div>
                                                    </div>
                                                </div>--}}
                                                <div class="card-body"
                                                     style="padding-right: 32px !important;padding-left: 32px !important;">
                                                    {!! $currentPlayerData->text !!}
                                                </div>
                                            </div>
                                        @endif

                                        {{--end text-content--}}

                                        <ul class="breadcrumb justify-content-center" style="margin-top: 24px">
                                            <li class="breadcrumb-item font-12 text-46 list-items">
                                                <a href="{{route('education_student_educationPlace',array('courseId'=>$courseId,'currentId'=>$currentPlayerData->id))}}">
                                                    <i class="fas fa-angle-right font-12 text-46 vertical-td me-1"></i>
                                                    آموزش بعدی
                                                </a>
                                            </li>
                                            <li class="breadcrumb-item font-12 text-75 list-items">
                                                آموزش قبلی
                                                <i class="fas fa-angle-left font-12 text-75 vertical-td ms-1"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 24px;">
                                    <div class="col-12 px-4">
                                        <h6 class="text-center"
                                            style="font-size: 18px;color: #1F1F1F;margin-bottom: 16px">
                                            جلسات {{--درس اول--}}</h6>
                                        <div class="card video-card-item">
                                            @foreach($uploadedData as $item)
                                                <div class="row justify-content-center align-items-center">
                                                    <div class="col-1 text-center d-md-inline-block d-none">
                                                        <div class="d-flex justify-content-center"
                                                             style="position: relative;width: 40.94px">
                                                            <div class="border-end"
                                                                 style="position: absolute;right:20px;border-color: #C6C6C6 !important;top: 20px;height:345px"></div>
                                                            <div
                                                                class="d-flex justify-content-center season-circle-big-select"
                                                                style="z-index: 2"><p class="text-center"
                                                                                      style="color: #F050AE">{{$loop->index+1}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1 text-center">
                                                        @if($item->netType == 1)
                                                            <img src="/indexImages/educationDetail/video-play.png"
                                                                 class="vertical-td">
                                                        @elseif($item->netType == 2)
                                                            <img src="/indexImages/educationDetail/volume-high.png"
                                                                 class="vertical-td">
                                                        @elseif($item->netType == 3)
                                                            <img src="/indexImages/educationDetail/file-pdf.png"
                                                                 class="vertical-td">
                                                        @elseif($item->netType == 4)
                                                            <img
                                                                src="/indexImages/educationDetail/knowledge-article.png"
                                                                class="vertical-td">
                                                        @endif

                                                    </div>
                                                    <div class="col-md-9 ms-md-3 mt-md-0 mt-4">
                                                        <div class="card-body p-0 px-md-0 px-3 p-edu-card-v">
                                                            <div
                                                                class="d-flex justify-content-between p-edu-card-v-text">
                                                                <div class="item-text">
                                                                    <p class="card-text font-14 text-46">{{$item->titlee}}</p>
                                                                    <p class="card-text font-12 text-75"
                                                                       style="line-height: 24px;margin-top: 10px">{{$item->description}}</p>
                                                                </div>
                                                                <div class="m-chart-text" style="margin-right: 20px">
                                                                    <p class="text-75 font-14 text-center">1:56:20</p>
                                                                    {{--<canvas id="myChartF"></canvas>
                                                                    <p id="result" class="text-center"
                                                                       style="font-size: 7px;color: #FBBC3E;font-weight: 600;margin-top: 10px">
                                                                        80% تکمیل شد </p>--}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            {{--<div class="row justify-content-center align-items-center"
                                                 style="margin-top: 24px">
                                                <div class="col-1 d-md-inline-block d-none text-center">
                                                    <div class="d-flex justify-content-center"
                                                         style="position: relative;width: 40.94px">
                                                        <div class="d-flex justify-content-center season-circle-big"
                                                             style="z-index: 2"><p class="text-center text-75">2</p></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-1 text-center">
                                                    <img src="/indexImages/educationDetail/volume-high.png"
                                                         class="vertical-td">
                                                </div>
                                                <div class="col-md-9 ms-md-3 mt-md-0 mt-4">
                                                    <div class="card-body p-0 px-md-0 px-3 p-edu-card-v">
                                                        <div class="d-flex justify-content-between p-edu-card-v-text">
                                                            <div class="item-text">
                                                                <p class="card-text font-14 text-46">آشنایی با ابزار‌های
                                                                    دیزاین</p>
                                                                <p class="card-text font-12 text-75"
                                                                   style="line-height: 24px;margin-top: 10px">در این جلسه
                                                                    میخواهیم همه ابزارهای مربوط به دیزاین رو که به شما برای
                                                                    طراح خوبی شدن کمک میکنن با همدیگه بشناسیم و طرز استفاده
                                                                    ازشون رو یاد بگیریم.</p>
                                                            </div>
                                                            <div class="m-chart-text" style="margin-right: 20px">
                                                                <p class="text-75 font-14 text-center">1:56:20</p>
                                                                <canvas id="myChartS"></canvas>
                                                                <p id="resultS" class="text-center" style="font-size: 8px;color: #FBBC3E;font-weight: 600;margin-top: 10px">80% تکمیل شد </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center align-items-center"
                                                 style="margin-top: 24px">
                                                <div class="col-1 text-center d-md-inline-block d-none">
                                                    <div class="d-flex justify-content-center"
                                                         style="position: relative;width: 40.94px">
                                                        <div class="d-flex justify-content-center season-circle-big"
                                                             style="z-index: 2"><p class="text-center text-75">3</p></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-1 text-center">
                                                    <img src="/indexImages/educationDetail/file-pdf.png"
                                                         class="vertical-td">
                                                </div>
                                                <div class="col-md-9 ms-md-3 mt-md-0 mt-4">
                                                    <div class="card-body p-0 px-md-0 px-3 p-edu-card-v">
                                                        <div class="d-flex justify-content-between p-edu-card-v-text">
                                                            <div class="item-text">
                                                                <p class="card-text font-14 text-46">آشنایی با ابزار‌های
                                                                    دیزاین</p>
                                                                <p class="card-text font-12 text-75"
                                                                   style="line-height: 24px;margin-top: 10px">در این جلسه
                                                                    میخواهیم همه ابزارهای مربوط به دیزاین رو که به شما برای
                                                                    طراح خوبی شدن کمک میکنن با همدیگه بشناسیم و طرز استفاده
                                                                    ازشون رو یاد بگیریم.</p>
                                                            </div>
                                                            <div class="m-chart-text" style="margin-right: 20px">
                                                                <p class="text-75 font-14 text-center">1:56:20</p>
                                                                <canvas id="myChartT"></canvas>
                                                                <p id="resultT" class="text-center"
                                                                   style="font-size: 7px;color: #FBBC3E;font-weight: 600;margin-top: 10px">
                                                                    80% تکمیل شد </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center align-items-center"
                                                 style="margin-top: 24px">
                                                <div class="col-1 text-center d-md-inline-block d-none">
                                                    <div class="d-flex justify-content-center"
                                                         style="position: relative;width: 40.94px">
                                                        <div class="d-flex justify-content-center season-circle-big"
                                                             style="z-index: 2"><p class="text-center text-75">4</p></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-1 text-center">
                                                    <img src="/indexImages/educationDetail/knowledge-article.png"
                                                         class="vertical-td">
                                                </div>
                                                <div class="col-md-9 ms-md-3 mt-md-0 mt-4">
                                                    <div class="card-body p-0 px-md-0 px-3 p-edu-card-v">
                                                        <div class="d-flex justify-content-between p-edu-card-v-text">
                                                            <div class="item-text">
                                                                <p class="card-text font-14 text-46">آشنایی با ابزار‌های
                                                                    دیزاین</p>
                                                                <p class="card-text font-12 text-75"
                                                                   style="line-height: 24px;margin-top: 10px">در این جلسه
                                                                    میخواهیم همه ابزارهای مربوط به دیزاین رو که به شما برای
                                                                    طراح خوبی شدن کمک میکنن با همدیگه بشناسیم و طرز استفاده
                                                                    ازشون رو یاد بگیریم.</p>
                                                            </div>
                                                            <div class="m-chart-text" style="margin-right: 20px">
                                                                <p class="text-75 font-14 text-center">1:56:20</p>
                                                                <canvas id="myChartFi"></canvas>
                                                                <p id="resultFi" class="text-center"
                                                                   style="font-size: 7px;color: #FBBC3E;font-weight: 600;margin-top: 10px">
                                                                    80% تکمیل شد </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="edu-place-content" id="files">
                            <div class="row " style="margin-top: 40px;">
                                <div class="col-12 text-center px-4">
                                    <div class="d-flex justify-content-between border-bottom pb-3"
                                         style="border-color: #C6C6C6 !important;">
                                        <p class="font-14 text-46">کتاب عادت های اتمی اثر دیوید</p>
                                        <a href="#">
                                            <div class="d-flex align-items-center">
                                                <img src="/indexImages/educationDetail/document-download.png"
                                                     class="me-2 vertical-td">
                                                <p style="color: #F050AE">دانلود فایل</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="d-flex justify-content-between border-bottom pb-3"
                                         style="margin-top: 18px;border-color: #C6C6C6 !important;">
                                        <p class="font-14 text-46">کتاب عادت های اتمی اثر دیوید</p>
                                        <a href="#">
                                            <div class="d-flex align-items-center">
                                                <img src="/indexImages/educationDetail/document-download.png"
                                                     class="me-2 vertical-td">
                                                <p style="color: #F050AE">دانلود فایل</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="d-flex justify-content-between border-bottom pb-3"
                                         style="margin-top: 18px;border-color: #C6C6C6 !important;">
                                        <p class="font-14 text-46">کتاب عادت های اتمی اثر دیوید</p>
                                        <a href="#">
                                            <div class="d-flex align-items-center">
                                                <img src="/indexImages/educationDetail/document-download.png"
                                                     class="me-2 vertical-td">
                                                <p style="color: #F050AE">دانلود فایل</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="edu-place-content" id="projects">
                            <div class="row " style="margin-top: 40px;">
                                <div class="col-12 text-center px-4">
                                    <div class="card project-edu-card">
                                        <div class="card-header align-items-center project-edu-head">
                                            <div class="row">
                                                <div class="col-md-4 col-8 font-14" style="color: #FFCF52">تمرینات فصل
                                                    اول: تبلیغات
                                                </div>
                                                <div class="col-5 d-md-flex d-none line-div-edu"></div>
                                                <div class="col-3 ms-md-0 ms-2 font-14" style="color: #FFCF52">12
                                                    تمرین
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body"
                                             style="padding-right: 32px !important;padding-left: 32px !important;">
                                            <p class="card-text text-start font-14 border-bottom pb-4 text-75"
                                               style="margin-top: 20px;border-color: #C6C6C6 !important;line-height: 30px">
                                                تمرین‌ها را ظرف مدت یک ماه با دقت انجام دهید و مهلت ارسال هر کدام جلوی
                                                آن نوشته شده پس بهونه نیارید بچه خوبی باشید تمرین کنید تاماام</p>
                                            <div>
                                                <div class="d-flex justify-content-between align-items-center"
                                                     style="margin-top: 32px">
                                                    <p class="text-46">1) کاراکتر خود را طراحی کنید.</p>
                                                    <div class="d-md-flex d-none align-items-center ">
                                                        <img src="/indexImages/educationDetail/timer-75.png"
                                                             class="me-1 vertical-td">
                                                        <p class="font-10 text-75">زمان ارسال: 24 اسفند </p>
                                                    </div>
                                                </div>
                                                <div class="card up-edu"
                                                     style="border-color: #a3a3a3 !important;height: 237.35px;background-color: #FDFEFF !important;margin-top: 16px">
                                                    <div class="row justify-content-center">
                                                        <div class="mainImage col-md-5 text-center"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div style="margin-top: 24px">
                                                    <p class="font-12 text-start text-75">نتیجه تمرین و نظر خود را داخل
                                                        این باکس بنویسید.</p>
                                                    <textarea class="form-control anw-text"
                                                              style="border-color: #a3a3a3 !important;margin-top: 8px;border-radius: 8px;height: 140px;background-color: #FDFEFF !important;"></textarea>
                                                </div>
                                                <div class="d-flex justify-content-center mt-4 mb-1">
                                                    <button class="btn px-3" disabled id="btn-sub"
                                                            style="height: 44px;background-color: #A3A3A3;color: #FDFEFF">
                                                        ذخیره و ارسال تمرین‌ها
                                                    </button>
                                                </div>
                                            </div>
                                            <hr class="mt-4">
                                            <div>
                                                <div style="margin-top: 32px">
                                                    <p class="font-14 text-start text-46">اگر در مورد تمرینات بالا پرسشی
                                                        دارید در باکس زیر پرسش خود را مطرح کنید </p>
                                                    <textarea class="form-control"
                                                              style="border-color: #a3a3a3 !important;margin-top: 16px;border-radius: 8px;height: 160px;background-color: #FDFEFF !important;"></textarea>
                                                </div>
                                                <div class="d-flex justify-content-end mt-4 mb-1">
                                                    <button class="btn px-4"
                                                            style="height: 44px;background-color: #F050AE;color: #FDFEFF">
                                                        ثبت و ارسال
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="edu-place-content" id="exam">
                            <div class="row " style="margin-top: 40px;">
                                <div class="col-12 text-center px-4">
                                    <div class="card project-edu-card">
                                        <div class="card-header align-items-center project-edu-head">
                                            <div class="row">
                                                <div class="col-md-4 col-8 font-14" style="color: #FFCF52">آزمون اول
                                                </div>
                                                <div class="col-5 d-md-flex d-none line-div-edu"></div>
                                                <div class="col-3 ms-md-0 ms-2 font-14" style="color: #FFCF52">25 سوال
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body"
                                             style="padding-right: 32px !important;padding-left: 32px !important;">
                                            <div class="collapse show" id="first-content">
                                                <p class="card-text text-start font-14 border-bottom pb-4 text-75"
                                                   style="margin-top: 20px;border-color: #C6C6C6 !important;line-height: 30px">
                                                    آزمون ماتریس های پیشرونده ریون (که عمدتا آن را ماتریس های ریون می
                                                    گویند) یا به اختصار RPM، مجموعه تست های غیر-زبانی (verbal) از
                                                    ابزارهای رایج اندازه‌گیری استدلال قیاسی، توانایی درک مفاهیم انتزاعی
                                                    و سنجش قوه ادراک است که معمولا در زمینه های آموزشی مورد استفاده قرار
                                                    می گیرد. این آزمون ۶۰ سوالی، برای سنجش استدلال انتزاعی افراد به
                                                    عنوان بخشی از هوش عمومی به کار گرفته می شود.
                                                </p>
                                                <div class="row justify-content-center px-3" style="margin-top: 40px">
                                                    <div class="col-12 border-bottom"
                                                         style=";border-color: #C6C6C6 !important;padding-bottom: 40px">
                                                        <div class="row">
                                                            <div class="col-md-4 mt-md-0 mt-3 text-center">
                                                                <p class="text-75 text-center" style="font-size: 18px">
                                                                    تاریخ آزمون:<span class="ms-2 text-46 fw-bolder">1402/01/15</span>
                                                                </p>
                                                            </div>
                                                            <div class="col-md-4 mt-md-0 mt-3 text-center">
                                                                <p class="text-75 text-center" style="font-size: 18px">
                                                                    ساعت آزمون:<span class="ms-2 text-46 fw-bolder">15:30</span>
                                                                </p>
                                                            </div>
                                                            <div class="col-md-4 mt-md-0 mt-3  text-center">
                                                                <p class="text-75 text-center" style="font-size: 18px">
                                                                    مدت زمان آزمون:<span class="ms-2 text-46 fw-bolder">120 دقیقه</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="collapse border-bottom pb-4" id="qa-content"
                                                 style="border-color:#C6C6C6 !important; ">
                                                <div
                                                    class="d-md-flex d-block justify-content-between border-bottom align-items-center"
                                                    style="border-color: #C6C6C6 !important;">
                                                    <p class="card-text text-start font-14 text-75"
                                                       style="margin-top: 20px;border-color: #C6C6C6 !important;line-height: 30px">
                                                        مدت زمان آزمون 2 ساعت میباشد لطفا با دقت به سوالات پاسخ دهید.
                                                    </p>
                                                    <div>
                                                        <table class="table">
                                                            <thead>
                                                            <tr style="font-size:8px;color: #A3A3A3">
                                                                <th class="border-0" style="width: 74px">ثانیه</th>
                                                                <th class="border-0" style="width: 74px">دقیقه</th>
                                                                <th class="border-0" style="width: 74px">ساعت</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody
                                                                style="background-color: #FDFEFF;box-shadow: 2px 2px 9px 0px #5E457E26;">
                                                            <tr class="font-46" style="font-size: 24px;">
                                                                <td id="seconds" class="vertical-td border border-1"
                                                                    style="border-color: #C6C6C6 !important;width: 74px">
                                                                    59
                                                                </td>
                                                                <td id="minutes" class="vertical-td border border-1"
                                                                    style="border-color: #C6C6C6 !important;width: 74px">
                                                                    59
                                                                </td>
                                                                <td id="hours" class="vertical-td border border-1"
                                                                    style="border-color: #C6C6C6 !important;width: 74px">
                                                                    1
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-start" style="margin-top: 32px">
                                                    <div class="col-12 text-start">
                                                        <div class="d-block">
                                                            <label class="form-label"
                                                                   style="font-size: 16px;color: #464646">1) چرا دنیا
                                                                اینقدر ...؟</label>
                                                        </div>
                                                        <div class="form-check form-check-inline font-12"
                                                             style="margin-top: 16px">
                                                            <input type="radio" name="life" class="form-check-input">
                                                            <label class="form-check-label font-12 text-46">1) همینه که
                                                                هست</label>
                                                        </div>
                                                        <div class="form-check form-check-inline font-12 ms-md-3"
                                                             style="margin-top: 16px">
                                                            <input type="radio" name="life" class="form-check-input">
                                                            <label class="form-check-label font-12 text-46">2) خداس دیگه
                                                                حال کرده اینجوری خلق کنه</label>
                                                        </div>
                                                        <div class="form-check form-check-inline font-12 ms-md-3"
                                                             style="margin-top: 16px">
                                                            <input type="radio" name="life" class="form-check-input">
                                                            <label class="form-check-label font-12 text-46">3) بابا دنیا
                                                                دو روزه بیخیال</label>
                                                        </div>
                                                        <div class="form-check form-check-inline font-12 ms-md-3"
                                                             style="margin-top: 16px">
                                                            <input type="radio" name="life" class="form-check-input">
                                                            <label class="form-check-label font-12 text-46">4)
                                                                هیچکدام</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 text-start" style="margin-top: 32px">
                                                        <label class="form-label"
                                                               style="font-size: 16px;color: #464646">2) فک میکنی بزرگ
                                                            شدی یا بچه‌ای هنوز؟ تو چند سطر توضیح بده</label>
                                                        <textarea class="form-control"
                                                                  style="margin-top: 16px;height:139px;background-color: #FDFEFF;border-color: #a3a3a3 !important;"></textarea>
                                                    </div>
                                                    <div class="col-12 text-start" style="margin-top: 32px">
                                                        <label class="form-label"
                                                               style="font-size: 16px;color: #464646">3) مشخص کنید کدام
                                                            گزینه صحیح و کدام گزینه غلط است.</label>
                                                        <div class="row" style="margin-top: 6px">
                                                            <div class="col-md-6">
                                                                <div
                                                                    class="d-md-flex d-block justify-content-between align-items-center">
                                                                    <p class="font-12 text-46">1) آدما اونی نیستن که
                                                                        نشون میدن.</p>
                                                                    <div>
                                                                        <div
                                                                            class="form-check form-check-inline font-12">
                                                                            <input type="radio" name="life"
                                                                                   class="form-check-input">
                                                                            <label
                                                                                class="form-check-label font-12 text-46">صحیح</label>
                                                                        </div>
                                                                        <div
                                                                            class="form-check form-check-inline font-12 ms-3">
                                                                            <input type="radio" name="life"
                                                                                   class="form-check-input">
                                                                            <label
                                                                                class="form-check-label font-12 text-46">غلط</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row" style="margin-top: 6px">
                                                            <div class="col-md-6">
                                                                <div
                                                                    class="d-md-flex d-block justify-content-between align-items-center">
                                                                    <p class="font-12 text-46">1) آدما اونی نیستن که
                                                                        نشون میدن.</p>
                                                                    <div>
                                                                        <div
                                                                            class="form-check form-check-inline font-12">
                                                                            <input type="radio" name="life2"
                                                                                   class="form-check-input">
                                                                            <label
                                                                                class="form-check-label font-12 text-46">صحیح</label>
                                                                        </div>
                                                                        <div
                                                                            class="form-check form-check-inline font-12 ms-3">
                                                                            <input type="radio" name="life2"
                                                                                   class="form-check-input">
                                                                            <label
                                                                                class="form-check-label font-12 text-46">غلط</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row" style="margin-top: 6px">
                                                            <div class="col-md-6">
                                                                <div
                                                                    class="d-md-flex d-block justify-content-between align-items-center">
                                                                    <p class="font-12 text-46">1) آدما اونی نیستن که
                                                                        نشون میدن.</p>
                                                                    <div>
                                                                        <div
                                                                            class="form-check form-check-inline font-12">
                                                                            <input type="radio" name="life3"
                                                                                   class="form-check-input">
                                                                            <label
                                                                                class="form-check-label font-12 text-46">صحیح</label>
                                                                        </div>
                                                                        <div
                                                                            class="form-check form-check-inline font-12 ms-3">
                                                                            <input type="radio" name="life3"
                                                                                   class="form-check-input">
                                                                            <label
                                                                                class="form-check-label font-12 text-46">غلط</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 text-start" style="margin-top: 32px">
                                                        <div class="d-block">
                                                            <label class="form-label"
                                                                   style="font-size: 16px;color: #464646">4) کدام شکل
                                                                زیر واقعیت جامعه را نشان میدهد.</label>
                                                        </div>
                                                        <div
                                                            class="form-check align-items-center form-check-inline font-12"
                                                            style="margin-top: 16px">
                                                            <div class="d-flex align-items-center ">
                                                                <input type="radio" name="life"
                                                                       class="form-check-input vertical-td me-2">
                                                                <label
                                                                    class="form-check-label font-12 text-46 align-items-center">
                                                                    <div
                                                                        style="width: 80px;height: 80px;background-color: #FF4D38;border-radius: 8px"></div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="form-check align-items-center form-check-inline font-12 ms-md-4"
                                                            style="margin-top: 16px">
                                                            <div class="d-flex align-items-center ">
                                                                <input type="radio" name="life"
                                                                       class="form-check-input vertical-td me-2">
                                                                <label
                                                                    class="form-check-label font-12 text-46 align-items-center">
                                                                    <div
                                                                        style="width: 80px;height: 80px;background-color: #1F1F1F;border-radius: 8px"></div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="form-check align-items-center form-check-inline font-12 ms-md-4"
                                                            style="margin-top: 16px">
                                                            <div class="d-flex align-items-center ">
                                                                <input type="radio" name="life"
                                                                       class="form-check-input vertical-td me-2">
                                                                <label
                                                                    class="form-check-label font-12 text-46 align-items-center">
                                                                    <div
                                                                        style="width: 80px;height: 80px;background-color: #1FC96E;border-radius: 8px"></div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="form-check align-items-center form-check-inline font-12 ms-md-4"
                                                            style="margin-top: 16px">
                                                            <div class="d-flex align-items-center ">
                                                                <input type="radio" name="life"
                                                                       class="form-check-input vertical-td me-2">
                                                                <label
                                                                    class="form-check-label font-12 text-46 align-items-center">
                                                                    <div
                                                                        style="width: 80px;height: 80px;background-color: #66A8FC;border-radius: 8px"></div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-center"
                                                 style="margin-top:40px;margin-bottom: 20px">
                                                <button id="page-collapse" data-bs-toggle="collapse" class="btn px-4"
                                                        style="height: 44px;background-color: #F050AE;color: #FDFEFF">
                                                    شروع آزمون
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="edu-place-content" id="resourse">
                            <div class="row " style="margin-top: 40px;">
                                <div class="col-12 text-center px-4">
                                    <div>
                                        <a href="#">
                                            <div
                                                class="re-edu d-flex justify-content-start align-items-center border-bottom pb-3"
                                                style="border-color: #C6C6C6 !important;">
                                                <img src="/indexImages/educationDetail/clarity_book-line.png"
                                                     class="me-3 vertical-td">
                                                <a href="#" class="font-14 text-46 dwn-a">کتاب عادت های اتمی اثر
                                                    دیوید</a>
                                            </div>
                                        </a>
                                    </div>
                                    <div style="margin-top: 18px">
                                        <a href="#">
                                            <div
                                                class="re-edu d-flex justify-content-start align-items-center border-bottom pb-3"
                                                style="border-color: #C6C6C6 !important;">
                                                <img src="/indexImages/educationDetail/clarity_book-line.png"
                                                     class="me-3 vertical-td">
                                                <a href="#" class="font-14 text-46 dwn-a">کتاب عادت های اتمی اثر
                                                    دیوید</a>
                                            </div>
                                        </a>
                                    </div>
                                    <div style="margin-top: 18px">
                                        <a href="#">
                                            <div
                                                class="re-edu d-flex justify-content-start align-items-center border-bottom pb-3"
                                                style="border-color: #C6C6C6 !important;">
                                                <img src="/indexImages/educationDetail/dashicons_admin-site-alt3.png"
                                                     class="me-3 vertical-td">
                                                <a href="#" class="font-14 text-46 dwn-a">سایت فریلنسر کارلنسر</a>
                                            </div>
                                        </a>
                                    </div>
                                    <div style="margin-top: 18px">
                                        <a href="#">
                                            <div
                                                class="re-edu d-flex justify-content-start align-items-center border-bottom pb-3"
                                                style="border-color: #C6C6C6 !important;">
                                                <img
                                                    src="/indexImages/educationDetail/fluent-mdl2_knowledge-article.png"
                                                    class="me-3 vertical-td">
                                                <a href="#" class="font-14 text-46 dwn-a">مقالات دکتر هنری کرک</a>
                                            </div>
                                        </a>
                                    </div>
                                    <div style="margin-top: 18px">
                                        <a href="#">
                                            <div
                                                class="re-edu d-flex justify-content-start align-items-center border-bottom pb-3"
                                                style="border-color: #C6C6C6 !important;">
                                                <img src="/indexImages/educationDetail/fa_file-pdf-o.png"
                                                     class="me-3 vertical-td">
                                                <a href="#" class="font-14 text-46 dwn-a">پی دی اف</a>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="edu-place-content-cards" class="row border-top item-list-edu">
                    <div class="col-12">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 px-4">
                                    <div class="row" style="margin-top: 8px">
                                        <div class="col-12">
                                            <label class="form-label">اکدام نکته این درس برات جالبه بود و کجای درس برات
                                                مبهمه؟ </label>
                                            <textarea class="form-control"
                                                      style="height: 160px;margin-top: 10px"></textarea>
                                            <div class="d-flex justify-content-end" style="margin-top: 16px">
                                                <button class="btn px-4"
                                                        style="background-color:#F050AE ;height: 44px;color:#FDFEFF">
                                                    تایید
                                                </button>
                                            </div>
                                        </div>
                                        <hr style="margin-top: 32px;margin-bottom: 32px">
                                        <div class="col-12">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p style="font-weight: 500;font-size: 18px"
                                                   class="text-46 star-big-text">نظرات هنرجویان راجب این جلسه</p>
                                                <div class="d-flex align-items-center">
                                                    <div dir="ltr">
                                                        <i class="fa-solid fa-star star-big text-tala list-items"
                                                           onclick="markEdu(this)" style="font-size: 32px"
                                                           class="vertical-td"></i>
                                                        <i class="fa-solid fa-star star-big text-tala list-items"
                                                           onclick="markEdu(this)" style="font-size: 32px"
                                                           class="vertical-td"></i>
                                                        <i class="fa-solid fa-star star-big text-tala list-items"
                                                           onclick="markEdu(this)" style="font-size: 32px"
                                                           class="vertical-td"></i>
                                                        <i class="fa-solid fa-star star-big text-bala list-items"
                                                           onclick="markEdu(this)" style="font-size: 32px"
                                                           class="vertical-td"></i>
                                                        <i class="fa-solid fa-star star-big text-bala list-items"
                                                           onclick="markEdu(this)" style="font-size: 32px"
                                                           class="vertical-td"></i>
                                                    </div>
                                                    <p class="text-46 star-big-sub"
                                                       style="margin-right: 24px;font-size: 32px;font-weight: 500">
                                                        4.5</p>
                                                </div>
                                            </div>
                                        </div>
                                        {{--<div class="col-12">
                                            <div class="row justify-content-center">
                                                <div class="col-md-11"
                                                     style="margin-top: 32px;border-color: #C6C6C6 !important;">
                                                    <hr>
                                                    <div class="card border-0 p-3"
                                                         style="font-size: 14px;background-color: transparent !important;">
                                                        <div class="row">
                                                            <div class="col-1">
                                                                <div style="background-image: url('/indexImages/icon-home-page/Ellipse 155.png');background-size: cover;
                                     background-repeat: no-repeat;background-position: center;height: 56px;width: 56px"
                                                                     class="rounded-circle"></div>
                                                            </div>
                                                            <div class="col-md-11 col-10 ms-md-0 ms-4">
                                                                <h6 class="card-title ms-md-2 ms-3">ایلان ماسک
                                                                    <span class="float-end">
                                                                    <i class="fa-solid fa-star star-big text-tala"
                                                                       style="font-size: 12px" class="vertical-td"></i>
                                                                    <i class="fa-solid fa-star star-big text-tala"
                                                                       style="font-size: 12px" class="vertical-td"></i>
                                                                    <i class="fa-solid fa-star star-big text-tala"
                                                                       style="font-size: 12px" class="vertical-td"></i>
                                                                    <i class="fa-solid fa-star star-big text-bala"
                                                                       style="font-size: 12px" class="vertical-td"></i>
                                                                    <i class="fa-solid fa-star star-big text-bala"
                                                                       style="font-size: 12px" class="vertical-td"></i>
                                                                 </span>
                                                                </h6>
                                                                <p class="card-text ms-md-2 ms-3 mt-1 text-46 font-14 qu-edu">
                                                                    چشم انداز این پروژه چیست؟
                                                                    <span class="float-end text-46"
                                                                          style="font-size:10px">1401/5/21</span>
                                                                </p>
                                                                <br>
                                                                <p class="card-text mt-2">
                                                                    <span style="color: #A3A3A3;">پاسخ</span>
                                                                    <i class="fa-solid fa-arrow-left mx-3 font-10"
                                                                       style="color: #A3A3A3;"></i>
                                                                    <span class="text-46 font-14 answer-edu">
                                                                        چشم اندازمون اینه که توییتر رو از شما بخریم :)
                                                                      <span class="float-end d-md-inline-block d-none"
                                                                            style="font-size:10px">1401/5/21</span>
                                                                   </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="card border-0 p-3"
                                                         style="font-size: 14px;background-color: transparent !important;">
                                                        <div class="row">
                                                            <div class="col-1">
                                                                <div style="background-image: url('/indexImages/icon-home-page/Ellipse 155.png');background-size: cover;
                                     background-repeat: no-repeat;background-position: center;height: 56px;width: 56px"
                                                                     class="rounded-circle"></div>
                                                            </div>
                                                            <div class="col-md-11 col-10 ms-md-0 ms-4">
                                                                <h6 class="card-title ms-md-2 ms-3">ایلان ماسک
                                                                    <span class="float-end">
                                                                    <i class="fa-solid fa-star star-big text-tala"
                                                                       style="font-size: 12px" class="vertical-td"></i>
                                                                    <i class="fa-solid fa-star star-big text-tala"
                                                                       style="font-size: 12px" class="vertical-td"></i>
                                                                    <i class="fa-solid fa-star star-big text-tala"
                                                                       style="font-size: 12px" class="vertical-td"></i>
                                                                    <i class="fa-solid fa-star star-big text-bala"
                                                                       style="font-size: 12px" class="vertical-td"></i>
                                                                    <i class="fa-solid fa-star star-big text-bala"
                                                                       style="font-size: 12px" class="vertical-td"></i>
                                                                 </span>
                                                                </h6>
                                                                <p class="card-text ms-md-2 ms-3 mt-1 text-46 font-14 qu-edu">
                                                                    چشم انداز این پروژه چیست؟
                                                                    <span class="float-end text-46"
                                                                          style="font-size:10px">1401/5/21</span>
                                                                </p>
                                                                <br>
                                                                <p class="card-text mt-2">
                                                                    <span style="color: #A3A3A3;">پاسخ</span>
                                                                    <i class="fa-solid fa-arrow-left mx-3 font-10"
                                                                       style="color: #A3A3A3;"></i>
                                                                    <span class="text-46 font-14 answer-edu">
                                                                        چشم اندازمون اینه که توییتر رو از شما بخریم :)
                                                                      <span class="float-end d-md-inline-block d-none"
                                                                            style="font-size:10px">1401/5/21</span>
                                                                   </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="card border-0 p-3"
                                                         style="font-size: 14px;background-color: transparent !important;">
                                                        <div class="row">
                                                            <div class="col-1">
                                                                <div style="background-image: url('/indexImages/icon-home-page/Ellipse 155.png');background-size: cover;
                                     background-repeat: no-repeat;background-position: center;height: 56px;width: 56px"
                                                                     class="rounded-circle"></div>
                                                            </div>
                                                            <div class="col-md-11 col-10 ms-md-0 ms-4">
                                                                <h6 class="card-title ms-md-2 ms-3">ایلان ماسک
                                                                    <span class="float-end">
                                                                    <i class="fa-solid fa-star star-big text-tala"
                                                                       style="font-size: 12px" class="vertical-td"></i>
                                                                    <i class="fa-solid fa-star star-big text-tala"
                                                                       style="font-size: 12px" class="vertical-td"></i>
                                                                    <i class="fa-solid fa-star star-big text-tala"
                                                                       style="font-size: 12px" class="vertical-td"></i>
                                                                    <i class="fa-solid fa-star star-big text-bala"
                                                                       style="font-size: 12px" class="vertical-td"></i>
                                                                    <i class="fa-solid fa-star star-big text-bala"
                                                                       style="font-size: 12px" class="vertical-td"></i>
                                                                 </span>
                                                                </h6>
                                                                <p class="card-text ms-md-2 ms-3 mt-1 text-46 font-14 qu-edu">
                                                                    چشم انداز این پروژه چیست؟
                                                                    <span class="float-end text-46"
                                                                          style="font-size:10px">1401/5/21</span>
                                                                </p>
                                                                <br>
                                                                <p class="card-text mt-2">
                                                                    <span style="color: #A3A3A3;">پاسخ</span>
                                                                    <i class="fa-solid fa-arrow-left mx-3 font-10"
                                                                       style="color: #A3A3A3;"></i>
                                                                    <span class="text-46 font-14 answer-edu">
                                                                        چشم اندازمون اینه که توییتر رو از شما بخریم :)
                                                                      <span class="float-end d-md-inline-block d-none"
                                                                            style="font-size:10px">1401/5/21</span>
                                                                   </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="d-flex justify-content-between" style="">
                                                        <span class="font-12 text-75 ms-2" style="margin-top: 10px">صفحه ا از 5</span>
                                                        <ul class="pagination text-purple">
                                                            <li class="page-item">
                                                                <a href="#" class="page-link border-0">
                                                                    &laquo;
                                                                </a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a href="#" class="page-link border-0">
                                                                    3
                                                                </a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a href="#" class="page-link border-0">
                                                                    2
                                                                </a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a href="#" class="page-link border-0">
                                                                    1
                                                                </a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a href="#" class="page-link border-0">
                                                                    &raquo;
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 lesson-edu-card order-md-last order-first">
                <div class="container">
                    <div class="mb-5" style="padding-top: 42px">
                        <div class="row border-bottom pb-3" style="border-color: #C6C6C6 !important;">
                            <div class="col-12">
                                <p class="text-center edu-lesson-list" style="color: #909090">سرفصل ها و محتوای دوره</p>
                            </div>
                        </div>

                        @foreach($product->season as $season)
                            <div class="row" style="margin-top: 24px">
                                <div class="col-12 px-4">
                                    <div class="row" style="position: relative">
                                        <div class="col-1">
                                            <div class="border-end"
                                                 style="position: absolute;right: 20px;border-color: #a3a3a3 !important;top: 19px;height: 385px"></div>
                                            <div class="d-flex justify-content-center season-circle"
                                                 style="padding-right: 0px;margin-top: 3px;height: 16px;z-index: 2"><p
                                                    class="font-10 text-center"
                                                    style="color: #FFFBF5">{{$loop->index+1}}</p></div>
                                        </div>
                                        <div class="col-11">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-14 text-46"
                                                       style="font-weight: 500;">{{$season->title}}</p>
                                                </div>
                                                {{--<div class="d-flex align-items-center">
                                                    <img src="/indexImages/educationDetail/timer.png" class="me-1 vertical-tda">
                                                    <p style="color: #FF4D38;font-size: 8px">یک ماه</p>
                                                </div>--}}
                                            </div>
                                            <div class="card edu-lesson-reason" style="margin-top: 10px">
                                                <ul class="text-46 font-12">
                                                    @foreach($season->lessons as $lesson)
                                                        <li>
                                                            <div class="d-flex align-items-center">
                                                                <img src="/indexImages/educationDetail/lock.svg"
                                                                     class="me-2 vertical-td">
                                                                <p style="color: #909090">
                                                                    {{$lesson->title}}</p>
                                                            </div>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop

@section('script')
    <script src="https://cdn.plyr.io/3.7.8/plyr.polyfilled.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChartF');
        var getResult = document.getElementById('result');
        var persent = 30;
        if (persent == 100) {
            getResult.style.color = '#1FC96E'
            getResult.innerHTML = 'تکمیل شد'
            new Chart(ctx, {
                type: 'doughnut',
                data: {
                    datasets: [{
                        label: 'پیشرفت',
                        data: [persent, 0],
                        backgroundColor: [
                            '#A0E426',
                            '#FDFEFF',
                        ],
                        borderColor: [
                            '#1FC96E',
                        ],
                        hoverOffset: 4,
                    }]
                },
            });
        } else {
            getResult.style.color = '#FBBC3E'
            getResult.innerHTML = `%${persent} تکمیل شد`
            new Chart(ctx, {
                type: 'doughnut',
                data: {
                    datasets: [{
                        label: 'پیشرفت',
                        data: [persent, 100 - persent],
                        backgroundColor: [
                            '#FFCF52',
                            '#FDFEFF',
                        ],
                        borderColor: [
                            '#FBBC3E',
                        ],
                        hoverOffset: 4,
                    }]
                },
            });
        }

        const ctxS = document.getElementById('myChartS');
        var getResultS = document.getElementById('resultS');
        var persentS = 100;
        if (persentS == 100) {
            getResultS.style.color = '#1FC96E'
            getResultS.innerHTML = 'تکمیل شد'
            new Chart(ctxS, {
                type: 'doughnut',
                data: {
                    datasets: [{
                        label: 'پیشرفت',
                        data: [persent, 0],
                        backgroundColor: [
                            '#A0E426',
                            '#FDFEFF',
                        ],
                        borderColor: [
                            '#1FC96E',
                        ],
                        hoverOffset: 4,
                    }]
                },
            });
        } else {
            getResultS.style.color = '#FBBC3E'
            getResultS.innerHTML = `%${persent} تکمیل شد`
            new Chart(ctxS, {
                type: 'doughnut',
                data: {
                    datasets: [{
                        label: 'پیشرفت',
                        data: [persent, 100 - persent],
                        backgroundColor: [
                            '#FFCF52',
                            '#FDFEFF',
                        ],
                        borderColor: [
                            '#FBBC3E',
                        ],
                        hoverOffset: 4,
                    }]
                },
            });
        }

        const ctxT = document.getElementById('myChartT');
        var getResultT = document.getElementById('resultT');
        var persentT = 60;
        if (persentT == 100) {
            getResultS.style.color = '#1FC96E'
            getResultS.innerHTML = 'تکمیل شد'
            new Chart(ctxT, {
                type: 'doughnut',
                data: {
                    datasets: [{
                        label: 'پیشرفت',
                        data: [persent, 0],
                        backgroundColor: [
                            '#A0E426',
                            '#FDFEFF',
                        ],
                        borderColor: [
                            '#1FC96E',
                        ],
                        hoverOffset: 4,
                    }]
                },
            });
        } else {
            getResultT.style.color = '#FBBC3E'
            getResultT.innerHTML = `%${persentT} تکمیل شد`
            new Chart(ctxT, {
                type: 'doughnut',
                data: {
                    datasets: [{
                        label: 'پیشرفت',
                        data: [persentT, 100 - persentT],
                        backgroundColor: [
                            '#FFCF52',
                            '#FDFEFF',
                        ],
                        borderColor: [
                            '#FBBC3E',
                        ],
                        hoverOffset: 4,
                    }]
                },
            });
        }

        const ctxFi = document.getElementById('myChartFi');
        var getResultFi = document.getElementById('resultFi');
        var persentFi = 90;
        if (persentFi == 100) {
            getResultS.style.color = '#1FC96E'
            getResultS.innerHTML = 'تکمیل شد'
            new Chart(ctxFi, {
                type: 'doughnut',
                data: {
                    datasets: [{
                        label: 'پیشرفت',
                        data: [persent, 0],
                        backgroundColor: [
                            '#A0E426',
                            '#FDFEFF',
                        ],
                        borderColor: [
                            '#1FC96E',
                        ],
                        hoverOffset: 4,
                    }]
                },
            });
        } else {
            getResultFi.style.color = '#FBBC3E'
            getResultFi.innerHTML = `%${persentFi} تکمیل شد`
            new Chart(ctxFi, {
                type: 'doughnut',
                data: {
                    datasets: [{
                        label: 'پیشرفت',
                        data: [persentFi, 100 - persentFi],
                        backgroundColor: [
                            '#FFCF52',
                            '#FDFEFF',
                        ],
                        borderColor: [
                            '#FBBC3E',
                        ],
                        hoverOffset: 4,
                    }]
                },
            });
        }
    </script>
    <script src="/newthem/js/educationUpload.js"></script>
    <script>
        $('.mainImage').imageUploader({
            label: 'فایل ها را بکشید و اینجا رها کنید یا کلیک کنید',
            imagesInputName: 'mainImage',
        });
    </script>
    <script>
        const player = new Plyr('#edu-video');
        const playerAudio = new Plyr('#player-audio');
    </script>
    <script>
        var getPointers = document.getElementsByClassName('edu-lesson-list');
        var getCards = document.getElementsByClassName('edu-place-content');
        getPointers[0].classList.add('edu-lesson-list-active');
        for (var k = 0; k < getCards.length; k++) {
            if (k == 0) {
                getCards[k].className = 'edu-place-content';
            } else {
                getCards[k].classList.add('d-none');
            }
        }

        var getPointersSm = document.getElementsByClassName('edu-lesson-list-sm');
        getPointersSm[0].classList.add('edu-lesson-list-active');

        function showItems(index) {
            for (var i = 0; i < getPointers.length; i++) {
                if (i == index) {
                    getPointers[i].classList.add('edu-lesson-list-active');
                    for (var c = 0; c < getCards.length; c++) {
                        getCards[c].classList.remove('d-none');
                    }
                } else {
                    getPointers[i].className = 'text-center edu-lesson-list list-items';
                    for (var w = 0; w < getCards.length; w++) {
                        getCards[w].classList.add('d-none');
                    }
                }

                if (index == 0) {
                    document.getElementById('edu-place-content-cards').style.display = 'flex';
                } else {
                    document.getElementById('edu-place-content-cards').style.display = 'none'
                }
            }
            for (var s = 0; s < getPointersSm.length; s++) {
                if (s == index) {
                    getPointersSm[s].classList.add('edu-lesson-list-active')
                    getCards[s].classList.remove('d-none');
                } else {
                    getPointersSm[s].className = 'text-center edu-lesson-list-sm';
                    getCards[s].classList.add('d-none');
                }

                if (index == 0) {
                    document.getElementById('edu-place-content-cards').style.display = 'flex';
                } else {
                    document.getElementById('edu-place-content-cards').style.display = 'none'
                }
            }
        }

        var getFiles = $('input[type=file]');
        for (var f = 0; f < getFiles.length; f++) {
            getFiles[f].onchange = function () {
                document.getElementById('btn-sub').disabled = false;
                document.getElementById('btn-sub').style.backgroundColor = '#5E457E';
            }
        }

        var getTextArea = document.getElementsByClassName('anw-text');
        for (var b = 0; b < getTextArea.length; b++) {
            getTextArea[b].onkeyup = function () {
                document.getElementById('btn-sub').disabled = false;
                document.getElementById('btn-sub').style.backgroundColor = '#5E457E';
            }
        }

        $("#page-collapse").click(function () {
            $("#first-content").collapse('hide');
            $("#qa-content").collapse('show');
            var distance = (2 * 60 * 60 * 1000);
            var x = setInterval(function () {
                for (var i = 0; i < 7200; i++) {
                    if (distance == 0) {
                        distance = 0;
                        $("#first-content").collapse('show');
                        $("#qa-content").collapse('hide');
                    } else {
                        distance -= 0.1;
                    }
                }
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                document.getElementById("hours").innerHTML = hours
                document.getElementById("minutes").innerHTML = minutes
                document.getElementById("seconds").innerHTML = seconds
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("demo").innerHTML = "EXPIRED";
                }
            }, 1000);
            document.getElementById('page-collapse').innerHTML = 'اتمام آزمون';
        });

        function markEdu(elm) {
            if (elm.className == 'fa-solid fa-star star-big text-tala list-items') {
                elm.className = 'fa-solid fa-star star-big text-bala list-items';
            } else if (elm.className == 'fa-solid fa-star star-big text-bala list-items') {
                elm.className = 'fa-solid fa-star star-big text-tala list-items'
            }
        }
    </script>
@endsection
