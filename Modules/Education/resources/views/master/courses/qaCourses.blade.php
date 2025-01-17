@extends('education::mastersDashboard.layout.totalWithMenu')

@section('style')

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
                <h6 class="text-start title-start d-md-block d-inline-block ps-md-1">پرسش و پاسخ‌</h6>
                <div class="d-md-flex d-none">
                    <span class="ms-md-0 ms-5 pe-md-1" style="margin-left: 40px">تعداد: 3</span>
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
            <div class="card-body mt-3 mb-3">
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <p class="font-14 text-46">دوره هوش مصنوعی</p>
                            <table class="qa-table table table-bordered border-primary mt-2"
                                   style="background-color: #FDFEFF;">
                                <thead>
                                <tr class="font-14 text-75 text-center" style="background-color: #FFFBF5">
                                    <th class="border border-1 p-2 fw-normal">ردیف</th>
                                    <th class="border border-1 p-2 fw-normal">نام کاربر</th>
                                    <th class="border border-1 p-2 fw-normal">سوال کاربر</th>
                                    <th class="border border-1 p-2 fw-normal">پاسخ</th>
                                    <th class="border border-1 p-2 fw-normal">نمایش پاسخ؟</th>
                                    <th class="border border-1 p-2 fw-normal">تاریخ</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center font-12 text-46">
                                        <td class="border border-1 p-2">1</td>
                                        <td class="border border-1 p-2">مرضیه حیدری</td>
                                        <td class="border border-1 p-2">پروژه کی شروع میشه؟</td>
                                        <td class="border border-1 p-2 text-purple">
                                            <button class="border-0 show-answer" style="cursor: pointer;background-color: transparent"
                                                    data-bs-toggle="modal" data-bs-target="#qa-first-modal">
                                                پاسخ میدهم
                                            </button>
                                        </td>
                                        <div class="modal fade" id="qa-first-modal">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content mt-md-5">
                                                    <div class="modal-header justify-content-center">
                                                        <h6 class="modal-title">
                                                            پرسش و پاسخ
                                                        </h6>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="form form-horizontal" method="post" enctype="multipart/form-data">
                                                            <div>
                                                                <div class="show-q card">
                                                                    <div class="card-body">
                                                                        <p class="card-subtitle text-75 font-12"></p>
                                                                        <p class="q-text card-text font-14 text-46 mt-2 ms-2 pb-3">

                                                                        </p>
                                                                        <div class="float-end pt-1">
                                                                            <span class="me-4 font-12 text-75"></span>
                                                                            <span class="font-12 me-1 text-75"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                    <div class="show-a card mt-3 ms-5" id="cardAnsewr">
                                                                        <div class="card-body">
                                                                            <p class="card-subtitle text-75 font-12"></p>
                                                                            <p class="a-text card-text font-14 text-46 mt-2 ms-2 pb-3 edite-text" id="text"></p>
                                                                            <input class="form-control edite-input mt-2 d-none" id="input" value="">
                                                                            <div class="float-start pt-1">
                                                                                <i class="fa-solid fa-pen ms-2 font-12 edite-icon list-items"
                                                                                   id="edite-icon"></i>
                                                                                <i class="fa-solid fa-paper-plane ms-2 font-12 send-icon list-items d-none"
                                                                                   id="send-icon"></i>
                                                                                <i class="fa-solid fa-trash ms-2 font-12 list-items"></i>
                                                                            </div>
                                                                            <div class="float-end pt-1">
                                                                                <span class="me-4 font-12 text-75"></span>
                                                                                <span class="font-12 me-1 text-75"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                            <hr>
                                                            <div class="row mt-2">
                                                                <div class="col-12">
                                                                    <input name="projectId" value="" hidden>
                                                                    <input name="parentId" value="" hidden>
                                                                    <label for="" class="form-label">پاسخ:</label>
                                                                    <textarea class="form-control" name="body"
                                                                              style="height: 114px;"></textarea>
                                                                    <div class="form-check mt-2 font-12">
                                                                        <input type="checkbox" name="showResponse" id=""
                                                                               class="form-check-input" checked>
                                                                        <label for="" class="form-check-label">
                                                                            نمایش پاسخ
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="float-end">
                                                                <button class="btn py-3 px-4 btn-submit" id="btn-submit">
                                                                    <i class="fa-solid fa-paper-plane"></i>
                                                                    ارسال پاسخ
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <td class=" border border-1 p-2">
                                            <input type="checkbox"  name="" class="form-check-input check-dis">
                                        </td>
                                        <td class="border border-1 p-2">
                                            1401/08/12
                                        </td>
                                    </tr>
                                    <tr class="text-center font-12 text-46">
                                        <td class="border border-1 p-2">1</td>
                                        <td class="border border-1 p-2">مرضیه حیدری</td>
                                        <td class="border border-1 p-2">پروژه کی شروع میشه؟</td>
                                        <td class="border border-1 p-2 text-purple">
                                            <button class="border-0 show-answer" style="cursor: pointer;background-color: transparent"
                                                    data-bs-toggle="modal" data-bs-target="#qa-first-modal">
                                                پاسخ میدهم
                                            </button>
                                        </td>
                                        <div class="modal fade" id="qa-first-modal">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content mt-md-5">
                                                    <div class="modal-header justify-content-center">
                                                        <h6 class="modal-title">
                                                            پرسش و پاسخ
                                                        </h6>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="form form-horizontal" method="post" enctype="multipart/form-data">
                                                            <div>
                                                                <div class="show-q card">
                                                                    <div class="card-body">
                                                                        <p class="card-subtitle text-75 font-12"></p>
                                                                        <p class="q-text card-text font-14 text-46 mt-2 ms-2 pb-3">

                                                                        </p>
                                                                        <div class="float-end pt-1">
                                                                            <span class="me-4 font-12 text-75"></span>
                                                                            <span class="font-12 me-1 text-75"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="show-a card mt-3 ms-5" id="cardAnsewr">
                                                                    <div class="card-body">
                                                                        <p class="card-subtitle text-75 font-12"></p>
                                                                        <p class="a-text card-text font-14 text-46 mt-2 ms-2 pb-3 edite-text" id="text"></p>
                                                                        <input class="form-control edite-input mt-2 d-none" id="input" value="">
                                                                        <div class="float-start pt-1">
                                                                            <i class="fa-solid fa-pen ms-2 font-12 edite-icon list-items"
                                                                               id="edite-icon"></i>
                                                                            <i class="fa-solid fa-paper-plane ms-2 font-12 send-icon list-items d-none"
                                                                               id="send-icon"></i>
                                                                            <i class="fa-solid fa-trash ms-2 font-12 list-items"></i>
                                                                        </div>
                                                                        <div class="float-end pt-1">
                                                                            <span class="me-4 font-12 text-75"></span>
                                                                            <span class="font-12 me-1 text-75"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="row mt-2">
                                                                <div class="col-12">
                                                                    <input name="projectId" value="" hidden>
                                                                    <input name="parentId" value="" hidden>
                                                                    <label for="" class="form-label">پاسخ:</label>
                                                                    <textarea class="form-control" name="body"
                                                                              style="height: 114px;"></textarea>
                                                                    <div class="form-check mt-2 font-12">
                                                                        <input type="checkbox" name="showResponse" id=""
                                                                               class="form-check-input" checked>
                                                                        <label for="" class="form-check-label">
                                                                            نمایش پاسخ
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="float-end">
                                                                <button class="btn py-3 px-4 btn-submit" id="btn-submit">
                                                                    <i class="fa-solid fa-paper-plane"></i>
                                                                    ارسال پاسخ
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <td class=" border border-1 p-2">
                                            <input type="checkbox"  name="" class="form-check-input check-dis">
                                        </td>
                                        <td class="border border-1 p-2">
                                            1401/08/12
                                        </td>
                                    </tr>
                                    <tr class="text-center font-12 text-46">
                                        <td class="border border-1 p-2">1</td>
                                        <td class="border border-1 p-2">مرضیه حیدری</td>
                                        <td class="border border-1 p-2">پروژه کی شروع میشه؟</td>
                                        <td class="border border-1 p-2 text-purple">
                                            <button class="border-0 show-answer" style="cursor: pointer;background-color: transparent"
                                                    data-bs-toggle="modal" data-bs-target="#qa-first-modal">
                                                پاسخ میدهم
                                            </button>
                                        </td>
                                        <div class="modal fade" id="qa-first-modal">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content mt-md-5">
                                                    <div class="modal-header justify-content-center">
                                                        <h6 class="modal-title">
                                                            پرسش و پاسخ
                                                        </h6>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="form form-horizontal" method="post" enctype="multipart/form-data">
                                                            <div>
                                                                <div class="show-q card">
                                                                    <div class="card-body">
                                                                        <p class="card-subtitle text-75 font-12"></p>
                                                                        <p class="q-text card-text font-14 text-46 mt-2 ms-2 pb-3">

                                                                        </p>
                                                                        <div class="float-end pt-1">
                                                                            <span class="me-4 font-12 text-75"></span>
                                                                            <span class="font-12 me-1 text-75"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="show-a card mt-3 ms-5" id="cardAnsewr">
                                                                    <div class="card-body">
                                                                        <p class="card-subtitle text-75 font-12"></p>
                                                                        <p class="a-text card-text font-14 text-46 mt-2 ms-2 pb-3 edite-text" id="text"></p>
                                                                        <input class="form-control edite-input mt-2 d-none" id="input" value="">
                                                                        <div class="float-start pt-1">
                                                                            <i class="fa-solid fa-pen ms-2 font-12 edite-icon list-items"
                                                                               id="edite-icon"></i>
                                                                            <i class="fa-solid fa-paper-plane ms-2 font-12 send-icon list-items d-none"
                                                                               id="send-icon"></i>
                                                                            <i class="fa-solid fa-trash ms-2 font-12 list-items"></i>
                                                                        </div>
                                                                        <div class="float-end pt-1">
                                                                            <span class="me-4 font-12 text-75"></span>
                                                                            <span class="font-12 me-1 text-75"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="row mt-2">
                                                                <div class="col-12">
                                                                    <input name="projectId" value="" hidden>
                                                                    <input name="parentId" value="" hidden>
                                                                    <label for="" class="form-label">پاسخ:</label>
                                                                    <textarea class="form-control" name="body"
                                                                              style="height: 114px;"></textarea>
                                                                    <div class="form-check mt-2 font-12">
                                                                        <input type="checkbox" name="showResponse" id=""
                                                                               class="form-check-input" checked>
                                                                        <label for="" class="form-check-label">
                                                                            نمایش پاسخ
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="float-end">
                                                                <button class="btn py-3 px-4 btn-submit" id="btn-submit">
                                                                    <i class="fa-solid fa-paper-plane"></i>
                                                                    ارسال پاسخ
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <td class=" border border-1 p-2">
                                            <input type="checkbox"  name="" class="form-check-input check-dis">
                                        </td>
                                        <td class="border border-1 p-2">
                                            1401/08/12
                                        </td>
                                    </tr>
                                    <tr class="text-center font-12 text-46">
                                        <td class="border border-1 p-2">1</td>
                                        <td class="border border-1 p-2">مرضیه حیدری</td>
                                        <td class="border border-1 p-2">پروژه کی شروع میشه؟</td>
                                        <td class="border border-1 p-2 text-purple">
                                            <button class="border-0 show-answer" style="cursor: pointer;background-color: transparent"
                                                    data-bs-toggle="modal" data-bs-target="#qa-first-modal">
                                                پاسخ میدهم
                                            </button>
                                        </td>
                                        <div class="modal fade" id="qa-first-modal">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content mt-md-5">
                                                    <div class="modal-header justify-content-center">
                                                        <h6 class="modal-title">
                                                            پرسش و پاسخ
                                                        </h6>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="form form-horizontal" method="post" enctype="multipart/form-data">
                                                            <div>
                                                                <div class="show-q card">
                                                                    <div class="card-body">
                                                                        <p class="card-subtitle text-75 font-12"></p>
                                                                        <p class="q-text card-text font-14 text-46 mt-2 ms-2 pb-3">

                                                                        </p>
                                                                        <div class="float-end pt-1">
                                                                            <span class="me-4 font-12 text-75"></span>
                                                                            <span class="font-12 me-1 text-75"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="show-a card mt-3 ms-5" id="cardAnsewr">
                                                                    <div class="card-body">
                                                                        <p class="card-subtitle text-75 font-12"></p>
                                                                        <p class="a-text card-text font-14 text-46 mt-2 ms-2 pb-3 edite-text" id="text"></p>
                                                                        <input class="form-control edite-input mt-2 d-none" id="input" value="">
                                                                        <div class="float-start pt-1">
                                                                            <i class="fa-solid fa-pen ms-2 font-12 edite-icon list-items"
                                                                               id="edite-icon"></i>
                                                                            <i class="fa-solid fa-paper-plane ms-2 font-12 send-icon list-items d-none"
                                                                               id="send-icon"></i>
                                                                            <i class="fa-solid fa-trash ms-2 font-12 list-items"></i>
                                                                        </div>
                                                                        <div class="float-end pt-1">
                                                                            <span class="me-4 font-12 text-75"></span>
                                                                            <span class="font-12 me-1 text-75"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="row mt-2">
                                                                <div class="col-12">
                                                                    <input name="projectId" value="" hidden>
                                                                    <input name="parentId" value="" hidden>
                                                                    <label for="" class="form-label">پاسخ:</label>
                                                                    <textarea class="form-control" name="body"
                                                                              style="height: 114px;"></textarea>
                                                                    <div class="form-check mt-2 font-12">
                                                                        <input type="checkbox" name="showResponse" id=""
                                                                               class="form-check-input" checked>
                                                                        <label for="" class="form-check-label">
                                                                            نمایش پاسخ
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="float-end">
                                                                <button class="btn py-3 px-4 btn-submit" id="btn-submit">
                                                                    <i class="fa-solid fa-paper-plane"></i>
                                                                    ارسال پاسخ
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <td class=" border border-1 p-2">
                                            <input type="checkbox"  name="" class="form-check-input check-dis">
                                        </td>
                                        <td class="border border-1 p-2">
                                            1401/08/12
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
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
                                <p class="font-12">آموزش نحوه تنظیم پرسش و پاسخ‌</p>
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
                                <h6 class="modal-title text-46" style="font-size: 24px">آموزش نحوه تنظیم پرسش و پاسخ‌</h6>
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
    <script>
        var getImage = document.getElementsByClassName('list-image')
        getImage[2].className='img-fluid list-image p-3 li-active';
        getImage[9].className='img-fluid list-image p-3 li-active';

        var getList = document.getElementById('user-list');
        function  addUser(e){
            if (e.keyCode == 13){
                var getUser = document.getElementById('user-add');
                var newLI = document.createElement('li');
                newLI.className='list-group-item';
                newLI.style.backgroundColor='transparent';
                newLI.innerHTML =getUser.value;
                getList.appendChild(newLI);
            }
        }

        var getTagList = document.getElementById('tag-list');
        function  addTag(e){
            if (e.keyCode == 13){
                var getTag = document.getElementById('tag-add');
                var newTag = document.createElement('li');
                newTag.className='list-group-item';
                newTag.style.backgroundColor='transparent';
                newTag.innerHTML =getTag.value;
                getTagList.appendChild(newTag);
            }
        }

        var getLevelList = document.getElementById('level-list');
        function  addLevel(e){
            if (e.keyCode == 13){
                var getLevel = document.getElementById('level-add');
                var newLevel = document.createElement('li');
                newLevel.className='list-group-item';
                newLevel.style.backgroundColor='transparent';
                newLevel.innerHTML =getLevel.value;
                getLevelList.appendChild(newLevel);
            }
        }

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
@endsection
