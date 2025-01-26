@extends('client.layout.total')

@section('content')
    @if($setting && count($setting) != 0)
        @foreach($setting as $part)
            @if($part->part->element)
                @if($part->part->element->code && $part->part->element->code != "" )
                    {!! $part->part->element->code !!}
                @else
                    @if($part->part->element_type_id == 1 )
                        <section id="banner">
                            <div id="banner-home" class="swiper position-relative w-100 text-white"
                                 data-aos="fade-up" data-aos-duration="2000">
                                <div class="swiper-wrapper" id="bannerHome">
                                    @foreach($bannners as $banner)
                                        <div class="swiper-slide position-relative">
                                            <a href="#">
                                                <img alt="banner"
                                                     loading="lazy"
                                                     src="{{$banner->Image->url}}"
                                                     class="banner-home-img image-fullscreen rounded rounded-3">
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </section>
                    @elseif($part->part->element_type_id == 2 )
                        <section id="detail" class="container mt-5">
                            <div class="row align-items-center">
                                <div class="col-lg-6 text-end">
                                    <img
                                        src="@if($part->setting->image){{$part->setting->image}}@else{{asset('/sources/image/detail.png')}}@endif"
                                        alt="detail" loading="lazy"
                                        class="img-fluid w-100">
                                </div>
                                <div class="col-lg-6">
                                    <div class="text-of-detail">
                                        <h1 class="card-title h4 fw-bold">@if($part->setting->title)
                                                {{$part->setting->title}}
                                            @else
                                                کارماران
                                            @endif</h1>
                                        <p class="card-text mt-3">@if($part->setting->content)
                                                {!! $part->setting->content !!}
                                            @else
                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                                استفاده از
                                                طراحان
                                                گرافیک
                                                است
                                                چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                                برای
                                                شرایط
                                                فعلی
                                                تکنولوژی
                                                مورد نیاز
                                            @endif
                                        </p>
                                        @if($part->setting->titleBtn != "" && $part->setting->linkBtn != ""  )
                                            <div class="d-flex justify-content-end">
                                                <a href="{{$part->setting->linkBtn}}"
                                                   class="btn btn-outline-site px-4">{{$part->setting->titleBtn}}</a>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </section>
                    @elseif($part->part->element_type_id == 3 )
                        <section id="project" class="mt-5 container">
                            <div class="title-box d-flex justify-content-between align-items-center">
                                <h2 class="h4 card-title fw-bold text-center mb-0">پروژه ها</h2>
                                <a href="{{route('project_index')}}"
                                   class="text-site text-decoration-none fw-bold font-14">
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
                                                    <x-project-cart id="{{$item->id}}"></x-project-cart>
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
                    @elseif($part->part->element_type_id == 4 )
                        <section id="second-detail" class="mt-5 container">
                            <div class="row align-items-center">
                                <div class="col-lg-6 order-lg-0 order-1">
                                    <div class="text-of-detail">
                                        <h1 class="card-title h4 fw-bold">@if($part->setting->title)
                                                {{$part->setting->title}}
                                            @else
                                                کارماران
                                            @endif</h1>
                                        <p class="card-text mt-3">
                                            @if($part->setting->content)
                                                {!! $part->setting->content !!}
                                            @else
                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                                استفاده از
                                                طراحان
                                                گرافیک
                                                است
                                                چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                                برای
                                                شرایط
                                                فعلی
                                                تکنولوژی
                                                مورد نیاز
                                            @endif
                                        </p>
                                        @if($part->setting->titleBtn != "" && $part->setting->linkBtn != ""  )
                                            <div class="d-flex justify-content-end">
                                                <a href="{{$part->setting->linkBtn}}"
                                                   class="btn btn-outline-site px-4">{{$part->setting->titleBtn}}</a>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 order-lg-1 order-0 text-start">
                                    <img
                                        src="@if($part->setting->image){{$part->setting->image}}@else{{asset('/sources/image/bg-2.png')}}@endif"
                                        alt="detail" loading="lazy" class="img-fluid w-100">
                                </div>
                            </div>
                        </section>
                    @elseif($part->part->element_type_id == 5 )
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
                                                        <div
                                                            class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex">
                                                                <img alt="profile"
                                                                     src="/default.jpg"
                                                                     class="img-profile-project rounded-circle">
                                                                <div class="card-texts ms-3">
                                                                    <p class="fw-bold font-14 mb-2">آرا هنر</p>
                                                                    <p class="font-12 text-muted">خانه خلاق و
                                                                        نوآوری</p>
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
                                                    <span
                                                        class="text-white badge bg-secondary rounded-site px-2">12</span>
                                                                <i class="fa fa-user font-14 text-secondary align-middle ms-1"></i>
                                                            </div>
                                                            <div class="shares ms-2 font-14">
                                                    <span
                                                        class="text-white badge bg-warning rounded-site px-2">12</span>
                                                                <i class="fa fa-share-alt font-14 text-warning align-middle ms-1"></i>
                                                            </div>
                                                            <div class="likes ms-2 font-14 text-end">
                                                        <span
                                                            class="text-white badge bg-site rounded-site px-2">12</span>
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
                                    <div
                                        class="right-arrow rounded-circle text-center swiper-prev swiper-prev-business">
                                        <img alt="prev" src="{{asset('/sources/image/arrow-circle-right.png')}}"
                                             class="img-fluid">
                                    </div>
                                    <div
                                        class="right-arrow rounded-circle text-center swiper-next swiper-next-business">
                                        <img alt="next" src="{{asset('/sources/image/arrow-circle-right.svg')}}"
                                             class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </section>
                    @elseif($part->part->element_type_id == 6 )
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
                                                        <img src="{{asset('/sources/image/project.jpg')}}"
                                                             alt="project"
                                                             class="image-fullscreen impo-project">
                                                    @endif
                                                </a>
                                            </div>
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center">
                                        <span
                                            class="card-text font-18 fw-bold align-middle">{{$barjastes->title}}</span>
                                                    @if(\Illuminate\Support\Facades\Auth::check())
                                                        @if(\App\Helper\showSaveProject($barjastes->id))
                                                            <img src="{{asset('/sources/image/archive-add.png')}}"
                                                                 alt="archive">
                                                        @else
                                                            <img src="{{asset('/sources/image/archive-add.png')}}"
                                                                 alt="archive">
                                                        @endif
                                                    @else
                                                        <img src="{{asset('/sources/image/archive-add.png')}}"
                                                             alt="archive">
                                                    @endif
                                                </div>
                                                <div class="project-items mt-3">
                                                    <p class="card-text">{!! $barjastes->subTitle !!}</p>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                <span
                                                    class="card-text text-muted font-14">{{$barjastes->userName}}</span>
                                                        <div class="like-dislike">
                                                            <i class="ti ti-heart-broken font-18 text-muted"></i>
                                                            <i class="ti ti-heart font-18 me-1 text-muted"></i>
                                                        </div>
                                                    </div>
                                                    <p class="font-14 mt-3 mb-1 text-muted">{{$barjastes->percent}}
                                                        % تامین
                                                        مالی
                                                        شده</p>
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
                                                                <img alt="small"
                                                                     src="{{asset('/sources/image/project.jpg')}}"
                                                                     class="image-fullscreen small-project">
                                                            @endif
                                                        </a>
                                                    </div>
                                                    <div class="contents w-100 pe-3 ps-0">
                                                        <div
                                                            class="d-flex w-100 justify-content-between align-items-center">
                                                <span
                                                    class="card-text font-18 fw-bold align-middle">{{$item->title}}</span>
                                                            @if(\Illuminate\Support\Facades\Auth::check())
                                                                @if(\App\Helper\showSaveProject($item->id))
                                                                    <img
                                                                        src="{{asset('/sources/image/archive-add.png')}}"
                                                                        alt="archive">
                                                                @else
                                                                    <img
                                                                        src="{{asset('/sources/image/archive-add.png')}}"
                                                                        alt="archive">
                                                                @endif
                                                            @else
                                                                <img
                                                                    src="{{asset('/sources/image/archive-add.png')}}"
                                                                    alt="archive">
                                                            @endif
                                                        </div>
                                                        <p class="card-text text-muted font-14 mb-0 mt-3">{{$item->percent}}
                                                            %
                                                            تامیین
                                                            مالی شده</p>
                                                        <div
                                                            class="d-flex align-items-center justify-content-between mt-3">
                                                <span
                                                    class="card-text text-muted font-14">{{$barjastes->userName}} </span>
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
                    @elseif($part->part->element_type_id == 7 )
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
                                                        <div
                                                            class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex">
                                                                <img alt="profile"
                                                                     src="/default.jpg"
                                                                     class="img-profile-project rounded-circle">
                                                                <div class="card-texts ms-3">
                                                                    <p class="fw-bold font-14 mb-2">خانه خلاق
                                                                        ماندگار</p>
                                                                    <p class="font-12 text-muted">خانه خلاق و
                                                                        نوآوری</p>
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
                                                    <span
                                                        class="text-white badge bg-secondary rounded-site px-2">12</span>
                                                                <i class="fa fa-user font-14 text-secondary align-middle ms-1"></i>
                                                            </div>
                                                            <div class="shares ms-2 font-14">
                                                    <span
                                                        class="text-white badge bg-warning rounded-site px-2">12</span>
                                                                <i class="fa fa-share-alt font-14 text-warning align-middle ms-1"></i>
                                                            </div>
                                                            <div class="likes ms-2 font-14 text-end">
                                                        <span
                                                            class="text-white badge bg-site rounded-site px-2">12</span>
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
                                    <div
                                        class="right-arrow rounded-circle text-center swiper-prev  swiper-prev-nahad">
                                        <img alt="prev" src="{{asset('/sources/image/arrow-circle-right.png')}}"
                                             class="img-fluid">
                                    </div>
                                    <div
                                        class="right-arrow rounded-circle text-center swiper-next  swiper-next-nahad">
                                        <img alt="next" src="{{asset('/sources/image/arrow-circle-right.svg')}}"
                                             class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </section>
                    @elseif($part->part->element_type_id == 8 )
                        <section id="lesson" class="mt-5 container">
                            <div class="lesson-banner"
                                 @if($part->setting->image) style="background-image: url({{$part->setting->image}})" @endif>
                                <div class="row align-items-center h-100">
                                    <div class="col-md-5">
                                        <h5 class="card-title h4 text-white fw-bold">@if($part->setting->title)
                                                {{$part->setting->title}}
                                            @else
                                                کارماران
                                            @endif</h5>
                                        <p class="card-text text-white mt-3">
                                            @if($part->setting->content)
                                                {!! $part->setting->content !!}
                                            @else
                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                                استفاده از
                                                طراحان
                                                گرافیک
                                                است
                                                چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                                برای
                                                شرایط
                                                فعلی
                                                تکنولوژی
                                                مورد نیاز
                                            @endif
                                        </p>
                                        @if($part->setting->titleBtn != "" && $part->setting->linkBtn != ""  )
                                            <div class="d-flex justify-content-end mt-4">
                                                <a href="{{$part->setting->linkBtn}}"
                                                   class="btn btn-outline-site">{{$part->setting->titleBtn}}</a>
                                            </div>
                                        @endif
                                        {{--  <div class="d-flex justify-content-end mt-4">
                                              <a href="#" class="btn btn-outline-site">
                                                  ارتباط با ما
                                              </a>
                                          </div>--}}
                                    </div>
                                </div>
                            </div>
                        </section>
                    @elseif($part->part->element_type_id == 9 )
                        <section id="blogs" class="mt-5 container">
                            <div class="title-box d-flex justify-content-between align-items-center">
                                <p class="h4 card-title fw-bold text-center mb-0">وبلاگ</p>
                                <a href="{{route('blog_index')}}"
                                   class="text-site text-decoration-none fw-bold font-14">
                                    مشاهده همه
                                    <i class="ti ti-chevron-left align-middle"></i>
                                </a>
                            </div>
                            <div class="slider position-relative">
                                <div class="swiper blog-slider position-relative w-100 mt-4">
                                    <div class="swiper-wrapper">
                                        @foreach ($blogs as $blog)
                                            <div class="swiper-slide">
                                                <a href="{{route('blog_detail' , $blog->slug)}}">
                                                    <div class="card pb-3 news-item"
                                                         style="background-image: url('/{{$blog->Image->url ?? ''}}')">
                                                        <div class="card-body">
                                                            <p class="h6 text-white text-line fw-bold border-0 border-bottom border-white pb-3">
                                                                {{$blog->title}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
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
                    @endif
                @endif
            @endif
        @endforeach
    @else
    <section class="container">
        <div class="about-card" >
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-6 text-center">
                        <img src="/indexImages/video-circle.png" class="about-card-img" style="margin-top: 160px">
                        <h6 class="about-text-card mt-3 about-card-text ">هدفی نو در مسیری نو</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {!!getPageContent(2)!!}
    @endif
@stop

@section('script')

@endsection
