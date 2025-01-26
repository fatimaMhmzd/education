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
                    <div style="border:1px solid #C9B1E6;width: 25px;height: 25px;background-color: #FFFBF5;border-radius: 50%">
                        <i class="fa-solid fa-stop mt-1" style="color: #C9B1E6;margin-left: 0.5px;;margin-top: 3.93px"></i>
                    </div>
                </div>
                <div class="d-md-flex d-none" style="width: 100%;margin-top: -12px;margin-right: 145px;border-bottom: 1px solid #C9B1E6;"></div>
            </div>
            <div class="col-3">
                <div class="d-flex justify-content-center align-items-center ">
                    <div style="border:1px solid #C6C6C6;width: 25px;height: 25px;background-color: #FFFBF5;border-radius: 50%">
                        <i class="fa-solid fa-stop" style="color: #C6C6C6;margin-left: 0.5px;;margin-top: 3.93px"></i>
                    </div>
                </div>
                <div class="d-flex d-md-flex d-none" style="width: 100%;margin-top: -12px;margin-left:100px;border-bottom: 1px solid #C6C6C6;"></div>
            </div>
            <div class="col-3">
                <div class="d-flex justify-content-center">
                    <div class="text-center" style="border:1px solid #C6C6C6;width: 25px;height: 25px;background-color: #FFFBF5;border-radius: 50%">
                        <i class="fa-solid fa-stop text-center" style="color: #C6C6C6;margin-left: 0.5px;margin-top: 3.93px"></i>
                    </div>
                </div>
                <div class="d-flex d-md-flex d-none" style="width: 100%;margin-top: -12px;margin-right:-90px;border-bottom: 1px solid #C6C6C6; "></div>
            </div>
            <div class="col-3">
                <div class="d-flex justify-content-center">
                    <div style="border:1px solid #C6C6C6;width: 25px;height: 25px;background-color: #FFFBF5;border-radius: 50%;">
                        <i class="fa-solid fa-stop" style="color: #C6C6C6;margin-left: 0.5px;margin-top: 3.93px"></i>
                    </div>
                </div>
                <div class="d-flex d-md-flex d-none" style="width: 100%;margin-top: -12px;margin-right:-142px;border-bottom: 1px solid #C6C6C6;"></div>
            </div>
        </div>
    </section>

    <section class=" container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-md-5 mt-3 mb-5">
                <div class="payment-card card px-3 py-1">
                        <div class="payment-card-header card-header">
                            <input type="radio" id="payment" name="payment" class="form-check-input" checked >
                            <label class="form-check-label font-14 ms-1">حمایت  تومانی </label>
                            <span class="float-end">
                            <i class="fa-solid fa-user me-2"></i>
                            <span class="font-10"> 5 حامی</span>
                        </span>
                        </div>
                    <form class="form form-horizontal" method="get"
                          action="{{--{{route('toLend',$projectId)}}--}}"
                          enctype="multipart/form-data">
                    <div class="row mt-3 mb-2 " id="first-pay">
                        <div class="col-6">
                            <a class="payment-btn btn btn-purple px-5 text-center" href="{{route('project_toLend')}}" style="height: 44px">مشارکت</a>
                        </div>
                        <div class="col-6">
                            <div class="input-group">
                                <input type="number" id="user-pay" name="reward" value="0" class="form-control" hidden>
                                <input type="text" id="user-pay" value="0" min="0" name="amount" class="form-control prices">
                                <label class="input-group-text">تومان</label>
                            </div>
                        </div>
                    </div>
                    </form>

                </div>
            </div>
        </div>

        <div class="row justify-content-center">
                <div class="col-md-6 mt-md-5 mt-3 mb-5">
                    <div class="payment-card card-pay card px-3 py-2">
                        <div class="payment-card-header card-header" style="background-color: transparent">
                            <input type="radio" id="payment-r" name="payment" class="form-check-input p-radio" onchange="showRadio(1)">
                            <label class="form-check-label font-14 ms-1">  حمایت  <span class="price me-1">10000000</span>تومانی  </label>
                            <span class="float-end">
                            <i class="fa-solid fa-user me-2"></i>
                            <span class="font-10"> js حامی</span>
                        </span>
                        </div>
                        <div onclick="selectradio(1)">
                            <div class="card-body">
                                <h6 class="card-title font-14">تست</h6>
                                <p class="card-text font-12 text-75 mt-3">
                                    تست
                                </p>
                            </div>
                            <div>

                                    <div style="background-image: url('/indexImages/Rectangle 705.png');background-position: center;background-size: cover;background-repeat: no-repeat;height: 283.18px" class="card-img"></div>


                            </div>
                            <form class="form form-horizontal" method="get"
                                  action="{{--{{route('toLend',$projectId)}}--}}"
                                  enctype="multipart/form-data">
                                <div class="row forms mt-3 mb-2" id="pay-form">
                                    <div class="col-6">
                                        <button class="payment-btn btn btn-purple px-5 text-center" type="submit" style="height: 44px">مشارکت</button>
                                    </div>
                                    <div class="col-6">
                                        <div class="input-group">
                                            <input type="number" id="user-pay" name="reward" value="1" class="form-control" hidden>
                                            <input type="text" id="user-pay1" name="amount" value="{{number_format(10000000000)}}" class="form-control card-prices prices"
                                                   placeholder="100000" onkeyup=imposeMin(this,'{{number_format(100000)}}') {{--onkeyup="validate(event,{{$loop->index}},{{$item->amount}})"--}}>
                                            <label class="input-group-text">تومان</label>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>

    </section>

