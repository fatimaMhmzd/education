@extends('client.layout.total')

@section('style')

@stop

@section('content')
    <section class="container mt-4">
        <div class="row text-center">
            <div class="col-3 font-12 text-75">انتخاب پاداش</div>
            <div class="col-3 font-12 text-75">پرداخت</div>
            <div class="col-3 font-12 text-75">رسید</div>
            <div class="col-3 font-12 text-75">تقدیر نامه</div>
        </div>
        <div class="row text-center mt-2 justify-content-center">
            <div class="col-3">
                <div class="d-flex justify-content-center align-items-center">
                    <div
                        style="border:1px solid #A0E426;width: 25px;height: 25px;background-color: #FFFBF5;border-radius: 50%">
                        <i class="fa-solid fa-check mt-1" style="color:#A0E426"></i>
                    </div>
                </div>
                <div class="d-md-flex d-none"
                     style="width: 100%;margin-top: -12px;margin-right: 145px;border-bottom: 1px solid #A0E426;"></div>
            </div>
            <div class="col-3">
                <div class="d-flex justify-content-center align-items-center ">
                    <div
                        style="border:1px solid #A0E426;width: 25px;height: 25px;background-color: #FFFBF5;border-radius: 50%">
                        <i class="fa-solid fa-check mt-1" style="color:  #A0E426"></i>
                    </div>
                </div>
                <div class="d-flex d-md-flex d-none"
                     style="width: 100%;margin-top: -12px;margin-left:100px;border-bottom: 1px solid #A0E426;"></div>
            </div>
            <div class="col-3">
                <div class="d-flex justify-content-center">
                    <div
                        style="border:1px solid #A0E426;width: 25px;height: 25px;background-color: #FFFBF5;border-radius: 50%">
                        <i class="fa-solid fa-check mt-1" style="color:  #A0E426"></i>
                    </div>
                </div>
                <div class="d-flex d-md-flex d-none"
                     style="width: 100%;margin-top: -12px;margin-right:-90px;border-bottom: 1px solid #A0E426; "></div>
            </div>
            <div class="col-3">
                <div class="d-flex justify-content-center">
                    <div
                        style="border:1px solid #A0E426;width: 25px;height: 25px;background-color: #FFFBF5;border-radius: 50%;">
                        <i class="fa-solid fa-check mt-1" style="color:  #A0E426"></i>
                    </div>
                </div>
                <div class="d-flex d-md-flex d-none"
                     style="width: 100%;margin-top: -12px;margin-right:-142px;border-bottom: 1px solid #A0E426;"></div>
            </div>
        </div>
    </section>

        <section class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-7 card-img-show"
                     style="background-image: url('/indexImages/appreciate.png');background-repeat: no-repeat
                 ;background-position: center;background-size: cover;height: 842px;">
                    <div class="container">
                        <div class="row mt-4">
                            <div class="col-3">
                                <img src="/logo.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="container card-body" style="margin-top: 80px;">
                        <p class="card-title text-46 mb-4" style="font-family:IranNastaliq;font-size: 32px">
                            بسمه تعالی
                        </p>
                        <p class="card-text text-46">
                            از کمک شما به مبلغ <span class="price">100000</span> که به ما این امکان را داد
                            تا تلاش خود را برای ایجاد تغییر
                            در جامعه ___________ حفظ کنیم، متشکریم.
                        </p>
                    </div>
                </div>
                <div class="col-md-7 mt-4 mb-4">
               <span class="text-46 text-start mt-4">
                    <i class="fa-solid fa-share-nodes me-4"></i>
                    <i class="fa-solid fa-print me-4"></i>
                    <i class="fa-solid fa-download me-4"></i>
                </span>


                        <a href="{{route('index')}}">
                <span class="float-end text-purple">
                    <i class="fa-solid fa-sign-in me-1"></i>
                    برگشت به خانه
                </span>
                        </a>

                </div>
            </div>
        </section>

@stop


@section('script')


@endsection
