@extends('client.layout.total')

@section('style')

    <style>
        textarea {
            height: 100px !important;
        }
    </style>
@stop

@section('content')
    <main class="container">
        <x-project-header></x-project-header>
        <div class="row justify-content-center my-5">
            <div class="col-lg-6">
                <div class="d-flex justify-content-center">
                    <div class="new-title-page position-relative me-3 pe-3 pb-2">
                        <div
                            class="new-title-page-child shadow position-absolute start-0 top-0 px-3 p-4 py-2 text-center">
                        <span class="font-14 text-black fw-bold">
                            تعداد درخواست ها
                        </span>
                        </div>
                        <p class="font-14 text-white text-end mt-lg-4 mt-5 fw-bold">4 عدد</p>
                    </div>
                    <div class="new-title-page position-relative pe-3 pb-2">
                        <div
                            class="new-title-page-child shadow position-absolute start-0 top-0 px-3 p-4 py-2 text-center">
                        <span class="font-14 text-black fw-bold">
                            مجموع حمایت ها
                        </span>
                        </div>
                        <p class="font-14 text-white text-end mt-lg-4 mt-5 fw-bold">67 عدد</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-9 order-lg-0 order-1">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="card text-center project-branch-card position-relative text-muted py-2">
                            <div class="position-absolute top-0 start-0">
                                <p class="detail-box bg-warning mb-0 text-black px-3 ps-4 py-2 font-12 fw-bold">
                                    درخواست 1
                                </p>
                            </div>
                            <span>
                                عنوان درخواست
                                <span class="fw-bold text-danger">(ضروری)</span>
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-5 mt-lg-0 mt-3">
                        <div class="card text-center project-branch-card position-relative text-muted py-2">
                            <div class="position-absolute top-0 start-0">
                                <p class="detail-box bg-site mb-0 text-white px-3 ps-4 py-2 font-12 fw-bold">
                                    نوع درخواست
                                </p>
                            </div>
                            نیروی کار
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <div class="card project-branch-card border card-body">
                            <p class="card-text font-14 text-muted">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای
                                شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می
                                باشد
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 order-lg-1 order-0 mb-lg-0 mb-3">
                <form>
                    <fieldset class="form-floating">
                        <textarea class="form-control" placeholder="شرح حمایت"></textarea>
                        <label class="form-label">شرح حمایت</label>
                    </fieldset>
                    <button class="btn btn-site w-100 mt-3">ثبت پاسخ</button>
                </form>
            </div>
        </div>
        <div class="row justify-content-center align-items-center mt-5">
            <div class="col-lg-9 order-lg-0 order-1">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="card text-center project-branch-card position-relative text-muted py-2">
                            <div class="position-absolute top-0 start-0">
                                <p class="detail-box bg-warning mb-0 text-black px-3 ps-4 py-2 font-12 fw-bold">
                                    درخواست 1
                                </p>
                            </div>
                            <span>
                                عنوان درخواست
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-5 mt-lg-0 mt-3">
                        <div class="card text-center project-branch-card position-relative text-muted py-2">
                            <div class="position-absolute top-0 start-0">
                                <p class="detail-box bg-site mb-0 text-white px-3 ps-4 py-2 font-12 fw-bold">
                                    نوع درخواست
                                </p>
                            </div>
                            نیروی کار
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <div class="card project-branch-card border card-body">
                            <p class="card-text font-14 text-muted">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای
                                شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می
                                باشد
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 order-lg-1 order-0 mb-lg-0 mb-3">
                <form>
                    <fieldset class="form-floating">
                        <textarea class="form-control" placeholder="شرح حمایت"></textarea>
                        <label class="form-label">شرح حمایت</label>
                    </fieldset>
                    <button class="btn btn-site w-100 mt-3">ثبت پاسخ</button>
                </form>
            </div>
        </div>
    </main>
@endsection

