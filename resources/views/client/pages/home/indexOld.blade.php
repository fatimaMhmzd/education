@extends('client.layout.total')

@section('style')

@stop

@section('content')
    <main>
        <section id="banner" class="container mt-5">
            <div id="banner-home" class="swiper position-relative w-100 text-white"
                 data-aos="fade-up" data-aos-duration="2000">
                <div class="swiper-wrapper" id="bannerHome">
                    @foreach($bannners as $banner)
                        <div class="swiper-slide position-relative">
                            <a href="#">
                                <img alt="banner"
                                     loading="lazy"
                                     src="{{$banner->image}}"
                                     class="banner-home-img image-fullscreen rounded rounded-3">
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>
        <section id="detail" class="container mt-5">
            <div class="row align-items-center">
                <div class="col-lg-6 text-end">
                    <img
                        src="@if($setting->homeFirstPartImage){{$setting->homeFirstPartImage}}@else{{asset('/sources/image/detail.png')}}@endif"
                        alt="detail" loading="lazy"
                        class="img-fluid w-100">
                </div>
                <div class="col-lg-6">
                    <div class="text-of-detail">
                        <h1 class="card-title h4 fw-bold">@if($setting->homeFirstPartTitle)
                                {{$setting->homeFirstPartTitle}}
                            @else
                                کارماران
                            @endif</h1>
                        <p class="card-text mt-3">@if($setting->homeFirstPartContent)
                                {!! $setting->homeFirstPartContent !!}
                            @else
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است
                                چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                                تکنولوژی
                                مورد نیاز
                            @endif
                        </p>
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-outline-site px-4">ایجاد پروژه</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="project" class="mt-5 container">
            <div class="title-box d-flex justify-content-between align-items-center">
                <h2 class="h4 card-title fw-bold text-center mb-0">پروژه ها</h2>
                <a href="{{route('project_index')}}" class="text-site text-decoration-none fw-bold font-14">
                    مشاهده همه
                    <i class="ti ti-chevron-left align-middle"></i>
                </a>
            </div>
            <div class="content-box mt-5 position-relative">
                <div class="swiper position-relative w-100" id="project-slider">
                    <div class="swiper-wrapper">
                        @foreach($khlaghanes as $item)
                            <div class="swiper-slide">
                                <div class="swiper-slide">
                                    <a href="{{route('project_detail',$item->id)}}">
                                        <div class="project-card mb-4">
                                            <div class="card-front card content-card shadow">
                                                <div class="card-image position-relative">
                                                    <img
                                                        src="@if($item->image){{$item->image->image}}@else{{asset('/sources/image/project.jpg')}}@endif"
                                                        alt="project_img"
                                                        class="image-fullscreen project_img">
                                                    <div class="position-absolute top-0 start-0 text-center">
                                                        <p class="detail-box bg-warning mb-0 text-black px-3 ps-4 py-2 font-12 fw-bold">
                                                            تامین مالی قرض الحسنه
                                                        </p>
                                                        <p class="detail-box w-auto bg-site mt-2 mb-0 px-3 ps-4 py-2 font-10 text-white">
                                                        <span
                                                            class="fw-bold font-12">{{\App\Helper\remainDate($item->floorDate)}}</span>
                                                            روز باقی مانده
                                                        </p>
                                                        <p class="detail-box bg-success mt-2 mb-0 px-3 ps-4 py-2 font-12 fw-bold text-white">
                                                            <i class="fa fa-download me-1 font-12"></i>
                                                            {{$item->percent}}%
                                                        </p>
                                                    </div>
                                                    <div class="position-absolute bottom-0 end-0 text-end">
                                                        <p class="detail-box-reverse bg-success mb-0 text-white px-3 pe-4 py-2 font-14 fw-bold">
                                                            پروژه موفق
                                                        </p>
                                                        <p class="detail-box-reverse w-auto bg-orange mt-2 mb-0 px-3 pe-4 py-2 font-10 text-white">
                                                            قرض 12 ماهه
                                                        </p>
                                                        <p class="detail-box-reverse bg-danger mt-2 mb-0 px-3 pe-4 py-2 font-12 fw-bold text-white">
                                                            <i class="fa fa-heart me-1 font-12"></i>
                                                            {{$item->likes}}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="titles">
                                                        <p class="card-title text-line fw-bold font-14">
                                                            {{$item->title}}
                                                        </p>
                                                        <p class="card-text text-line font-12 mt-2">
                                                            {{$item->subTitle}}
                                                        </p>
                                                    </div>
                                                    <hr>
                                                    <div class="details">
                                                        <p class="card-text font-12 mb-1">
                                                            <i class="font-12 align-middle text-muted me-1 fa fa-map-marked"></i>
                                                            {{$item->province}} / {{$item->town}}
                                                        </p>
                                                        <p class="card-text font-12 mb-1">
                                                            <i class="font-12 align-middle text-muted me-1 fa fa-user"></i>
                                                            {{$item->userName}}
                                                        </p>
                                                        <p class="card-text font-12 mb-1">
                                                            <i class="font-12 align-middle text-muted me-1 fa fa-magnifying-glass"></i>
                                                            گروه بندی پروژه
                                                        </p>
                                                        <p class="card-text font-12 mb-1">
                                                            <i class="font-12 align-middle text-muted me-1 fa fa-users"></i>
                                                            تعهد اجتماعی
                                                        </p>
                                                    </div>
                                                    <hr>
                                                    <div class="payment">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                <span class="font-12 text-success">
                                                    <i class="fa fa-arrow-up-wide-short font-12 align-middle"></i>
                                                    حداکثر مبلغ مورد نیاز
                                                </span>
                                                            <span class="font-12 text-success">
                                                    <span class="price">
                                                   {{$item->emergencyExpenseAmount + $item->extraExpenseAmount}}
                                                    </span>
                                                    <span class="font-10">تومان</span>
                                                </span>
                                                        </div>
                                                        <div
                                                            class="d-flex justify-content-between align-items-center mt-2">
                                                   <span class="font-12 text-danger">
                                                    <i class="fa fa-arrow-down-short-wide align-middle font-12"></i>
                                                    حداقل مبلغ مورد نیاز
                                                </span>
                                                            <span class="font-12 text-danger">
                                                    <span class="price">
                                                    {{$item->emergencyExpenseAmount}}
                                                    </span>
                                                    <span class="font-10">تومان</span>
                                                </span>
                                                        </div>
                                                        <div class="progress mt-3">
                                                            <div class="progress-bar progress-card"
                                                                 style="width:{{$item->percentTotal}}%;">
                                                                <div class="achive-progress"></div>
                                                                <div class="vilvilak"
                                                                     style="right: {{$item->emergencyPercent}}%"></div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="d-flex justify-content-between align-items-center mt-3">
                                                <span class="font-12 text-success">
                                                    <i class="fa fa-wallet me-1 font-12 align-middle"></i>
                                                    مبلغ جمع آوری شده
                                                </span>
                                                            <span class="font-14 text-success">
                                                    <span class="price fw-bold">
                                                    {{$item->cash}}
                                                    </span>
                                                    <span class="font-10">تومان</span>
                                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination position-relative mt-4"></div>
                </div>
                <div class="swiper-nav">
                    <div class="right-arrow rounded-circle text-center swiper-prev">
                        <img alt="prev" src="{{asset('/sources/image/arrow-circle-right.png')}}"
                             class="img-fluid">
                    </div>
                    <div class="right-arrow rounded-circle text-center swiper-next ">
                        <img alt="next" src="{{asset('/sources/image/arrow-circle-right.svg')}}"
                             class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <section id="second-detail" class="mt-5 container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-0 order-1">
                    <div class="text-of-detail">
                        <h1 class="card-title h4 fw-bold">@if($setting->homeSecoundPartTitle)
                                {{$setting->homeSecoundPartTitle}}
                            @else
                                کارماران
                            @endif</h1>
                        <p class="card-text mt-3">
                            @if($setting->homeSecoundPartContent)
                                {!! $setting->homeSecoundPartContent !!}
                            @else
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است
                                چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                                تکنولوژی
                                مورد نیاز
                            @endif
                        </p>
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-outline-site px-4">درباره ما</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1 order-0 text-start">
                    <img
                        src="@if($setting->homeSecoundPartImage){{$setting->homeSecoundPartImage}}@else{{asset('/sources/image/bg-2.png')}}@endif"
                        alt="detail" loading="lazy" class="img-fluid w-100">
                </div>
            </div>
        </section>
        <section id="business" class="mt-5 container">
            <div class="title-box d-flex justify-content-between align-items-center">
                <h2 class="h4 card-title fw-bold text-center mb-0">کسب و کار</h2>
                <a href="#" class="text-site text-decoration-none fw-bold font-14">
                    مشاهده همه
                    <i class="ti ti-chevron-left align-middle"></i>
                </a>
            </div>
            <div class="content-box mt-5 position-relative">
                <div class="swiper position-relative w-100" id="business-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="project-card mb-4">
                                <div class="card-front card content-card shadow">
                                    <div class="card-image position-relative">
                                        <img src="{{asset('/sources/image/project.jpg')}}"
                                             alt="project_img"
                                             class="image-fullscreen project_img">
                                        <div class="position-absolute top-0 start-0 text-center">
                                            <p class="detail-box bg-warning mb-0 text-black px-3 ps-4 py-2 font-12 fw-bold">
                                                کسب و کار فعال
                                            </p>
                                            <p class="detail-box w-auto bg-site mt-2 mb-0 px-3 ps-4 py-2 font-10 text-white">
                                                رتبه
                                                <span class="fw-bold font-12">37</span>
                                            </p>
                                        </div>
                                        <div class="position-absolute bottom-0 end-0 text-end">
                                            <p class="detail-box-reverse w-auto mb-1 bg-orange mb-0 px-3 pe-4 py-2 font-10 text-white">
                                                طراحی شهری
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex">
                                                <img alt="profile"
                                                     src="/default.jpg"
                                                     class="img-profile-project rounded-circle">
                                                <div class="card-texts ms-3">
                                                    <p class="fw-bold font-14 mb-2">آرا هنر</p>
                                                    <p class="font-12 text-muted">خانه خلاق و نوآوری</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="details">
                                            <ul class="list-group px-0 mt-4">
                                                <li class="list-group-item border-0 border-bottom px-0">
                                                    <div
                                                        class="d-flex justify-content-between align-items-center font-12 text-muted">
                                                        <span class="fw-bold">
                                                            <i class="me-1 align-middle font-12 fa fa-map-location-dot"></i>
                                                            محل استقرار
                                                        </span>
                                                        <span>تهران/ کن</span>
                                                    </div>
                                                </li>
                                                <li class="list-group-item border-0 border-bottom px-0">
                                                    <div
                                                        class="d-flex justify-content-between align-items-center font-12 text-muted">
                                                        <span class="fw-bold">
                                                            <i class="me-1 align-middle font-12 fa fa-heart"></i>
                                                            تعداد پروژه های ثبتی
                                                        </span>
                                                        <span> 3 پروژه</span>
                                                    </div>
                                                </li>
                                                <li class="list-group-item border-0 px-0">
                                                    <div
                                                        class="d-flex justify-content-between align-items-center font-12 text-muted">
                                                      <span class="fw-bold">
                                                         <i class="me-1 align-middle font-12 fa fa-bank"></i>
                                                         مبلغ جمع آوری شده
                                                      </span>
                                                        <span>
                                                           <span class="price">23000000</span>
                                                         تومان
                                                        </span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="d-flex mt-3 justify-content-center">
                                            <div class="users font-14 ms-2">
                                                <span class="text-white badge bg-secondary rounded-site px-2">12</span>
                                                <i class="fa fa-user font-14 text-secondary align-middle ms-1"></i>
                                            </div>
                                            <div class="shares ms-2 font-14">
                                                <span class="text-white badge bg-warning rounded-site px-2">12</span>
                                                <i class="fa fa-share-alt font-14 text-warning align-middle ms-1"></i>
                                            </div>
                                            <div class="likes ms-2 font-14 text-end">
                                                <span class="text-white badge bg-site rounded-site px-2">12</span>
                                                <i class="far fa-heart font-14 ms-1 text-site align-middle"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination position-relative mt-4"></div>
                </div>
                <div class="swiper-nav">
                    <div class="right-arrow rounded-circle text-center swiper-prev swiper-prev-business">
                        <img alt="prev" src="{{asset('/sources/image/arrow-circle-right.png')}}"
                             class="img-fluid">
                    </div>
                    <div class="right-arrow rounded-circle text-center swiper-next swiper-next-business">
                        <img alt="next" src="{{asset('/sources/image/arrow-circle-right.svg')}}"
                             class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <section id="important-project" class="mt-5 container">
            <div class="row">
                <div class="col-lg-5">
                    <p class="mb-4 card-title h4 fw-bold">پروژه برجسته این هفته</p>
                    @if($barjastes)
                        <div class="card">
                            <div class="card-image">
                                <a href="{{route('project_detail',$barjastes->id)}}">
                                    @if($barjastes->image)
                                        <img src="{{$barjastes->image->image}}" alt="project"
                                             class="image-fullscreen impo-project">
                                    @else
                                        <img src="{{asset('/sources/image/project.jpg')}}" alt="project"
                                             class="image-fullscreen impo-project">
                                    @endif
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="card-text font-18 fw-bold align-middle">{{$barjastes->title}}</span>
                                    @if(\Illuminate\Support\Facades\Auth::check())
                                        @if(\App\Helper\showSaveProject($barjastes->id))
                                            <img src="{{asset('/sources/image/archive-add.png')}}" alt="archive">
                                        @else
                                            <img src="{{asset('/sources/image/archive-add.png')}}" alt="archive">
                                        @endif
                                    @else
                                        <img src="{{asset('/sources/image/archive-add.png')}}" alt="archive">
                                    @endif
                                </div>
                                <div class="project-items mt-3">
                                    <p class="card-text">{!! $barjastes->subTitle !!}</p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="card-text text-muted font-14">{{$barjastes->userName}}</span>
                                        <div class="like-dislike">
                                            <i class="ti ti-heart-broken font-18 text-muted"></i>
                                            <i class="ti ti-heart font-18 me-1 text-muted"></i>
                                        </div>
                                    </div>
                                    <p class="font-14 mt-3 mb-1 text-muted">{{$barjastes->percent}} % تامین مالی شده</p>
                                    <div class="progress">
                                        <div class="progress-bar progress-card">
                                            <div class="blinder">
                                                <div class="achive-progress"
                                                     style="width: {{$barjastes->percentTotal}}%;"></div>
                                                <div class="vilvilak"
                                                     style="right: {{$barjastes->emergencyPercent}}%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="col-lg-7 mt-lg-0 mt-4">
                    <h4 class="mb-4 card-title h4 fw-bold">توصیه شده برای شما</h4>
                    @foreach($tosies as $item)
                        <div class="contents">
                            <div class="card card-body">
                                <div class="d-flex">
                                    <div class="card-image">
                                        <a href="{{route('project_detail',$item->id)}}">
                                            @if($item->image)
                                                <img alt="small" src="{{$item->image->image}}"
                                                     class="image-fullscreen small-project">
                                            @else
                                                <img alt="small" src="{{asset('/sources/image/project.jpg')}}"
                                                     class="image-fullscreen small-project">
                                            @endif
                                        </a>
                                    </div>
                                    <div class="contents w-100 pe-3 ps-0">
                                        <div class="d-flex w-100 justify-content-between align-items-center">
                                            <span class="card-text font-18 fw-bold align-middle">{{$item->title}}</span>
                                            @if(\Illuminate\Support\Facades\Auth::check())
                                                @if(\App\Helper\showSaveProject($item->id))
                                                    <img src="{{asset('/sources/image/archive-add.png')}}"
                                                         alt="archive">
                                                @else
                                                    <img src="{{asset('/sources/image/archive-add.png')}}"
                                                         alt="archive">
                                                @endif
                                            @else
                                                <img src="{{asset('/sources/image/archive-add.png')}}" alt="archive">
                                            @endif
                                        </div>
                                        <p class="card-text text-muted font-14 mb-0 mt-3">{{$item->percent}}% تامیین
                                            مالی شده</p>
                                        <div class="d-flex align-items-center justify-content-between mt-3">
                                            <span class="card-text text-muted font-14">{{$barjastes->userName}} </span>
                                            <div class="like-dislike">
                                                <i class="ti ti-heart-broken font-18 text-muted"></i>
                                                <i class="ti ti-heart font-18 me-1 text-muted"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="px-3">
                                <hr>
                            </div>
                        </div>
                    @endforeach
                    <div class="d-flex justify-content-between align-items-center mt-md-4 mt-1">
                        <span class="font-14 align-middle ms-2">صفحه ا از 5</span>
                        <ul class="pagination align-middle mt-3">
                            <li class="page-item">
                                <a href="#" class="page-link border-0">
                                    &laquo;
                                </a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link border-0">
                                    3
                                </a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link border-0">
                                    2
                                </a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link border-0">
                                    1
                                </a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link border-0">
                                    &raquo;
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section id="nahad" class="mt-5 container">
            <div class="title-box d-flex justify-content-between align-items-center">
                <h2 class="h4 card-title fw-bold text-center mb-0">نهاد های فعال</h2>
                <a href="#" class="text-site text-decoration-none fw-bold font-14">
                    مشاهده همه
                    <i class="ti ti-chevron-left align-middle"></i>
                </a>
            </div>
            <div class="content-box mt-5 position-relative">
                <div class="swiper position-relative w-100" id="nahad-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="project-card mb-4">
                                <div class="card-front card content-card shadow">
                                    <div class="card-image position-relative">
                                        <img src="{{asset('/sources/image/project.jpg')}}"
                                             alt="project_img"
                                             class="image-fullscreen project_img">
                                        <div class="position-absolute top-0 start-0 text-center">
                                            <p class="detail-box bg-warning mb-0 text-black px-3 ps-4 py-2 font-12 fw-bold">
                                                نهاد اجتماعی فعال
                                            </p>
                                            <p class="detail-box w-auto bg-site mt-2 mb-0 px-3 ps-4 py-2 font-10 text-white">
                                                رتبه
                                                <span class="fw-bold font-12">37</span>
                                            </p>
                                        </div>
                                        <div class="position-absolute bottom-0 end-0 text-end">
                                            <p class="detail-box-reverse w-auto mb-1 bg-orange mb-0 px-3 pe-4 py-2 font-10 text-white">
                                                موسسه خیریه
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex">
                                                <img alt="profile"
                                                     src="/default.jpg"
                                                     class="img-profile-project rounded-circle">
                                                <div class="card-texts ms-3">
                                                    <p class="fw-bold font-14 mb-2">خانه خلاق ماندگار</p>
                                                    <p class="font-12 text-muted">خانه خلاق و نوآوری</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="details">
                                            <ul class="list-group px-0 mt-4">
                                                <li class="list-group-item border-0 border-bottom px-0">
                                                    <div
                                                        class="d-flex justify-content-between align-items-center font-12 text-muted">
                                                        <span class="fw-bold">
                                                            <i class="me-1 align-middle font-12 fa fa-map-location-dot"></i>
                                                            محل استقرار نهاد
                                                        </span>
                                                        <span>تهران/کن</span>
                                                    </div>
                                                </li>
                                                <li class="list-group-item border-0 border-bottom px-0">
                                                    <div
                                                        class="d-flex justify-content-between align-items-center font-12 text-muted">
                                                        <span class="fw-bold">
                                                            <i class="me-1 align-middle font-12 fa fa-heart"></i>
                                                            پروژه های مورد حمایت
                                                        </span>
                                                        <span> 3 پروژه</span>
                                                    </div>
                                                </li>
                                                <li class="list-group-item border-0 px-0">
                                                    <div
                                                        class="d-flex justify-content-between align-items-center font-12 text-muted">
                                                      <span class="fw-bold">
                                                         <i class="me-1 align-middle font-12 fa fa-bank"></i>
                                                         میزان حمایت مالی
                                                      </span>
                                                        <span>
                                                           <span class="price">23000000</span>
                                                         تومان
                                                        </span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="d-flex mt-3 justify-content-center">
                                            <div class="users font-14 ms-2">
                                                <span class="text-white badge bg-secondary rounded-site px-2">12</span>
                                                <i class="fa fa-user font-14 text-secondary align-middle ms-1"></i>
                                            </div>
                                            <div class="shares ms-2 font-14">
                                                <span class="text-white badge bg-warning rounded-site px-2">12</span>
                                                <i class="fa fa-share-alt font-14 text-warning align-middle ms-1"></i>
                                            </div>
                                            <div class="likes ms-2 font-14 text-end">
                                                <span class="text-white badge bg-site rounded-site px-2">12</span>
                                                <i class="far fa-heart font-14 ms-1 text-site align-middle"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination position-relative mt-4"></div>
                </div>
                <div class="swiper-nav">
                    <div class="right-arrow rounded-circle text-center swiper-prev  swiper-prev-nahad">
                        <img alt="prev" src="{{asset('/sources/image/arrow-circle-right.png')}}"
                             class="img-fluid">
                    </div>
                    <div class="right-arrow rounded-circle text-center swiper-next  swiper-next-nahad">
                        <img alt="next" src="{{asset('/sources/image/arrow-circle-right.svg')}}"
                             class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <section id="lesson" class="mt-5 container">
            <div class="lesson-banner"
                 @if($setting->homeThirdPartBackgroundImage) style="background-image: url({{$setting->homeThirdPartBackgroundImage}})" @endif>
                <div class="row align-items-center h-100">
                    <div class="col-md-5">
                        <h5 class="card-title h4 text-white fw-bold">@if($setting->homeThirdPartTitle)
                                {{$setting->homeThirdPartTitle}}
                            @else
                                کارماران
                            @endif</h5>
                        <p class="card-text text-white mt-3">
                            @if($setting->homeThirdPartContent)
                                {!! $setting->homeThirdPartContent !!}
                            @else
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است
                                چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                                تکنولوژی
                                مورد نیاز
                            @endif
                        </p>
                        <div class="d-flex justify-content-end mt-4">
                            <a href="#" class="btn btn-outline-site">
                                ارتباط با ما
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="blogs" class="mt-5 container">
            <div class="title-box d-flex justify-content-between align-items-center">
                <p class="h4 card-title fw-bold text-center mb-0">وبلاگ</p>
                <a href="{{route('blog_index')}}" class="text-site text-decoration-none fw-bold font-14">
                    مشاهده همه
                    <i class="ti ti-chevron-left align-middle"></i>
                </a>
            </div>
            <div class="slider position-relative">
                <div class="swiper blog-slider position-relative w-100 mt-4">
                    <div class="swiper-wrapper">
                        @foreach ($blogs as $blog)
                            <a href="{{route('blog_detail' , $blog->slug)}}">
                            <div class="swiper-slide">
                                <div class="card pb-3 news-item" style="background-image: url('/{{$blog->Image->url ?? ''}}')">
                                    <div class="card-body">
                                        <p class="h6 text-white text-line fw-bold border-0 border-bottom border-white pb-3">
                                            {{$blog->title}}
                                        </p>
                                        <div
                                            class="d-flex w-100 justify-content-between align-items-center text-white font-14 mt-3">
                                            <div>
                                                <span class="align-middle">بدون دیدگاه</span>
                                                <span class="align-middle">{{$blog->date_shamsi}}</span>
                                            </div>
                                            <div>
                                                <span class="align-middle">ادامه مطلب</span>
                                                <i class="ti ti-arrow-left align-middle"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        @endforeach
                    </div>
                    <div class="swiper-pagination position-relative mt-4"></div>
                </div>
                <div class="swiper-nav">
                    <div class="right-arrow rounded-circle text-center blog-prev swiper-prev">
                        <img alt="prev" src="{{asset('/sources/image/arrow-circle-right.png')}}"
                             class="img-fluid">
                    </div>
                    <div class="right-arrow rounded-circle text-center blog-next swiper-next ">
                        <img alt="next" src="{{asset('/sources/image/arrow-circle-right.svg')}}"
                             class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
    </main>
@stop

@section('script')
@stop
