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
                        درباره من
                    </h4>
                    <p class="card-text px-md-5 mt-4 mb-0 text-center">
                        ما برای حمایت مادی و معنوی از پروژه شما نیازمند اطلاعات دقیق هویتی از شما هستیم.
                        فرم معرفی خود را با دقت ثبت و بخش های مرتبط با حوزه کاری که انجام می دهید را کامل کنید !
                    </p>
                    <div class="row justify-content-center mt-3 mb-4">
                        <div class="col-md-3 mt-md-0">
                            <div class="d-inline-block">
                                <input type="file" name="image" id="image" accept="image/*"/>
                                <div id="preview-wrapper">
                                    <button id="upload-button" type="button"
                                            aria-label="upload image"
                                            aria-describedby="image">
                                    </button>
                                </div>
                            </div>
                            <label class="form-label ms-3 font-14 image-label">عکس پروفایل</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 mb-4">
                            <fieldset class="form-floating">
                                <input type="text" placeholder="نام" class="form-control">
                                <label class="form-label">
                                    نام
                                    <span class="text-danger align-middle">*</span>
                                </label>
                            </fieldset>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <fieldset class="form-floating">
                                <input type="text" placeholder="نام خانوادگی" class="form-control">
                                <label class="form-label">
                                    نام خانوادگی
                                    <span class="text-danger align-middle">*</span>
                                </label>
                            </fieldset>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <fieldset class="form-floating">
                                <input data-jdp placeholder="تاریخ تولد" class="form-control">
                                <label class="form-label">
                                    تاریخ تولد
                                    <span class="text-danger align-middle">*</span>
                                </label>
                            </fieldset>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 mb-4">
                            <fieldset class="form-floating">
                                <input type="tel" placeholder="کدملی" class="form-control">
                                <label class="form-label">
                                    کدملی
                                </label>
                            </fieldset>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <fieldset class="form-floating">
                                <select class="form-select">
                                    <option>دیپلم</option>
                                    <option>فوق دیپلم</option>
                                    <option>کارشناسی</option>
                                    <option>کارشناسی ارشد</option>
                                    <option>دکتری</option>
                                </select>
                                <label class="form-label">
                                    تحصیلات
                                    <span class="text-danger align-middle">*</span>
                                </label>
                            </fieldset>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <fieldset class="form-floating">
                                <select class="form-select">
                                    <option>مذکر</option>
                                    <option>مونث</option>
                                </select>
                                <label class="form-label">
                                    جنسیت
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
                                    استان
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
                    <div class="row">
                        <div class="col-lg-4 mb-4">
                            <fieldset class="form-floating">
                                <select class="form-select"></select>
                                <label class="form-label">
                                    نحوه آشنایی با کارماران
                                    <span class="text-danger align-middle">*</span>
                                </label>
                            </fieldset>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <fieldset class="form-floating">
                                <input type="email" placeholder="ایمیل" class="form-control">
                                <label class="form-label">
                                    ایمیل
                                    <span class="text-danger align-middle">*</span>
                                </label>
                            </fieldset>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <fieldset class="form-floating">
                                <input type="text" placeholder="آدرس شبکه اجتماعی" class="form-control">
                                <label class="form-label">
                                    آدرس شبکه اجتماعی
                                    <span class="text-danger align-middle">*</span>
                                </label>
                            </fieldset>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12">
                            <fieldset class="form-floating">
                                <textarea class="form-control"
                                          placeholder="بیوگرافی من (سوابق و علاقه مندی ها)"></textarea>
                                <label class="form-label">
                                    بیوگرافی من (سوابق و علاقه مندی ها)
                                    <span class="text-danger align-middle">*</span>
                                </label>
                            </fieldset>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12">
                            <label class="form-label">
                                بیشتر به چه موضوعاتی علاقه دارید؟
                                <span class="text-danger align-middle">*</span>
                            </label>
                            <div class="card card-body border border-1 input-card">
                                <div class="form-check-inline">
                                    <fieldset class="form-check-inline">
                                        <input type="checkbox" class="form-check-input">
                                        <label class="form-label form-check-label">شهر خلاق</label>
                                    </fieldset>
                                    <fieldset class="form-check-inline">
                                        <input type="checkbox" class="form-check-input">
                                        <label class="form-label form-check-label">شهر خلاق</label>
                                    </fieldset>
                                    <fieldset class="form-check-inline">
                                        <input type="checkbox" class="form-check-input">
                                        <label class="form-label form-check-label">شهر خلاق</label>
                                    </fieldset>
                                </div>

                            </div>
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
        const UPLOAD_BUTTON = document.getElementById("upload-button");
        const FILE_INPUT = document.querySelector("input[type=file]");
        const AVATAR = document.getElementById("avatar");

        UPLOAD_BUTTON.addEventListener("click", () => FILE_INPUT.click());
        FILE_INPUT.addEventListener("change", event => {
            const file = event.target.files[0];

            const reader = new FileReader();
            reader.readAsDataURL(file);

            reader.onloadend = () => {
                UPLOAD_BUTTON.setAttribute("aria-label", file.name);
                UPLOAD_BUTTON.style.background = `url(${reader.result}) center center/cover`;
            };
        });
    </script>
@endsection

