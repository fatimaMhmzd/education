@extends('education::master.layout.totalWithMenu')

@section('style')
    <style>

        .carousel-item::-webkit-scrollbar{
            display: none;
            transition: all 3s;
            scroll-behavior: smooth !important;
        }

        #item-scroll{
            scroll-behavior: smooth !important;
        }

        #item-scroll-s{
            scroll-behavior: smooth !important;
        }

        .select-col{
            background-color: #F050AE0D;
            border: 0.5px solid #FFB7FF;
        }

        a:link{
            color: #464646;
        }

        a:visited{
            color: #464646;
        }

    </style>
@stop

@section('content')

    <section style="background-color: #FDFEFF;">
        <div class="container mt-5">
            <div class="row mb-4 ps-md-0 ps-4">
                <div class="col-md-2 d-md-inline-block d-none mt-2 py-2 px-3" style="background-color: #66A8FC;border-radius: 0px 8px 8px 0px;">
                    <p class="text-center vertical-td" style="margin-top: 6px;font-size: 22px;font-weight: 500;color: #FDFEFF">صفحه اساتید</p>
                </div>
                <div class="col-md-4 col-6 mt-2 py-2 px-3"
                     style="background-color: #FFF6E7;border-top-right-radius: 0px;border-bottom-left-radius: 8px">
                    <div class="card border-0" style="background-color: #FFF6E7;">
                        <div class="row">
                            <div class="col-md-2 col-4 mt-1 rounded-circle" style="background-color:#FFF6E7;">
                                <div style="background-image: url('{{\Illuminate\Support\Facades\Auth::user()?->image}}');background-position: center;background-size: cover;background-repeat: no-repeat;width: 40px;height: 40px"
                                     class="card-img  rounded-circle"></div>
                            </div>
                            <div class="col-md-10 col-8" style="margin-top: 12px;margin-right: -13px;">
                                {{\Illuminate\Support\Facades\Auth::user()?->name}}
                                <i class="fa-solid fa-pen-clip d-md-inline d-none ms-1"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="seccond-col col-md-6 mt-2 col-6 py-2 px-3"
                     style="background-color: #FFF6E7;border-top-left-radius: 8px;border-bottom-left-radius: 8px">
                    <div class="d-flex justify-content-end" style="margin-top: 11px">
                        <a href="#"><img class="img-action me-md-4 me-2" src="/indexImages/clipboard-tick.png"></a>
                        <a href="#"><img class="img-action me-md-4 me-2" src="/indexImages/calendar.png"></a>
                        <a href="#"><img class="img-action me-md-4 me-2 " src="/indexImages/messages-2.png"></a>
                        <a href="#"><img class="img-action me-md-2 me-2 " src="/indexImages/arrow-right.png"></a>
                        <a href="#"><img class="img-action" src="/indexImages/arrow-left.png"></a>
                    </div>
                </div>
            </div>
            <div class="d-md-block">
                <div class="row row-cols-3 justify-content-center">
                    <div class="select-col col ms-md-3 mt-2">
                        <a href="#">
                            <div class="select-card card p-2 border-0">
                                <div class="card-image">
                                    <img src="/indexImages/masterIcons/user-edit.svg" alt="profile"
                                         class="card-img img-fluid">
                                </div>
                                <p class="card-text text-center font-14">پروفایل</p>
                            </div>
                        </a>
                    </div>
                    <div class="select-col col ms-3 mt-md-2 mt-2 ">
                        <a href="{{route('education_master_course_index')}}">
                            <div class="select-card card border-0 p-2">
                                <div class="card-image">
                                    <img src="/indexImages/masterIcons/teacher.png" alt="projects"
                                         class="card-img">
                                </div>
                                <p class="card-text text-center font-14">دوره‌ها</p>
                            </div>
                        </a>
                    </div>
                    <div class="select-col col ms-3 mt-md-2 mt-2 ">
                        <a href="#">
                            <div class="select-card card border-0 p-2">
                                <div class="card-image">
                                    <img src="/indexImages/masterIcons/Group 4.png" alt="do" class="card-img">
                                </div>
                                <p class="card-text text-center font-14">وبینارها</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row row-cols-3 mt-2 justify-content-center">
                    <div class="select-col col ms-md-3 mt-md-2 mt-2">
                        <div class="select-card card border-0 p-2">
                            <a href="">
                                <div class="card-image">
                                    <img src="/indexImages/masterIcons/Group 3.png" alt="wallet"
                                         class="card-img">
                                </div>
                                <p class="card-text text-center font-14">آزمون‌ها</p>
                            </a>
                        </div>
                    </div>
                    <div class="select-col col ms-3 mt-md-2 mt-2">
                        <div class="select-card card border-0 p-2">
                            <a href="">
                                <div class="card-image">
                                    <img src="/indexImages/masterIcons/bag-2.png" alt="wallet"
                                         class="card-img">
                                </div>
                                <p class="card-text text-center font-14">سفارشات</p>
                            </a>
                        </div>
                    </div>
                    <div class="select-col col ms-3 mt-md-2 mt-2">
                        <div class="select-card card border-0 p-2">
                            <a href="">
                                <div class="card-image">
                                    <img src="/indexImages/masterIcons/menu.png" alt="wallet"
                                         class="card-img">
                                </div>
                                <p class="card-text text-center font-14">گزارشات</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5 justify-content-center">
                <div class="col-md-8 mt-md-0 mt-3">
                    <div class="card py-3 px-4" style="height: 166px;border-radius: 8px;background-color: #FDFEFF;">
                        <div class="card-body">
                            <p class="card-text mb-3 text-75 font-14" style="margin-top: 2px;">تعداد دوره‌های برگزار شده:
                                <span class="float-end text-46">11</span>
                            </p>
                            <p class="card-text mb-3 text-75 font-14">تعداد وبینارها:
                                <span class="float-end text-46">15</span>
                            </p>
                            <p class="card-text mb-3 text-75 font-14">تعداد هنرجو‌ها:
                                <span class="float-end text-46">500</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section style="background-color: #EEE8F6;" class="mt-5 py-4">
            <div class="container">
                <h6 style="font-size: 18px;color: #1F1F1F;">دوره‌های من</h6>
                <section class="card-scroll container mt-4">
                    <div class="carousel slide" data-bs-ride="carousel" id="page-carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" id="item-scroll" style="width: 100%;overflow-x: scroll">
                                <div class="row d-flex flex-row flex-nowrap">
                                    @foreach($courses as $course)
                                        <div class="col-3 me-3" style="width: 290px;">
                                            <div class="card border-1 p-3" style="width: 290px;border-color: #C6C6C6 !important;box-shadow: 2px 2px 9px 0px #794BA426;height: 492px">
                                                @if($course->offPercent and $course->offPercent > 0)
                                                    <div class="off-div float-start text-center py-2">
                                                        <p class="text-light">{{$course->offPercent}} %</p>
                                                        <p class="text-light">Off</p>
                                                    </div>
                                                @endif
                                                <div class="card-image">
                                                    @if($course->image)
                                                        <div  style="border-radius: 8px;height: 241px;;background-image: url({{$course->image}});background-position: center;background-size: cover;background-repeat: no-repeat"></div>
                                                    @else
                                                        <div  style="border-radius: 8px;height: 241px;;background-image: url('/indexImages/Rectangle 2505.png');background-position: center;background-size: cover;background-repeat: no-repeat"></div>
                                                    @endif
                                                </div>
                                                <div class="card-body position-relative text-center">
                                                    <h6 class="card-title" style="font-size: 18px;color: #1F1F1F;">
                                                        {{$course->title}}
                                                    </h6>
                                                    <p class="card-subtitle mt-2 text-75 font-14" style="border-color: #C6C6C6 !important;">
                                                        {!! $course->description !!}
                                                    </p>
                                                    <hr>
                                                    <p class="card-text text-decoration-line-through text-75 font-14"
                                                       style="margin-top: 23px;">
                                                        {{$course->price}} تومان
                                                    </p>
                                                    <p class="card-text" style="font-size: 18px;font-weight: 500;">
                                                        {{ round(($course->price * (100 - $course->offPercent)) / 100) }}
                                                        تومان
                                                    </p>
                                                    <div class="d-grid mt-3">
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-purple px-4"
                                                                    style="background-color: #F050AE;height: 44px;border-left:0.5px solid #FDFEFF;">
                                                                مشاهده دوره
                                                            </button>
                                                            <button type="button" class="btn btn-purple p-0"
                                                                    style="background-color: #F050AE;height: 44px;border-right:0.5px solid #FDFEFF;">
                                                                <img src="/indexImages/edit-10.png"
                                                                     style="vertical-align: middle;"
                                                                     onclick="changeIcon(this)">
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-next d-md-inline-block d-none int-btn-po" id="btn-po-left" style="background-color: #EEE8F6;" onclick="this.style.opacity='1'">
                            <img src="/indexImages/nahad/arrow-left.png" class="carousel-next" onclick="scrollItem(1)">
                        </button>
                        <button class="carousel-control-prev int-btn-po d-none" id="btn-po-right" style="background-color: #EEE8F6;" onclick="this.style.opacity='1'">
                            <img src="/indexImages/nahad/arrow-right.png" class="carousel-prev" onclick="scrollItem(3)">
                        </button>
                    </div>
                </section>
            </div>
        </section>

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
                                <li class="foter-p-item nav-item py-3 px-md-0 px-2 img-action">حق مالکیت: کارماران </li>
                                <li class="foter-p-item nav-item py-3 px-md-0 px-2 img-action">قوانین و مقرارات </li>
                                <li class="foter-p-item nav-item py-3 px-md-0 px-2 img-action">سیاست حفظ حریم خصوصی کاربران </li>
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
        function scrollItem(index){
            if(index==1){
                document.getElementById('btn-po-right').className='carousel-control-prev int-btn-po'
                document.getElementById("item-scroll").scrollLeft -= 300;
            }
            else if(index==2){
                document.getElementById('btn-po-right-2').className='carousel-control-prev int-btn-po'
                document.getElementById("item-scroll-s").scrollLeft -= 300;
                console.log(document.getElementById("item-scroll-s").scrollLeft)
            }
            else if(index==3){
                document.getElementById('btn-po-left').className='carousel-control-next int-btn-po'
                document.getElementById("item-scroll").scrollLeft += 300;
                if(document.getElementById("item-scroll").scrollLeft==0){
                    document.getElementById('btn-po-right').className='carousel-control-prev int-btn-po d-none'
                }
            }
            else if(index==4){
                document.getElementById('btn-po-left-2').className='carousel-control-next int-btn-po'
                document.getElementById("item-scroll-s").scrollLeft += 300;
                if(document.getElementById("item-scroll-s").scrollLeft==0){
                    document.getElementById('btn-po-right-2').className='carousel-control-prev int-btn-po d-none'
                }
            }

        }
    </script>
    <script>
        var getSCard = document.getElementsByClassName('card-front-s');
        var getSInfo = document.getElementsByClassName('show-info-s');

        function showSCard(index) {
            getSInfo[index].className='show-info-s card border-0'
            getSCard[index].style.display = 'none';
        }

        function showSFront(index) {
            getSInfo[index].className='show-info-s card d-none border-0'
            getSCard[index].style.display = '';
        }
    </script>
    <script>
        function saveProject(id , type) {

            var typee = 0;
            if(this.event.target.src.includes("/indexImages/icon-home-page/archive-add.png")){
                typee =1;
            }

            if(typee == 0){
                this.event.target.src = '/indexImages/icon-home-page/archive-add.png'

            }else {
                this.event.target.src = '/indexImages/icon-home-page/archive-tick.png'

            }

            //var firstGroupId = document.getElementById('group').value;
            $.ajax({
                url: "/storeSave/" + id + "/" +typee,
                type: 'GET',
                success: function (res) {
                    /*if(res){
                        parenttt.event.target.src = '/indexImages/icon-home-page/archive-add.png'

                    }else {
                        parenttt.event.target.src = '/indexImages/icon-home-page/archive-tick.png'
                    }*/
                }
            });


        }


        $(':checkbox').change(e => {
            let opts = $(":checkbox:checked").map((i, el) => el.value).get();
            console.log(opts);
            $.ajax({
                url: "/filterKindApi?kind="+opts,
                type: 'GET',
                success: function (res) {
                    var card ="";
                    var data = res.data
                    console.log(res.data.length)

                    for (var k=0;k< res.data.length;k++){
                        if(data[k]['userCheck']){

                            if(data[k]['saveProject']) {
                                var save = `<img class="float-end mt-2 mb-2" src="/indexImages/icon-home-page/archive-tick.png"  onclick=" saveProject(`+data[k]['id']+` , 0)">`
                            }
                            else{
                                var save = `<img class="float-end mt-2 mb-2" src="/indexImages/icon-home-page/archive-add.png"  onclick=" saveProject(`+data[k]['id']+` , 1)">`
                            }
                        }
                        else{
                            var save = `  <img class="float-end mt-2 mb-2" src="/indexImages/icon-home-page/archive-add.png"  >`
                        }
                        var state = data[k]['emergencyExpenseAmount'] + data[k]['extraExpenseAmount']
                        if (data[k]['image']){
                            var pic =data[k]['image']
                            var image = `<a href="http://karmarun.ir/projectDetail/`+data[k]['id']+`">
                                                <div class="card-image-project" style="background-image: url(`+pic['image']+`)"></div>
                                            </a>`
                        }else {
                            var image = ` <a href="http://karmarun.ir/projectDetail/`+data[k]['id']+`">
                                                <div class="card-image-project" style="background-image: url('/indexImages/Rectangle\ 693.png')"></div>
                                            </a>`
                        }
                        var item =
                            `<div class="col-md-3 me-3 content-card-div mt-md-0 mt-3 mb-5" style="width: 290px">
                            <div class="show-info-s card d-none border-0" style="width: 290px">
                                <div class="card-body">
                                    <div class="d-flex justify-content-end">
                                        <button class="btn-close btn-sm" onclick="showSFront(${k})"></button>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <h6 class="card-title font-14" style="color: #1F1F1F;">اخذ شده:</h6>
                                            <p class="card-text d-inline-block font-12"> تومان
                                            <p class="card-text float-end font-14 mt-1 price">`+data[k]['cash']+`</p>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-12">
                                            <h6 class="card-title font-14" style="color: #1F1F1F;">کمترین:</h6>
                                            <p class="card-text d-inline-block font-12"> تومان
                                            <p class="card-text float-end font-12 mt-1 price" >`+data[k]['emergencyExpenseAmount']+`</p>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-12">
                                            <h6 class="card-title font-14" style="color: #1F1F1F;">باقی مانده:</h6>
                                            <p class="card-text d-inline-block font-12"> تومان
                                            <p class="card-text float-end font-14 mt-1 price">`+data[k]['remaining']+`</p>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-12 rounded-0">
                                            <h6 class="card-title font-14" style="color: #1F1F1F;">حالت مطلوب:</h6>
                                            <p class="card-text d-inline-block font-12"> تومان
                                            <p class="card-text float-end font-14 mt-1 price">`+state+`</p>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12 border-0 border-bottom border-top pt-2 pb-2 rounded-0">
                                            <p class="card-text d-inline-block font-12">پشتیبان:
                                            <p class="card-text float-end font-14">`+data[k]['givers']+` نفر</p>
                                            </p>
                                        </div>
                                    </div>
                                    <p class="font-12 text-center mt-2" style="color: #A3A3A3;">
                                        <i class="fa-solid fa-location-dot"></i>
                                        `+data[k]['province']+`/ `+data[k]['town']+`
                           </p>
                           <div class="d-grid">
                               <button class="btn btn-purple" style="margin-top:14px;height: 44px">
                                   <a href="http://karmarun.ir/reward/`+data[k]['id']+`)}}">
                                                قرض می دهم
                                            </a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-front-s card content-card border-0" id="card-front" style="width: 290px">
                                <div class="card-content">
                                    <div style="height: 14rem;">
                                       `+image+`
                           </div>
                           <div class="project-content" style="margin-top: -2.5rem;">
                               <div class="card-body">
                                   <div class="d-flex d-btn justify-content-center">
                                       <button class="btn btn-card" style="box-shadow: 0px 2px 7px 2px #794BA44D;" onclick="showSCard(${k})">
                                                    <img src="/indexImages/icom-user-page/eye.png"
                                                         class="img-fluid btn-image">
                                                </button>
                                            </div>
                                            <h6 class="card-title font-14 mt-4">
                                               `+data[k]['title']+`
                           </h6>
                           <p class="card-text font-12 text-75 mt-2" style="white-space: nowrap;overflow: hidden; text-overflow: ellipsis">
                            `+data[k]['subTitle']+`
                           </p>
                           <div class="row justify-content-center text-center mt-3">
                               <div class="col-6 border-top border-bottom border-1 border-end py-3">
                                   <span class="font-14 text-center">حالت مطلوب:</span>
                                   <br>
                                   <span class="font-12 text-75 text-center price">`+state+`</span>
                                                </div>
                                                <div class="col-6 border-top border-bottom border-1 py-3">
                                                    <span class="font-14 text-center">اخذ شده:</span>
                                                    <br>
                                                    <span class="font-12 text-75 text-center price">`+data[k]['cash']+`</span>
                                                </div>
                                            </div>
                                            <p class="font-12 text-75 mt-2 mb-1">`+data[k]['percent']+` %</p>
                                            <div class="progress">
                                                <div class="progress-bar progress-card" style="width:`+data[k]['percentTotal']+` %;">
                                                    <div class="achive-progress" ></div>
                                                    <div class="vilvilak" style="right: `+data[k]['emergencyPercent']+`%"></div>
                                                </div>
                                            </div>
                                            <span class="font-10 text-75">18 روز باقی مانده است.</span>`+save+`
                           </div>
                       </div>
                   </div>
               </div>
           </div>`
                        card += item
                    }
                    document.getElementById('allProject').innerHTML= card
                }
            });
        });
        // $("#merge_button").click(function(event){
        //     event.preventDefault();
        //     var searchIDs = $("#find-table input:checkbox:checked").map(function(){
        //         return $(this).val();
        //     }).get(); // <----
        //     console.log(searchIDs);
        // });
    </script>
@endsection
