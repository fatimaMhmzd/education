@extends('newTheme.nahad.layout.totalWithoutFooter')

@section('style')
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css"/>
@stop

@section('content')
    <section class="container" style="margin-top: 80px">
        @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible mb-4">
                <button type="button" class="btn-close btn-sm" data-bs-dismiss="alert" aria-hidden="true"></button>
                <strong></strong> {{ Session::get('message', '') }}
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-1 d-md-inline-block d-none border-end text-center"
                 style="border-color: #C6C6C6 !important;">
                <div>
                    <img src="/indexImages/icon-home-page/messages-2.png" class="vertical-td list-items">
                </div>
                <div>
                    <img src="/indexImages/icon-home-page/export.png" class="vertical-td list-items"
                         style="margin-top: 20px">
                </div>
                <div>
                    @if(\Illuminate\Support\Facades\Auth::check())
                        @if(showSaveProduct($porduct->id))
                            <img src="/indexImages/icon-home-page/archive-tick.png" class="vertical-td list-items"
                             onclick="saveProduct({{$porduct->id}} , 0)" style="margin-top: 20px">
                        @else
                            <img src="/indexImages/icon-home-page/archive-add.png" class="vertical-td list-items"
                              onclick="saveProduct({{$porduct->id}} , 1)" style="margin-top: 20px">
                        @endif
                    @else
                        <img src="/indexImages/icon-home-page/archive-tick.png" class="vertical-td list-items"
                             style="margin-top: 20px">
                    @endif

                </div>
                <div class="text-center">
                    @if(\Illuminate\Support\Facades\Auth::check())
                        @if(showLikeProduct($porduct->id))
                            <a href="/education/storeLike/{{$porduct->id}}/1"> <img src="/indexImages/icon-home-page/ant-design_like-outlined.png" class="vertical-td list-items"
                                                                                    style="margin-top: 20px"></a>
                        @else
                            <a href="/education/storeLike/{{$porduct->id}}/1"> <img src="/indexImages/icon-home-page/ant-design_like-outlined-2.png" id="qwe"  class="vertical-td list-items" style="margin-top: 20px"></a>
                        @endif
                    @else
                        <img src="/indexImages/icon-home-page/ant-design_like-outlined.png" class="vertical-td list-items"
                             style="margin-top: 20px">
                    @endif
                    <p class="font-12" style="color: #1BC569;margin-top: 10px">({{$porduct->likes}})</p>
                </div>
                <div class="text-center">
                    @if(\Illuminate\Support\Facades\Auth::check())
                        @if(showLikeProduct($porduct->id))
                            <a href="/education/storeLike/{{$porduct->id}}/0"> <img src="/indexImages/icon-home-page/ant-design_dislike-outlined.png"  class="vertical-td list-items" style="margin-top: 20px"></a>
                        @else
                            <a href="/education/storeLike/{{$porduct->id}}/0"><img src="/indexImages/icon-home-page/ant-design_dislike-outlined.png"  class="vertical-td list-items" style="margin-top: 20px"></a>
                        @endif
                    @else
                        <img src="/indexImages/icon-home-page/ant-design_dislike-outlined.png"
                             class="vertical-td list-items" style="margin-top: 20px">
                    @endif
                    <p class="font-12" style="color: #A3A3A3;margin-top: 10px">({{$porduct->disLikes}})</p>
                </div>
            </div>
            <div class="col-md-6 add-edu-v" style="padding-right: 40px">
                <video id="edu-video" playsinline controls style="height: 259px !important;">
                    <source src="{{$porduct->video}}"/>
                </video>
            </div>
            <div class="col-md-5 mt-md-0 mt-3">
                <div class="ms-md-0 ms-3">
                    <h4 style="color: #1F1F1F;font-size: 24px">{{$porduct->title}}</h4>
                    <p class="text-46" style="vertical-align: 30px;margin-top: 16px">{{$porduct->subTitle}}</p>
                    <hr>
                    @if($porduct->master)
                        <p style="color: #1F1F1F;font-weight: 500">مدرس دوره:<span class="ms-2 text-46"
                                                                                   style="font-weight: normal">{{$porduct->master->title}}</span>
                        </p>
                        <hr>
                    @endif
                    <p class="text-75" style="text-decoration: line-through">قیمت اصلی: <span
                            class="fw-bold">{{$porduct->price}}</span> تومان</p>
                    @if($porduct->offPercent and $porduct->offPercent > 0)
                        <p class="fw-bold" style="color: #1F1F1F;margin-top: 20px">قیمت با تخفیف: <span class="text-75"
                                                                                                        style="font-size:18px">{{round($porduct->price*(100-$porduct->offPercent)/100)}}</span><span
                                class="font-14 text-75 ms-1" style="font-weight: normal">تومان </span></p>
                    @endif
                </div>
            </div>
            <div class="col-12 add-edu-p" style="padding-right: 132px;margin-top:20px">
                <div class="d-grid">
                    <button class="btn" style="background-color: #F050AE;height: 56px;border-radius: 8px">
                        <a href="{{route('shopcart_add',$porduct->id)}}">افزودن به سبدخرید</a>
                    </button>
                </div>
            </div>
        </div>
        <div class="row justify-content-center d-md-flex d-none" style="margin-top: 40px">
            <div class="col-md-8 edu-add-main">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-4 border-end" style="border-color: #C6C6C6 !important;">
                        <div class="d-flex align-items-center justify-content-center">
                            <img src="/indexImages/educationDetail/calendar.png" class="me-2 vertical-td">
                            <p class="text-75 fw-bold">طول دوره : <span class="text-46">{{$porduct->length}} ساعت</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 border-end px-md-3" style="border-color: #C6C6C6 !important;">
                        <div class="d-flex align-items-center justify-content-center">
                            <img src="/indexImages/educationDetail/people.png" class="me-2 vertical-td">
                            <p class="text-75 fw-bold">مهارت آموزان: <span class="text-46">{{$studentNumber}} نفر</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex align-items-center justify-content-center">
                            <img src="/indexImages/educationDetail/activity.png" class="me-2 vertical-td">
                            <p class="text-75 fw-bold">سطح دوره: <span class="text-46">{{$level}}</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center" style="margin-top: 80px">
            <div class="col-12">
                {!! $porduct->description !!}
            </div>
        </div>
        <hr style="margin-top: 40px;margin-bottom: 40px">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <h6 class="text-46 text-center" style="font-size: 24px">ویژگی‌های کلیدی این دوره:</h6>
                <ul class="ps-md-5" style="list-style: disc !important;margin-top: 32px">
                    @foreach(explode(',',$porduct->properties) as $item)
                        <li class="text-46" style="line-height: 30px">
                            {{$porduct->properties}}
                        </li>
                    @endforeach
                    {{--<li class="text-46" style="margin-top: 24px;line-height: 30px">میخواهید به جای بازی محدود و کسل
                        کننده، در بازی بی نهایت از مسیر بازی لذت ببرید؟
                    </li>
                    <li class="text-46" style="margin-top: 24px;line-height: 30px">میخواهید به جای بازی محدود و کسل
                        کننده، در بازی بی نهایت از مسیر بازی لذت ببرید؟
                    </li>--}}
                </ul>
            </div>
        </div>
        <div class="row justify-content-center" style="margin-top: 80px">
            <div class="col-12">
                <h6 class="text-46 text-center" style="font-size: 24px">سرفصل‌ها و جلسات دوره:</h6>
                <div class="card edu-info-card">
                    @foreach($porduct->season as $item)
                        <div style="overflow-y: hidden !important;position: relative">

                            {{--<p class="text-75 font-14" style="margin-right: 48px;margin-top: 16px;line-height: 30px">در
                                این
                                فصل با فتوشاپ و ابزارهای اولیه فتوشاپ آشنا میشیم و دوره رو توضیح میدیم که چیکار خواهیم
                                کرد و
                                ...</p>--}}
                        </div>
                        <div style="overflow-y: hidden !important;position: relative">
                            <div class="d-flex align-items-center">
                                <div class="border-end"
                                     style="position: absolute;right: 7px;border-color: #a3a3a3 !important;top: 40px;height: 100vh;z-index: 0"></div>
                                <div class="d-flex season-circle mt-2"
                                     style="@if($loop->index == 0) padding-right:6px; @endif z-index: 1">
                                    <p class="font-10" style="color: #FFFBF5">
                                        {{$loop->index+1}}
                                    </p>
                                </div>
                                <p class="font-14 text-46 mt-2" style="font-weight: 500;margin-right: 32px">
                                    {{$item->title}}
                                </p>
                            </div>
                            <ul style="margin-right: 65px;margin-top: 16px;list-style: disc !important;">
                                @foreach($item->lessons as $value)
                                    <li class="font-14 text-75" style="line-height: 30px">
                                        {{$value->title}}
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    @endforeach


                </div>
            </div>
        </div>
        @if($porduct->master)
            <div class="row justify-content-center" style="margin-top: 80px">
                <div class="col-12">
                    <h6 class="text-46 text-center" style="font-size: 24px">مدرس دوره کیست؟</h6>
                    <div class="card edu-teach-card">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card-image ps-md-0 ps-2">
                                    <div class="teach-img"
                                         style="background-image: url('{{$porduct->master->image}}')"></div>
                                </div>
                            </div>
                            <div class="col-md-8 ms-md-5 mt-md-0 mt-4 ps-md-0 ps-4">
                                <div>
                                    <p class="text-46" style="font-weight: 500">{{$porduct->master->title}}</p>
                                    {!! $porduct->master->description !!}
                                </div>
                                <div style="margin-top: 24px">
                                    <p class="text-46" style="font-weight: 500">سوابق حرفه‌ای:</p>
                                    {!! $porduct->master->rezome !!}
                                </div>
                                <div style="margin-top: 20px">
                                    <a class="card-link" href="#" style="color: #F050AE;"><p class="font-14"
                                                                                             style="font-weight: 500">
                                            مشاهده
                                            سوابق حرفه‌ای کامل</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <div class="row justify-content-center" style="margin-top: 80px">
            <div class="col-md-6 text-center">
                <h6 class="text-46" style="font-size: 24px">این دوره مناسب کیه؟</h6>
                <div class="text-center" style="margin-top: 32px">
                    @foreach(explode(',',$porduct->appropriate) as $item)
                        <div class="d-flex justify-content-md-center align-items-center">
                            <img src="/indexImages/educationDetail/Polygon 2.png"
                                 class="d-md-flex d-none me-2 vertical-td">
                            <p class="text-46 vertical-td" style="line-height: 30px">{!! $item !!}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row justify-content-center" style="margin-top: 80px">
            <div class="col-11">
                <h6 class="text-46 text-center" style="font-size: 24px">سوالات متداول</h6>
                <div class="row" style="margin-top: 32px">
                    @foreach($porduct->qas as $item)
                        <div class="col-md-6 px-2">
                            <div class="accordion" style="box-shadow: 2px 2px 9px 0px #5E457E26;">
                                <div class="accordion-item" style="border: 0px !important;">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button text-46 collapsed"
                                                style="background-color: #FDFEFF !important;color: #464646 !important;"
                                                data-bs-toggle="collapse" data-bs-target="#q-collapse{{$item->id}}">
                                            {{$item->title}}
                                        </button>
                                    </h2>
                                    <div id="q-collapse{{$item->id}}" class="accordion-collapse collapse">
                                        <div class="accordion-body" style="background-color: #FDFEFF !important;">
                                            <p class="font-12 text-75" style="line-height: 30px">
                                                {{$item->description}}                                        </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row justify-content-center" style="margin-top: 80px;">
            <div class="col-12">
                <h6 class="text-46 text-center" style="font-size: 24px">دیدگاه‌ها و پرسش‌های شما</h6>

                <div class="row justify-content-center" style="margin-top: 32px;">
                    <div class="col-md-8">
                        <div class="card edu-form">
                            <div class="row justify-content-center">
                                <div class="col-md-7">
                                    <p class="text-center d-md-block d-none">
                                        <span class="q-edu-text">؟!</span>
                                        <span class="text-46 font-14"
                                              style="font-weight: 500;vertical-align: middle;margin-top: -10px">
                                            دیدگاه یا پرسشی در مورد این دوره دارید با ما مطرح کنید.
                                        </span>
                                    </p>
                                    <div class="row justify-content-center d-md-flex d-none"
                                         style="margin-top: -5px;">
                                        <div class="col-md-9 ms-5">
                                            <p class="font-14 text-75">اینجا بپرس در اسرع وقت جواب میدیم.</p>
                                        </div>
                                    </div>
                                    <p class="text-center d-md-none d-block p-0">
                                        <span class="q-edu-text" style="font-size: 18px">؟!</span>
                                        <span class="text-46 font-10"
                                              style="font-weight: 500;vertical-align: middle;margin-top: -10px">
                                            دیدگاه یا پرسشی در مورد این دوره دارید با ما مطرح کنید.
                                        </span>
                                    </p>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 50px">
                                {{--<div class="col-12">
                                    <label class="form-label text-75">ایمیل</label>
                                    <input type="email" class="form-control"
                                           style="background-color: #FDFEFF !important;border-color: #A3A3A3 !important;">
                                </div>--}}
                                @if(\Illuminate\Support\Facades\Auth::check())

                                    <form method="post" action="{{route('education_comment_store')}}">
