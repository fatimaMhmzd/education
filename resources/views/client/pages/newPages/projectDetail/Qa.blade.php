@extends('client.layout.total')

@section('style')
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
                            تعداد پرسش ها
                        </span>
                        </div>
                        <p class="font-14 text-white text-end mt-lg-4 mt-5 fw-bold">4 پرسش</p>
                    </div>
                    <div class="new-title-page position-relative pe-3 pb-2">
                        <div
                            class="new-title-page-child shadow position-absolute start-0 top-0 px-3 p-4 py-2 text-center">
                        <span class="font-14 text-black fw-bold">
                            مجموع زمان پاسخ ها
                        </span>
                        </div>
                        <p class="font-14 text-white text-end mt-lg-4 mt-5 fw-bold">67 پاسخ</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="qa">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-10 order-lg-0 order-1">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="card text-center project-branch-card position-relative text-muted py-2">
                                <div class="position-absolute top-0 start-0">
                                    <p class="detail-box bg-warning mb-0 text-black px-3 ps-4 py-2 font-12 fw-bold">
                                        نام کاربر
                                    </p>
                                </div>
                                عنوان پرسش
                            </div>
                        </div>
                        <div class="col-lg-5 mt-lg-0 mt-3">
                            <div class="card text-center project-branch-card position-relative text-muted py-2">
                                <div class="position-absolute top-0 start-0">
                                    <p class="detail-box bg-site mb-0 text-white px-3 ps-4 py-2 font-12 fw-bold">
                                        در ارتباط با
                                    </p>
                                </div>
                                بودجه بندی
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
                <div class="col-lg-2 order-lg-1 order-0 mb-lg-0 mb-3 text-center">
                    <button class="btn btn-site">ثبت پرسش</button>
                </div>
            </div>
            <p class="card-text mt-3 mb-0 font-14">پاسخ:</p>
            <div class="card project-branch-card border card-body border border-success">
                <p class="card-text font-14 text-muted">
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                    گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای
                    شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می
                    باشد
                </p>
            </div>
        </div>
        <div class="qa mt-5">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-10 order-lg-0 order-1">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="card text-center project-branch-card position-relative text-muted py-2">
                                <div class="position-absolute top-0 start-0">
                                    <p class="detail-box bg-warning mb-0 text-black px-3 ps-4 py-2 font-12 fw-bold">
                                        نام کاربر
                                    </p>
                                </div>
                                عنوان پرسش
                            </div>
                        </div>
                        <div class="col-lg-5 mt-lg-0 mt-3">
                            <div class="card text-center project-branch-card position-relative text-muted py-2">
                                <div class="position-absolute top-0 start-0">
                                    <p class="detail-box bg-site mb-0 text-white px-3 ps-4 py-2 font-12 fw-bold">
                                        در ارتباط با
                                    </p>
                                </div>
                                بودجه بندی
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
                <div class="col-lg-2 order-lg-1 order-0 mb-lg-0 mb-3 text-center">
                    <button class="btn btn-site">ثبت پرسش</button>
                </div>
            </div>
        </div>
    </main>
@endsection

