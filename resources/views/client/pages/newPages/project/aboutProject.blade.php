@extends('client.layout.total')

@section('style')
    <link rel="stylesheet" href="{{asset('/sources/style/pages/stall.css')}}">
    <link rel="stylesheet" href="{{asset('/sources/style/pages/jalali.css')}}">
    <style>
        #planRegistration textarea {
            height: 100px !important;
        }

        .home-footer {
            margin-top: -20px !important;
        }
    </style>
@stop

@section('content')
    <article id="planRegistration">
        <section id="stall-bg">
            <section class="container">
                <div class="card card-body shadow border-0">
                    <h4 class="text-center card-title fw-bold">
                        درباره کسب و کار من
                    </h4>
                    <p class="card-text px-md-5 mt-4 mb-0 text-center">
                        ما برای حمایت مادی و معنوی از پروژه شما نیازمند اطلاعات دقیق هویتی از شما هستیم.
                        فرم معرفی خود را با دقت ثبت و بخش های مرتبط با حوزه کاری که انجام می دهید را کامل کنید !
                    </p>
                    <div class="row justify-content-center mt-3 mb-4">
                        <div class="col-md-6 mt-md-0">
                            <div class="d-md-flex">
                                <div class="image">
                                    <div class="d-inline-block">
                                        <input type="file" class="upload-form" name="image" id="image"
                                               accept="image/*وvideo/*"/>
                                        <div id="preview-wrapper">
                                            <button id="upload-button">
                                            </button>
                                        </div>
                                    </div>
                                    <label class="form-label ms-3 font-14 image-label">
                                        ویدیو معرفی
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
                                        تصویر بنر
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
                                <input type="text" placeholder="نام پروژه" class="form-control">
                                <label class="form-label">
                                    نام پروژه
                                    <span class="text-danger align-middle">*</span>
                                </label>
                            </fieldset>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <fieldset class="form-floating">
                                <input type="text" placeholder="توضیح یک جمله ای پروژه" class="form-control">
                                <label class="form-label">
                                    توضیح یک جمله ای پروژه
                                    <span class="text-danger align-middle">*</span>
                                </label>
                            </fieldset>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <fieldset class="form-floating">
                                <select class="form-select"></select>
                                <label class="form-label">
                                    سقف زمانی تامین منابع
                                    <span class="text-danger align-middle">*</span>
                                </label>
                            </fieldset>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 mb-4">
                            <fieldset class="form-floating">
                                <input type="text" placeholder="نام مدیر اجرایی" class="form-control">
                                <label class="form-label">
                                    نام مدیر اجرایی
                                    <span class="text-danger align-middle">*</span>
                                </label>
                            </fieldset>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <fieldset class="form-floating">
                                <input type="text" placeholder="شماره تماس" class="form-control">
                                <label class="form-label">
                                    شماره تماس
                                    <span class="text-danger align-middle">*</span>
                                </label>
                            </fieldset>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <fieldset class="form-floating">
                                <select class="form-select"></select>
                                <label class="form-label">
                                    موضوع فعالیت
                                    <span class="text-danger align-middle">*</span>
                                </label>
                            </fieldset>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 mb-4">
                            <fieldset class="form-floating">
                                <select class="form-select"></select>
                                <label class="form-label">
                                    محل اجرای پروژه
                                    <span class="text-danger align-middle">*</span>
                                </label>
                            </fieldset>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <fieldset class="form-floating">
                                <select class="form-select"></select>
                                <label class="form-label">
                                    شهرستان
                                    <span class="text-danger align-middle">*</span>
                                </label>
                            </fieldset>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <fieldset class="form-floating">
                                <select class="form-select"></select>
                                <label class="form-label">
                                    شهر / روستا
                                    <span class="text-danger align-middle">*</span>
                                </label>
                            </fieldset>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12">
                            <fieldset class="form-floating">
                                <textarea class="form-control"
                                          placeholder="شرح مختصر پروژه"></textarea>
                                <label class="form-label">
                                    شرح مختصر پروژه
                                </label>
                            </fieldset>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12">
                            <fieldset class="form-floating">
                                <textarea class="form-control"
                                          placeholder="مشخصات فنی و ویژگی محصول نهایی پروژه"></textarea>
                                <label class="form-label">
                                    مشخصات فنی و ویژگی محصول نهایی پروژه
                                </label>
                            </fieldset>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12">
                            <fieldset class="form-floating">
                                <textarea class="form-control"
                                          placeholder="شیوه عرضه و فروش محصول نهایی پروژه"></textarea>
                                <label class="form-label">
                                    شیوه عرضه و فروش محصول نهایی پروژه
                                </label>
                            </fieldset>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12">
                            <fieldset class="form-floating">
                                <textarea class="form-control"
                                          placeholder="سایر توضیحات"></textarea>
                                <label class="form-label">
                                    سایر توضیحات
                                </label>
                            </fieldset>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12">
                            <div class="d-md-flex align-items-center">
                                <label class="form-label align-middle mt-2">آیا طرح شما دارای نوآوری و خلاقیت است
                                    ؟</label>
                                <div class="form-check-inline ms-3">
                                    <fieldset class="form-check-inline">
                                        <input type="checkbox" class="form-check-input">
                                        <label class="form-check-label font-14">بله</label>
                                    </fieldset>
                                    <fieldset class="form-check-inline">
                                        <input type="checkbox" class="form-check-input">
                                        <label class="form-check-label font-14">خیر</label>
                                    </fieldset>
                                </div>
                            </div>
                            <fieldset class="form-floating mt-3">
                                <textarea class="form-control"
                                          placeholder="توضیح دهید"></textarea>
                                <label class="form-label">
                                    توضیح دهید
                                </label>
                            </fieldset>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12">
                            <div class="d-md-flex align-items-center">
                                <label class="form-label align-middle mt-2">آیا طرح شما امکان صادرات دارد ؟</label>
                                <div class="form-check-inline ms-3">
                                    <fieldset class="form-check-inline">
                                        <input type="checkbox" class="form-check-input">
                                        <label class="form-check-label font-14">بله</label>
                                    </fieldset>
                                    <fieldset class="form-check-inline">
                                        <input type="checkbox" class="form-check-input">
                                        <label class="form-check-label font-14">خیر</label>
                                    </fieldset>
                                </div>
                            </div>
                            <fieldset class="form-floating mt-3">
                                <textarea class="form-control"
                                          placeholder="توضیح دهید"></textarea>
                                <label class="form-label">
                                    توضیح دهید
                                </label>
                            </fieldset>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12">
                            <div class="d-md-flex align-items-center">
                                <label class="form-label align-middle mt-2">آیا محصول شما دارای محتوای فرهنگی است
                                    ؟</label>
                                <div class="form-check-inline ms-3">
                                    <fieldset class="form-check-inline">
                                        <input type="checkbox" class="form-check-input">
                                        <label class="form-check-label font-14">بله</label>
                                    </fieldset>
                                    <fieldset class="form-check-inline">
                                        <input type="checkbox" class="form-check-input">
                                        <label class="form-check-label font-14">خیر</label>
                                    </fieldset>
                                </div>
                            </div>
                            <fieldset class="form-floating mt-3">
                                <textarea class="form-control"
                                          placeholder="توضیح دهید"></textarea>
                                <label class="form-label">
                                    توضیح دهید
                                </label>
                            </fieldset>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12">
                            <div class="d-md-flex align-items-center">
                                <label class="form-label align-middle mt-2">آیا پروژه شما باعث افزایش کسب و کار می شود
                                    ؟</label>
                                <div class="form-check-inline ms-3">
                                    <fieldset class="form-check-inline">
                                        <input type="checkbox" class="form-check-input">
                                        <label class="form-check-label font-14">بله</label>
                                    </fieldset>
                                    <fieldset class="form-check-inline">
                                        <input type="checkbox" class="form-check-input">
                                        <label class="form-check-label font-14">خیر</label>
                                    </fieldset>
                                </div>
                            </div>
                            <fieldset class="form-floating mt-3">
                                <textarea class="form-control"
                                          placeholder="توضیح دهید"></textarea>
                                <label class="form-label">
                                    توضیح دهید
                                </label>
                            </fieldset>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mb-4 text-center">
                            <label class="form-label">
                                تصاویری از پروژه و محصول نهایی
                            </label>
                            <fieldset class="d-flex justify-content-center">
                                <div>
                                    <input type="file" class="upload-form" name="image" id="image"
                                           accept="image/*"/>
                                    <div id="preview-wrapper">
                                        <button id="upload-button" class="upload-button mx-0" type="button"
                                                aria-label="upload image"
                                                aria-describedby="image">
                                        </button>
                                    </div>
                                </div>
                                <div>
                                    <input type="file" class="upload-form" name="image" id="image"
                                           accept="image/*"/>
                                    <div id="preview-wrapper">
                                        <button id="upload-button" class="upload-button mx-0" type="button"
                                                aria-label="upload image"
                                                aria-describedby="image">
                                        </button>
                                    </div>
                                </div>
                                <div>
                                    <input type="file" class="upload-form" name="image" id="image"
                                           accept="image/*"/>
                                    <div id="preview-wrapper">
                                        <button id="upload-button" class="upload-button mx-0" type="button"
                                                aria-label="upload image"
                                                aria-describedby="image">
                                        </button>
                                    </div>
                                </div>
                                <div>
                                    <input type="file" class="upload-form" name="image" id="image"
                                           accept="image/*"/>
                                    <div id="preview-wrapper">
                                        <button id="upload-button" class="upload-button mx-0" type="button"
                                                aria-label="upload image"
                                                aria-describedby="image">
                                        </button>
                                    </div>
                                </div>
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
    <script type="text/javascript"
            src="{{asset('/sources/script/pages/jalali.js')}}"></script>
    <script>
        jalaliDatepicker.startWatch();
    </script>
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

