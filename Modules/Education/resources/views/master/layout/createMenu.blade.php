<div class="page-rightBar d-md-none mb-md-0 mb-3 mt-3">
    <div class="offcanvas offcanvas-start" style="width: 295px;height: 100vh !important;" id="page-offcanvas">
        <div class="offcanvas-body" style="background-color: #FFF6E7;padding: 0px;overflow-x: hidden !important;">
            <div class="row">
                <div class="col-1 bar-fixed">
                    <section class="right-div" >
                        <ul class="right-bar list-unstyled py-3" style="height: 100vh !important;">
                            <li>
                                <a href="{{route('user_profile')}}">
                                    <img src="/indexImages/icon-conf-page/grid-3.png" class="img-fluid list-image p-3">
                                </a>
                            </li>
                            <li>
                                <a href="{{route('user_profile')}}">
                                   <img src="/indexImages/icon-conf-page/profile-circle.svg" class="img-fluid list-image p-3">
                                </a>
                            </li>
                            <li onclick="showBar(2,0)">
                                <img src="/indexImages/masterIcons/teacher-bar.png" class="img-fluid list-image p-3">
                            </li>
                            <li onclick="showBar(3,1)">
                                <img src="/indexImages/masterIcons/Group 4-bar.png" class="img-fluid list-image p-3">
                            </li>
                            <li onclick="showBar(4,2)">
                                <img src="/indexImages/masterIcons/note-remove-bar.png" class="img-fluid list-image p-3">
                            </li>
                            <li onclick="showBar(5,3)">
                                <img src="/indexImages/masterIcons/bag-2-bar.png" class="img-fluid list-image p-3">
                            </li>
                            <li  onclick="showBar(6,4)">
                                <img src="/indexImages/masterIcons/menu-bar.png" class="img-fluid list-image p-3">
                            </li>
                        </ul>
                    </section>
                </div>

                <div class="col-1 list-li-sm py-3 ms-2" id="education-bar">
                    <h6 class="list-h6 text-center mb-3">آموزش</h6>
                    <ul class="list-group list-unstyled mt-3">
                        <li class="p-li list-group-item mb-2 border-0">
                            <a href="{{route('education_master_course_index')}}">
                                دوره‌های من
                            </a>
                        </li>
                        <li class="p-li list-group-item mb-2 border-0">
                            <a href="{{route('education_master_course_firstStep')}}">
                                ایجاد دوره جدید
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-1 list-li-sm py-3 ms-2 d-none" id="webinar-bar">
                    <h6 class="list-h6 text-center mb-3">وبینارها</h6>
                    <ul class="list-group list-unstyled mt-3">
                        <li class="p-li list-group-item mb-2 border-0">
                            <a href="#">
                                وبینارهای من
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-1 list-li-sm py-3 ms-2 d-none" id="exam-bar">
                    <h6 class="list-h6 text-center mb-3">آزمون‌ها</h6>
                    <ul class="list-group list-unstyled mt-3">
                        <li class="p-li list-group-item mb-2 border-0">
                            <a href="#">
                                ایجاد آزمون
                            </a>
                        </li>
                        <li class="p-li list-group-item mb-2 border-0">
                            <a href="#">
                                نتایج آزمون
                            </a>
                        </li>
                        <li class="p-li list-group-item mb-2 border-0">
                            <a href="#">
                                لیست آزمون‌ها
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-1 list-li-sm py-3 ms-2 d-none" id="buy-bar">
                    <h6 class="list-h6 text-center mb-3">سفارشات</h6>
                    <ul class="list-group list-unstyled mt-3">
                        <li class="p-li list-group-item mb-2 border-0">
                            <a href="#">
                                سفارشات
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-1 list-li-sm py-3 ms-2 d-none" id="report-bar">
                    <h6 class="list-h6 text-center mb-3">گزارشات</h6>
                    <ul class="list-group list-unstyled mt-3">
                        <li class="p-li list-group-item mb-2 border-0">
                            <a href="#">
                                گزارشات
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="col-1 d-md-inline-block d-none bar-fixed" id="bar-fixed">
    <section class="right-div">
        <ul class="right-bar list-unstyled py-3">
            <li class="pc-li">
                <a href="{{route('user_profile')}}">
                    <img src="/indexImages/icon-conf-page/grid-3.png" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="پنل استاد" class="img-fluid list-image p-3">
                </a>
            </li>
            <li class="pc-li">
                <a href="{{route('user_profile')}}">
                    <img src="/indexImages/icon-conf-page/profile-circle.svg" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="پروفایل" class="img-fluid list-image p-3">
                </a>
            </li>
            <li class="pc-li" onclick="showBar(9,0)">
                <img src="/indexImages/masterIcons/teacher-bar.png" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="آموزش" class="img-fluid list-image p-3">
            </li>
            <li class="pc-li" onclick="showBar(10,1)">
                <img src="/indexImages/masterIcons/Group 4-bar.png" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="وبینارها" class="img-fluid list-image p-3">
            </li>
            <li class="pc-li" onclick="showBar(11,2)">
                <img src="/indexImages/masterIcons/note-remove-bar.png" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="آزمون‌ها" class="img-fluid list-image p-3">
            </li>
            <li class="pc-li" onclick="showBar(12,3)">
                <img src="/indexImages/masterIcons/bag-2-bar.png" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="سفارشات" class="img-fluid list-image p-3">
            </li>
            <li class="pc-li" onclick="showBar(13,4)">
                <img src="/indexImages/masterIcons/menu-bar.png" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="گزارشات" class="img-fluid list-image p-3">
            </li>
        </ul>
    </section>
