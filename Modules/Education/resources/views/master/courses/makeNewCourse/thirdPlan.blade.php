@extends('education::mastersDashboard.layout.totalWithMenu')

@section('style')
    <style>
        input[type=radio]:checked {
            border: 0.5px solid #F050AE !important;
            background-color: #F050AE !important;
        }

        th {
            font-weight: 400 !important;
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
            margin-top: 30px;
        }

        .upload-text p {
            display: block;
            font-style: normal;
            padding-bottom: 12px;
            font-size: 14px;
            color: #757575;
        }

        .upload-text span {
            display: block;
            font-style: normal;
            padding-bottom: 12px;
            font-size: 14px;
            color: #757575;
        }

        .uploaded-image::-webkit-scrollbar {
            display: none !important;
        }

        .image-uploader .uploaded .uploaded-image embed {
            width: 100%;
            height: 200px;
            margin-top: 18px;
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
                margin-top: 25px !important;
            }

            .image-uploader .uploaded .uploaded-image embed {
                width: 116px;
                height: 116px;
                margin-top: 18px !important;
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

    {{--chunk styles--}}

    <style>
        .progress-bar {
            height: 10px;
            border-radius: 10px;
            background-color: greenyellow;
            width: 0px;
        }

        /* .list-unstyled {
                padding-right: 0;
            }

            .list-unstyled li {
                padding: 20px 10px;
                transition: 0.3s all ease-in-out
            }

            .list-unstyled li:hover {
                padding-top: 20px;
                padding-bottom: 20px;
                border-radius: 5px;
                transition: 0.3s all ease-in-out;
                box-shadow: 0px 2px 10px #01010142;
            } */
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
                    <span class="ms-md-0 ms-5 pe-md-1" style="margin-left: 40px">گام سوم: محتوای دوره</span>
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
                <p class="font-14 text-75">در این قسمت محتوای دوره رو وارد کنید و مرحله به مرحله پیش روید ابتدا عنوان
                    فصل اول را وارد کنید.</p>
                <hr style="margin-top: 32px;margin-bottom: 32px">
                <div class="forms">
                    <div id="course">
                        @foreach($seosens as $seosen)
                            <div class="mt-5">
                                <div style="margin-top: 32px">
                                    <div class="row mt-3" style="padding: 0px 12px">
                                        <div class="col-12 des-col">
                                            <div class="d-flex justify-content-between season-container"
                                                 data-book-id="{{$seosen->id}}">
                                                <div class="d-flex">
                                                    <div
                                                        class="d-flex justify-content-center align-items-center border-end pe-3"
                                                        style="border-color: #A3A3A3 !important;">
                                                        <p class="font-14 text-75 text-center vertical-td"> فصل <span
                                                                class="ms-1">{{$loop->index + 1}}</span></p>
                                                    </div>
                                                    <div class="ms-3">
                                                        <p class="text-46"
                                                           id="title{{$seosen->id}}">{{$seosen->title}}</p>
                                                        <input type="text" id="edite{{$seosen->id}}"
                                                               onkeyup="confirmEdit(event,'title{{$seosen->id}}','edite{{$seosen->id}}')"
                                                               class="form-control d-none">
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <img src="/indexImages/educationDetail/edit-2.png"
                                                         class="vertical-td list-items"
                                                         onclick="editeSName('title{{$seosen->id}}','edite{{$seosen->id}}')">
                                                    <img src="/indexImages/educationDetail/eye.png"
                                                         class="ms-2 vertical-td list-items">
                                                </div>
                                            </div>
                                        </div>
                                        <div style="margin-top: 32px" class="p-0">
                                            <div class="row align-items-center">
                                                <div class="col-12 lesson-area">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-10">
                                                            <label class="form-label"> عنوان درس</label>
                                                            <input type="text" class="form-control lesson-title"
                                                                   placeholder="مبانی دیزاین">
                                                        </div>
                                                        <div class="col-md-2" style="margin-top: 30px">
                                                            <div class="d-grid">
                                                                <button class="btn"
                                                                        style="background-color: #F050AE;height:44px ;color:#FDFEFF;"
                                                                        onclick="makeLesson(this)">
                                                                    <i class="fa-solid fa-plus font-14 me-2 vertical-td"
                                                                       style="font-weight: 400 !important;"></i>
                                                                    ایجاد درس
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @foreach($seosen->lessons as $lesson)
                                                        <div class="row align-items-center"
                                                             style="margin-top: 15px;margin-bottom: 15px; padding: 0px 12px;">
                                                            <div class="col-md-9 less-col">
                                                                <div class="d-flex justify-content-between">
                                                                    <div class="d-flex">
                                                                        <div
                                                                            class="d-flex justify-content-center align-items-center border-end pe-3"
                                                                            style="border-color: #A3A3A3 !important;">
                                                                            <p class="font-14 text-75 text-center vertical-td dropdown-toggle list-items"
                                                                               data-bs-toggle="collapse"
                                                                               data-bs-target="#collapse{{$lesson->id}}">
                                                                                درس
                                                                            </p>
                                                                        </div>
                                                                        <div class="ms-3">
                                                                            <p class="text-46">{{$lesson->title}}</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <img
                                                                            src="/indexImages/educationDetail/edit-2.png"
                                                                            class="vertical-td list-items"
                                                                            onclick="editeCLessName('edite-less${num}','less-name${num}','p-d${num}')">
                                                                        <img src="/indexImages/educationDetail/eye.png"
                                                                             class="ms-2 vertical-td list-items">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="col-md-3 list-items border-start-0 add-less-btn vertical-td">
                                                                <div
                                                                    class="d-flex justify-content-center align-items-center open-AddBookDialog"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#lesson-modal"
                                                                    data-book-id="{{$lesson->id}}">
                                                                    <i class="fa-solid fa-plus me-2 font-14 vertical-td"></i>
                                                                    بارگذاری محتوای جدید
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="row collapse justfiy-content-center align-items-center"
                                                            id="collapse{{$lesson->id}}" style="margin-top: -11px;">
                                                            <div class="col-12">
                                                                <div class="card lesson-content-info">
                                                                    <div class="card-body">
                                                                        <div class="d-flex justify-content-between">
                                                                            <div class="d-flex">
                                                                                <div
                                                                                    class="d-flex justify-content-center align-items-center border-end pe-3"
                                                                                    style="border-color: #A3A3A3 !important;">
                                                                                    <p class="font-12 text-75 text-center vertical-td">
                                                                                        جلسه اول
                                                                                    </p>
                                                                                </div>
                                                                                <div class="ms-3 border-end pe-3"
                                                                                     style="border-color: #A3A3A3 !important;">
                                                                                    <p class="text-46 font-14">
                                                                                        آشنایی با فتوشاپ
                                                                                    </p>
                                                                                </div>
                                                                                <div class="ms-3">
                                                                                    <p class="text-46 font-12 text-75">
                                                                                        بهتره قبل از این موضوع و توضیح
                                                                                        مختصر بذاریم و بالا به جای با
                                                                                        گذاری محتوا عنوان و توضیح
                                                                                        باشه...
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="d-flex align-items-center">
                                                                                <img
                                                                                    src="/indexImages/educationDetail/edit-2.png"
                                                                                    class="vertical-td list-items"
                                                                                    onclick="editeCLessName('edite-less${num}','less-name${num}','p-d${num}')">
                                                                                <img
                                                                                    src="/indexImages/educationDetail/eye.png"
                                                                                    class="ms-2 vertical-td list-items">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <!-- <div class="d-flex p-0" id="btn-add${index}">
                                                        <button class="btn px-3"
                                                                onclick="newSLesson('first-lesson${index}','btn-add${index}')"
                                                                style="color: #FDFEFF;background-color: #F050AE;height: 44px">
                                                            ایجاد درس برای این فصل
                                                        </button>
                                                    </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <div>
                            <div class="row align-items-center mt-5" id="first-des">
                                <div class="col-md-10">
                                    <label class="form-label"> عنوان فصل</label>
                                    <input type="text" class="form-control season-title" onkeyup="activeMake()"
                                           placeholder="مبانی دیزاین">
                                </div>
                                <div class="col-md-2" style="margin-top: 30px">
                                    <div class="d-grid">
                                        <button class="btn" id="make"
                                                style="background-color: #F050AE;height:44px ;color:#FDFEFF ;"
                                                onclick="createSeason(this)">ایجاد فصل
                                        </button>
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

                {{--<div class="modal fade" id="lesson-modal">
                        <div class="modal-dialog modal-xl modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header justify-content-center" style="height: 56px">
                                    <h6 style="font-size: 18px" class="text-46">ایجاد محتوای جلسه اول</h6>
                                </div>
                                <div class="modal-body">
                                    <input id="bookId" value="0" style="display: none" class="d-none">
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
                                <div class="modal-header justify-content-center"
                                     style="border-top: 0.5px solid #C6C6C6 !important;margin-top: 40px;height: 56px">
                                    <h6 style="font-size: 18px" class="text-46">بارگذاری محتوای جلسه اول</h6>
                                </div>
                                <div class="modal-body">
                                    <div class="row justify-content-center" style="margin-top: 13px">
                                        <div class="col-md-7">
                                            <div class="row justify-content-center">
                                                <div class="col-3">
                                                    <div class="d-flex form-check font-14 justify-content-center">
                                                        <input type="radio" name="content" class="form-check-input"
                                                               checked>
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
                                                <li class="nav-item select-content list-items"
                                                    onclick="selectContent(0)">محتوای جلسه اول
                                                </li>
                                                <li class="nav-item select-content list-items"
                                                    onclick="selectContent(1)">آپلود فایل‌ها
                                                </li>
                                                <li class="nav-item select-content list-items"
                                                    onclick="selectContent(2)">تمرین‌ها و پروژها
                                                </li>
                                                <li class="nav-item select-content list-items"
                                                    onclick="selectContent(3)">آزمون درس
                                                </li>
                                                <li class="nav-item select-content list-items"
                                                    onclick="selectContent(4)">منابع درس
                                                </li>
                                            </ul>
                                            <ul class="nav d-md-none d-flex nav-pills nav-fill font-14 text-75">
                                                <li class="nav-item select-content-sm" onclick="selectContent(0)">
                                                    محتوا
                                                </li>
                                                <li class="nav-item select-content-sm" onclick="selectContent(1)">
                                                    فایل‌ها
                                                </li>
                                                <li class="nav-item select-content-sm" onclick="selectContent(2)">
                                                    پروژها
                                                </li>
                                                <li class="nav-item select-content-sm" onclick="selectContent(3)">
                                                    آزمون
                                                </li>
                                                <li class="nav-item select-content-sm" onclick="selectContent(4)">
                                                    منابع
                                                </li>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class="content-wrapper">
                                        <section id="multiple-column-form bg-gray rouned">
                                            <div
                                                class="bg-gray shadow-lg py-0 d-flex align-items-center pr-2 rouned mb-3">
                                                <div style="transform: rotate(90deg); font-size: 30pt;"
                                                     class="text-orange bold"><i
                                                        class="mdi mdi-play"></i></div>
                                                <div style="color: #4B4B4B;"
                                                     class="bold text-purple text-shadow text-lg-2">
                                                    آپلود فایل دوره
                                                </div>
                                            </div>
                                            <div class="row m-0 bg-gray rouned match-height">
                                                <div class="col-7 py-3">
                                                    <div class="card">

                                                        <div class="card-content">
                                                            <div class="card-body">
                                                                <div id="empty2" style="min-height:200px"
                                                                     class="d-flex align-items-center justify-content-center text-center text-muted">
                                                                    لیست شما خالی است

                                                                </div>


                                                                <ul id="file-upload-list" class="list-unstyled"
                                                                    style="display: none">

                                                                </ul>
                                                                <br/>

                                                                <button disabled
                                                                        class="resumeButton btn btn-success rouned"
                                                                        onclick="resume()">
                                                                    ادامه
                                                                    اپلود
                                                                </button>
                                                                <button disabled
                                                                        class="pauseButton btn btn-danger rouned"
                                                                        onclick="pause()"> متوقف
                                                                    کردن
                                                                </button>
                                                                <br/>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-5 py-3 ">
                                                    <div class="text-center">
                                                        <div id="resumable-error" style="display: none">
                                                            ادامه پشتیبانی نمی شود
                                                        </div>
                                                        <div id="resumable-drop" style="display: none">
                                                            <p>
                                                                <button style="min-height:400px" id="resumable-browse"
                                                                        class="btn w-100 btn-white "
                                                                        data-url="{{ url('education/uploadVideo') }}">


                <div class="text-muted">
                    <i style="font-size:84pt" class="mdi mdi-cloud-upload-outline">
                    </i>
                    <p>
                        بکشید و رها کنید.

                    </p>
                </div>
                </button>

                <div class="btn w-100 mt-n5 shadow btn-orange iranSans">
                    جستجوی فایل
                </div>

                </p>
                <p></p>
            </div>

        </div>
    </div>

    </div>

    </section>
    </div>


    </div>
    </div>
    </div>
    </div>--}}

                <div class="modal fade" id="lesson-modal">
                    <div class="modal-dialog modal-xl modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header justify-content-center" style="height: 56px">
                                <h6 style="font-size: 18px" class="text-46">ایجاد محتوای این جلسه</h6>
                            </div>
                            <div class="modal-body">
                                <input id="bookId" value="0" class="d-none">
                                <div class="row">
                                    <div class="col-12">
                                        <label class="form-label">عنوان محتوا</label>
                                        <input type="text" id="uploadTitle" class="form-control"
                                               style="border-color: #a3a3a3 !important;">
                                    </div>
                                    <div class="col-12" style="margin-top:24px">
                                        <label class="form-label">توضیح مختصر</label>
                                        <textarea class="form-control" id="uploadDescription"
                                                  style="height: 112px;border-color: #a3a3a3 !important;"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-body">

                                <div class="row" style="margin-top: 32px">
                                    <div class="col-12">
                                        <ul class="nav d-md-flex d-none nav-pills nav-fill font-14 text-75">
                                            <li class="nav-item select-content list-items border border-1 py-3"
                                                style="border-color: #A3A3A3 !important;" onclick="selectContent(0)">
                                                محتوای جلسه
                                            </li>
                                            <li class="nav-item select-content list-items border border-1 py-3 border-start-0"
                                                style="border-color: #A3A3A3 !important;" onclick="selectContent(1)">
                                                آپلود فایل‌ها
                                            </li>
                                            <li class="nav-item select-content list-items border border-1 py-3 border-start-0"
                                                style="border-color: #A3A3A3 !important;" onclick="selectContent(2)">
                                                تمرین‌ها و پروژها
                                            </li>
                                            <li class="nav-item select-content list-items border border-1 py-3 border-start-0"
                                                style="border-color: #A3A3A3 !important;" onclick="selectContent(3)">
                                                آزمون درس
                                            </li>
                                            <li class="nav-item select-content list-items border border-1 py-3 border-start-0"
                                                style="border-color: #A3A3A3 !important;" onclick="selectContent(4)">
                                                منابع درس
                                            </li>
                                        </ul>
                                        <ul class="nav d-md-none d-flex nav-pills nav-fill font-14 text-75">
                                            <li class="nav-item select-content-sm" onclick="selectContent(0)">محتوا</li>
                                            <li class="nav-item select-content-sm" onclick="selectContent(1)">فایل‌ها
                                            </li>
                                            <li class="nav-item select-content-sm" onclick="selectContent(2)">پروژها
                                            </li>
                                            <li class="nav-item select-content-sm" onclick="selectContent(3)">آزمون</li>
                                            <li class="nav-item select-content-sm" onclick="selectContent(4)">منابع</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 32px">
                                    <div class="col-12 contents" id="content">
                                        <div class="row">
                                            <div class="modal-header justify-content-center"
                                                 style="border-top: 0.5px solid #C6C6C6 !important;margin-top: 40px;height: 56px">
                                                <h6 style="font-size: 18px" class="text-46">بارگذاری محتوای جلسه</h6>
                                            </div>
                                            <div class="row justify-content-center" style="margin-top: 13px">
                                                <div class="col-md-7">
                                                    <div class="row justify-content-center">
                                                        <div class="col-3">
                                                            <div
                                                                class="d-flex form-check font-14 justify-content-center">
                                                                <input type="radio" name="content"
                                                                       class="form-check-input"
                                                                       onchange="changeContent(0)" checked>
                                                                <label class="form-check-label ms-2">ویدِئو</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div
                                                                class="d-flex form-check font-14 justify-content-center">
                                                                <input type="radio" name="content"
                                                                       class="form-check-input"
                                                                       onchange="changeContent(1)">
                                                                <label class="form-check-label ms-2">صوت</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div
                                                                class="d-flex form-check font-14 justify-content-center">
                                                                <input type="radio" name="content"
                                                                       class="form-check-input"
                                                                       onchange="changeContent(2)">
                                                                <label class="form-check-label ms-2">Pdf</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div
                                                                class="d-flex form-check font-14 justify-content-center">
                                                                <input type="radio" name="content"
                                                                       class="form-check-input"
                                                                       onchange="changeContent(3)">
                                                                <label class="form-check-label ms-2">متن</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 page-content" id="video">
                                                <label class="form-label">آپلود ویدئو</label>
                                                <div class="card up-edu"
                                                     style="border-color: #a3a3a3 !important;height: 237.35px;background-color: #FDFEFF !important;">
                                                    <div class="row justify-content-center">
                                                        <div class="videoPly col-md-5 text-center"></div>
                                                    </div>
                                                </div>
                                                <div class="form" style="margin-top: 24px">
                                                    <label class="form-label">لینک ویدئو</label>
                                                    <input type="text" id="videoLink" class="form-control"
                                                           placeholder="لینک ویدئو را اینجا بگذارید"
                                                           style="border-color: #a3a3a3 !important;">
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-12 py-3">
                                                        <div class="card" style="border-color: #a3a3a3 !important">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    <div id="empty2"
                                                                         class="d-flex align-items-center justify-content-center text-center w-100 text-muted font-12">
                                                                        پیشرفت اپلود در این مکان نمایش داده میشود
                                                                    </div>
                                                                    <ul id="file-upload-list" class="list-unstyled"
                                                                        style="display: none"></ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-center"
                                                         style="margin-top:32px;margin-bottom: 15px">
                                                        <button class="btn px-4"
                                                                style="height: 44px;background-color: #F050AE;color: #FDFEFF"
                                                                onclick="uploadData(1)">ثبت و ذخیره
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 page-content d-none" id="audio">
                                                <label class="form-label">آپلود صوت</label>
                                                <div class="card up-edu"
                                                     style="border-color: #a3a3a3 !important;height: 237.35px;background-color: #FDFEFF !important;">
                                                    <div class="row justify-content-center">
                                                        <div class="audioPly col-md-5 text-center"></div>
                                                    </div>
                                                </div>
                                                <div class="form" style="margin-top: 24px">
                                                    <label class="form-label">لینک صوت</label>
                                                    <input type="text" id="audioLink" class="form-control"
                                                           placeholder="لینک صوت را اینجا بگذارید"
                                                           style="border-color: #a3a3a3 !important;">
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-12 py-3">
                                                        <div class="card" style="border-color: #a3a3a3 !important">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    <div id="empty2"
                                                                         class="d-flex align-items-center justify-content-center text-center w-100 text-muted font-12">
                                                                        پیشرفت اپلود در این مکان نمایش داده میشود
                                                                    </div>
                                                                    <ul id="file-upload-list-a" class="list-unstyled"
                                                                        style="display: none"></ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-center"
                                                         style="margin-top:32px;margin-bottom: 15px">
                                                        <button class="btn px-4"
                                                                style="height: 44px;background-color: #F050AE;color: #FDFEFF"
                                                                onclick="uploadData(2)">ثبت و ذخیره
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 page-content d-none" id="pdf">
                                                <label class="form-label">آپلود Pdf</label>
                                                <div class="card up-edu"
                                                     style="border-color: #a3a3a3 !important;height: 237.35px;background-color: #FDFEFF !important;">
                                                    <div class="row justify-content-center">
                                                        <div class="pdfPly col-md-5 text-center"></div>
                                                    </div>
                                                </div>
                                                <div class="form" style="margin-top: 24px">
                                                    <label class="form-label">لینک Pdf</label>
                                                    <input type="text" id="pdfLink" class="form-control"
                                                           placeholder="لینک Pdf را اینجا بگذارید"
                                                           style="border-color: #a3a3a3 !important;">
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-12 py-3">
                                                        <div class="card" style="border-color: #a3a3a3 !important">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    <div id="empty2"
                                                                         class="d-flex align-items-center justify-content-center text-center w-100 text-muted font-12">
                                                                        پیشرفت اپلود در این مکان نمایش داده میشود
                                                                    </div>
                                                                    <ul id="file-upload-list-b" class="list-unstyled"
                                                                        style="display: none"></ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-center"
                                                         style="margin-top:32px;margin-bottom: 15px">
                                                        <button class="btn px-4"
                                                                style="height: 44px;background-color: #F050AE;color: #FDFEFF"
                                                                onclick="uploadData(3)">ثبت و ذخیره
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 page-content d-none" id="text">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <label class="form-label">آپلود متن</label>
                                                        <textarea name="txtUploada" id="txtUploada"></textarea>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-center"
                                                     style="margin-top:32px;margin-bottom: 15px">
                                                    <button class="btn px-4"
                                                            style="height: 44px;background-color: #F050AE;color: #FDFEFF" onclick="uploadData(4)">
                                                        ثبت و ذخیره
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-none contents" id="files">
                                        <div class="row">
                                            <div class="col-12 border-bottom pb-5"
                                                 style="border-color:#a3a3a3 !important">
                                                <label class="form-label">آپلود فایل</label>
                                                <div class="card up-edu"
                                                     style="border-color: #a3a3a3 !important;height: 237.35px;background-color: #FDFEFF !important;">
                                                    <div class="row justify-content-center">
                                                        <div class="filePly col-md-5 text-center"></div>
                                                    </div>
                                                </div>
                                                <div class="form" style="margin-top: 24px">
                                                    <label class="form-label">لینک فایل</label>
                                                    <input type="text" class="form-control"
                                                           placeholder="لینک فایل را اینجا بگذارید"
                                                           style="border-color: #a3a3a3 !important;">
                                                </div>
                                            </div>
                                            <div class="col-12" style="margin-top: 32px">
                                                <h6 style="font-size: 18px" class="text-46 text-center">
                                                    فایل‌های بارگذاری شده
                                                </h6>
                                                <div class="table-responsive" style="margin-top: 32px">
                                                    <table class="table mailing-table"
                                                           style="background-color: transparent !important;">
                                                        <thead>
                                                        <tr class="font-14 text-75 text-center">
                                                            <th class="border border-1">ردیف</th>
                                                            <th class="border border-1">عنوان فایل</th>
                                                            <th class="border border-1">لینک فایل</th>
                                                            <th class="border border-1">نمایش فایل</th>
                                                            <th class="border border-1">عملیات</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr class="font-14 text-46 text-center">
                                                            <td class="border border-1">1</td>
                                                            <td class="border border-1">کتاب عادت‌های اتمی اثر دیوید
                                                            </td>
                                                            <td class="border border-1">
                                                                dfgdfkmglfdgjkpodfgjdflgkjdfp’gkd
                                                            </td>
                                                            <td class="border border-1">
                                                                <img src="/indexImages/educationDetail/eye-2.png"
                                                                     class="vertical-td list-items">
                                                            </td>
                                                            <td class="border border-1">
                                                                <img src="/indexImages/educationDetail/edit-2.png"
                                                                     class="vertical-td me-2 list-items">
                                                                <img src="/indexImages/educationDetail/trash.png"
                                                                     class="vertical-td me-2 list-items">
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-none contents" id="projects">
                                        <div class="row">
                                            <div class="col-12">
                                                <label class="form-label">آپلود تمرین و پروژه‌ها</label>
                                                <textarea name="Uprojects"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-none contents" id="exam">
                                        <div class="row">
                                            <div class="col-12">
                                                <label class="form-label">آپلود آزمون درس</label>
                                                <textarea name="Uexam"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-none contents" id="source">
                                        <div class="row">
                                            <div class="col-12 border-bottom pb-5"
                                                 style="border-color:#a3a3a3 !important">
                                                <label class="form-label">آپلود منابع</label>
                                                <div class="card up-edu"
                                                     style="border-color: #a3a3a3 !important;height: 237.35px;background-color: #FDFEFF !important;">
                                                    <div class="row justify-content-center">
                                                        <div class="filePly col-md-5 text-center"></div>
                                                    </div>
                                                </div>
                                                <div class="form" style="margin-top: 24px">
                                                    <label class="form-label">لینک منابع</label>
                                                    <input type="text" class="form-control"
                                                           placeholder="لینک فایل را اینجا بگذارید"
                                                           style="border-color: #a3a3a3 !important;">
                                                </div>
                                            </div>
                                            <div class="col-12" style="margin-top: 32px">
                                                <h6 style="font-size: 18px" class="text-46 text-center">
                                                    فایل‌های بارگذاری شده
                                                </h6>
                                                <div class="table-responsive" style="margin-top: 32px">
                                                    <table class="table mailing-table"
                                                           style="background-color: transparent !important;">
                                                        <thead>
                                                        <tr class="font-14 text-75 text-center">
                                                            <th class="border border-1">ردیف</th>
                                                            <th class="border border-1">عنوان فایل</th>
                                                            <th class="border border-1">لینک فایل</th>
                                                            <th class="border border-1">نمایش فایل</th>
                                                            <th class="border border-1">عملیات</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr class="font-14 text-46 text-center">
                                                            <td class="border border-1">1</td>
                                                            <td class="border border-1">کتاب عادت‌های اتمی اثر دیوید
                                                            </td>
                                                            <td class="border border-1">
                                                                dfgdfkmglfdgjkpodfgjdflgkjdfp’gkd
                                                            </td>
                                                            <td class="border border-1">
                                                                <img src="/indexImages/educationDetail/eye-2.png"
                                                                     class="vertical-td list-items">
                                                            </td>
                                                            <td class="border border-1">
                                                                <img src="/indexImages/educationDetail/edit-2.png"
                                                                     class="vertical-td me-2 list-items">
                                                                <img src="/indexImages/educationDetail/trash.png"
                                                                     class="vertical-td me-2 list-items">
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{--<div class="d-flex justify-content-center" style="margin-top:32px;margin-bottom: 15px">
                                        <button class="btn px-4" style="height: 44px;background-color: #F050AE;color: #FDFEFF">ثبت و ذخیره</button>
                                    </div>--}}
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- helper --}}
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
                                    <p class="text-75" style="line-height:24px;margin-top: 16px">لطفا نوع نهاد و استان،
                                        شهر
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
                                    <p class="text-75" style="line-height:24px;margin-top: 16px">لطفا نوع نهاد و استان،
                                        شهر
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


                var courseId = {!!$data->id!!};
                var getMom = document.getElementById('course');
                var index = 0;

                /*ارسال اطلاعات دوره برای بک اند*/
                function createSeason(e) {
                    var btnDiv = $(e).parent();
                    var col2 = btnDiv.parent();
                    var row = col2.parent();
                    var title = row.find(".season-title")[0].value;
                    if (title && title != "" && title != null) {
                        $.ajax({
                            url: `/education/master/course/api/season/create/${courseId}/${title}`,
                            type: 'GET',
                            success: function (result) {

                                createSeasonDiv(row, result)
                            }
                        });
                    } else {
                        alert('لطفا متنی را وارد کنید')
                    }
                }

                function createSeasonDiv(ele, result) {
                    var newCourse = document.createElement('div');
                    newCourse.id = `momDiv${index}`;
                    newCourse.className = 'mt-5'
                    ele[0].innerHTML = `
               <div style="margin-top: 32px">
                          <div class="row mt-3" style="padding: 0px 12px" id="first-course${index}">
                                 <div class="col-12 des-col">
                                    <div class="d-flex justify-content-between season-container" data-book-id="${result.id}">
                                        <div class="d-flex">
                                            <div class="d-flex justify-content-center align-items-center border-end pe-3" style="border-color: #A3A3A3 !important;">
                                                <p class="font-14 text-75 text-center vertical-td">فصل ${index + 2}</p>
                                            </div>
                                            <div class="ms-3">
                                                <p class="text-46" id="course-name${index}">${result.title}</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <img src="/indexImages/educationDetail/edit-2.png" class="vertical-td list-items" onclick="editeSName('course-name${index}','edite-course${index}')">
                                            <img src="/indexImages/educationDetail/eye.png" class="ms-2 vertical-td list-items">
                                        </div>
                                    </div>
                                </div>
                             <div style="margin-top: 32px" class="p-0">
                                 <div class="row align-items-center " id="first-lesson${index}">
                                    <div class="col-12 lesson-area" id="m-f-less${index}">
                                      <div class="row align-items-center" id="f-lesson${index}">
                                        <div class="col-md-10">
                                            <label class="form-label"> عنوان درس</label>
                                            <input type="text" class="form-control lesson-title" id="des-s-less-b${index}" placeholder="مبانی دیزاین">
                                        </div>
                                        <div class="col-md-2" style="margin-top: 30px">
                                            <div class="d-grid">
                                                <button class="btn" id="m-lesson${index}" style="background-color: #F050AE;height:44px ;color:#FDFEFF ;" onclick="makeLesson(this)">
                                                    <i class="fa-solid fa-plus font-14 me-2 vertical-td" style="font-weight: 400 !important;"></i>
                                                    ایجاد درس
                                                </button>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                 </div>
                                </div>
                          </div>
           `;
                }


                var getMlesson = document.getElementById('m-f-less');
                var num = 0;

                function makeLesson(elm) {

                    var btnDiv = $(elm).parent();
                    var col2 = btnDiv.parent();
                    var row = col2.parent();
                    var col12 = row.parent();
                    var lessionDiv = col12.parent();
                    var lessionParrentDiv = lessionDiv.parent();
                    var lessionSeasonDiv = lessionParrentDiv.parent();
                    var seasonContainer = lessionSeasonDiv.find(".season-container")[0];
                    var seasinId = $(seasonContainer).data('book-id');

                    var title = row.find(".lesson-title")[0].value;
                    if (title && title != "" && title != null) {
                        $.ajax({
                            url: `/education/master/course/api/lesson/create/${seasinId}/${title}`,
                            type: 'GET',
                            success: function (result) {
                                makeLessonDiv(row, result)
                            }
                        });
                    } else {
                        alert('لطفا متنی را وارد کنید')
                    }

                }

                function makeLessonDiv(elm, result) {

                    var reLesson = document.createElement('div');
                    reLesson.className = 'row align-items-center';
                    reLesson.style.marginBottom = '15px';
                    reLesson.style.marginTop = '15px';
                    reLesson.style.padding = '0px 12px;';
                    reLesson.id = `newElem${num}`;
                    reLesson.innerHTML = `
            <div class='container'>
                <div class='row' style="padding: 0px 12px" id="first-c-lesson">
                          <div class="col-md-9 less-col">
                                            <div class="d-flex justify-content-between">
                                                    <div class="d-flex">
                                                        <div class="d-flex justify-content-center align-items-center border-end pe-3" style="border-color: #A3A3A3 !important;">
                                                            <p class="font-14 text-75 text-center vertical-td">درس ${num + 1}</p>
                                                        </div>
                                                        <div class="ms-3">
                                                            <p class="text-46" id="less-name${num}">${result.title}</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <img src="/indexImages/educationDetail/edit-2.png" class="vertical-td list-items" onclick="editeCLessName('edite-less${num}','less-name${num}','p-d${num}')">
                                                        <img src="/indexImages/educationDetail/eye.png" class="ms-2 vertical-td list-items">
                                                    </div>
                                                </div>
                                         </div>
                                         <div class="col-md-3 list-items border-start-0 add-less-btn vertical-td" id="p-d${num}">
                                                <div class="d-flex justify-content-center align-items-center open-AddBookDialog" data-bs-toggle="modal" data-bs-target="#lesson-modal" data-book-id="${result.id}">
                                                    <i class="fa-solid fa-plus me-2 font-14 vertical-td"></i>
                                                    بارگذاری محتوای جدید
                                                </div>
                                         </div>
                    </div>
                </div>
             `;
                    console.log(elm.parent())
                    elm.parent()[0].appendChild(reLesson);
                    num++;
                }

                $(document).on("click", ".open-AddBookDialog", function () {
                    var myBookId = $(this).data('book-id');
                    $(".modal-body #bookId").val(myBookId);
                    // As pointed out in comments,
                    // it is unnecessary to have to manually call the modal.
                    // $('#addBookDialog').modal('show');
                });


                function addCourse() {
                    var newCourse = document.createElement('div');
                    newCourse.id = `momDiv${index}`;
                    newCourse.className = 'mt-5'
                    newCourse.innerHTML = `
               <div style="margin-top: 32px">
                    <div class="row align-items-center" id="first-des${index}">
                           <div class="col-md-10">
                              <label class="form-label"> عنوان فصل</label>
                                  <input type="text" class="form-control season-title" id="des${index}" placeholder="مبانی دیزاین">
                           </div>
                    <div class="col-md-2" style="margin-top: 30px">
                         <div class="d-grid">
                                 <button class="btn" id="make${index}" onclick="createSeason(this)" style="background-color: #F050AE;height:44px ;color:#FDFEFF ;">ایجاد فصل</button>
                         </div>
                    </div>
                  </div>

           `;
                    getMom.appendChild(newCourse);
                    index++;
                }

                function newSLesson(FL, BA) {
                    var getSLess = document.getElementById(FL);
                    var getSAdd = document.getElementById(BA)
                    getSLess.classList.remove('d-none');
                    getSAdd.classList.add('d-none')
                }
            </script>

            <script>
                var getSelect = document.getElementsByClassName('select-content');
                var getSelectSm = document.getElementsByClassName('select-content-sm');
                getSelect[0].style.color = '#F050AE';
                getSelectSm[0].style.color = '#F050AE';

                function selectContent(index) {

                    for (var i = 0; i < getSelect.length; i++) {
                        if (i == index) {
                            getSelect[i].style.color = '#F050AE';
                        } else {
                            getSelect[i].style.color = '#757575';
                        }
                    }

                    for (var j = 0; j < getSelectSm.length; j++) {
                        if (j == index) {
                            getSelectSm[j].style.color = '#F050AE';
                        } else {
                            getSelectSm[j].style.color = '#757575';
                        }
                    }
                }
            </script>


            {{--chunk script--}}

            <script src="/educationn/js/resumable.js"></script>

            <script>

                var $ = window.$; // use the global jQuery instance

                function uploadData(number) {
                    var title = $('#uploadTitle').val();
                    var description = $('#uploadDescription').val();
                    if (!title || !description) {
                        alert('لطفا عنوان و توضیحات را وارد کنید')
                    } else {
                        if (number == 1) {
                            const videos = $("input[name='videoUpload[]']").prop('files')[0];
                            const videoUrl = $('#videoLink').val();
                            if (videos == "" && videoUrl == "") {
                                alert('لطفا فایل اپلودی یا url فایل اپلودی را وارد کنید')
                            } else if (videos == "") {
                                $.ajax({
                                    /* the route pointing to the post function */
                                    url: '{{route('education_master_course_update_link')}}',
                                    type: 'POST',
                                    /* send the csrf-token and the input to the controller */
                                    data: {
                                        _token: "{{ csrf_token() }}",
                                        productId: document.getElementById('bookId').value,
                                        titlee: document.getElementById('uploadTitle').value,
                                        netType: 1,
                                        description: document.getElementById('uploadDescription').value,
                                        link: videoUrl,
                                    },
                                    success: function (res) {
                                        alert('اطلاعات با موفقیت ذخیره شد')
                                    }
                                });
                            } else if (videoUrl == "") {
                                console.log(videos);
                                var resumable = new Resumable({
                                    // Use chunk size that is smaller than your maximum limit due a resumable issue
                                    // https://github.com/23/resumable.js/issues/51
                                    chunkSize: 1 * 1024 * 1024, // 1MB
                                    simultaneousUploads: 3,
                                    testChunks: false,
                                    throttleProgressCallbacks: 1,
                                    // Get the url from data-url tag
                                    target: "{{ url('education/master/course/update/chunk') }}",
                                    // Append token to the request - required for web routes
                                    query: {
                                        _token: "{{ csrf_token() }}",
                                        productId: document.getElementById('bookId').value,
                                        titlee: document.getElementById('uploadTitle').value,
                                        netType: 1,
                                        description: document.getElementById('uploadDescription').value,
                                    }
                                });
                                if (!resumable.support) {
                                    $('#resumable-error').show();
                                } else {
                                    var $uploadList = $("#file-upload-list");
                                    $uploadList.show();

                                    $('.resumable-progress .progress-resume-link').show();
                                    $('.resumable-progress .progress-pause-link').show();
                                    // Add the file to the list

                                    $uploadList.append('<li class="mt-2 resumable-file-' + '"><span class="uploadingText' + videos
                                            .uniqueIdentifier +
                                        '">درحال اپلود</span> <span class="resumable-file-name"></span> <span class="ml-3 mr-3 resumable-file-progress"></span><div class="progress-bar" id="p' +
                                        videos.uniqueIdentifier + '">');

                                    $('.resumable-file-' + videos.uniqueIdentifier + ' .resumable-file-name')
                                        .html(videos.fileName);
                                    console.log(videos)

                                    resumable.addFile(videos, $("input[name='videoUpload[]']"));
                                    resumable.upload();

                                    resumable.on('fileSuccess', function (file, message) {
                                        // Reflect that the file upload has completed
                                        $('.resumable-file-' + file.uniqueIdentifier +
                                            ' .resumable-file-progress').html(
                                            '<i class="mdi text-success mdi-check"></i>تکمیل شد');
                                        $('.uploadingText' + file.uniqueIdentifier).html('');
                                        $('#c' + file.uniqueIdentifier).css("display", "none");
                                        alert("آپلود موفقیت امیز بود")
                                    });
                                    resumable.on('fileProgress', function (file) {
                                        // Handle progress for both the file and the overall upload
                                        $('.resumable-file-' +
                                            ' .resumable-file-progress').html(Math.floor(file.progress() *
                                            100) + '%');
                                        $('.progress-bar').css({width: Math.floor(resumable.progress() * 100) + '%'});
                                        $('#p').css({
                                            width: Math.floor(resumable.progress() * 100) + '%'
                                        });
                                    });
                                }
                            }


                        } else if (number == 2) {

                            const audios = $("input[name='voiceUpload[]']").prop('files')[0];
                            const audioUrl = $('#audioLink').val();
                            if (audios == "" && audioUrl == "") {
                                alert('لطفا فایل اپلودی یا url فایل اپلودی را وارد کنید')
                            } else if (audios == "") {
                                $.ajax({
                                    /* the route pointing to the post function */
                                    url: '{{route('education_master_course_update_link')}}',
                                    type: 'POST',
                                    /* send the csrf-token and the input to the controller */
                                    data: {
                                        _token: "{{ csrf_token() }}",
                                        productId: document.getElementById('bookId').value,
                                        titlee: document.getElementById('uploadTitle').value,
                                        netType: 2,
                                        description: document.getElementById('uploadDescription').value,
                                        link: audioUrl,
                                    },
                                    success: function (res) {
                                        alert('اطلاعات با موفقیت ذخیره شد')
                                    }
                                });
                            } else if (audioUrl == "") {
                                console.log(audios);
                                var resumable = new Resumable({
                                    // Use chunk size that is smaller than your maximum limit due a resumable issue
                                    // https://github.com/23/resumable.js/issues/51
                                    chunkSize: 1 * 1024 * 1024, // 1MB
                                    simultaneousUploads: 3,
                                    testChunks: false,
                                    throttleProgressCallbacks: 1,
                                    // Get the url from data-url tag
                                    target: "{{ url('education/master/course/update/chunk') }}",
                                    // Append token to the request - required for web routes
                                    query: {
                                        _token: "{{ csrf_token() }}",
                                        productId: document.getElementById('bookId').value,
                                        titlee: document.getElementById('uploadTitle').value,
                                        netType: 2,
                                        description: document.getElementById('uploadDescription').value,
                                    }
                                });


                                if (!resumable.support) {
                                    $('#resumable-error').show();
                                } else {
                                    var $uploadList = $("#file-upload-list-a");
                                    $uploadList.show();

                                    $('.resumable-progress .progress-resume-link').show();
                                    $('.resumable-progress .progress-pause-link').show();
                                    // Add the file to the list

                                    $uploadList.append('<li class="mt-2 resumable-file-' + '"><span class="uploadingText' + audios
                                            .uniqueIdentifier +
                                        '">درحال اپلود</span> <span class="resumable-file-name"></span> <span class="ml-3 mr-3 resumable-file-progress"></span> <div class="progress-bar" id="p' +
                                        audios.uniqueIdentifier + '">');

                                    $('.resumable-file-' + audios.uniqueIdentifier + ' .resumable-file-name')
                                        .html(audios.fileName);
                                    console.log(audios)

                                    resumable.addFile(audios, $("input[name='voiceUpload[]']"));
                                    resumable.upload();

                                    resumable.on('fileSuccess', function (file, message) {
                                        // Reflect that the file upload has completed
                                        $('.resumable-file-' + file.uniqueIdentifier +
                                            ' .resumable-file-progress').html(
                                            '<i class="mdi text-success mdi-check"></i>تکمیل شد');
                                        $('.uploadingText' + file.uniqueIdentifier).html('');
                                        $('#c' + file.uniqueIdentifier).css("display", "none");
                                        alert("آپلود موفقیت امیز بود")
                                    });
                                    resumable.on('fileProgress', function (file) {
                                        // Handle progress for both the file and the overall upload
                                        $('.resumable-file-' +
                                            ' .resumable-file-progress').html(Math.floor(file.progress() *
                                            100) + '%');
                                        $('.progress-bar').css({width: Math.floor(resumable.progress() * 100) + '%'});
                                        $('#p').css({
                                            width: Math.floor(resumable.progress() * 100) + '%'
                                        });
                                    });
                                }
                            }
                        } else if (number == 3) {

                            const pdf = $("input[name='pdfUpload[]']").prop('files')[0];
                            const pdfUrl = $('#pdfLink').val();
                            if (pdf == "" && pdfUrl == "") {
                                alert('لطفا فایل اپلودی یا url فایل اپلودی را وارد کنید')
                            } else if (pdf == "") {
                                $.ajax({
                                    /* the route pointing to the post function */
                                    url: '{{route('education_master_course_update_link')}}',
                                    type: 'POST',
                                    /* send the csrf-token and the input to the controller */
                                    data: {
                                        _token: "{{ csrf_token() }}",
                                        productId: document.getElementById('bookId').value,
                                        titlee: document.getElementById('uploadTitle').value,
                                        netType: 3,
                                        description: document.getElementById('uploadDescription').value,
                                        link: pdfUrl,
                                    },
                                    success: function (res) {
                                        alert('اطلاعات با موفقیت ذخیره شد')
                                    }
                                });
                            } else if (pdfUrl == "") {
                                console.log(pdf);
                                var resumable = new Resumable({
                                    // Use chunk size that is smaller than your maximum limit due a resumable issue
                                    // https://github.com/23/resumable.js/issues/51
                                    chunkSize: 1 * 1024 * 1024, // 1MB
                                    simultaneousUploads: 3,
                                    testChunks: false,
                                    throttleProgressCallbacks: 1,
                                    // Get the url from data-url tag
                                    target: "{{ url('education/master/course/update/chunk') }}",
                                    // Append token to the request - required for web routes
                                    query: {
                                        _token: "{{ csrf_token() }}",
                                        productId: document.getElementById('bookId').value,
                                        titlee: document.getElementById('uploadTitle').value,
                                        netType: 3,
                                        description: document.getElementById('uploadDescription').value,
                                    }
                                });


                                if (!resumable.support) {
                                    $('#resumable-error').show();
                                } else {
                                    var $uploadList = $("#file-upload-list-b");
                                    $uploadList.show();

                                    $('.resumable-progress .progress-resume-link').show();
                                    $('.resumable-progress .progress-pause-link').show();
                                    // Add the file to the list

                                    $uploadList.append('<li class="mt-2 resumable-file-' + '"><span class="uploadingText' + pdf
                                            .uniqueIdentifier +
                                        '">درحال اپلود</span> <span class="resumable-file-name"></span> <span class="ml-3 mr-3 resumable-file-progress"></span> <div class="progress-bar" id="p' +
                                        pdf.uniqueIdentifier + '">');

                                    $('.resumable-file-' + pdf.uniqueIdentifier + ' .resumable-file-name')
                                        .html(pdf.fileName);
                                    console.log(pdf)

                                    resumable.addFile(pdf, $("input[name='pdfUpload[]']"));

                                    resumable.upload();
                                    resumable.on('fileSuccess', function (file, message) {
                                        // Reflect that the file upload has completed
                                        $('.resumable-file-' + file.uniqueIdentifier +
                                            ' .resumable-file-progress').html(
                                            '<i class="mdi text-success mdi-check"></i>تکمیل شد');
                                        $('.uploadingText' + file.uniqueIdentifier).html('');
                                        $('#c' + file.uniqueIdentifier).css("display", "none");
                                        alert("آپلود موفقیت امیز بود")
                                    });
                                    resumable.on('fileProgress', function (file) {
                                        // Handle progress for both the file and the overall upload
                                        $('.resumable-file-' +
                                            ' .resumable-file-progress').html(Math.floor(file.progress() *
                                            100) + '%');
                                        $('.progress-bar').css({width: Math.floor(resumable.progress() * 100) + '%'});
                                        $('#p').css({
                                            width: Math.floor(resumable.progress() * 100) + '%'
                                        });
                                    });
                                }
                            }
                        } else if (number == 4) {
                            const tesxt = $('#txtUploada').val();
                            if(tesxt == ""){
                                alert('لطفا محتوایی را تایپ کنید')
                            }else {
                                $.ajax({
                                    /* the route pointing to the post function */
                                    url: '{{route('education_master_course_update_text')}}',
                                    type: 'POST',
                                    /* send the csrf-token and the input to the controller */
                                    data: {
                                        _token: "{{ csrf_token() }}",
                                        productId: document.getElementById('bookId').value,
                                        titlee: document.getElementById('uploadTitle').value,
                                        netType: 4,
                                        description: document.getElementById('uploadDescription').value,
                                        text: tesxt,
                                    },
                                    success: function (res) {
                                        alert('اطلاعات با موفقیت ذخیره شد')
                                    }
                                });
                            }
                        }

                    }
                }

                /*

                    var $fileUpload = $('#resumable-browse');
                    var $fileUploadDrop = $('#resumable-drop');
                    var $uploadList = $("#file-upload-list");

                    if ($fileUpload.length > 0 && $fileUploadDrop.length > 0) {
                        var resumable = new Resumable({
                            // Use chunk size that is smaller than your maximum limit due a resumable issue
                            // https://github.com/23/resumable.js/issues/51
                            chunkSize: 1 * 1024 * 1024, // 1MB
                            simultaneousUploads: 3,
                            testChunks: false,
                            throttleProgressCallbacks: 1,
                            // Get the url from data-url tag
                            target: {{ url('education/uploadVideo') }},
            // Append token to the request - required for web routes
            query: {
                _token: "{{ csrf_token() }}",
                productId: document.getElementById('bookId').value
            }
        });

        // Resumable.js isn't supported, fall back on a different method
        if (!resumable.support) {
            $('#resumable-error').show();
        } else {
            // Show a place for dropping/selecting files
            $fileUploadDrop.show();
            resumable.assignDrop($fileUpload[0]);
            resumable.assignBrowse($fileUploadDrop[0]);

            // Handle file add event
            resumable.on('fileAdded', function(file) {
                $('#empty2').removeClass('d-flex').addClass('d-none');
                // Show progress pabr
                $uploadList.show();
                //ShowButton
                $('.resumeButton').attr('disabled', false);
                $('.pauseButton').attr('disabled', false)
                // Show pause, hide resume
                $('.resumable-progress .progress-resume-link').show();
                $('.resumable-progress .progress-pause-link').show();
                // Add the file to the list
                $uploadList.append('<li class="mt-2 resumable-file-' + file
                    .uniqueIdentifier + '"><span class="uploadingText' + file
                    .uniqueIdentifier +
                    '">درحال اپلود</span> <span class="resumable-file-name"></span> <span class="ml-3 mr-3 resumable-file-progress"></span><button style="height:30px;width:30px" id="c' +
                    file.uniqueIdentifier +
                    '" class="removeButton  ml-2 mr-2 float-right btn text-danger rounded-circle p-0" onclick="cnacel(this.id)"><i class="mdi mdi-delete-circle-outline"></i> </button> <div class="progress-bar" id="p' +
                    file.uniqueIdentifier + '">');
                $('.resumable-file-' + file.uniqueIdentifier + ' .resumable-file-name')
                    .html(file.fileName);
                // Actually start the upload
                resumable.upload();
            });
            resumable.on('cancel', function() {
                $('.resumable-file-progress').html('canceled');
            });
            resumable.on('fileSuccess', function(file, message) {
                // Reflect that the file upload has completed
                $('.resumable-file-' + file.uniqueIdentifier +
                    ' .resumable-file-progress').html(
                    '<i class="mdi text-success mdi-check"></i>تکمیل شد');
                $('.uploadingText' + file.uniqueIdentifier).html('');
                $('#c' + file.uniqueIdentifier).css("display", "none");
            });
            resumable.on('fileError', function(file, message) {
                // Reflect that the file upload has resulted in error
                $('.resumable-file-' + file.uniqueIdentifier +
                    ' .resumable-file-progress').html(
                    '(file could not be uploaded: ' + message + ')');
            });
            resumable.on('fileProgress', function(file) {
                // Handle progress for both the file and the overall upload
                $('.resumable-file-' + file.uniqueIdentifier +
                    ' .resumable-file-progress').html(Math.floor(file.progress() *
                    100) + '%');
                /!* $('.progress-bar').css({width: Math.floor(resumable.progress() * 100) + '%'});*!/
                $('#p' + file.uniqueIdentifier).css({
                    width: Math.floor(resumable.progress() * 100) + '%'
                });

            });

            function cnacel(clicked_id) {
                clicked_id = clicked_id.substring(1);
                var file = resumable.getFromUniqueIdentifier(clicked_id);
                file.cancel();
                $('.resumable-file-' + clicked_id).remove();
            }

            function resume() {
                resumable.upload();
            }

            function pause() {
                resumable.pause();
            }

        }

    }*/
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
            <script>
                var getSelect = document.getElementsByClassName('select-content');
                var getSelectSm = document.getElementsByClassName('select-content-sm');
                var contents = document.getElementsByClassName('contents');
                getSelect[0].style.color = '#F050AE';
                getSelectSm[0].style.color = '#F050AE';

                function selectContent(index) {

                    for (var i = 0; i < getSelect.length; i++) {
                        if (i == index) {
                            getSelect[i].style.color = '#F050AE';
                            contents[i].classList.remove('d-none')
                        } else {
                            getSelect[i].style.color = '#757575';
                            contents[i].classList.add('d-none')
                        }
                    }

                    for (var j = 0; j < getSelectSm.length; j++) {
                        if (j == index) {
                            getSelectSm[j].style.color = '#F050AE';
                        } else {
                            getSelectSm[j].style.color = '#757575';
                        }
                    }
                }

                var getContents = document.getElementsByClassName('page-content');

                function changeContent(index) {
                    for (var i = 0; i < getContents.length; i++) {
                        if (i == index) {
                            getContents[i].classList.remove('d-none');
                        } else {
                            getContents[i].classList.add('d-none');
                        }
                    }
                }
            </script>
            <script src="/fileUploaders/videoUploader.js"></script>
            <script src="/fileUploaders/vocalUploader.js"></script>
            <script src="/fileUploaders/pdfUploader.js"></script>
            <script src="/fileUploaders/fileUploader.js"></script>
            <script src="//cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
            <script>
                CKEDITOR.replace('txtUpload', {
                    language: 'fa',
                    content: 'fa',
                    filebrowserUploadMethod: 'form'
                });
                CKEDITOR.replace('Uexam', {
                    language: 'fa',
                    content: 'fa',
                    filebrowserUploadMethod: 'form'
                });
                CKEDITOR.replace('Uprojects', {
                    language: 'fa',
                    content: 'fa',
                    filebrowserUploadMethod: 'form'
                });
            </script>

            <script>
                function editeSName(title, input) {
                    var getTitle = document.getElementById(title);
                    var getInput = document.getElementById(input);
                    getInput.value = getTitle.innerHTML;
                    getTitle.classList.add('d-none');
                    getInput.classList.remove('d-none');
                }

                function confirmEdit(e, title, input) {
                    var getTitle = document.getElementById(title);
                    var getInput = document.getElementById(input);
                    if (e.keyCode == 13) {
                        getTitle.innerHTML = getInput.value
                        getInput.classList.add('d-none');
                        getTitle.classList.remove('d-none');
                    }
                }
            </script>

@endsection
