{{--@inject('shopCart', 'Modules\Shopcart\Entities\FactorItem')--}}
@extends('client.layout.total')
@section('style')
    <link rel="stylesheet" href="/newthem/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/newthem/css/owl.theme.default.min.css">
@stop

@section('content')

    <section id="tools">
        <div class="container">
            <ul class="list-group list-group-horizontal tools-menu">
                <li class="list-group-item border-0 rounded-0 border-end tool-select" style="background-color: #F050AE !important;">
                    <a href="{{route('index')}}">
                        <div class="d-inline-flex align-items-center" style="margin:3px">
                            <svg width="24" height="24" class="me-2 vertical-td" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.02 2.83821L3.63 7.03821C2.73 7.73821 2 9.22821 2 10.3582V17.7682C2 20.0882 3.89 21.9882 6.21 21.9882H17.79C20.11 21.9882 22 20.0882 22 17.7782V10.4982C22 9.28821 21.19 7.73821 20.2 7.04821L14.02 2.71821C12.62 1.73821 10.37 1.78821 9.02 2.83821Z" stroke="#FDFEFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 17.9922V14.9922" stroke="#FDFEFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span class="font-14 vertical-td" style="color:#FDFEFF">خانه آموزش</span>
                        </div>
                    </a>
                </li>
                <li class="list-group-item border-0 rounded-0 border-end">
                    <a href="#">
                        <div class="d-inline-flex align-items-center" style="margin:3px">
                            <svg width="24" height="24" class="me-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2C9.23858 2 7 4.23858 7 7C7 9.76142 9.23858 12 12 12Z" stroke="#FDFEFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M20.5901 22C20.5901 18.13 16.7402 15 12.0002 15C7.26015 15 3.41016 18.13 3.41016 22" stroke="#FDFEFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span class="font-14 vertical-td" style="color:#FDFEFF">پروفایل آموزشی</span>
                        </div>
                    </a>
                </li>
                <li class="list-group-item border-0 d-md-inline-block d-none rounded-0 border-end dropdown" style="position: relative">
                    <a href="#">
                        <div class="d-inline-flex align-items-center" data-bs-toggle="collapse" data-bs-target="#cart-collapse" style="margin:3px">
                            <svg width="24" height="24" class="me-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.5 7.66952V6.69952C7.5 4.44952 9.31 2.23952 11.56 2.02952C14.24 1.76952 16.5 3.87952 16.5 6.50952V7.88952" stroke="#FDFEFF" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8.99983 22H14.9998C19.0198 22 19.7398 20.39 19.9498 18.43L20.6998 12.43C20.9698 9.99 20.2698 8 15.9998 8H7.99983C3.72983 8 3.02983 9.99 3.29983 12.43L4.04983 18.43C4.25983 20.39 4.97983 22 8.99983 22Z" stroke="#FDFEFF" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M15.4955 12H15.5045" stroke="#FDFEFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8.49451 12H8.50349" stroke="#FDFEFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span class="font-14 vertical-td" style="color:#FDFEFF">سبد خرید <i class="fa-solid fa-angle-down font-12 vertical-td"></i> </span>
                        </div>
                    </a>
                    <div class="collapse" id="cart-collapse" style="position: absolute;right: -15px;z-index: 32423">
                        <div class="shop-menu pb-0 font-14 pt-0 border-0" style="width: 176px;right: -65px !important;box-shadow: 2px 2px 9px 0px #794BA426; border-radius: 4px !important;" >
                            <div class="d-flex triangle-up"></div>
                            @if(isset($shopCart) and count($shopCart->shopCartItem()) != 0)
                            @foreach($shopCart->shopCartItem() as $item)
                                <div class="dropdown-item px-3 @if($loop->index == 0) mt-0 @else mt-2 @endif">
                                    <div class="d-flex">
                                        <div style="margin-right: -2px">
                                            <div style="background-image:url('{{$item->product->image}}') ;background-size: cover;background-position: center;background-repeat: no-repeat;width: 32px;height: 32px"></div>
                                        </div>
                                        <div class="w-100" style="margin-right: 11px;margin-top: -4px">
                                            <p class="font-12 text-46">{{$item->product->title}}</p>
                                            <div class="d-flex justify-content-between mb1" style="margin-top: 6px">
                                                <p class="font-10 text-75 price">{{$item->product->price}}</p>
                                                <p class="font-10 text-75">تومان</p>
                                            </div>
                                            <span class="float-end font-10" style="cursor: pointer;color: #F050AE;margin-top: 6px">
                                                ثبت نام
                                                <i class="fas fa-angle-left vertical-td" style="font-size: 9px"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            @endif
                            <div class="dropdown-item p-0" style="margin-top: 10px" onclick="window.open('{{--{{route('education_student_shoppingCart')}}--}}','_self')">
                                <div class="d-grid">
                                    <button class="btn" style="height: 34px;color:#FDFEFF ;background-color:#F050AE;border-radius: 0px 0px 4px 4px">
                                        <p class="font-12" >مشاهده سبد خرید</p>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item border-0 rounded-0 border-end">
                    <a href="{{route('education_allCourse')}}">
                        <div class="d-inline-flex align-items-center" style="margin:3px">
                            <span class="font-14 vertical-td" style="color:#FDFEFF">دوره‌ها و محصولات</span>
                        </div>
                    </a>
                </li>
                <li class="list-group-item border-0 rounded-0 border-end">
                    <a href="{{route('education_freeCourse')}}">
                        <div class="d-inline-flex align-items-center" style="margin:3px">
                            <span class="font-14 vertical-td" style="color:#FDFEFF">دوره‌های رایگان</span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <section class="first-card">
        <a href="#">
            <div class="education-fist-card"></div>
        </a>
    </section>

    <section class="container d-md-block d-none" style="margin-top: 80px;">
        <div class="row row-cols-6 justify-content-center">
            @foreach ($groups as $group)
                <div class="col me-5" style="height: 180px;width: 180px;">
                    <a href="{{ route('education_course', ['groupId'=>$group->id]) }}">
                        <div class="card text-center education-sm-card p-0 me-2">
                            <div class="inner-e-card">
                                <div class="text-center">
                                    <img src="{{ $group->image }}" class="img-fluid mt-3 rounded-circle"
                                         style="width: 108px;height: 108px;">
                                </div>
                                <div class="card-body text-center" style="margin-top: -5px;">
                                    <h6 class="card-text" style="font-size: 16px;">{{ $group->title }}</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>

    <section class="container mobile-card d-md-none d-block" style="margin-top: 80px;">
        <div class="row justify-content-center">
            @foreach($groups as $group)
                <div class="col-4 me-4" style="height: 140px;width: 140px;">
                    <div class="card text-center education-sm-card p-0 me-2">
                        <div class="inner-e-card">
                            <div class="text-center">
                                <img src="{{ $group->image }}" class="img-fluid mt-3 rounded-circle"
                                     style="width: 68px;height: 68px;">
                            </div>
                            <div class="card-body text-center" style="margin-top: -5px;">
                                <h6 class="card-text" style="font-size: 16px;">{{$group->title}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section style="margin-top: 80px;" class="container">
        <div class="carousel w-100 slide" data-bs-ride="carousel" id="education-carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="education-third-card card border-0">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7 col-9 education-gift">
                                    <div class="card-body">
                                        <h6 class="gift-title card-title">محصولات رایگان کارماران</h6>
                                        <p class="text-46 gift-text card-text mt-4">
                                            رسالت اصلی ما در بیشتر از یک نفر این است که دنیا
                                            را
                                            به جای
                                            بهتری برای زندگی تبدیل کنیم؛ برای همین، بسیاری از دوره‌هایمان را رایگان کرده‌ایم!
                                        </p>
                                        <button class="btn px-3 py-2 float-end mt-5 mb-5" style="background-color: #F050AE;height: 56px;">
                                            <a href="{{route('education_freeCourse')}}">
                                                دوره‌های رایگان
                                            </a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="education-third-card card border-0">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7 col-9 education-gift">
                                    <div class="card-body">
                                        <h6 class="gift-title card-title">محصولات رایگان کارماران</h6>
                                        <p class="text-46 gift-text card-text mt-4">
                                            رسالت اصلی ما در بیشتر از یک نفر این است که دنیا
                                            را
                                            به جای
                                            بهتری برای زندگی تبدیل کنیم؛ برای همین، بسیاری از دوره‌هایمان را رایگان کرده‌ایم!
                                        </p>
                                        <button class="btn px-3 py-2 float-end mt-5 mb-5" style="background-color: #F050AE;height: 56px;">
                                            <a href="{{route('education_freeCourse')}}">
                                                دوره‌های رایگان
                                            </a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container" style="margin-top: 80px;">
        <h5 style="font-size: 32px;margin-bottom: 49px;" class="text-46">محـــبــــوب‌ترین دوره‌ها</h5>
        {{--
                <div class="carousel slide mt-4 d-md-none d-block" id="education-seccond-carousel" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row justify-content-center">
                                <div class="col-3" style="width: 290px">
                                    <div class="card border-0" style="box-shadow: 2px 2px 9px 0px #794BA426;">
                                        <div class="off-div float-start text-center py-2">
                                            <p class="text-light">50%</p>
                                            <p class="text-light">Off</p>
                                        </div>
                                        <div class="card-image">
                                            <img src="/indexImages/Rectangle 2505.png" class="card-img">
                                        </div>
                                        <div class="card-body text-center">
                                            <h6 class="card-title" style="font-size: 18px;color: #1F1F1F;">
                                                دوره یادگیری ارز دیجیتال
                                            </h6>
                                            <p class="card-subtitle mt-2 text-75 font-14">
                                                آموزش ببینید مهارت کسب کنید.
                                            </p>
                                            <p class="card-text text-decoration-line-through text-75 font-14"
                                               style="margin-top: 26px;"> 14.900,000
                                                تومان</p>
                                            <p class="card-text" style="font-size: 18px;font-weight: 500;"> 14.900,000 تومان</p>
                                            <div class="d-grid mt-4">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-purple"
                                                            style="background-color: #F050AE;height: 44px;border-left:0.5px solid #FDFEFF;">
                                                        افزودن
                                                        به سبد
                                                        خرید
                                                    </button>
                                                    <button type="button" class="btn btn-purple p-0"
                                                            style="background-color: #F050AE;height: 44px;border-right:0.5px solid #FDFEFF;">
                                                        <img src="/indexImages/archive-add.png" style="vertical-align: middle;"
                                                             onclick="changeIcon(this)">
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row justify-content-center">
                                <div class="col-3" style="width: 290px">
                                    <div class="card border-0" style="box-shadow: 2px 2px 9px 0px #794BA426;">
                                        <div class="off-div float-start text-center py-2">
                                            <p class="text-light">50%</p>
                                            <p class="text-light">Off</p>
                                        </div>
                                        <div class="card-image">
                                            <img src="/indexImages/Rectangle 2505.png" class="card-img">
                                        </div>
                                        <div class="card-body text-center">
                                            <h6 class="card-title" style="font-size: 18px;color: #1F1F1F;">
                                                دوره یادگیری ارز دیجیتال
                                            </h6>
                                            <p class="card-subtitle mt-2 text-75 font-14">
                                                آموزش ببینید مهارت کسب کنید.
                                            </p>
                                            <p class="card-text text-decoration-line-through text-75 font-14"
                                               style="margin-top: 26px;"> 14.900,000
                                                تومان</p>
                                            <p class="card-text" style="font-size: 18px;font-weight: 500;"> 14.900,000 تومان</p>
                                            <div class="d-grid mt-4">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-purple"
                                                            style="background-color: #F050AE;height: 44px;border-left:0.5px solid #FDFEFF;">
                                                        افزودن
                                                        به سبد
                                                        خرید
                                                    </button>
                                                    <button type="button" class="btn btn-purple p-0"
                                                            style="background-color: #F050AE;height: 44px;border-right:0.5px solid #FDFEFF;">
                                                        <img src="/indexImages/archive-add.png" style="vertical-align: middle;"
                                                             onclick="changeIcon(this)">
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row justify-content-center">
                                <div class="col-3" style="width: 290px">
                                    <div class="card border-0" style="box-shadow: 2px 2px 9px 0px #794BA426;">
                                        <div class="off-div float-start text-center py-2">
                                            <p class="text-light">50%</p>
                                            <p class="text-light">Off</p>
                                        </div>
                                        <div class="card-image">
                                            <img src="/indexImages/Rectangle 2505.png" class="card-img">
                                        </div>
                                        <div class="card-body text-center">
                                            <h6 class="card-title" style="font-size: 18px;color: #1F1F1F;">
                                                دوره یادگیری ارز دیجیتال
                                            </h6>
                                            <p class="card-subtitle mt-2 text-75 font-14">
                                                آموزش ببینید مهارت کسب کنید.
                                            </p>
                                            <p class="card-text text-decoration-line-through text-75 font-14"
                                               style="margin-top: 26px;"> 14.900,000
                                                تومان</p>
                                            <p class="card-text" style="font-size: 18px;font-weight: 500;"> 14.900,000 تومان</p>
                                            <div class="d-grid mt-4">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-purple"
                                                            style="background-color: #F050AE;height: 44px;border-left:0.5px solid #FDFEFF;">
                                                        افزودن
                                                        به سبد
                                                        خرید
                                                    </button>
                                                    <button type="button" class="btn btn-purple p-0"
                                                            style="background-color: #F050AE;height: 44px;border-right:0.5px solid #FDFEFF;">
                                                        <img src="/indexImages/archive-add.png" style="vertical-align: middle;"
                                                             onclick="changeIcon(this)">
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        --}}
        <div class="carousel slide mt-4" id="education-carousel" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active pb-4" id="scroll-edu" style="width: 100%;overflow-x: scroll">
                    <div class="row-over d-flex flex-row flex-nowrap row">
                        @foreach ($products as $product)
                            <div class="col-3 me-3" style="width: 290px;">
                                <a href="{{ route('education_eduDetail', $product->id) }}">
                                    <div class="card border-1 p-3"
                                         style="width: 290px;border-color: #C6C6C6 !important;box-shadow: 2px 2px 9px 0px #794BA426;height: 492px">
                                        @if ($product->offPercent and $product->offPercent > 0)
                                            <div class="off-div float-start text-center py-2">
                                                <p class="text-light">{{ $product->offPercent }}%</p>
                                                <p class="text-light">Off</p>
                                            </div>
                                        @endif
                                        <div class="card-image">
                                            @if ($product->image)
                                                <div
                                                    style='border-radius:8px ;background-image: url({{ $product->image }});background-size: cover;background-position: center;background-repeat: no-repeat;height: 241px;'>
                                                </div>
                                            @else
                                                <div
                                                    style='border-radius: 8px;background-image: url("/indexImages/Rectangle 2505.png");background-size: cover;background-position: center;background-repeat: no-repeat;'>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="card-body text-center">
                                            <h6 class="card-title" style="font-size: 18px;color: #1F1F1F;">
                                                {{ $product->title }}
                                            </h6>
                                            <p class="card-subtitle mt-2 text-75 font-14">
                                                {!! $product->description !!}
                                            </p>
                                            <hr>
                                            <p class="card-text text-decoration-line-through text-75 font-14"
                                                style="margin-top: 23px;">
                                                {{ $product->price }} تومان
                                            </p>
                                            @if ($product->offPercent and $product->offPercent > 0)
                                                <p class="card-text" style="font-size: 18px;font-weight: 500;">
                                                    {{ round(($product->price * (100 - $product->offPercent)) / 100) }}
                                                    تومان
                                                    تومان</p>
                                            @endif
                                            <div class="d-grid mt-3">
                                                <div class="btn-group">
                                                    <a href="{{route('shopcart_add',$product->id)}}" type="button" class="btn btn-purple px-4" style="background-color: #F050AE;height: 44px;border-left:0.5px solid #FDFEFF;">
                                                        افزودن به سبد خرید
                                                    </a>
                                                    <button type="button" class="btn btn-purple p-0 px-2 ps-2"
                                                            style="background-color: #F050AE;height: 44px;border-right:0.5px solid #FDFEFF;">
                                                        <img src="/indexImages/archive-add.png" class="img-fluid"
                                                             style="vertical-align: middle;" onclick="changeIcon(this)">
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <button class="carousel-control-next btn-filter d-md-inline-block d-none"
                    onclick="this.style.opacity='0.5'"></button>
        </div>
    </section>

    <section class="container mb-5" style="position: relative;margin-top: 80px;">
        <h5 style="font-size: 32px;" class='text-46'> تازه‌ترین دوره‌ها</h5>
        <div class="row mt-5 d-md-flex d-none">
            <div class="col-md-4">
                <ul class="list-group text-center">
                    @foreach ($products as $product)
                        <div class="new-div-li" id="first-div">
                            <li class="ul-li new-li list-group-item border-0 p-2 mt-3 list-items" id="first-li"
                                onclick="selectUL({{ $loop->index }})">
                                {{ $product->title }}
                            </li>
                        </div>
                    @endforeach
                    {{-- <div class="new-div-li" id="seccond-div">
                        <li class="ul-li new-li mt-3 list-group-item p-2 border-0" id="seccond-li"
                            onclick="showSccond()">
                            دوره دیجیتال مارکتینگ
                        </li>
                    </div>
                    <div class="new-div-li" id="third-div">
                        <li class="ul-li new-li mt-3 list-group-item p-2 border-0" id="third-li" onclick="showthird()">
                            دوره دیجیتال مارکتینگ
                        </li>
                    </div>
                    <div class="new-div-li" id="fours-div">
                        <li class="ul-li new-li mt-3 list-group-item p-2 border-0" id="fours-li" onclick="showfours()">
                            دوره دیجیتال مارکتینگ
                        </li>
                    </div>
                    <div class="new-div-li" id="fives-div">
                        <li class="ul-li new-li mt-3 list-group-item p-2 border-0" id="fives-li" onclick="showFives()">
                            دوره دیجیتال مارکتینگ
                        </li>
                    </div> --}}
                </ul>
            </div>
            <div class="col-1 circle-div">
                <div class="d-inline">
                    <div class="circle-div-small text-center">
                        <img src="/indexImages/export.png" class="circle-text">
                        <p class="" id="course-title">توسعه فردی</p>
                    </div>
                    <div class="circle-div-big">
                        <div style="position: relative;">
                            <img src="/indexImages/receipt-disscount.png" class="circle-img">
                            <span class="text-center circle-img-text" id="course-off-percent">61%</span>
                        </div>
                        <p class="circle-text-2 text-center text-75 text-decoration-line-through"
                           style="font-size: 14px;"
                           id="course-off-price"> 14.900,000 تومان</p>
                        <p class="text-center mt-2" style="font-size: 18px;" id="course-price"> 14.900,000 تومان</p>
                    </div>
                    <div class="circle-div-small circle-2 text-center">
                        <img src="/indexImages/timer.png" class="circle-text-3">
                        <p class="text-center" style="font-size: 18px;" id="course-time">210 دقیقه</p>
                    </div>
                </div>
            </div>
            <div class="new-cards-content col-md-8" style="position: relative;">
            </div>
            <a class="btn btn-new-cards py-3 px-4" id="request_course">ثبت نام و دریافت دوره</a>

        </div>
        {{--
    <div class="row mt-5 d-md-none d-flex">
        <div class="col-12">
            <div class="card">
                <div class="card-image">
                    <img src="/indexImages/Rectangle 2517.png" alt="" class="card-img">
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <div class="new-div-li" id="first-div">
                            <li class="ul-li new-li list-group-item border-0 p-2" id="first-li">
                                دوره تیم سازی
                            </li>
                        </div>
                        <div class="new-div-li" id="seccond-div">
                            <li class="ul-li new-li mt-3 list-group-item p-2 border-0" id="seccond-li">
                                دوره دیجیتال مارکتینگ
                            </li>
                        </div>
                        <div class="new-div-li" id="third-div">
                            <li class="ul-li new-li mt-3 list-group-item p-2 border-0" id="third-li">
                                دوره دیجیتال مارکتینگ
                            </li>
                        </div>
                        <div class="new-div-li" id="fours-div">
                            <li class="ul-li new-li mt-3 list-group-item p-2 border-0" id="fours-li">
                                دوره دیجیتال مارکتینگ
                            </li>
                        </div>
                        <div class="new-div-li" id="fives-div">
                            <li class="ul-li new-li mt-3 list-group-item p-2 border-0" id="fives-li">
                                دوره دیجیتال مارکتینگ
                            </li>
                        </div>
                    </ul>
                    <button class="btn py-3 px-4 mt-4 float-end" style="height: 56px;background-color: #F050AE;">ثبت
                        نام و دریافت دوره
                    </button>
                </div>
            </div>
        </div>
    </div>
    --}}
    </section>

    {{--    <section class="custom-shape-divider-top-1670302137" style="margin-top: 100px">--}}
    {{--        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">--}}
    {{--            <path--}}
    {{--                d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"--}}
    {{--                class="shape-fill"></path>--}}
    {{--        </svg>--}}
    {{--        <div class="container">--}}
    {{--            <div class="card border-0" style="background-color: #FFE3AD;">--}}
    {{--                <div class="card-body">--}}
    {{--                    <h2 class="card-title text-purple">هر آنچه از سرمایه گذاری باید بدانید</h2>--}}
    {{--                    <h6 class="card-text text-purple mt-4" style="line-height: 30px;">--}}
    {{--                        نگران از دست دادن فرصت‌های سرمایه‌گذاری نباشید. شرایط طرح‌های دلخواه خود را مشخص کنید، و بقیه را--}}
    {{--                        به کارماران بسپرید.--}}
    {{--                    </h6>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="row mt-5">--}}
    {{--                @foreach ($blogs as $blog)--}}
    {{--                    <div class="col-md-4 mt-md-0 mt-3">--}}
    {{--                        <div class="end-cards card p-1"--}}
    {{--                            style="background-image: url({{ $blog->mainImage }})!important;height: 411px">--}}
    {{--                            <div class="end-cards-body card-body">--}}
    {{--                                <div class="div-margin">--}}
    {{--                                    <p class="card-text float-start bottom-0" style="line-height: 0px !important;">--}}
    {{--                                        {{ $blog->title }}</p>--}}
    {{--                                    <a href="/blogDetail/{{ $blog->id }}" style="color: #FDFEFF"> <span--}}
    {{--                                            class="float-end mt-4 font-10" style="line-height: 0px !important;">--}}
    {{--                                            ادامه--}}
    {{--                                            <i class="fa-solid fa-arrow-left font-10"></i>--}}
    {{--                                        </span></a>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                @endforeach--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}

    <section class="container" style="margin-top: 112px;">
        <div class="d-flex justify-content-between align-items-center">
            <h4 class="text-46 project-g-title" style="font-size: 24px">هر آنچه از سرمایه گذاری باید بدانید</h4>
            <button class="btn btn-purple px-4" style="height: 44px">
                <a href="#">
                    مشاهده بیشتر
                </a>
            </button>
        </div>
        <div class="d-flex justify-content-between" style="margin-top: 28px;margin-bottom: 32px;">
            <p class="text-75">
                نگران از دست دادن فرصت‌های سرمایه‌گذاری نباشید. شرایط طرح‌های دلخواه خود را مشخص کنید، و بقیه را به
                کارماران بسپرید.
            </p>
        </div>
        <div class="row owl-carousel" id="owl2">
            @foreach ($blogs as $blog)
                <div class="item" style="width:290px">
                    <a href="/blogDetail/{{ $blog->id }}">
                        <div class="card home-card-carousel border-0"
                             style="background-image: url('{{$blog->mainImage}}');border-radius: 8px !important;">
                            <div
                                style="width: 100%;height: 100vh;background: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.518) 76.04%), url(u3fx5lvxhzmg);border-radius: 8px !important;">
                                <p class="mx-4"
                                   style="margin-top: 97%;white-space: nowrap;overflow: hidden;color:#FFCF52;bottom:17px;font-weight: 600;">{{$blog->title}}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>
@stop

@section('script')
    <script src="/newthem/js/owl.carousel.min.js"></script>
    <script>
        var getUl = document.getElementsByClassName('ul-li');
        getUl[0].classList.add('select-li-ul');

        function selectUL(index = 0) {
            for (var i = 0; i < getUl.length; i++) {
                if (i == index) {
                    getUl[i].classList.add('select-li-ul')
                } else {
                    getUl[i].classList.remove('select-li-ul')
                }
            }

            var products = {!! $products !!}
                var
            selectedProduct = products[index];
            var offPrice = Math.round((selectedProduct.price * (100 - selectedProduct.offPercent)) / 100)
            $("#course-title").html(selectedProduct.title);
            $("#course-off-percent").html(selectedProduct.offPercent);
            $("#course-off-price").html(offPrice);
            $("#course-price").html(selectedProduct.price);
            $("#course-time").html(selectedProduct.length);
            $("#request_course").attr("href", `/education/detail/${selectedProduct.id}`)

        }

        selectUL()

        $('#owl2').owlCarousel({
            rtl: true,
            loop: true,
            margin: 250,
            nav: true,
            mouseDrag: false,
            navText: [`<img src="/indexImages/icon-pictures-page/arrow-circle-left.png"  style='width:30px;height:30px' class="img-fluid list-items">`, `<img src="/indexImages/icon-pictures-page/arrow-circle-right.png" style='width:30px;height:30px' class="list-items">`],
            responsive: {
                0: {
                    items: 2,
                    margin: 250,
                    nav: true,
                },
                600: {
                    items: 3,
                    nav: true,
                },
                1000: {
                    items: 4,
                    nav: true,
                },
                1300: {
                    items: 5,
                    nav: true,
                }
            }
        })
        var owlss = document.getElementsByClassName('owl-nav');
        for (var i = 0; i < owlss.length; i++) {
            owlss[i].className = "owl-nav";
            owlss[i].onclick = function showNav() {
                for (var j = 0; j < owlss.length; j++) {
                    owlss[j].className = "owl-nav";
                }

            }
        }

        if (window.innerWidth < 900) {
            for (var i = 0; i < owlss.length; i++) {
                owlss[i].className = "owl-nav disabled d-none";
                owlss[i].onclick = function showNav() {
                    for (var j = 0; j < owlss.length; j++) {
                        owlss[j].className = "owl-nav disabled d-none";
                    }

                }
            }
        }

    </script>
@endsection
