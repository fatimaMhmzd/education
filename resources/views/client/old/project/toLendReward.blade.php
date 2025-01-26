@extends('client.layout.total')

@section('style')

@stop

@section('content')
    {{--    <section class="container mt-3">--}}
    {{--        <ul class="list-group list-group-horizontal justify-content-center">--}}
    {{--            <li class="list-group-item border-0 border-bottom">--}}
    {{--                <i class="fa-solid fa-stop text-purple me-1"></i>--}}
    {{--                انتخاب پاداش--}}
    {{--            </li>--}}
    {{--            <li class="list-group-item border-0 ms-md-5 border-bottom">--}}
    {{--                <i class="fa-solid fa-stop text-75 me-1"></i>--}}
    {{--                پرداخت--}}
    {{--            </li>--}}
    {{--            <li class="list-group-item border-0 ms-md-5 border-bottom">--}}
    {{--                <i class="fa-solid fa-stop text-75 me-1"></i>--}}
    {{--                تایید--}}
    {{--            </li>--}}
    {{--        </ul>--}}
    {{--    </section>--}}
    {{--    <section class="container mt-5">--}}
    {{--        <div class="row">--}}
    {{--            <div class="payment-ignore card">--}}
    {{--                <div class="card-body">--}}
    {{--                    <div class="row" id="justify-row">--}}
    {{--                        <div class="col-md-6 mt-2">--}}
    {{--                            <div class="form-check">--}}
    {{--                                <input type="checkbox" name="ignore" id="user-ignore" class="form-check-input me-1"--}}
    {{--                                       onchange="showBtn()">--}}
    {{--                                <label class="form-check-label font-14">--}}
    {{--                                    من از پاداش شخصی خود صرف نظر می کنم، فقط می خواهم از پروژه حمایت کنم--}}
    {{--                                </label>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-6 mt-md-0 mt-3 d-none" id="zero-form">--}}
    {{--                            <div class="row">--}}
    {{--                                <div class="col-md-3 col-4">--}}
    {{--                                    <button class="ignore-btn btn btn-purple text-center" style="height: 44px">مشارکت</button>--}}
    {{--                                </div>--}}
    {{--                                <div class="col-8" style="margin-right: 40px;">--}}
    {{--                                    <div class="input-group">--}}
    {{--                                        <input type="number" id="user-pay" name="pay" class="form-control"--}}
    {{--                                               placeholder="500,000">--}}
    {{--                                        <label class="input-group-text">تومان</label>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}
    <section class=" container mt-5">
        <div class="row">
            {{--            <div class="col-md-6">--}}
            {{--                <div class="payment-card card px-3 py-1">--}}
            {{--                    <div class="payment-card-header card-header">--}}
            {{--                        <input type="radio" id="payment" name="payment" class="form-check-input" value="1"--}}
            {{--                               onchange="showBtn(1)">--}}
            {{--                        <label class="form-check-label font-14 ms-1">حمایت 500 هزار تومانی </label>--}}
            {{--                        <span class="float-end">--}}
            {{--                            <i class="fa-solid fa-user me-2"></i>--}}
            {{--                            <span class="font-10"> 5 حامی</span>--}}
            {{--                        </span>--}}
            {{--                    </div>--}}
            {{--                    <div class="card-body">--}}
            {{--                        <h6 class="card-title font-14">کتاب فیزیکی</h6>--}}
            {{--                        <p class="card-text font-12 text-75 mt-3">--}}
            {{--                            اقدامی است که افراد در شبکه های اجتماعی و وبسایت‌ها به جمع آوری سرمایه میپردازند--}}
            {{--                        </p>--}}
            {{--                    </div>--}}
            {{--                    <div>--}}
            {{--                        <img src="/indexImages/Rectangle 705.png" class="card-img">--}}
            {{--                    </div>--}}
            {{--                    <div class="row mt-3 mb-2" id="first-form">--}}
            {{--                        <div class="col-6">--}}
            {{--                            <button class="payment-btn btn btn-purple px-5 text-center">مشارکت</button>--}}
            {{--                        </div>--}}
            {{--                        <div class="col-6">--}}
            {{--                            <div class="input-group">--}}
            {{--                                <input type="number" id="user-pay" name="pay" class="form-control"--}}
            {{--                                       placeholder="500,000">--}}
            {{--                                <label class="input-group-text">تومان</label>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            {{--@foreach($reward as $item)
                <div class="col-md-6 mt-md-5 mt-3">
                    <div class="payment-card card px-3 py-1">
                        <div class="payment-card-header card-header">
                            <input type="checkbox" id="payment" name="payment" class="form-check-input p-radio" onchange="showRadio({{$loop->index}})">
                            <label class="form-check-label font-14 ms-1">حمایت {{$item->amount}} تومانی </label>
                            <span class="float-end">
                            <i class="fa-solid fa-user me-2"></i>
                            <span class="font-10"> 5 حامی</span>
                        </span>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title font-14">{{$item->title}}</h6>
                            <p class="card-text font-12 text-75 mt-3">
                                {!! $item->description !!}
                            </p>
                        </div>
                        <div>
                            <img src="/indexImages/Rectangle 705.png" class="card-img">
                        </div>
                        <div class="row forms mt-3 mb-2 d-none">
                            <div class="col-6">
                                <button class="payment-btn btn btn-purple px-5 text-center" style="height: 44px">مشارکت</button>
                            </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <input type="number" id="user-pay" name="pay" class="form-control"
                                           placeholder="500,000">
                                    <label class="input-group-text">تومان</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach--}}
        </div>
        {{--        <div class="row mt-md-5 mt-5">--}}
        {{--            <div class="col-md-6">--}}
        {{--                <div class="payment-card card px-3 py-1">--}}
        {{--                    <div class="payment-card-header card-header">--}}
        {{--                        <input type="radio" id="payment" name="payment" class="form-check-input" onchange="showBtn(3)">--}}
        {{--                        <label class="form-check-label font-14 ms-1">حمایت 500 هزار تومانی </label>--}}
        {{--                        <span class="float-end">--}}
        {{--                            <i class="fa-solid fa-user me-2"></i>--}}
        {{--                            <span class="font-10"> 5 حامی</span>--}}
        {{--                        </span>--}}
        {{--                    </div>--}}
        {{--                    <div class="card-body">--}}
        {{--                        <h6 class="card-title font-14">کتاب فیزیکی</h6>--}}
        {{--                        <p class="card-text font-12 text-75 mt-3">--}}
        {{--                            اقدامی است که افراد در شبکه های اجتماعی و وبسایت‌ها به جمع آوری سرمایه میپردازند--}}
        {{--                        </p>--}}
        {{--                    </div>--}}
        {{--                    <div>--}}
        {{--                        <img src="/indexImages/Rectangle 705.png" class="card-img">--}}
        {{--                    </div>--}}
        {{--                    <div class="row mt-3 mb-2" id="third-form">--}}
        {{--                        <div class="col-6">--}}
        {{--                            <button class="payment-btn btn btn-purple px-5 text-center">مشارکت</button>--}}
        {{--                        </div>--}}
        {{--                        <div class="col-6">--}}
        {{--                            <div class="input-group">--}}
        {{--                                <input type="number" id="user-pay" name="pay" class="form-control"--}}
        {{--                                       placeholder="500,000">--}}
        {{--                                <label class="input-group-text">تومان</label>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--            <div class="col-md-6 mt-md-0 mt-3">--}}
        {{--                <div class="payment-card card px-3 py-1">--}}
        {{--                    <div class="payment-card-header card-header">--}}
        {{--                        <input type="radio" id="payment" name="payment" class="form-check-input" onchange="showBtn(4)">--}}
        {{--                        <label class="form-check-label font-14 ms-1">حمایت 500 هزار تومانی </label>--}}
        {{--                        <span class="float-end">--}}
        {{--                            <i class="fa-solid fa-user me-2"></i>--}}
        {{--                            <span class="font-10"> 5 حامی</span>--}}
        {{--                        </span>--}}
        {{--                    </div>--}}
        {{--                    <div class="card-body">--}}
        {{--                        <h6 class="card-title font-14">کتاب فیزیکی</h6>--}}
        {{--                        <p class="card-text font-12 text-75 mt-3">--}}
        {{--                            اقدامی است که افراد در شبکه های اجتماعی و وبسایت‌ها به جمع آوری سرمایه میپردازند--}}
        {{--                        </p>--}}
        {{--                    </div>--}}
        {{--                    <div>--}}
        {{--                        <img src="/indexImages/Rectangle 705.png" class="card-img">--}}
        {{--                    </div>--}}
        {{--                    <div class="row mt-3 mb-2" id="forth-form">--}}
        {{--                        <div class="col-6">--}}
        {{--                            <button class="payment-btn btn btn-purple px-5 text-center">مشارکت</button>--}}
        {{--                        </div>--}}
        {{--                        <div class="col-6">--}}
        {{--                            <div class="input-group">--}}
        {{--                                <input type="number" id="user-pay" name="pay" class="form-control"--}}
        {{--                                       placeholder="500,000">--}}
        {{--                                <label class="input-group-text">تومان</label>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
    </section>
    <section class="container mt-3">
        <ul class="list-group list-group-horizontal justify-content-center">
            <li class="list-group-item border-0 border-bottom border-success rounded-0">
                <i class="fa-solid fa-check-circle me-1" style="color:#A0E426;"></i>
                انتخاب پاداش
            </li>
            <li class="li-cost-payment list-group-item ms-md-5">
                <i class="fa-solid fa-stop text-purple me-1"></i>
                پرداخت
            </li>
            <li class="list-group-item border-0 ms-md-5 border-bottom">
                <i class="fa-solid fa-stop text-75 me-1"></i>
                تایید
            </li>
        </ul>
    </section>

    @if(Session::has('success'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert"
                    aria-hidden="true">
                &times;
            </button>
            <strong></strong> {{ Session::get('message', '') }}
        </div>
    @endif
    @if(Session::has('error'))
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert"
                    aria-hidden="true">
                &times;
            </button>
            <strong></strong> {{ Session::get('message', '') }}
        </div>
    @endif
    @if(count($errors) > 0 )
        <div class="alert alert-danger alert-dismissible fade show"
             role="alert">
            <button type="button" class="close" data-dismiss="alert"
                    aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <ul class="p-0 m-0" style="list-style: none;">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{route('storeToLend')}}">
        @csrf
        <input name="projectId" value="{{$projectId}}" hidden>
        <input name="rewardId" value="{{$id}}" hidden>
    <section class="container mt-5">
        <div class="text-center">
            <h6 class="text-46 font-14">شما میخواهید {{number_format($amount)}}  تومان به پروژه {{$title}} کمک کنید.</h6>
        </div>
        <div class="row mt-5 justify-content-center">
            <p class="text-center" style="color: #1F1F1F;">لطفا روش پرداخت را انتخاب کنید.</p>
            <div class="col-md-2 col-5 mt-3">
                <div class="card payment-choose">
                    <input type="radio" name="cost" id="payment-cost" onchange="changeCost()" class="form-check-input my-2 mx-2"  value="online">
                    <div class="card-image">
                        <img src="/newthem/images/card-tick-ch.png" class="card-img" id="cost-image">
                    </div>
                    <div class="card-body text-center">
                        <h6 class="card-title">پرداخت آنلاین</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-5 mt-3">
                <div class="card payment-choose">
                    <input type="radio" name="cost" id="payment-wallet" onchange="changeWallet()" class="form-check-input my-2 mx-2" value="wallet">
                    <div class="card-image">
                        <img src="/newthem/images/empty-wallet.png" class="card-img" id="wallet-image">
                    </div>
                    <div class="card-body text-center">
                        <h6 class="card-title">کیف پول</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="payment-radio row mt-4">
            <div class="col-12">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input text-center" checked>
                    <label class="form-check-label font-14 text-75">من می خواهم سهم من ناشناس باشد</label>
                </div>
            </div>
            <div class="col-12 mt-2">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" checked>
                    <label class="form-check-label font-14 text-75">می‌خواهم کمک مالی من، در صورتی که پروژه به هدف خود
                        نرسد، در کیف پول
                        مجازی کارماران من باقی بماند. اطلاعات بیشتر</label>
                </div>
            </div>
            <div class="col-12 mt-4">
                <div class="form-check">
                    <input type="checkbox" name="more-payment" onchange="showMore()" id="user-more" class="form-check-input">
                    <label class="form-check-label font-14 text-75">برای کمک به جامعه بهتر و پیشرفت کارماران میخواهم کمک
                        بیشتری کنم
                    </label>
                </div>
            </div>
            <div class="col-md-4 mt-3 offset-md-3">
                <div class="input-group" id="input-div">
                    <input type="number" name="value"  value="{{$amount}}" class="form-control" id="input-more" readonly >
                    <label class="input-group-text">تومان</label>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <p style="color: #1F1F1F;">جمع کمک‌های شما {{number_format($amount)}} تومان می‌باشد</p>
        </div>
        <div class="d-grid mt-4 mx-md-5 mb-3">
            <button class="btn btn-purple" type="submit">مشارکت</button>
        </div>
    </section>
    </form>
@stop


@section('script')
    <script>

        var zeroForm = document.getElementById('zero-form');
        var getRadio = document.getElementsByClassName('p-radio');
        var getBtns = document.getElementsByClassName('forms');
        var getMore = document.getElementById('user-more');
        var getInput = document.getElementById('input-more');
        var getCostR = document.getElementById('payment-cost');
        var getWallet = document.getElementById('payment-wallet');

        // getInput.disabled=true;

        // function showMore(){
        //     if(getMore.checked==true){
        //         getInput.disabled=false;
        //     }
        //     else{
        //         getInput.disabled=true;
        //     }
        // }

        function showBtn() {
            zeroForm.className="col-md-6 mt-md-0 mt-3"
            for (var i = 0 ; i < getBtns.length; i++){
                getBtns[i].className="row forms mt-3 mb-2 d-none";
            }
        }

        function showRadio(index){
            if(getRadio[index].checked==true){
                zeroForm.className="col-md-6 mt-md-0 mt-3 d-none";
                getBtns[index].className="row forms mt-3 mb-2";
            }
            else {
                zeroForm.className="col-md-6 mt-md-0 mt-3 d-none";
                getBtns[index].className="row forms mt-3 mb-2 d-none";
            }
        }

        function changeCost(){
            document.getElementById('cost-image').src="/newthem/images/card-tick.png";
            document.getElementById('wallet-image').src="/newthem/images/empty-wallet.png";
        }

        function changeWallet(){
            document.getElementById('wallet-image').src="/newthem/images/empty-wallet-ch.png";
            document.getElementById('cost-image').src="/newthem/images/card-tick-ch.png";
        }

    </script>

@endsection
