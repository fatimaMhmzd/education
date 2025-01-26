@extends('client.layout.total')
@inject('shopCart', 'Modules\Shopcart\Entities\FactorItem')
@section('content')
    <section id="tools">
        <div class="container">
            <ul class="list-group list-group-horizontal tools-menu">
                <li class="list-group-item border-0 rounded-0 border-end tool-select">
                    <a href="{{route('education_education')}}">
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
                            <div class="dropdown-item p-0" style="margin-top: 10px" onclick="window.open('{{route('education_student_shoppingCart')}}','_self')">
                                <div class="d-grid">
                                    <button class="btn" style="height: 34px;color:#FDFEFF ;background-color:#F050AE;border-radius: 0px 0px 4px 4px">
                                        <p class="font-12" >مشاهده سبد خرید</p>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item border-0 rounded-0 border-end" style="background-color: #F050AE !important;">
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
    <div id="projects" style="margin-bottom: 200px">
        <section class="container mt-5">
            @if(Session::has('success'))
                <div class="alert alert-success alert-dismissible mb-4">
                    <button type="button" class="btn-close btn-sm" data-bs-dismiss="alert" aria-hidden="true"></button>
                    <strong></strong> {{ Session::get('message', '') }}
                </div>
            @endif
            <div class="row justify-content-center" id="allProject">
                @foreach($allEducation as $product)
                    <div class="col-md-3 content-card-div mt-md-0 mt-3 mb-5">
                        <a href="{{ route('education_eduDetail', $product->id) }}">
                            <div class="card border-1 p-3" style="border-radius:8px;border-color: #C6C6C6 !important;box-shadow: 2px 2px 9px 0px #794BA426;height: 492px">
                                @if ($product->offPercent and $product->offPercent > 0)
                                    <div class="off-div float-start text-center py-2">
                                        <p class="text-light">{{ $product->offPercent }}%</p>
                                        <p class="text-light">Off</p>
                                    </div>
                                @endif
                                <div class="card-image" style="height: 241px;">
                                    @if ($product->image)
                                        <div style='border-radius: 8px;background-image: url({{ $product->image }});background-size: cover;background-position: center;background-repeat: no-repeat;height: 241px;'>
                                        </div>
                                    @else
                                        <div style='border-radius: 8px;background-image: url("/indexImages/Rectangle 2505.png");background-size: cover;background-position: center;background-repeat: no-repeat;height: 241px;'>
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
                                    <p class="card-text text-decoration-line-through text-75 font-14" style="margin-top: 23px;">
                                        {{ $product->price }} تومان
                                    </p>
                                    @if ($product->offPercent and $product->offPercent > 0)
                                        <p class="card-text" style="font-size: 18px;font-weight: 500;">
                                            {{ round(($product->price * (100 - $product->offPercent)) / 100) }}
                                            تومان
                                            تومان
                                        </p>
                                    @endif
                                    <div class="d-grid mt-3 pb-3">
                                        <div class="btn-group">
                                            <a href="{{route('shopcart_add',$product->id)}}" type="button" class="btn btn-purple px-4" style="background-color: #F050AE;height: 44px;border-left:0.5px solid #FDFEFF;">
                                                افزودن به سبد خرید
                                            </a>
                                            <button type="button" class="btn btn-purple p-0 px-2 ps-2" style="background-color: #F050AE;height: 44px;border-right:0.5px solid #FDFEFF;">
                                                <img src="/indexImages/archive-add.png" style="vertical-align: middle;" onclick="changeIcon(this)">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
@stop

@section('script')

@endsection
