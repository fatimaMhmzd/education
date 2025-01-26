@extends('client.layout.total')

@section('style')
    <link rel="stylesheet" href="{{asset('/sources/style/pages/stall.css')}}">
    <style>
        #planRegistration textarea {
            height: 100px !important;
        }

        .home-footer {
            margin-top: -20px !important;
        }

        .btn-position {
            position: absolute;
            top: 10px;
            left: 23px;
        }
    </style>
@stop

@section('content')
    <article id="planRegistration">
        <section id="stall-bg">
            <section class="container">
                <div class="card card-body shadow border-0">
                    <h4 class="text-center card-title fw-bold">
                        احراز شرایط مالی و هویتی
                    </h4>
                    <p class="card-text px-md-5 mt-4 mb-0 text-center">
                        برای دریافت تسهیلات لازم است اطلاعات زیر را تکمیل نمایید !
                    </p>
                    <div class="row justify-content-center mt-3 mb-4">
                        <div class="col-md-6 mt-md-0">
                            <div class="d-md-flex">
                                <div class="image">
                                    <div class="d-inline-block">
                                        <input type="file" class="upload-form" name="image" id="image"
                                               accept="image/*"/>
                                        <div id="preview-wrapper">
                                            <button id="upload-button" class="upload-button" type="button"
                                                    aria-label="upload image"
                                                    aria-describedby="image">
                                            </button>
                                        </div>
                                    </div>
                                    <label class="form-label ms-3 font-14 image-label">
                                        تصویر کارت ملی
                                        <span class="font-10 text-muted">
                                         (1500*1500)
                                        </span>
                                    </label>
                                </div>
                                <div class="image ms-md-5">
                                    <div class="d-inline-block me-md-3">
                                        <input type="file" class="upload-form" name="image" id="image"
                                               accept="image/*"/>
                                        <div id="preview-wrapper">
                                            <button id="upload-button" class="upload-button" type="button"
                                                    aria-label="upload image"
                                                    aria-describedby="image">
                                            </button>
                                        </div>
                                    </div>
                                    <label class="form-label ms-md-0 ms-3 font-14 image-label">
                                        تصویر شناسنامه
                                        <span class="font-10 text-muted">
                                            (735*1500)
                                         </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 mb-4">
                            <fieldset class="form-floating">
                                <input type="text" class="prices form-control text-center"
                                       placeholder="سقف توان پرداخت ماهیانه شما (تومان)">
                                <label class="form-label">
                                    سقف توان پرداخت ماهیانه شما (تومان)
                                    <span class="text-danger align-middle">*</span>
                                </label>
                            </fieldset>
                        </div>
                        <div class="col-lg-4 mb-4 position-relative">
                            <fieldset class="form-floating">
                                <input type="text" maxlength="10" class="prices form-control"
                                       placeholder="محاسبه تخمینی زمان باز پرداخت (ماه)">
                                <label class="form-label">
                                    محاسبه تخمینی زمان باز پرداخت (ماه)
                                    <span class="text-danger align-middle">*</span>
                                </label>
                            </fieldset>
                            <button class="btn btn-site btn-position">محاسبه کن</button>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <fieldset class="form-floating">
                                <select class="form-select"></select>
                                <label class="form-label">
                                    میخواهید در چند ماه قسط را پرداخت کنید
                                    <span class="text-danger align-middle">*</span>
                                </label>
                            </fieldset>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 mb-4 position-relative">
                            <fieldset class="form-floating">
                                <input type="text" maxlength="20" class="prices form-control"
                                       placeholder="محاسبه تخمینی هر قسط (تومان)">
                                <label class="form-label">
                                    محاسبه تخمینی هر قسط (تومان)
                                    <span class="text-danger align-middle">*</span>
                                </label>
                            </fieldset>
                            <button class="btn btn-site btn-position">محاسبه کن</button>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <fieldset class="form-floating">
                                <select class="form-select"></select>
                                <label class="form-label">
                                    چند ضامن میخواهید معرفی کنید
                                    <span class="text-danger align-middle">*</span>
                                </label>
                            </fieldset>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <fieldset class="form-floating">
                                <select class="form-select">
                                    <option>بله</option>
                                    <option>خیر</option>
                                </select>
                                <label class="form-label">
                                    برای کسب و کار خود جواز کسب دارید ؟
                                    <span class="text-danger align-middle">*</span>
                                </label>
                            </fieldset>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button id="send_btn" class="btn btn-outline-site">
                            ذخیره و ارسال
                        </button>
                    </div>
                </div>
            </section>
        </section>
    </article>
@endsection

@section('script')
    <script>
        const UPLOAD_BUTTON = document.getElementsByClassName('upload-button');
        const FILE_INPUT = document.getElementsByClassName('upload-form');
        for (let i = 0; i < UPLOAD_BUTTON.length; i++) {
            UPLOAD_BUTTON[i].addEventListener("click", () => FILE_INPUT[i].click());
            FILE_INPUT[i].addEventListener("change", event => {
                const file = event.target.files[0];
                const reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onloadend = () => {
                    UPLOAD_BUTTON[i].setAttribute("aria-label", file.name);
                    UPLOAD_BUTTON[i].style.background = `url(${reader.result}) center center/cover`;
                };
            });
        }
    </script>
@endsection