@csrf
                                        <input style="display: none" name="productId" value="{{$porduct->id}}">
                                        <div class="col-12" style="margin-top: 24px">
                                            <label class="form-label text-75">دیدگاه یا پرسش:</label>
                                            <textarea class="form-control"
                                                      style="height: 88px;background-color: #FDFEFF !important;border-color: #A3A3A3 !important;" name="body"></textarea>
                                        </div>

                                        <div class="d-flex justify-content-center" style="margin-top: 40px">
                                            <button class="btn px-4"
                                                    style="height:44px;background-color: #F050AE;color: #FDFEFF">ثبت و
                                                ارسال
                                            </button>
                                        </div>
                                    </form>
                                @else

                                    <p class="text-center d-md-block d-none">
                                        <span class="q-edu-text">!!!</span>
                                        <span class="text-46 font-14"
                                              style="font-weight: 500;vertical-align: middle;margin-top: -10px">
                                            وارد حساب کاربری خود شوید تا بتوانید سوال خود را بپرسید
                                        </span>
                                    </p>
                                    <div class="d-flex justify-content-center" style="margin-top: 40px">
                                        <a class="btn px-4" href="{{route('login')}}"
                                           style="height:44px;background-color: #F050AE;color: #FDFEFF">جهت ورود کلیک
                                            کنید
                                        </a>
                                    </div>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="qa-edu" style="margin-top: -15.5rem">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8" style="margin-top: 280px">
                    {{-- <div class="card border-0 p-3" style="font-size: 14px;background-color: transparent !important;">
                         <div class="row">
                             <div class="col-1">
                                 <div style="background-image: url('/indexImages/icon-home-page/Ellipse 155.png');background-size: cover;
                                      background-repeat: no-repeat;background-position: center;height: 56px;width: 56px"
                                      class="rounded-circle"></div>
                             </div>
                             <div class="col-md-11 col-10 ms-md-0 ms-4">
                                 <h6 class="card-title ms-2">ایلان ماسک</h6>
                                 <p class="card-text ms-2 mt-1 text-46 font-14 qu-edu">
                                     چشم انداز این پروژه چیست؟
                                     <span class="float-end text-46" style="font-size:10px">1401/5/21</span>
                                 </p>
                                 <br>
                                 <p class="card-text mt-2">
                                     <span style="color: #A3A3A3;">پاسخ</span>
                                     <i class="fa-solid fa-arrow-left mx-3 font-10" style="color: #A3A3A3;"></i>
                                     <span class="text-46 font-14 answer-edu">
                                             چشم اندازمون اینه که توییتر رو از شما بخریم :)
                                             <span class="float-end d-md-inline-block d-none" style="font-size:10px">1401/5/21</span>
                                         </span>
                                 </p>
                             </div>
                         </div>
                     </div>
                     <hr>
                     <div class="card border-0 p-3" style="font-size: 14px;background-color: transparent !important;">
                         <div class="row">
                             <div class="col-1">
                                 <div style="background-image: url('/indexImages/icon-home-page/Ellipse 155.png');background-size: cover;
                                      background-repeat: no-repeat;background-position: center;height: 56px;width: 56px"
                                      class="rounded-circle"></div>
                             </div>
                             <div class="col-md-11 col-10 ms-md-0 ms-4">
                                 <h6 class="card-title ms-2">ایلان ماسک</h6>
                                 <p class="card-text ms-2 mt-1 text-46 font-14 qu-edu">
                                     چشم انداز این پروژه چیست؟
                                     <span class="float-end text-46" style="font-size:10px">1401/5/21</span>
                                 </p>
                                 <br>
                                 <p class="card-text mt-2">
                                     <span style="color: #A3A3A3;">پاسخ</span>
                                     <i class="fa-solid fa-arrow-left mx-3 font-10" style="color: #A3A3A3;"></i>
                                     <span class="text-46 font-14 answer-edu">
                                             چشم اندازمون اینه که توییتر رو از شما بخریم :)
                                             <span class="float-end d-md-inline-block d-none" style="font-size:10px">1401/5/21</span>
                                         </span>
                                 </p>
                             </div>
                         </div>
                     </div>
                     <hr>
                     <div class="card border-0 p-3" style="font-size: 14px;background-color: transparent !important;">
                         <div class="row">
                             <div class="col-1">
                                 <div style="background-image: url('/indexImages/icon-home-page/Ellipse 155.png');background-size: cover;
                                      background-repeat: no-repeat;background-position: center;height: 56px;width: 56px"
                                      class="rounded-circle"></div>
                             </div>
                             <div class="col-md-11 col-10 ms-md-0 ms-4">
                                 <h6 class="card-title ms-2">ایلان ماسک</h6>
                                 <p class="card-text ms-2 mt-1 text-46 font-14 qu-edu">
                                     چشم انداز این پروژه چیست؟
                                     <span class="float-end text-46" style="font-size:10px">1401/5/21</span>
                                 </p>
                                 <br>
                                 <p class="card-text mt-2">
                                     <span style="color: #A3A3A3;">پاسخ</span>
                                     <i class="fa-solid fa-arrow-left mx-3 font-10" style="color: #A3A3A3;"></i>
                                     <span class="text-46 font-14 answer-edu">
                                             چشم اندازمون اینه که توییتر رو از شما بخریم :)
                                             <span class="float-end d-md-inline-block d-none" style="font-size:10px">1401/5/21</span>
                                         </span>
                                 </p>
                             </div>
                         </div>
                     </div>
                     <hr>
                     <div class="d-flex justify-content-between" style="">
                         <span class="font-12 text-75 ms-2" style="margin-top: 10px">صفحه ا از 5</span>
                         <ul class="pagination text-purple">
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
                     </div>--}}
                </div>
            </div>
        </div>
    </section>
    <footer style="margin-top: 70px">
        <div class="footer py-3">
            <div class="first-footer-text">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <p class="first-f-text">در شبکه های اجتماعی همراه ما باشید</p>
                        </div>
                        <div class="line-div col-md-5 col-11 ms-md-0 ms-4"></div>
                        <div class="col-md-3 mt-md-0 mt-4 mb-md-0 mb-4">
                            <div class="d-flex justify-content-md-end justify-content-center">
                                <img src="/indexImages/facebook.png" class="img-fluid me-3 img-action">
                                <img src="/indexImages/Group 176.png" class="img-fluid me-3 img-action">
                                <img src="/indexImages/Group 175.png" class="img-fluid me-3 img-action">
                                <img src="/indexImages/instagram.png" class="img-fluid me-3 img-action">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row mt-3">
                        <div class="col-12">
                            <ul class="nav nav-fill nav-pills seccond-f-text">
                                <li class="foter-p-item nav-item py-3 px-md-0 px-2 img-action">حق مالکیت: کارماران</li>
                                <li class="foter-p-item nav-item py-3 px-md-0 px-2 img-action">قوانین و مقرارات</li>
                                <li class="foter-p-item nav-item py-3 px-md-0 px-2 img-action">سیاست حفظ حریم خصوصی
                                    کاربران
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@stop

@section('script')
  <script>
      function saveProduct(id, type) {


          var typee = 0;
          if (this.event.target.src.includes("/indexImages/icon-home-page/archive-add.png")) {
              typee = 1;
          }

          if (typee == 0) {
              this.event.target.src = '/indexImages/icon-home-page/archive-add.png'

          } else {
              this.event.target.src = '/indexImages/icon-home-page/archive-tick.png'

          }

          //var firstGroupId = document.getElementById('group').value;
          $.ajax({
              url: "/education/storeSave/" + id + "/" + typee,
              type: 'GET',
              success: function(res) {
                  /*if(res){
                      parenttt.event.target.src = '/indexImages/icon-home-page/archive-add.png'

                  }else {
                      parenttt.event.target.src = '/indexImages/icon-home-page/archive-tick.png'
                  }*/
              }
          });


      }
  </script>
    <script src="https://cdn.plyr.io/3.7.8/plyr.polyfilled.js"></script>
    <script>
        const player = new Plyr('#edu-video');
    </script>
@endsection