@stop


@section('script')
    <script>
            var getFirst = document.getElementById('payment');
            var getPay = document.getElementById('first-pay');
            var getForm = document.getElementsByClassName('forms');
            var getRadio = document.getElementsByClassName('p-radio');
            var getCard = document.getElementsByClassName('card-pay');
            for(var i = 0 ; i < getForm.length ; i++){
                getForm[i].style.display='none';
            }
            getFirst.onchange = function (){
                     getPay.style.display="";
                     for (var i = 0 ; i < getForm.length ; i++){
                         getForm[i].style.display='none';
                         getCard[i].style.backgroundColor='transparent';
                     }
            }

            function showRadio(index){
                getPay.style.display='none';
                    if(index == 0){
                        getForm[index].style.display='';
                        getCard[index].style.backgroundColor='#EEE8F680';
                        for (var i = 1; i < getForm.length ; i++){
                         getForm[i].style.display='none';
                         getCard[i].style.backgroundColor='transparent';
                        }
                    }
                    else if (index > 0){
                        for (var i = 0; i < getForm.length ; i++){
                            if(i == index){
                                getForm[index].style.display='';
                                getCard[index].style.backgroundColor='#EEE8F680';
                            }
                            else {
                                getForm[i].style.display='none';
                                getCard[i].style.backgroundColor='transparent';
                            }
                        }
                    }
            }
            function selectradio(index){
                getRadio[index].checked=true;
                getPay.style.display='none';
                if(index == 0){
                    getForm[index].style.display='';
                    getCard[index].style.backgroundColor='#EEE8F680';
                    for (var i = 1; i < getForm.length ; i++){
                        getForm[i].style.display='none';
                        getCard[i].style.backgroundColor='transparent';
                    }
                }
                else if (index > 0){
                    for (var i = 0; i < getForm.length ; i++){
                        if(i == index){
                            getForm[index].style.display='';
                            getCard[index].style.backgroundColor='#EEE8F680';
                        }
                        else {
                            getForm[i].style.display='none';
                            getCard[i].style.backgroundColor='transparent';
                        }
                    }
                }
            }

    </script>
    <script>
        function commaSeparateNumber(val) {

            if (val != "") {

                val = val.toString().replace(/,/g, ''); //remove existing commas first
                val = val.toString().replace(/تومان/g, ''); //remove existing commas first
                var valRZ = val.replace(/^0+/, ''); //remove leading zeros, optional
                var valSplit = valRZ.split('.'); //then separate decimals
                while (/(\d+)(\d{3})/.test(valSplit[0].toString())) {
                    valSplit[0] = valSplit[0].toString().replace(/(\d+)(\d{3})/, '$1' + ',' + '$2');
                }
                if (valSplit.length == 2) { //if there were decimals
                    val = valSplit[0] + "." + valSplit[1]; //add decimals back
                } else {
                    val = valSplit[0];
                }
                return val /*+ 'تومان'*/;
            }
            return "";
        }
        $(document).ready(function () {
            $('.prices').each(function () {

                $(this).on('input', function () {
                    var pattern = /^[0-9,]*$/g;

                    if($(this).val().match(pattern)){

                        $(this).bind('keypress',function(e){
                            var regex = new RegExp("^[0-9,]+$");
                            var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
                            if (regex.test(str)) return true;
                            e.preventDefault();
                            return false;
                        });

                        $(this).val(commaSeparateNumber($(this).val()));
                    }

                });

                //$(this).html(commaSeparateNumber($(this).html()));
            });
        });
    </script>

    {{--bay scripts--}}
    <script>
        function imposeMin(el , num){
            // if(el.value != ""){
            //     if(parseInt(el.value) < parseInt(el.min)){
            //         el.value = el.min;
            //     }
            // }
            // mahvash add some new script
            getNum = num.replace(/\,/g, '');
            var a = el.value;
            geValue = a.replace(/\,/g, '');
            if(geValue < getNum){
                el.value = num
            }
        }
    </script>

@endsection
