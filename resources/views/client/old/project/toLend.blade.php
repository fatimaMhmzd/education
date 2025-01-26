@extends('client.layout.total')

@section('style')

@stop

@section('content')

    <div id="user">

        <section class="container mt-4">
            <div class="row text-center">

                <div class="col-3 font-12 text-75"><a onclick="window.history.go(-1)">انتخاب پاداش</a></div>

                <div class="col-3 font-12 text-75">پرداخت</div>
                <div class="col-3 font-12 text-75">رسید</div>
                <div class="col-3 font-12 text-75">تقدیر نامه</div>
            </div>
            <div class="row text-center mt-2 justify-content-center">
                <div class="col-3">
                    <div class="d-flex justify-content-center align-items-center">
                        <div
                            style="border:1px solid #A0E426;width: 25px;height: 25px;background-color: #FFFBF5;border-radius: 50%">
                            <i class="fa-solid fa-check mt-1" style="color:  #A0E426"></i>
                        </div>
                    </div>
                    <div class="d-md-flex d-none "
                         style="width: 100%;margin-top: -12px;margin-right: 145px;border-bottom: 1px solid #A0E426;"></div>
                </div>
                <div class="col-3">
                    <div class="d-flex justify-content-center align-items-center ">
                        <div
                            style="border:1px solid #C9B1E6;width: 25px;height: 25px;background-color: #FFFBF5;border-radius: 50%">
                            <i class="fa-solid fa-stop"
                               style="color: #C9B1E6;margin-top: 3.93px;margin-left: 0.5px;"></i>
                        </div>
                    </div>
                    <div class="d-md-flex d-none"
                         style="width: 100%;margin-top: -12px;margin-left:100px;border-bottom: 1px solid #C9B1E6;"></div>
                </div>
                <div class="col-3">
                    <div class="d-flex justify-content-center">
                        <div
                            style="border:1px solid #C6C6C6;width: 25px;height: 25px;background-color: #FFFBF5;border-radius: 50%">
                            <i class="fa-solid fa-stop"
                               style="color: #C6C6C6;margin-top: 3.93px;margin-left: 0.5px;"></i>
                        </div>
                    </div>
                    <div class="d-md-flex d-none"
                         style="width: 100%;margin-top: -12px;margin-right:-90px;border-bottom: 1px solid #C6C6C6; "></div>
                </div>
                <div class="col-3">
                    <div class="d-flex justify-content-center">
                        <div
                            style="border:1px solid #C6C6C6;width: 25px;height: 25px;background-color: #FFFBF5;border-radius: 50%;">
                            <i class="fa-solid fa-stop"
                               style="color: #C6C6C6;margin-top: 3.93px;margin-left: 0.5px;"></i>
                        </div>
                    </div>
                    <div class="d-md-flex d-none"
                         style="width: 100%;margin-top: -12px;margin-right:-142px;border-bottom: 1px solid #C6C6C6;"></div>
                </div>
            </div>
        </section>



        <form method="post" action="{{--{{route('storeToLend')}}--}}">
            @csrf
            <input name="projectId" value="1" hidden>
            <input name="amount" value="100000" hidden>

            <input name="reward" value="" hidden>

                <input name="type" value="" hidden>

            <section class="container mt-5">
                <div class="text-center">
                    <h6 class="text-46 font-14">شما می خواهید 10000000000 هزار تومان به پروژه تست
                        کمک کنید. </h6>

                        <p class="text-75 font-12 mt-3">شما پاداش تست را انتخاب کرده اید.</p>

                </div>
                <div class="row mt-4 justify-content-center">
                    <p class="text-center" style="color: #1F1F1F;">لطفا روش پرداخت را انتخاب کنید.</p>
                    <p class="text-center mb-2 mt-3" style="color: #ee0c0c;">موجودی کیف پول شما در حال حاضر :</p>
                    <p class="text-center price"
                       style="color: #ee0c0c;">1000000</p>


                    <div class="col-md-2 col-5 mt-4">
                        <div class="card payment-choose">
                            <input type="radio" checked name="cost" id="payment-cost" onchange="changeCost()"
                                   class="form-check-input my-2 mx-2" value="online">
                            <div class="card-image">
                                <img src="/newthem/images/card-tick-ch.png" class="card-img" id="cost-image">
                            </div>
                            <div class="card-body text-center">
                                <h6 class="card-title">پرداخت آنلاین</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-5 mt-4">
                        <div class="card payment-choose">
                            <input type="radio" name="cost" id="payment-wallet" onchange="changeWallet()"
                                   class="form-check-input my-2 mx-2" value="wallet">
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
                            <label class="form-check-label font-14 text-75">می‌خواهم کمک مالی من، در صورتی که پروژه به
                                هدف
                                خود
                                نرسد، در کیف پول
                                مجازی کارماران من باقی بماند. اطلاعات بیشتر</label>
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="form-check">
                            <input type="checkbox" name="more-payment" onchange="showMore(10000000)"
                                   id="user-more"
                                   class="form-check-input">
                            <label class="form-check-label font-14 text-75">برای کمک به جامعه بهتر و پیشرفت کارماران
                                میخواهم
                                کمک
                                بیشتری کنم
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3 offset-md-3">
                        <div class="input-group" id="input-div">
                            <input type="text" id="req" value="10000000" hidden>
                            <input type="text" min="0" onchange="imposeMin(this,10000000)"
                                   onkeyup=imposeMin(this,10000000)
                                   name="value"
                                   value="0"
                                   class="form-control prices" id="input-more">
                            <label class="input-group-text">تومان</label>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <p class="font-14 text-75 d-none" id="result">
                        شما قرار است <span id="resultNum" class="fw-bold"></span> تومان کمک کنید که، <span
                            class="price fw-bold">10000000</span> تومان به پروژه و <span id="min"
                                                                                                     class="fw-bold price">0</span>
                        تومان به نهاد کارماران کمک کنید
                    </p>
                </div>

                    <div class="d-grid mt-4 mx-md-5 mb-3">
                        <a class="btn btn-purple" href="{{route('project_success')}}">مشارکت</a>
                    </div>
            </section>
        </form>


    </div>
    <div id="nahad" style="display: none">

        <section class="container mt-4">
            <div class="row text-center">

                <div class="col-3 font-12 text-75"><a onclick="window.history.go(-1)">انتخاب پاداش</a></div>

                <div class="col-3 font-12 text-75">پرداخت</div>
                <div class="col-3 font-12 text-75">رسید</div>
                <div class="col-3 font-12 text-75">تقدیر نامه</div>
            </div>
            <div class="row text-center mt-2 justify-content-center">
                <div class="col-3">
                    <div class="d-flex justify-content-center align-items-center">
                        <div
                            style="border:1px solid #A0E426;width: 25px;height: 25px;background-color: #FFFBF5;border-radius: 50%">
                            <i class="fa-solid fa-check mt-1" style="color:  #A0E426"></i>
                        </div>
                    </div>
                    <div class="d-md-flex d-none "
                         style="width: 100%;margin-top: -12px;margin-right: 145px;border-bottom: 1px solid #A0E426;"></div>
                </div>
                <div class="col-3">
                    <div class="d-flex justify-content-center align-items-center ">
                        <div
                            style="border:1px solid #C9B1E6;width: 25px;height: 25px;background-color: #FFFBF5;border-radius: 50%">
                            <i class="fa-solid fa-stop"
                               style="color: #C9B1E6;margin-top: 3.93px;margin-left: 0.5px;"></i>
                        </div>
                    </div>
                    <div class="d-md-flex d-none"
                         style="width: 100%;margin-top: -12px;margin-left:100px;border-bottom: 1px solid #C9B1E6;"></div>
                </div>
                <div class="col-3">
                    <div class="d-flex justify-content-center">
                        <div
                            style="border:1px solid #C6C6C6;width: 25px;height: 25px;background-color: #FFFBF5;border-radius: 50%">
                            <i class="fa-solid fa-stop"
                               style="color: #C6C6C6;margin-top: 3.93px;margin-left: 0.5px;"></i>
                        </div>
                    </div>
                    <div class="d-md-flex d-none"
                         style="width: 100%;margin-top: -12px;margin-right:-90px;border-bottom: 1px solid #C6C6C6; "></div>
                </div>
                <div class="col-3">
                    <div class="d-flex justify-content-center">
                        <div
                            style="border:1px solid #C6C6C6;width: 25px;height: 25px;background-color: #FFFBF5;border-radius: 50%;">
                            <i class="fa-solid fa-stop"
                               style="color: #C6C6C6;margin-top: 3.93px;margin-left: 0.5px;"></i>
                        </div>
                    </div>
                    <div class="d-md-flex d-none"
                         style="width: 100%;margin-top: -12px;margin-right:-142px;border-bottom: 1px solid #C6C6C6;"></div>
                </div>
            </div>
        </section>


        <form method="post" action="{{--{{route('storeToLend')}}--}}">
            @csrf
            <input name="projectId" value="1" hidden>
            <input name="amount" value="10000000" hidden>

            <input name="reward" value="10000000" hidden>

                <input name="type" value="1" hidden>

            <section class="container mt-5">
                <div class="text-center">
                    <h6 class="text-46 font-14">شما می خواهید 10000000 هزار تومان به پروژه تست
                        کمک کنید. </h6>

                        <p class="text-75 font-12 mt-3">شما پاداش تست را انتخاب کرده اید.</p>

                </div>
                <div class="row mt-4 justify-content-center">
                    <p class="text-center" style="color: #1F1F1F;">لطفا روش پرداخت را انتخاب کنید.</p>


                        <p class="text-center mb-2 mt-3" style="color: #ee0c0c;">موجودی کیف پول <strong
                                class="text-black-50">نهاد</strong> شما در حال حاضر :</p>
                        <p class="text-center price"
                           style="color: #ee0c0c;">100</p>


                    <div class="col-md-2 col-5 mt-4">
                        <div class="card payment-choose">
                            <input type="radio" name="cost" checked id="payment-wallet" onchange="changeWallet()"
                                   class="form-check-input my-2 mx-2" value="wallet">
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
                            <label class="form-check-label font-14 text-75">می‌خواهم کمک مالی من، در صورتی که پروژه به
                                هدف
                                خود
                                نرسد، در کیف پول
                                مجازی کارماران من باقی بماند. اطلاعات بیشتر</label>
                        </div>
                    </div>
                    <div class="col-12 mt-4 d-none">
                        <div class="form-check">
                            <input type="checkbox" name="more-payment" onchange="showMore(10)"
                                   id="user-more"
                                   class="form-check-input">
                            <label class="form-check-label font-14 text-75">برای کمک به جامعه بهتر و پیشرفت کارماران
                                میخواهم
                                کمک
                                بیشتری کنم
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3 offset-md-3 d-none">
                        <div class="input-group" id="input-div">
                            <input type="text" id="req" value="10000000" hidden>
                            <input type="text" min="0" onchange="imposeMin(this,10000000)"
                                   onkeyup=imposeMin(this,10000000)
                                   name="value"
                                   value="0"
                                   class="form-control prices" id="input-more">
                            <label class="input-group-text">تومان</label>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <p class="font-14 text-75" id="result">
                        شما قرار است <span id="resultNum" class="fw-bold"></span> تومان کمک کنید که، <span
                            class="price fw-bold">10000000</span> تومان به پروژه و <span id="min" style="display: none"
                                                                                                     class="fw-bold price">0</span>
                         کمک کنید
                    </p>
                </div>
                    <div class="d-grid mt-4 mx-md-5 mb-3">
                        <button name="type" value="nahad" class="btn btn-purple">مشارکت</button>
                    </div>
            </section>
        </form>
    </div>

    <div class="modal fade delete-modal" data-keyboard="false" data-bs-backdrop="static" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-items">
                        <p class="modal-admin-del">انتخاب نقش ورود</p>
                        <p class="modal-text my-3">
                            با کدام نقش میخواهید وارد این صفحه شوید؟
                        </p>
                        <div class="modal-button d-flex justify-content-start">
                            <button class="btn remove-admin-btn me-2 px-3" data-bs-dismiss="modal">نقش کاربری
                            </button>
                            <button class="btn remove-admin-btn me-2 px-3" onclick="setManager()">نقش مدیریت نهاد</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
        var getResult = document.getElementById('result');

        function showBtn() {
            zeroForm.className = "col-md-6 mt-md-0 mt-3"
            for (var i = 0; i < getBtns.length; i++) {
                getBtns[i].className = "row forms mt-3 mb-2 d-none";
            }
        }

        function showRadio(index) {
            if (getRadio[index].checked == true) {
                zeroForm.className = "col-md-6 mt-md-0 mt-3 d-none";
                getBtns[index].className = "row forms mt-3 mb-2";
            } else {
                zeroForm.className = "col-md-6 mt-md-0 mt-3 d-none";
                getBtns[index].className = "row forms mt-3 mb-2 d-none";
            }
        }

        var textMessage = document.getElementById('result');

        function showMore() {
            if (getMore.checked == true) {
                textMessage.className = 'font-14 text-75';
            } else {
                textMessage.className = 'font-14 text-75 d-none';
            }
        }

        document.getElementById('cost-image').src = "/newthem/images/card-tick.png";

        function changeCost() {
            document.getElementById('cost-image').src = "/newthem/images/card-tick.png";
            document.getElementById('wallet-image').src = "/newthem/images/empty-wallet.png";
        }

        function changeWallet() {
            document.getElementById('wallet-image').src = "/newthem/images/empty-wallet-ch.png";
            document.getElementById('cost-image').src = "/newthem/images/card-tick-ch.png";
        }

        document.getElementById('resultNum').innerText = document.getElementById('req').value;
        {{--bay scripts--}}
        function imposeMin(el, value) {

            var requestVal = document.getElementById('req').value;
            var result = parseFloat(el.value.replace(/\,/g, '')) + parseFloat(requestVal.replace(/\,/g, ''));
            var min = parseFloat(el.value.replace(/\,/g, '')) - parseFloat(requestVal.replace(/\,/g, ''));

            if (el.value != "") {
                if (parseInt(el.value) < parseInt(el.min)) {
                    el.value = el.min;
                }
            } else {
                result = parseFloat(requestVal.replace(/\,/g, ''));
                min = parseFloat(requestVal.replace(/\,/g, ''));
            }

            // Mahvashi scripts //

            //var minShow = Math.abs(min);
            var minShow = 0;
            if (el.value != "") {
                var minShow = parseFloat(el.value.replace(/\,/g, ''));
            }

            document.getElementById('resultNum').innerText = result;
            document.getElementById('min').innerText = minShow;
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

                    if ($(this).val().match(pattern)) {

                        $(this).bind('keypress', function (e) {
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

       // var isManager = {{--{{$isNahadManager}}--}};
        const sonucModal = document.getElementById('myModal');
        const modalEl = new bootstrap.Modal(sonucModal);
        if (isManager == 1) {
            modalEl.show();
        }

        function setManager() {
            document.getElementById("user").style.display="none";
            document.getElementById("nahad").style.display="block";
            modalEl.hide();
        }

    </script>

@endsection
