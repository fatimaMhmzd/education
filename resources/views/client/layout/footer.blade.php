<?php
$footerColumns = \Modules\Setting\Entities\FooterColumn::footer();

?>
<footer class="home-footer mt-5">
    <div class="container">
        <div class="footer-items py-0">
            <div class="row justify-content-center py-0">
                <div class="col-lg-8 b-c-footer border-footer">
                    <div class="row justify-content-lg-start justify-content-center pb-4 padding-top-32">
                        @foreach($footerColumns as $column)
                            @if($loop->index == 0)
                                <div class="text-lg-start text-center col-md-3 col-6 d-md-inline-block d-none">
                                    <span class="footer-title border-bottom pb-2">{{$column->title}}</span>
                                    <ul class="list-group margin-top-24 px-0">
                                        @foreach($column->items as $item)
                                            <li class="list-group-item px-0 footer-group-list border-0 text-lg-start text-center">
                                                <a href="{{$item->url}}" class="link-footer">{{$item->value}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @else
                                <div class="text-lg-start text-center col-md-3 col-6">
                                    <span class="footer-title border-bottom pb-2">{{$column->title}}</span>
                                    <ul class="list-group margin-top-24 px-0">
                                        @foreach($column->items as $item)
                                            <li class="list-group-item px-0 footer-group-list border-0 text-lg-start text-center">
                                                <a href="{{$item->url}}" class="link-footer">{{$item->value}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-4 col-md-7 col-12">
                    <div class="pb-4 padding-top-32">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-11">
                                <label for="news_input"
                                       class="form-label text-lg-start text-center d-block text-white font-14">
                                    با ثبت ایمیل، از جدیدیترین پروژه‌ها با خبر شوید
                                </label>
                                <div class="d-flex align-items-center">
                                    <input id="news_input" name="news" type="text" class="form-control">
                                    <button class="btn btn-footer ms-2">ثبت</button>
                                </div>
                                <div class="d-flex align-items-center justify-content-lg-start justify-content-center">
                                    <div class="footer-place">
                                        <img alt="enemad" src="{{asset('/sources/image/Rectangle 727.png')}}"
                                             class="img-fluid">
                                    </div>
                                    <div class="footer-place ms-2">
                                        <img alt="nemad" src="{{asset('/sources/image/Rectangle 725.png')}}"
                                             class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-border"></div>
    <div class="footer-infos py-3">
        <div class="container">
            <div class="d-md-flex d-block justify-content-between align-items-center">
                <div class="links">
                    <ul class="nav nav-fill footer-links-ul">
                        <li class="nav-item footer-links text-white px-4 font-12">حق مالکیت: کارماران</li>
                        <li class="nav-item footer-links text-white px-4 font-12 b-f-link-none"><a
                                    href="{{route('pageDetail',3)}}">قوانین و مقرارات</a></li>
                        <li class="nav-item d-lg-inline-block d-none footer-links text-white px-4 font-12 border-0">
                            سیاست حفظ حریم
                            خصوصی کاربران
                        </li>
                    </ul>
                </div>
                <div class="d-md-flex d-none text-center justify-content-center medias mt-md-0 mt-3">
                    <img alt="facebook"
                         src="{{asset('/sources/image/facebook.png')}}"
                         class="img-fluid me-3 img-action">
                    <img alt="social"
                         src="{{asset('/sources/image/Group 176.png')}}"
                         class="img-fluid me-3 img-action">
                    <img alt="social-2"
                         src="{{asset('/sources/image/Group 175.png')}}"
                         class="img-fluid me-3 img-action">
                    <img alt="instagram"
                         src="{{asset('/sources/image/instagram.png')}}"
                         class="img-fluid me-3 img-action">
                </div>
            </div>
        </div>
    </div>
</footer>


