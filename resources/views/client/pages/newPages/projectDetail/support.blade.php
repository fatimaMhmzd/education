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
            @foreach($allLends as $item)
                <div class="card border-1 mt-5 mb-5 px-3 pt-1"
                     style="font-size: 14px; height: 79px;box-shadow: 1px 1px 39px 8px #FFF6E7 inset;background-color: #FFFBF5;">
                    <a @if($item->legalOrReal == 1) href="{{route("nahad_InstitutionDetail",$item->id)}}" @else href="{{route("publicProfile",$item->id)}}" @endif>
                        <div class="row align-items-center ">
                            <div class="col-1 mt-1">
                                @if($item->image)
                                    <div style="background-image: url({{$item->image}});background-size: cover;
                                        background-repeat: no-repeat;background-position: center;height: 56px;width: 56px"
                                         class="rounded-circle"></div>
                                @else
                                    <div style="background-image: url('/indexImages/icon-home-page/Ellipse 155.png');background-size: cover;
                                        background-repeat: no-repeat;background-position: center;height: 56px;width: 56px"
                                         class="rounded-circle"></div>
                                @endif
                            </div>
                            <div class="col-md-11 col-10 ms-md-0 ms-4 mt-2">
                                <h6 class="circle-title card-title ms-2 font-14">{{$item->user}}</h6>
                                <div class="d-flex justify-content-center"
                                     style="margin-top: -17px">
                                                                  <span class="text-center">{{number_format($item->amount)}}
                                                                      <br>
                                                                      <span class="font-12 text-75 mt-1">تومان</span>
                                                                  </span>
                                </div>
                                <div
                                    class="d-flex justify-content-end align-items-center"
                                    style="margin-top: -35px">
                                    <span class="font-14 text-46">{{$item->date}}</span>
                                </div>
                                <div class="d-flex ms-2" style="margin-top: -5px">
                                    @if($item->amount < 10000000)
                                        <div class="show-grow  me-2"
                                             style="background-color: #C6C6C6;"></div>
                                        <span>معمولی</span>
                                    @elseif(10000000 <= $item->amount && $item->amount < 50000000)
                                        <div class="show-grow me-2"
                                             style="background-color: #FBBC3E;"></div>
                                        <span>سطح 1</span>
                                    @elseif( 50000000 <= $item->amount && $item->amount < 100000000)
                                        <div class="show-grow me-2"
                                             style="background-color: #FFB7FF;"></div>
                                        <span>سطح 2</span>
                                    @elseif( 100000000 <= $item->amount && $item->amount < 200000000)
                                        <div class="show-grow me-2"
                                             style="background-color: #52E3E1;"></div>
                                        <span>ویژه</span>
                                    @elseif(200000000 <= $item->amount && $item->amount < 500000000)
                                        <div class="show-grow me-2"
                                             style="background-color: #A0E426;"></div>
                                        <span>فوق ویژه</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </main>
@endsection