</div>

<div class="col-1 list-li py-3 ms-2" id="education-bar">
    <h6 class="list-h6 text-center mb-3">آموزش</h6>
    <ul class="list-group list-unstyled mt-3">
        <li class="p-li list-group-item mb-2 border-0">
            <a href="{{route('education_master_course_index')}}">
                دوره‌های من
            </a>
        </li>
        <li class="p-li list-group-item mb-2 border-0">
            <a href="{{route('education_master_course_firstStep')}}">
                ایجاد دوره جدید
            </a>
        </li>
    </ul>
</div>

<div class="col-1 list-li py-3 ms-2 d-none" id="webinar-bar">
    <h6 class="list-h6 text-center mb-3">وبینارها</h6>
    <ul class="list-group list-unstyled mt-3">
        <li class="p-li list-group-item mb-2 border-0">
            <a href="#">
                وبینارهای من
            </a>
        </li>
    </ul>
</div>

<div class="col-1 list-li py-3 ms-2 d-none" id="exam-bar">
    <h6 class="list-h6 text-center mb-3">آزمون‌ها</h6>
    <ul class="list-group list-unstyled mt-3">
        <li class="p-li list-group-item mb-2 border-0">
            <a href="#">
                ایجاد آزمون
            </a>
        </li>
        <li class="p-li list-group-item mb-2 border-0">
            <a href="#">
                نتایج آزمون
            </a>
        </li>
        <li class="p-li list-group-item mb-2 border-0">
            <a href="#">
                لیست آزمون‌ها
            </a>
        </li>
    </ul>
</div>

<div class="col-1 list-li py-3 ms-2 d-none" id="buy-bar">
    <h6 class="list-h6 text-center mb-3">سفارشات</h6>
    <ul class="list-group list-unstyled mt-3">
        <li class="p-li list-group-item mb-2 border-0">
            <a href="#">
                سفارشات
            </a>
        </li>
    </ul>
</div>

<div class="col-1 list-li py-3 ms-2 d-none" id="report-bar">
    <h6 class="list-h6 text-center mb-3">گزارشات</h6>
    <ul class="list-group list-unstyled mt-3">
        <li class="p-li list-group-item mb-2 border-0">
            <a href="#">
                گزارشات
            </a>
        </li>
    </ul>
</div>




