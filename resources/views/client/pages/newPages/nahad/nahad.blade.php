@extends('client.layout.total')

@section('style')
    <style>
        .modal-content, .modal-header {
            background-color: #fEFEFE !important;
            box-shadow: none !important;
        }
    </style>
@stop

@section('content')
    <main class="container">
        <x-nahad-header></x-nahad-header>
        <div class="details nahad-page">
            <p class="card-text mt-3">
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و
                متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد کتابهای زیادی در شصت و سه درصد گذشته حال و آینده
                شناخت فراوان جامعه و متخصصان را می طلبد
            </p>
        </div>
        <div class="details nahad-page d-none">
            <x-nahad-header id="{{$data->data->id}}"></x-nahad-header>
            {{-- کارت ها همون کارت های پروژه صفحه اول قراره باشن بی زحمت همون اسلایدر صفحه اول رو بزارین خودم نزاشتم چون کامپوننتش لایو شدست --}}
        </div>
        <div class="details nahad-page d-none">
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
        </div>
        <div class="details nahad-page d-none">
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
            <div class="d-flex justify-content-end mb-4">
                <button class="btn btn-site" data-bs-target="#qa-modal" data-bs-toggle="modal">ثبت پرسش</button>
            </div>
            <div class="qa mb-5">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-12 order-lg-0 order-1">
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
                                        گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                        برای
                                        شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می
                                        باشد
                                    </p>
                                </div>
                            </div>
                        </div>
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
        </div>
        <div class="details nahad-page d-none">
            <div class="row mt-5 justify-content-center align-items-center">
                <div class="col-lg-5">
                    <div class="d-flex justify-content-center">
                        <div class="new-title-page position-relative">
                            <div
                                class="new-title-page-child shadow position-absolute start-0 top-0 px-3 p-4 py-2 text-center">
                        <span class="font-14 text-black fw-bold">
                            پیشرفت پروژه
                        </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 mt-lg-0 mt-4 text-center">
                    <div class="row justify-content-center">
                        <div class="col-12 text-center">
                            <div class="row">
                                <div class="col-lg-8 border-end border-1">
                                    <h6 class="font-14 text-46 mb-3 border-bottom border-1 py-3">پیشرفت نهاد با
                                        توجه به برنامه ریزی</h6>
                                    <div id="myBarr" style="height: 400px">
                                        <canvas id="myBar"></canvas>
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-md-0 mt-3">
                                    <h6 class="font-14 text-46 mb-3 border-bottom border-1 py-3">پیشرفت کلی نهاد تا
                                        به امروز</h6>
                                    <div style="height: 174px">
                                        <canvas id="myCircle"></canvas>
                                    </div>
                                    <div class="d-block mt-4">
                                        <span class="font-12 text-46 float-start">شروع نهاد:</span>
                                        <span class="font-12 text-46 float-end">1401/12/21</span>
                                    </div>
                                    <div class="d-block" style="margin-top: 60px">
                                        <span class="font-12 text-75 float-start">پایان نهاد:</span>
                                        <span class="font-12 text-75 float-end">1406/8/5</span>
                                    </div>
                                    <div class="d-flex justify-content-between w-100 border-top border-1 py-4"
                                         style="margin-top: 100px">
                                        <p class="font-12 text-46 float-start">مبلغ جمع شده:</p>
                                        <br>
                                        <p class="font-12 float-end"
                                           style="color:#1FC96E"> 50000 تومان</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5 row justify-content-center align-items-center">
                <div class="col-lg-7 order-lg-0 order-1 text-center">
                    <div class="d-flex justify-content-around py-1 border-bottom border-1">
                        <h6 class="font-14 text-46 mb-3">5 نفر اهدا کننده</h6>
                        <h6 class="font-14 text-46 mb-3">5 نفر همکار</h6>
                    </div>
                    <div class="mt-5" style="height: 400px" id="myBarr2">
                        <canvas id="myChart" style="transform: rotate(360deg)"></canvas>
                    </div>
                </div>
                <div class="col-lg-5 order-lg-1 order-0 mb-lg-0 mb-4">
                    <div class="d-flex justify-content-center">
                        <div class="new-title-page position-relative">
                            <div
                                class="new-title-page-child shadow position-absolute start-0 top-0 px-3 p-4 py-2 text-center">
                        <span class="font-14 text-black fw-bold">
                            میزان مشارکت
                        </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="details nahad-page d-none">
            <div class="row justify-content-center my-5">
                <div class="col-lg-6">
                    <div class="d-flex justify-content-center">
                        <div class="new-title-page position-relative me-3 pe-3 pb-2">
                            <div
                                class="new-title-page-child shadow position-absolute start-0 top-0 px-3 p-4 py-2 text-center">
                        <span class="font-14 text-black fw-bold">
                            تعداد یادداشت ها
                        </span>
                            </div>
                            <p class="font-14 text-white text-end mt-lg-4 mt-5 fw-bold">4 عدد</p>
                        </div>
                        <div class="new-title-page position-relative pe-3 pb-2">
                            <div
                                class="new-title-page-child shadow position-absolute start-0 top-0 px-3 p-4 py-2 text-center">
                        <span class="font-14 text-black fw-bold">
                            مجموع بازخورد
                        </span>
                            </div>
                            <p class="font-14 text-white text-end mt-lg-4 mt-5 fw-bold">67 عدد</p>
                        </div>
                    </div>
                </div>
            </div>
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
                                عنوان یادداشت
                            </div>
                        </div>
                        <div class="col-lg-5 mt-lg-0 mt-3">
                            <div class="card text-center project-branch-card position-relative text-muted py-2">
                                <div class="position-absolute top-0 start-0">
                                    <p class="detail-box bg-site mb-0 text-white px-3 ps-4 py-2 font-12 fw-bold">
                                        نوع یادداشت
                                    </p>
                                </div>
                                گزارش کار
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
                        <p class="font-12 card-text text-end">تاریخ یادداشت 1402/2/2</p>
                    </div>
                </div>
                <div class="col-lg-2 order-lg-1 order-0 mb-lg-0 mb-3 text-center">
                    <div class="d-lg-block d-flex justify-content-center">
                        <img alt="like" src="{{asset('/sources/image/like.png')}}"
                             class="img-fluid branch-icon-img likes-icon">
                        <p class="text-success font-14 mb-1 mt-2 me-lg-0 me-2">12</p>
                        <img alt="dislike" src="{{asset('/sources/image/dislike.png')}}"
                             class="img-fluid branch-icon-img likes-icon">
                        <p class="text-danger font-14 mb-0 mt-2 me-lg-0 ms-2">12</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center align-items-center mt-5">
                <div class="col-lg-10 order-lg-0 order-1">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="card text-center project-branch-card position-relative text-muted py-2">
                                <div class="position-absolute top-0 start-0">
                                    <p class="detail-box bg-warning mb-0 text-black px-3 ps-4 py-2 font-12 fw-bold">
                                        نام کاربر
                                    </p>
                                </div>
                                <span>
                              عنوان یادداشت
                            <span class="text-danger fw-bold">(مهم)</span>
                            </span>
                            </div>
                        </div>
                        <div class="col-lg-5 mt-lg-0 mt-3">
                            <div class="card text-center project-branch-card position-relative text-muted py-2">
                                <div class="position-absolute top-0 start-0">
                                    <p class="detail-box bg-site mb-0 text-white px-3 ps-4 py-2 font-12 fw-bold">
                                        نوع یادداشت
                                    </p>
                                </div>
                                گزارش کار
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
                        <p class="font-12 card-text text-end">تاریخ یادداشت 1402/2/2</p>
                    </div>
                </div>
                <div class="col-lg-2 order-lg-1 order-0 mb-lg-0 mb-3 text-center">
                    <div class="d-lg-block d-flex justify-content-center">
                        <img alt="like" src="{{asset('/sources/image/like.png')}}"
                             class="img-fluid branch-icon-img likes-icon">
                        <p class="text-success font-14 mb-1 mt-2 me-lg-0 me-2">12</p>
                        <img alt="dislike" src="{{asset('/sources/image/dislike.png')}}"
                             class="img-fluid branch-icon-img likes-icon">
                        <p class="text-danger font-14 mb-0 mt-2 me-lg-0 ms-2">12</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="details nahad-page d-none">
            <div class="row justify-content-center my-5">
                <div class="col-lg-6">
                    <div class="d-flex justify-content-center">
                        <div class="new-title-page position-relative me-3 pe-3 pb-2">
                            <div
                                class="new-title-page-child shadow position-absolute start-0 top-0 px-3 p-4 py-2 text-center">
                        <span class="font-14 text-black fw-bold">
                            تعداد کل حامیان
                        </span>
                            </div>
                            <p class="font-14 text-white text-end mt-lg-4 mt-5 fw-bold"> 235 حامی</p>
                        </div>
                        <div class="new-title-page position-relative pe-3 pb-2">
                            <div
                                class="new-title-page-child shadow position-absolute start-0 top-0 px-3 p-4 py-2 text-center">
                        <span class="font-14 text-black fw-bold">
                            نهاد های حامی
                        </span>
                            </div>
                            <p class="font-14 text-white text-end mt-lg-4 mt-5 fw-bold"> 4 نهاد</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="support">
                <ul class="nav nav-pills nav-fill">
                    <li class="nav-item me-2 ">فوق ویژه
                        <div class="p-2 rounded-3 mt-2" style="background-color: #A0E426;">
                        </div>
                    </li>
                    <li class="nav-item me-2">ویژه
                        <div class="p-2 rounded-3 mt-2" style="background-color: #52E3E1;">
                        </div>

                    </li>
                    <li class="nav-item me-2">سطح 2
                        <div class="p-2 rounded-3 mt-2" style="background-color: #FFB7FF;">
                        </div>

                    </li>
                    <li class="nav-item me-2">سطح 1
                        <div class="p-2 rounded-3 mt-2" style="background-color: #FBBC3E;">
                        </div>

                    </li>
                    <li class="nav-item me-2">معمولی
                        <div class="p-2 rounded-3 mt-2" style="background-color: #C6C6C6;">
                        </div>

                    </li>
                </ul>
                {{--                @foreach($allLends as $item)--}}
                {{--                    <div class="card border-1 mt-5 mb-5 px-3 pt-1"--}}
                {{--                         style="font-size: 14px; height: 79px;box-shadow: 1px 1px 39px 8px #FFF6E7 inset;background-color: #FFFBF5;">--}}
                {{--                        <a @if($item->legalOrReal == 1) href="{{route("nahad_InstitutionDetail",$item->id)}}" @else href="{{route("publicProfile",$item->id)}}" @endif>--}}
                {{--                            <div class="row align-items-center ">--}}
                {{--                                <div class="col-1 mt-1">--}}
                {{--                                    @if($item->image)--}}
                {{--                                        <div style="background-image: url({{$item->image}});background-size: cover;--}}
                {{--                                        background-repeat: no-repeat;background-position: center;height: 56px;width: 56px"--}}
                {{--                                             class="rounded-circle"></div>--}}
                {{--                                    @else--}}
                {{--                                        <div style="background-image: url('/indexImages/icon-home-page/Ellipse 155.png');background-size: cover;--}}
                {{--                                        background-repeat: no-repeat;background-position: center;height: 56px;width: 56px"--}}
                {{--                                             class="rounded-circle"></div>--}}
                {{--                                    @endif--}}
                {{--                                </div>--}}
                {{--                                <div class="col-md-11 col-10 ms-md-0 ms-4 mt-2">--}}
                {{--                                    <h6 class="circle-title card-title ms-2 font-14">{{$item->user}}</h6>--}}
                {{--                                    <div class="d-flex justify-content-center"--}}
                {{--                                         style="margin-top: -17px">--}}
                {{--                                                                  <span class="text-center">{{number_format($item->amount)}}--}}
                {{--                                                                      <br>--}}
                {{--                                                                      <span class="font-12 text-75 mt-1">تومان</span>--}}
                {{--                                                                  </span>--}}
                {{--                                    </div>--}}
                {{--                                    <div--}}
                {{--                                        class="d-flex justify-content-end align-items-center"--}}
                {{--                                        style="margin-top: -35px">--}}
                {{--                                        <span class="font-14 text-46">{{$item->date}}</span>--}}
                {{--                                    </div>--}}
                {{--                                    <div class="d-flex ms-2" style="margin-top: -5px">--}}
                {{--                                        @if($item->amount < 10000000)--}}
                {{--                                            <div class="show-grow  me-2"--}}
                {{--                                                 style="background-color: #C6C6C6;"></div>--}}
                {{--                                            <span>معمولی</span>--}}
                {{--                                        @elseif(10000000 <= $item->amount && $item->amount < 50000000)--}}
                {{--                                            <div class="show-grow me-2"--}}
                {{--                                                 style="background-color: #FBBC3E;"></div>--}}
                {{--                                            <span>سطح 1</span>--}}
                {{--                                        @elseif( 50000000 <= $item->amount && $item->amount < 100000000)--}}
                {{--                                            <div class="show-grow me-2"--}}
                {{--                                                 style="background-color: #FFB7FF;"></div>--}}
                {{--                                            <span>سطح 2</span>--}}
                {{--                                        @elseif( 100000000 <= $item->amount && $item->amount < 200000000)--}}
                {{--                                            <div class="show-grow me-2"--}}
                {{--                                                 style="background-color: #52E3E1;"></div>--}}
                {{--                                            <span>ویژه</span>--}}
                {{--                                        @elseif(200000000 <= $item->amount && $item->amount < 500000000)--}}
                {{--                                            <div class="show-grow me-2"--}}
                {{--                                                 style="background-color: #A0E426;"></div>--}}
                {{--                                            <span>فوق ویژه</span>--}}
                {{--                                        @endif--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </a>--}}
                {{--                    </div>--}}
                {{--                @endforeach--}}
            </div>
        </div>
        <div class="details nahad-page d-none">
            <div class="form mt-5">
                <form>
                    <fieldset class="form-floating">
                        <textarea class="form-control" placeholder="نظر شما"></textarea>
                        <label class="form-label">نظر شما</label>
                    </fieldset>
                    <div class="d-md-flex justify-content-end align-items-center mt-3">
                    <span class="align-middle font-12 text-muted me-3">
                        درخواست شما بعد از بررسی توسط کارشناسان در اختیار مدیر پروژه قرار میگیرد.
                    </span>
                        <button class="btn btn-site mt-md-0 mt-3">افزودن نظر</button>
                    </div>
                    <div class="comments mt-5">
                        <div class="card project-branch-card py-4 pt-2 px-3 mb-3">
                            <div class="position-absolute top-0 start-0">
                                <p class="detail-box bg-warning mb-0 text-black px-3 ps-4 p py-2 font-12 fw-bold">
                                    رضا مهوشی
                                </p>
                            </div>
                            <div class="d-flex justify-content-end">
                            <span class="font-12 text-muted">
                                تاریخ درج نظر 1402/2/2/2
                            </span>
                            </div>
                            <p class="font-14 text-muted card-text mt-3">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است
                                چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="details nahad-page d-none">
            <div class="row justify-content-center my-5">
                <p class="card-text text-center font-14 text-muted">
                    شما می توانید جهت همکاری با صاحب پروژه درخواست خود را با توضیحات مورد نیاز ثبت نمایید !
                </p>
                <div class="col-lg-6">
                    <div class="d-flex justify-content-center">
                        <div class="new-title-page position-relative me-3 pe-3 pb-2">
                            <div
                                class="new-title-page-child shadow position-absolute start-0 top-0 px-3 p-4 py-2 text-center">
                        <span class="font-14 text-black fw-bold">
                            ثبت شده
                        </span>
                            </div>
                            <p class="font-14 text-white text-end mt-lg-4 mt-5 fw-bold"> 4 درخواست</p>
                        </div>
                        <div class="new-title-page position-relative pe-3 pb-2">
                            <div
                                class="new-title-page-child shadow position-absolute start-0 top-0 px-3 p-4 py-2 text-center">
                        <span class="font-14 text-black fw-bold">
                            تایید شده
                        </span>
                            </div>
                            <p class="font-14 text-white text-end mt-lg-4 mt-5 fw-bold"> 4 درخواست</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form">
                <form>
                    <fieldset class="form-floating">
                        <textarea class="form-control" placeholder="درخواست همکاری"></textarea>
                        <label class="form-label">درخواست همکاری</label>
                    </fieldset>
                    <div class="d-md-flex justify-content-end align-items-center mt-3">
                    <span class="align-middle font-12 text-muted me-3">
                        درخواست شما بعد از بررسی توسط کارشناسان در اختیار مدیر پروژه قرار میگیرد.
                    </span>
                        <button class="btn btn-site mt-md-0 mt-3">ثبت درخواست</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="details nahad-page d-none">
            <p class="card-text text-center font-14 text-muted mt-5">
                در صورت شکایت یا ثبت تخلف می توانید شکایت یا گزارش تخلف خود را در این بخش ثبت نمایید !
            </p>
            <div class="form">
                <form>
                    <fieldset class="form-floating">
                        <textarea class="form-control" placeholder="ثبت تخلف / شکایت"></textarea>
                        <label class="form-label">ثبت تخلف / شکایت</label>
                    </fieldset>
                    <div class="d-md-flex justify-content-end align-items-center mt-3">
                    <span class="align-middle font-12 text-muted me-3">
                        درخواست شما بعد از بررسی توسط کارشناسان در اختیار مدیر پروژه قرار میگیرد.
                    </span>
                        <button class="btn btn-site mt-md-0 mt-3 px-4">ارسال</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <div class="modal fade" id="qa-modal">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header justify-content-between align-items-center">
                    <span class="modal-title">ثبت پرسش</span>
                    <i class="fas fa-close" data-bs-dismiss="modal"></i>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-6 mb-4">
                                <fieldset class="form-floating">
                                    <input type="text" class="form-control" placeholder="عنوان">
                                    <label class="form-label">عنوان</label>
                                </fieldset>
                            </div>
                            <div class="col-6 mb-4">
                                <fieldset class="form-floating">
                                    <input type="text" class="form-control" placeholder="در ارتباط با">
                                    <label class="form-label">در ارتباط با</label>
                                </fieldset>
                            </div>
                            <div class="col-12 mb-4">
                                <fieldset class="form-floating">
                                    <textarea class="form-control" placeholder="پرسش"></textarea>
                                    <label class="form-label">پرسش</label>
                                </fieldset>
                            </div>
                            <div>
                                <button class="btn btn-site">ثبت پرسش</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@section('script')
    <script>
        let buttons = document.querySelectorAll('.nahad-toggle');
        let sections = document.querySelectorAll('.nahad-page');
        buttons.forEach((item, counter) => {
            item.addEventListener('click', () => {
                for (let i = 0; i < buttons.length; i++) {
                    buttons[i].classList.remove('text-site')
                    buttons[i].classList.add('text-black')
                    buttons[i].classList.remove('fw-bold')
                }
                item.classList.remove('text-black');
                item.classList.add('text-site');
                item.classList.add('fw-bold');
                sections.forEach((section, index) => {
                    if (counter === index) {
                        section.classList.remove('d-none');
                    } else {
                        section.classList.add('d-none');
                    }
                })
            })
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart');
        const bar = document.getElementById('myBar');
        const circle = document.getElementById('myCircle');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: [''],
                datasets: [
                    {
                        label: 'جمع کل مبلغ حمایت',
                        data: [30, 40, 40],
                        borderWidth: 1
                    },
                    {
                        label: 'جمع روزانه مبلغ حمایت',
                        data: [30, 40, 40],
                        borderWidth: 1
                    }
                ]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                maintainAspectRatio: false,
            }
        });
        new Chart(bar, {
            type: 'bar',
            data: {
                labels: [1401, 1402, 1403, 1405, 1406],
                datasets: [
                    {
                        label: 'نمودار',
                        data: [0, 40, 60, 70, 80, 100],
                        borderWidth: 1,
                        backgroundColor: "#5E457E",
                        borderRadius: "20px",
                    },
                    {
                        label: 'نمودار',
                        data: [0, 20, 50, 60, 90, 100],
                        borderWidth: 1
                    }
                ],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                maintainAspectRatio: false,
            }
        });
        new Chart(circle, {
            type: 'doughnut',
            data: {
                datasets: [{
                    label: 'پیشرفت',
                    data: [50, 50,],
                    backgroundColor: [
                        "#5E457E",
                        '#FDFEFF',
                    ],
                    hoverOffset: 4
                }]
            },
            options: {
                maintainAspectRatio: false,
            }

        });
    </script>
@endsection
