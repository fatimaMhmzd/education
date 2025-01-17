@extends('education::mastersDashboard.layout.totalWithMenu')

@section('style')
    <style>
        .order-edu-card {
            margin-top: 24px;
            border-radius: 4px;
            background-color: #E2E2E2;
            border: 0px;
        }

        .order-season, .order-lesson {
            padding: 12px;
            border-radius: 4px;
            border: 0.5px solid #A3A3A3;
            background: #FDFEFF;
            box-shadow: -2px 1px 9px 0px rgba(0, 0, 0, 0.10);
        }

        .order-lesson-place {
            background-color: #DDCEEE;
            padding: 12px;
        }

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
            <div class="card-body my-3" id="info-card">
                <div class="d-md-flex d-block justify-content-between align-items-center">
                    <p class="font-14 text-75">
                        در این قسمت محتوای دوره رو وارد کنید و مرحله به مرحله پیش روید ابتدا
                        عنوان
                        فصل اول را وارد کنید.
                    </p>
                    <button class="btn btn-purple mt-md-0 mt-3" data-bs-toggle="modal" data-bs-target="#order-modal">
                        مرتب سازی
                    </button>
                    <div class="modal fade" id="order-modal">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header justify-content-center">
                                    <p class="text-46 text-center" style="font-size: 18px;font-weight: 500">مرتب
                                        سازی</p>
                                </div>
                                <div class="modal-body">
                                    <p class="text-46 font-14" style="word-break: normal">
                                        <span class="text-purple">راهنما:</span>
                                        توجه داشته باشید فصل فقط با فصل امکان جابجایی دارد. درس‌های هر فصل و جلسات هر
                                        درس با یکدیگر امکان جا به جایی دارند. پس، برای مثال درس و محتوای فصل 6 نمیتواند
                                        به فصل 10 جا به جا شود.
                                    </p>
                                    <div class="card order-edu-card">
                                        <div class="card-body p-0">
                                            <div class="item-edu">
                                                <div style="padding: 12px">
                                                    <div class="order-season">
                                                        <div class="d-flex align-items-center">
                                                            <div
                                                                class="d-flex align-items-center text-75 font-14 border-end"
                                                                style="width: 10%">
                                                                <span>فصل اول</span>
                                                                <i class="fa-solid fa-angle-down vertical-td font-14 ms-1 list-items"
                                                                   data-bs-toggle="collapse"
                                                                   data-bs-target="#lesson-collapse"></i>
                                                            </div>
                                                            <div
                                                                class="d-flex align-items-center justify-content-between w-100">
                                                                <div class="ps-3">
                                                                    <p class="text-46">مبانی دیزاین</p>
                                                                </div>
                                                                <div class="icons">
                                                                    <i class="fa-solid fa-angle-up"></i>
                                                                    <i class="fa-solid fa-angle-down"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="collapse p-0" id="lesson-collapse">
                                                    <div class="order-lesson-place">
                                                        <div class="order-lesson">
                                                            <div class="d-flex align-items-center">
                                                                <div
                                                                    class="d-flex align-items-center text-75 font-14 border-end"
                                                                    style="width: 10%">
                                                                    <span>درس اول</span>
                                                                    <i class="fa-solid fa-angle-down vertical-td font-14 ms-1 list-items"
                                                                       data-bs-toggle="collapse"
                                                                       data-bs-target="#content-collapse"></i>
                                                                </div>
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between w-100">
                                                                    <div class="ps-3">
                                                                        <p class="text-46">مبانی دیزاین</p>
                                                                    </div>
                                                                    <div class="icons">
                                                                        <i class="fa-solid fa-angle-up"></i>
                                                                        <i class="fa-solid fa-angle-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="collapse border-top" id="content-collapse"
                                                                 style="margin-top: 12px">
                                                                <div style="padding-top: 12px">
                                                                    <div class="d-flex align-items-center">
                                                                        <div
                                                                            class="d-flex align-items-center text-75 font-14 border-end justify-content-center"
                                                                            style="width: 10%">
                                                                            <span class="text-center">جلسه اول</span>
                                                                        </div>
                                                                        <div
                                                                            class="d-flex align-items-center justify-content-between w-100">
                                                                            <div class="ps-3">
                                                                                <p class="text-46">مبانی دیزاین</p>
                                                                            </div>
                                                                            <div class="icons">
                                                                                <i class="fa-solid fa-angle-up"></i>
                                                                                <i class="fa-solid fa-angle-down"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr style="margin-top: 32px;margin-bottom: 32px">
                <div class="forms">
                    <div id="season-form ">
                        <div class="row align-items-center mt-2" id="first-des">
                            <div class="col-md-10">
                                <label class="form-label"> عنوان فصل </label>
                                <input type="text" class="form-control season-title" id="input-season"
                                       onkeyup="activeMake(this)"
                                       placeholder="مبانی دیزاین">
                            </div>
                            <div class="col-md-2" style="margin-top: 30px">
                                <div class="d-grid">
                                    <button class="btn" id="make"
                                            style="background-color: #F050AE;height:44px ;color:#FDFEFF ;"
                                            onclick="createSeason()">ایجاد فصل
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="mt-4">
                    <div id="course-place">
                        <div id="course">
                            @foreach($seosens as $seosen)
                                <div class="card order-edu-card">
                                    <div class="card-body" style="padding: 12px">
                                        <div class="order-season" style="padding: 6px;padding-right: 12px">
                                            <div class="d-md-flex d-block align-items-center season-container"
                                                 data-book-id="{{$seosen->id}}">
                                                <div
                                                    class="d-flex align-items-center text-75 font-14 border-end edu-select-place"
                                                    style="width: 10%">
                                                    <span>
                                                        فصل
                                                        <span class="ms-1">{{$loop->index + 1}}</span>
                                                    </span>
                                                    <i class="fa-solid fa-angle-down vertical-td font-14 ms-1 list-items"
                                                       data-bs-toggle="collapse"
                                                       data-bs-target="#lesson-collapse{{$seosen->id}}"
                                                       onclick="hideMake('make-lesson-collapse{{$seosen->id}}','lesson-collapse{{$seosen->id}}')"></i>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between w-100">
                                                    <div class="title ps-md-3 ps-0">
                                                        <p class="text-46"
                                                           id="title{{$seosen->id}}">{{$seosen->title}}</p>
                                                        <input type="text" id="edite{{$seosen->id}}"
                                                               value="{{$seosen->title}}"
                                                               class="form-control d-none">
                                                    </div>
                                                    <div class="icons-btn">
                                                        <svg class="me-2 list-items vertical-td d-none"
                                                             id="confirm{{$seosen->id}}" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg"
                                                             onclick="confirmSEdit('confirm{{$seosen->id}}','title{{$seosen->id}}','edite{{$seosen->id}}' , 'icon-edit{{$seosen->id}}')">
                                                            <path
                                                                d="M7.39999 6.32L15.89 3.49C19.7 2.22 21.77 4.3 20.51 8.11L17.68 16.6C15.78 22.31 12.66 22.31 10.76 16.6L9.91999 14.08L7.39999 13.24C1.68999 11.34 1.68999 8.23 7.39999 6.32Z"
                                                                stroke="#909090" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M10.11 13.65L13.69 10.06" stroke="#909090"
                                                                  stroke-width="1.5" stroke-linecap="round"
                                                                  stroke-linejoin="round"/>
                                                        </svg>
                                                        <img src="/indexImages/educationDetail/edit-2.png"
                                                             class="vertical-td list-items me-2"
                                                             id="icon-edit{{$seosen->id}}"
                                                             onclick="editeSName('icon-edit{{$seosen->id}}','title{{$seosen->id}}','edite{{$seosen->id}}' , 'confirm{{$seosen->id}}')">
                                                        <button class="btn"
                                                                style="background-color: #F050AE;color:#FDFEFF;"
                                                                data-bs-target="#make-lesson-collapse{{$seosen->id}}"
                                                                data-bs-toggle="collapse"
                                                                onclick="hideList('make-lesson-collapse{{$seosen->id}}','lesson-collapse{{$seosen->id}}')">
                                                            ایجاد درس
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="collapse border-top mt-2" style="padding-top: 6px"
                                                 id="make-lesson-collapse{{$seosen->id}}">
                                                <div class="d-md-flex d-block align-items-center"
                                                     id="f-lesson{{$seosen->id}}">
                                                    <div
                                                        class="d-flex align-items-center text-75 font-14 border-end edu-select-place"
                                                        style="width: 10%">
                                                        <span>درس جدید</span>
                                                    </div>
                                                    <div
                                                        class="d-flex align-items-center justify-content-between w-100">
                                                        <div class="ps-md-3 ps-0">
                                                            <input type="text" class="form-control lesson-title"
                                                                   id="des-s-less-b{{$seosen->id}}"
                                                                   placeholder="مبانی دیزاین"
                                                                   style="height: 30px !important;border: 0px !important;">
                                                        </div>
                                                        <div class="btns">
                                                            <button class="btn" id="m-lesson{{$seosen->id}}"
                                                                    onclick="makeLesson(this)"
                                                                    style="background-color: #F050AE;color:#FDFEFF;">
                                                                ذخیره
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                @foreach($seosen->lessons as $lesson)
                                                    <div class="border-top mt-2" style="padding-top: 6px">
                                                        <div class="d-md-flex d-block align-items-center"
                                                             id="f-lesson{{$lesson->id}}">
                                                            <div
                                                                class="d-flex align-items-center text-75 font-14 border-end edu-select-place"
                                                                style="width: 10%">
                                                                <span>
                                                                    درس {{$loop->index + 1}}
                                                                      <i class="fa-solid fa-angle-down vertical-td font-14 ms-1 list-items"
                                                                         data-bs-toggle="collapse"
                                                                         data-bs-target="#content-collapse{{$lesson->id}}"></i>
                                                                </span>
                                                            </div>
                                                            <div
                                                                class="d-flex align-items-center justify-content-between w-100">
                                                                <div class="ps-md-3 ps-0">
                                                                    <p class="text-46" id="titleLs{{$lesson->id}}">
                                                                        {{$lesson->title}}
                                                                    </p>
                                                                    <input type="text" id="editeLs{{$lesson->id}}"
                                                                           value="{{$lesson->title}}"
                                                                           class="form-control d-none">
                                                                </div>
                                                                <div class="btns">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                         class="me-2 list-items open-change-order"
                                                                         width="24" height="24"
                                                                         viewBox="0 0 24 24" fill="none"
                                                                         data-bs-toggle="modal"
                                                                         data-bs-target="#order-edu-lesson"
                                                                         data-book-id="{{$lesson->id}}">
                                                                        <path
                                                                            d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z"
                                                                            stroke="#919191" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"/>
                                                                        <path
                                                                            d="M15 15.3787H10.08C8.38 15.3787 7 13.9988 7 12.2988C7 10.5988 8.38 9.21875 10.08 9.21875H16.85"
                                                                            stroke="#919191" stroke-width="1.5"
                                                                            stroke-miterlimit="10"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"/>
                                                                        <path
                                                                            d="M15.4297 10.7672L16.9997 9.18719L15.4297 7.61719"
                                                                            stroke="#919191" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"/>
                                                                    </svg>
                                                                    <svg class="me-2 list-items vertical-td d-none"
                                                                         id="confirmLs{{$lesson->id}}" width="24"
                                                                         height="24"
                                                                         viewBox="0 0 24 24" fill="none"
                                                                         xmlns="http://www.w3.org/2000/svg"
                                                                         onclick="confirmLedit('confirmLs{{$lesson->id}}','titleLs{{$lesson->id}}','editeLs{{$lesson->id}}' , 'icon-editLs{{$lesson->id}}')">
                                                                        <path
                                                                            d="M7.39999 6.32L15.89 3.49C19.7 2.22 21.77 4.3 20.51 8.11L17.68 16.6C15.78 22.31 12.66 22.31 10.76 16.6L9.91999 14.08L7.39999 13.24C1.68999 11.34 1.68999 8.23 7.39999 6.32Z"
                                                                            stroke="#909090" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"/>
                                                                        <path d="M10.11 13.65L13.69 10.06"
                                                                              stroke="#909090"
                                                                              stroke-width="1.5" stroke-linecap="round"
                                                                              stroke-linejoin="round"/>
                                                                    </svg>
                                                                    <img src="/indexImages/educationDetail/edit-2.png"
                                                                         class="vertical-td list-items me-2"
                                                                         id="icon-editLs{{$seosen->id}}"
                                                                         onclick="editLname('icon-editLs{{$seosen->id}}','titleLs{{$lesson->id}}','editeLs{{$lesson->id}}' , 'confirmLs{{$lesson->id}}')">
                                                                    <button class="btn open-AddBookDialog"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#lesson-modal"
                                                                            data-book-id="{{$lesson->id}}"
                                                                            style="background-color: transparent!important;color:#F050AE;">
                                                                        <span class="font-14"> بارگذاری محتوا</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="collapse" id="content-collapse{{$lesson->id}}">
                                                        <div class="border-top mt-2 pe-3"
                                                             style="padding-top: 12px;padding-bottom: 12px;">
                                                            <div class="d-md-flex d-block align-items-center">
                                                                <div
                                                                    class="d-flex align-items-center text-75 font-14 border-end justify-content-md-center justify-content-start edu-select-place"
                                                                    style="width: 10%">
                                                                    <span
                                                                        class="text-md-center text-start">جلسه اول</span>
                                                                </div>
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between w-100">
                                                                    <div class="ps-md-3 ps-0">
                                                                        <p class="text-46">مبانی دیزاین</p>
                                                                    </div>
                                                                    <div class="icons">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                             class="me-2 list-items open-change-content"
                                                                             width="24" height="24"
                                                                             viewBox="0 0 24 24" fill="none"
                                                                             data-bs-toggle="modal"
                                                                             data-bs-target="#order-edu-content"
                                                                             data-book-id="{{$lesson->id}}">
                                                                            <path
                                                                                d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z"
                                                                                stroke="#919191" stroke-width="1.5"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"/>
                                                                            <path
                                                                                d="M15 15.3787H10.08C8.38 15.3787 7 13.9988 7 12.2988C7 10.5988 8.38 9.21875 10.08 9.21875H16.85"
                                                                                stroke="#919191" stroke-width="1.5"
                                                                                stroke-miterlimit="10"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"/>
                                                                            <path
                                                                                d="M15.4297 10.7672L16.9997 9.18719L15.4297 7.61719"
                                                                                stroke="#919191" stroke-width="1.5"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"/>
                                                                        </svg>
                                                                        <img
                                                                            src="/indexImages/educationDetail/edit-2.png"
                                                                            class="vertical-td list-items open-AddBookDialog"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#lesson-modal"
                                                                            data-book-id="{{$lesson->id}}"
                                                                            style="background-color: transparent!important;color:#F050AE;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="collapse" style="padding-top: 6px"
                                                 id="lesson-collapse{{$seosen->id}}">
                                                @foreach($seosen->lessons as $lesson)
                                                    <div class="border-top mt-2" style="padding-top: 6px">
                                                        <div class="d-md-flex d-block align-items-center"
                                                             id="f-lesson{{$lesson->id}}">
                                                            <div
                                                                class="d-flex align-items-center text-75 font-14 border-end edu-select-place"
                                                                style="width: 10%">
                                                                <span>
                                                                    درس {{$loop->index + 1}}
                                                                      <i class="fa-solid fa-angle-down vertical-td font-14 ms-1 list-items"
                                                                         data-bs-toggle="collapse"
                                                                         data-bs-target="#content-collapse{{$lesson->id}}"></i>
                                                                </span>
                                                            </div>
                                                            <div
                                                                class="d-flex align-items-center justify-content-between w-100">
                                                                <div class="ps-md-3 ps-0">
                                                                    <p class="text-46" id="titleL{{$lesson->id}}">
                                                                        {{$lesson->title}}
                                                                    </p>
                                                                    <input type="text" id="editeL{{$lesson->id}}"
                                                                           value="{{$lesson->title}}"
                                                                           class="form-control d-none">
                                                                </div>
                                                                <div class="btns">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                         class="me-2 list-items open-change-order"
                                                                         width="24" height="24"
                                                                         viewBox="0 0 24 24" fill="none"
                                                                         data-bs-toggle="modal"
                                                                         data-bs-target="#order-edu-lesson"
                                                                         data-book-id="{{$lesson->id}}">
                                                                        <path
                                                                            d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z"
                                                                            stroke="#919191" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"/>
                                                                        <path
                                                                            d="M15 15.3787H10.08C8.38 15.3787 7 13.9988 7 12.2988C7 10.5988 8.38 9.21875 10.08 9.21875H16.85"
                                                                            stroke="#919191" stroke-width="1.5"
                                                                            stroke-miterlimit="10"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"/>
                                                                        <path
                                                                            d="M15.4297 10.7672L16.9997 9.18719L15.4297 7.61719"
                                                                            stroke="#919191" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"/>
                                                                    </svg>
                                                                    <svg class="me-2 list-items vertical-td d-none"
                                                                         id="confirmL{{$lesson->id}}" width="24"
                                                                         height="24"
                                                                         viewBox="0 0 24 24" fill="none"
                                                                         xmlns="http://www.w3.org/2000/svg"
                                                                         onclick="confirmLedit('confirmL{{$lesson->id}}','titleL{{$lesson->id}}','editeL{{$lesson->id}}' , 'icon-editL{{$lesson->id}}')">
                                                                        <path
                                                                            d="M7.39999 6.32L15.89 3.49C19.7 2.22 21.77 4.3 20.51 8.11L17.68 16.6C15.78 22.31 12.66 22.31 10.76 16.6L9.91999 14.08L7.39999 13.24C1.68999 11.34 1.68999 8.23 7.39999 6.32Z"
                                                                            stroke="#909090" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"/>
                                                                        <path d="M10.11 13.65L13.69 10.06"
                                                                              stroke="#909090"
                                                                              stroke-width="1.5" stroke-linecap="round"
                                                                              stroke-linejoin="round"/>
                                                                    </svg>
                                                                    <img src="/indexImages/educationDetail/edit-2.png"
                                                                         class="vertical-td list-items me-2"
                                                                         id="icon-editL{{$seosen->id}}"
                                                                         onclick="editLname('icon-editL{{$seosen->id}}','titleL{{$lesson->id}}','editeL{{$lesson->id}}' , 'confirmL{{$lesson->id}}')">
                                                                    <button class="btn open-AddBookDialog"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#lesson-modal"
                                                                            data-book-id="{{$lesson->id}}"
                                                                            style="background-color: transparent!important;color:#F050AE;">
                                                                        <span class="font-14"> بارگذاری محتوا</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="collapse" id="content-collapse{{$lesson->id}}">
                                                        <div class="border-top mt-2 pe-3"
                                                             style="padding-top: 12px;padding-bottom: 12px;">
                                                            <div class="d-md-flex d-block align-items-center">
                                                                <div
                                                                    class="d-flex align-items-center text-75 font-14 border-end justify-content-md-center justify-content-start edu-select-place"
                                                                    style="width: 10%">
                                                                    <span class="text-center">جلسه اول</span>
                                                                </div>
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between w-100">
                                                                    <div class="ps-md-3 ps-0">
                                                                        <p class="text-46">مبانی دیزاین</p>
                                                                    </div>
                                                                    <div class="icons">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                             class="me-2 list-items open-change-content"
                                                                             width="24" height="24"
                                                                             viewBox="0 0 24 24" fill="none"
                                                                             data-bs-toggle="modal"
                                                                             data-bs-target="#order-edu-content"
                                                                             data-book-id="{{$lesson->id}}">
                                                                            <path
                                                                                d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z"
                                                                                stroke="#919191" stroke-width="1.5"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"/>
                                                                            <path
                                                                                d="M15 15.3787H10.08C8.38 15.3787 7 13.9988 7 12.2988C7 10.5988 8.38 9.21875 10.08 9.21875H16.85"
                                                                                stroke="#919191" stroke-width="1.5"
                                                                                stroke-miterlimit="10"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"/>
                                                                            <path
                                                                                d="M15.4297 10.7672L16.9997 9.18719L15.4297 7.61719"
                                                                                stroke="#919191" stroke-width="1.5"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"/>
                                                                        </svg>
                                                                        <img
                                                                            src="/indexImages/educationDetail/edit-2.png"
                                                                            class="vertical-td list-items open-AddBookDialog"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#lesson-modal"
                                                                            data-book-id="{{$lesson->id}}"
                                                                            style="background-color: transparent!important;color:#F050AE;">
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
                            @endforeach
                        </div>
                    </div>
                </div>
                {{-- modals --}}
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
                                                            style="height: 44px;background-color: #F050AE;color: #FDFEFF"
                                                            onclick="uploadData(4)">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="order-edu-lesson">
                    <div class="modal-dialog modal-xs modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header justify-content-center">
                                <p class="text-46" style="font-size: 18px;font-weight: 500">انتقال درس </p>
                            </div>
                            <div class="modal-body">
                                <input id="orderId" value="0" class="d-none">
                                <div class="form">
                                    <label class="form-label">فصل:</label>
                                    <select class="form-select font-14 text-75">
                                        <option selected>فصل مورد نظر را انتخاب کنید</option>
                                    </select>
                                    <button class="btn btn-purple float-end px-3" style="margin-top: 16px">تایید
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="order-edu-content">
                    <div class="modal-dialog modal-xs modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header justify-content-center">
                                <p class="text-46" style="font-size: 18px;font-weight: 500">انتقال محتوا </p>
                            </div>
                            <div class="modal-body">
                                <input id="contentId" value="0" class="d-none">
                                <div class="form">
                                    <div>
                                        <label class="form-label">فصل:</label>
                                        <select class="form-select font-14 text-75">
                                            <option value="">1</option>
                                        </select>
                                    </div>
                                    <div style="margin-top: 16px">
                                        <label class="form-label">درس:</label>
                                        <select class="form-select font-14 text-75">
                                            <option value="">درس مورد نظر را انتخاب کنید</option>
                                        </select>
                                    </div>
                                    <button class="btn btn-purple float-end px-3" style="margin-top: 16px">
                                        تایید
                                    </button>
                                </div>
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
        @stop

        @section('script')
            <script>
                var getMake = document.getElementById('make');
                getMake.disabled = true;
                getMake.style.backgroundColor = '#757575';

                function activeMake(el) {
                    if (el.value != "") {
                        getMake.disabled = false;
                        getMake.style.backgroundColor = '#F050AE';
                    } else {
                        getMake.disabled = true;
                        getMake.style.backgroundColor = '#757575';
                    }
                }

                var courseId = {!!$data->id!!};
                var getMom = document.getElementById('course-place');
                var index = 0;

                /*ارسال اطلاعات دوره برای بک اند*/
                function createSeason(e) {
                    var row = document.getElementById('course');
                    var title = document.getElementById('input-season').value;
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
                    newCourse.innerHTML = `
                         <div class="card order-edu-card">
                                <div class="card-body" style="padding: 12px">
                                    <div class="order-season" style="padding: 6px;padding-right: 12px" id="first-course${index}">
                                        <div class="d-md-flex d-block align-items-center season-container" data-book-id="${result.id}">
                                            <div
                                                class="d-flex align-items-center text-75 font-14 border-end edu-select-place"
                                                style="width: 10%">
                                                <span>فصل جدید</span>
                                                <i class="fa-solid fa-angle-down vertical-td font-14 ms-1 list-items"
                                                   data-bs-toggle="collapse"
                                                   data-bs-target="#lesson-collapse${index}"
                                                   onclick="hideMake('make-lesson-collapse${index}','lesson-collapse${index}')"></i>
                                            </div>
                                            <div
                                                class="d-flex align-items-center justify-content-between w-100">
                                                <div class="title ps-md-3 ps-0">
                                                    <p class="text-46" id="course-name${index}">${result.title}</p>
                                                    <input type="text" id="edit-title${index}" class="form-control d-none">
                                                </div>
                                                <div class="icons-btn">
                                                        <svg class="me-2 list-items vertical-td d-none"
                                                             id="confirm-e${index}" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg"
                                                             >
                                                            <path
                                                                d="M7.39999 6.32L15.89 3.49C19.7 2.22 21.77 4.3 20.51 8.11L17.68 16.6C15.78 22.31 12.66 22.31 10.76 16.6L9.91999 14.08L7.39999 13.24C1.68999 11.34 1.68999 8.23 7.39999 6.32Z"
                                                                stroke="#909090" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M10.11 13.65L13.69 10.06" stroke="#909090"
                                                                  stroke-width="1.5" stroke-linecap="round"
                                                                  stroke-linejoin="round"/>
                                                        </svg>
                                                           <img src="/indexImages/educationDetail/edit-2.png"
                                                            class="vertical-td list-items me-2"
                                                            id="icon-pen${index}"
                                                            onclick="editeSName('icon-pen${index}','course-name${index}','edit-title${index}','confirm-e${index}')">
                                                           <button class="btn"
                                                            style="background-color: #F050AE;color:#FDFEFF;"
                                                            data-bs-target="#make-lesson-collapse${index}"
                                                            data-bs-toggle="collapse"
                                                            onclick="hideList('make-lesson-collapse${index}','lesson-collapse${index}')">
                                                        ایجاد درس
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="collapse border-top mt-2" style="padding-top: 6px" id="make-lesson-collapse${index}">
                                            <div class="d-md-flex d-block align-items-center" id="f-lesson${index}">
                                                <div
                                                    class="d-flex align-items-center text-75 font-14 border-end edu-select-place"
                                                    style="width: 10%">
                                                    <span>درس جدید</span>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between w-100">
                                                    <div class="ps-md-3 ps-0">
                                                        <input type="text" class="form-control lesson-title" id="des-s-less-b${index}" placeholder="مبانی دیزاین" style="height: 30px !important;border: 0px !important;">
                                                    </div>
                                                    <div class="btns">
                                                        <button class="btn" id="m-lesson${index}" onclick="makeLesson(this ,'lesson-collapse${index}')"
                                                                style="background-color: #F050AE;color:#FDFEFF;">ذخیره
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="collapse" style="padding-top: 6px"
                                             id="lesson-collapse${index}">
                                       </div>
                                    </div>
                                </div>
                            </div>
               `;
                    var script = document.createElement('script');
                    script.innerHTML = `
                     editeSName(elm, title, input, icon);
                     hideMake(change, elm)
                     hideList(change, elm)
                    `;
                    getMom.appendChild(newCourse);
                    getMom.appendChild(script);
                    index++;
                }

                function makeLesson(elm, collap) {
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
                                makeLessonDiv(row, result, collap)
                            }
                        });
                    } else {
                        alert('لطفا متنی را وارد کنید')
                    }

                }

                var num = 0;

                function makeLessonDiv(elm, result, collap) {
                    var collapseDiv = document.getElementById(collap);
                    var reLesson = document.createElement('div');
                    reLesson.style.padding = '12px 0px;';
                    reLesson.id = `newElem${num}`;
                    reLesson.innerHTML = `
                                     <div class="border-top mt-2" style="padding-top: 6px">
                                            <div class="d-md-flex d-block align-items-center" id="f-lesson${index}">
                                                <div
                                                    class="d-flex align-items-center text-75 font-14 border-end edu-select-place"
                                                    style="width: 10%">
                                                    <span>درس جدید</span>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between w-100">
                                                    <div class="ps-md-3 ps-0">
                                                         <p class="text-46" id="less-name${num}">${result.title}</p>
                                                    </div>
                                                    <div class="btns">
                                                       <svg xmlns="http://www.w3.org/2000/svg" class="me-2 list-items open-change-order" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                         data-bs-toggle="modal"
                                                         data-bs-target="#order-edu-lesson"
                                                         data-book-id="${num}">
                                                             <path d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z" stroke="#919191" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                             <path d="M15 15.3787H10.08C8.38 15.3787 7 13.9988 7 12.2988C7 10.5988 8.38 9.21875 10.08 9.21875H16.85" stroke="#919191" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                             <path d="M15.4297 10.7672L16.9997 9.18719L15.4297 7.61719" stroke="#919191" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                       </svg>
                                                       <img src="/indexImages/educationDetail/edit-2.png"
                                                        class="vertical-td list-items"
                                                        onclick="editeCLessName('edite-less${num}','less-name${num}','p-d${num}')">
                                                        <button class="btn open-AddBookDialog"
                                                         data-bs-toggle="modal"
                                                         data-bs-target="#lesson-modal"
                                                         data-book-id="${num}"
                                                         style="background-color: transparent!important;color:#F050AE;">
                                                         <span class="font-14"> بارگذاری محتوا</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                     </div>
             `;
                    console.log(elm.parent())
                    elm.parent()[0].appendChild(reLesson);
                    addtoCollapse(collap, reLesson);
                    num++;
                }

                $(document).on("click", ".open-AddBookDialog", function () {
                    var myBookId = $(this).data('book-id');
                    $(".modal-body #bookId").val(myBookId);
                });

                $(document).on("click", ".open-change-order", function () {
                    var myBookId = $(this).data('book-id');
                    console.log(myBookId)
                    $(".modal-body #orderId").val(myBookId);
                });

                $(document).on("click", ".open-change-content", function () {
                    var myBookId = $(this).data('book-id');
                    console.log(myBookId)
                    $(".modal-body #contentId").val(myBookId);
                });

                function addtoCollapse(collap, elm) {
                    var getElmMom = document.getElementById(collap)
                    var newElm = document.createElement('div');
                    newElm.innerHTML = elm.innerHTML;
                    getElmMom.appendChild(newElm);
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
                            if (tesxt == "") {
                                alert('لطفا محتوایی را تایپ کنید')
                            } else {
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
                CKEDITOR.replace('txtUploada', {
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
                function hideMake(change, elm) {
                    var changeElm = document.getElementById(change);
                    $(changeElm).collapse('hide');
                }

                function hideList(change, elm) {
                    var changeElm = document.getElementById(elm);
                    $(changeElm).collapse('hide');
                }

                function editeSName(elm, title, input, icon) {
                    document.getElementById(elm).classList.add('d-none')
                    document.getElementById(title).classList.add('d-none');
                    document.getElementById(input).classList.remove('d-none');
                    document.getElementById(icon).classList.remove('d-none');
                }

                function confirmSEdit(elm, title, input, icon) {
                    document.getElementById(elm).classList.add('d-none')
                    document.getElementById(title).classList.remove('d-none');
                    document.getElementById(title).innerText = document.getElementById(input).value;
                    document.getElementById(input).classList.add('d-none');
                    document.getElementById(icon).classList.remove('d-none');
                }

                function editLname(elm, title, input, icon) {
                    document.getElementById(elm).classList.add('d-none')
                    document.getElementById(title).classList.add('d-none');
                    document.getElementById(input).classList.remove('d-none');
                    document.getElementById(icon).classList.remove('d-none');
                }

                function confirmLedit(elm, title, input, icon) {
                    document.getElementById(elm).classList.add('d-none')
                    document.getElementById(title).classList.remove('d-none');
                    document.getElementById(title).innerText = document.getElementById(input).value;
                    document.getElementById(input).classList.add('d-none');
                    document.getElementById(icon).classList.remove('d-none');
                }

            </script>
@endsection
