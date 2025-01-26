@extends('client.layout.total')

@section('style')
    <style>
        .new-title-page {
            height: 85px;
        }
    </style>
@stop

@section('content')
    <main class="container" id="score">
        <x-project-header></x-project-header>
        <div class="row justify-content-center my-5">
            <div class="col-lg-6">
                <div class="d-lg-flex d-block justify-content-center px-md-0 px-5">
                    <div class="new-title-page position-relative me-lg-3 pe-3 pt-lg-0 pt-2 pb-4">
                        <div
                            class="new-title-page-child shadow position-absolute start-0 top-0 px-3 p-4 py-2 text-center">
                        <span class="font-14 text-black fw-bold">
                            تعداد کارت های صادر شده
                        </span>
                        </div>
                        <p class="font-14 text-white text-end mt-5 fw-bold">17 کارت</p>
                    </div>
                    <div class="new-title-page position-relative me-lg-3 pe-3 pt-lg-0 pt-2 pb-4 mt-lg-0 mt-3">
                        <div
                            class="new-title-page-child shadow position-absolute start-0 top-0 px-3 p-4 py-2 text-center">
                        <span class="font-14 text-black fw-bold">
                            تعداد نهاد های صادر شده
                        </span>
                        </div>
                        <p class="font-14 text-white text-end mt-5 fw-bold">3 نهاد</p>
                    </div>
                </div>
            </div>
        </div>
        <p class="card-text text-center font-14 text-muted mt-5 px-lg-0 px-5">
            نهاد های اجتماعی برای حمایت از پروژه شما می توانند اقدام به صورت کارت امتیازهای متنوعی نمایند. کارت های
            امتیاز این امکان را برای حامیان ایجاد میکند که با پرداخت مبلغی معین، درصد مشخصی تیز از حساب نهاد های اجتماعی
            به صورت خودکار به پروژه پرداخت گردد.
        </p>
        <div class="row justify-content-center align-items-center mt-5">
            <div class="col-lg-3 mb-3">
                <div class="card card-score">
                    <div class="card-body text-center align-middle pt-5">
                        <span class="card-text fw-bold price h3">1000000</span>
                        تومان
                    </div>
                    <div class="card-footer text-center font-14 text-white mt-2">
                        +
                        <span class="price h4 fw-bold ">2000000</span>
                        تومان از طرف نهاد حامی
                    </div>
                </div>
                <p class="card-text font-14 text-center mt-1 text-muted">12 عدد کارت موجود است !</p>
            </div>
            <div class="col-lg-3 mb-3">
                <div class="card card-score">
                    <div class="card-body text-center align-middle pt-5">
                        <span class="card-text fw-bold price h3">1000000</span>
                        تومان
                    </div>
                    <div class="card-footer text-center font-14 text-white mt-2">
                        +
                        <span class="price h4 fw-bold ">2000000</span>
                        تومان از طرف نهاد حامی
                    </div>
                </div>
                <p class="card-text font-14 text-center mt-1 text-muted">12 عدد کارت موجود است !</p>
            </div>
            <div class="col-lg-3 mb-3">
                <div class="card card-score">
                    <div class="card-body text-center align-middle pt-5">
                        <span class="card-text fw-bold price h3">1000000</span>
                        تومان
                    </div>
                    <div class="card-footer text-center font-14 text-white mt-2">
                        +
                        <span class="price h4 fw-bold ">2000000</span>
                        تومان از طرف نهاد حامی
                    </div>
                </div>
                <p class="card-text font-14 text-center mt-1 text-muted">12 عدد کارت موجود است !</p>
            </div>
        </div>
    </main>
@endsection

