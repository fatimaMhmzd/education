@inject('nahad', 'Modules\SocialInstitution\Entities\SocialInstitution')

<header class="header">
    <nav class="navbar navbar-expand-md py-3">
        <!-- content -->
        <section class="container-fluid px-xl-5">
            <!-- flex to space content -->
            <div class="d-flex align-items-center justify-content-between w-100">
                <!-- brand -->
                <a class="navbar-brand" href="{{route('index')}}">
                    <img id="menuLogoHome" src="{{asset('/sources/image/logo.png')}}" alt="logo"
                         class="img-fluid">
                </a>
                @if(user_have_nahad())
                    @if(nahad_is_not_active())
                        <a href="{{route('dashboard_institution_summary')}}"
                           class="btn navbar-toggler font-14 text-white btn-site align-middle py-2 make-form">
                            پنل نهاد اجتماعی
                        </a>
                    @else
                        <a href="{{route('dashboard_institution_index')}}"
                           class="btn navbar-toggler font-14 text-white btn-site align-middle py-2 make-form">
                            پنل نهاد اجتماعی
                        </a>
                    @endif

                @else
                    <a href="{{route('institution_create_index')}}"
                       class="btn navbar-toggler font-14 text-white btn-site align-middle py-2 make-form">
                        ایجاد نهاد اجتماعی
                    </a>
                @endif
                @if(Auth::check() and count(Auth::user()->projects) > 0)
                    <a href="{{route('dashboard_project_index')}}"
                       class="btn navbar-toggler font-14 text-white btn-site align-middle py-2">
                        مدیریت پروژه
                    </a>
                @else
                    <a href="{{route('project_create_index')}}"
                       class="btn navbar-toggler font-14 text-white btn-site align-middle py-2">
                        ایجاد پروژه
                    </a>
                @endif
                <!-- content of navbar -->
                <div class="navbar-content d-md-inline-block d-none text-center">
                    <ul class="nav navbar-nav pe-5">
                        <li class="nav-item me-2">
                            <a class="nav-link pb-1 {{Request::routeIs('index') ? 'selected' : '' }}"
                               href="{{route('index')}}">
                                کارماران
                            </a>
                        </li>
                        <li class="nav-item me-2">
                            <a class="nav-link pb-1 {{Request::routeIs('project_index') ? 'selected' : '' }}"
                               href="{{route('project_index')}}">
                                همه پروژه ها
                            </a>
                        </li>
                        <li class="nav-item me-2">
                            <a class="nav-link pb-1"
                               href="{{route('about')}}">
                                درباره ما
                            </a>
                        </li>
                        <li class="nav-item me-2 d-xl-inline-block d-none">
                            <a class="nav-link pb-1"
                               href="{{route('helpcenter_index')}}">
                                مرکز راهنما
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pb-1"
                               href="{{route('blog_index')}}">
                                وبلاگ
                            </a>
                        </li>
                    </ul>
                </div>
                @if(Auth::check())
                    <div class="d-flex align-items-center">
                        @if(user_have_nahad())
                            @if(nahad_is_not_active())
                                <a href="{{route('dashboard_institution_summary')}}"
                                   class="btn btn-site d-xl-inline-block me-2 d-none make-form">
                                    پنل نهاد اجتماعی
                                </a>
                            @else
                                <a href="{{route('dashboard_institution_index')}}"
                                   class="btn btn-site d-xl-inline-block me-2 d-none make-form">
                                    پنل نهاد اجتماعی
                                </a>
                            @endif


                        @else
                            <a href="{{route('institution_create_index')}}"
                               class="btn btn-site d-xl-inline-block me-2 d-none make-form">
                                ایجاد نهاد اجتماعی
                            </a>
                        @endif
                        @if(Auth::check() and  count(Auth::user()->projects) > 0)
                            <a href="{{route('dashboard_project_index')}}"
                               class="btn btn-site d-xl-inline-block d-none make-form">
                                مدیریت پروژه
                            </a>
                        @else
                            <a href="{{route('project_create_index')}}"
                               class="btn btn-site d-xl-inline-block d-none make-form">
                                ایجاد پروژه
                            </a>
                        @endif
                        <div class="login-place d-md-inline-block d-none px-2">
                            <a class="btn btn-outline-site" href="{{route('dashboard_user_index')}}">
                                <i class="fa fa-user"></i>
                            </a>
                        </div>
                        <div class="login-place d-md-inline-block d-none">
                            <a class="btn btn-outline-site" href="{{route('logout')}}">
                                <i class="fa fa-door-open"></i>
                            </a>
                        </div>
                    </div>
                @else
                    <!-- login button -->
                    <div class="d-md-flex align-items-center d-none">
                        @if(Auth::check() and count(\Illuminate\Support\Facades\Auth::user()->projects) > 0)
                            <a href="{{route('dashboard_project_index')}}"
                               class="btn btn-outline-site make-form me-2">
                                مدیریت پروژه
                            </a>
                        @else
                            <a href="{{route('project_create_index')}}"
                               class="btn btn-outline-site make-form me-2">
                                ایجاد پروژه
                            </a>
                        @endif
                        <button class="btn-site btn"
                                aria-current="page"
                                data-bs-toggle="modal"
                                data-bs-target="#login-modal">
                            ورود / ثبت نام
                        </button>
                    </div>
                @endif
            </div>
            <!-- end flex -->
        </section>
        <!-- end content -->
    </nav>
    <section class="container mobile-menu">
        <div
            class="header-mobile rounded rounded-5 rounded-bottom-0 py-2 pt-4 w-100 d-md-none d-inline-block position-fixed bottom-0 end-0">
            <div class="container px-4">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="btn-phone text-site">
                        <div class="d-flex justify-content-center">
                            <a href="{{route('project_index')}}" class="btn btn-outline-site">
                                <i class="fa fa-book align-middle"></i>
                            </a>
                        </div>
                        <p class="mb-0 text-center mt-2">پروژه ها</p>
                    </div>
                    <div class="btn-phone text-site">
                        <div class="d-flex justify-content-center">
                            <a href="{{route('nahad_allinstitution')}}" class="btn btn-outline-site">
                                <i class="fa fa-users align-middle"></i>
                            </a>
                        </div>
                        <p class="mb-0 text-center mt-2">نهاد ها</p>
                    </div>
                    <div class="btn-phone text-site">
                        <a href="{{route('blog_index')}}" class="btn btn-outline-site">
                            <i class="fa fa-phone align-middle"></i>
                        </a>
                        <p class="mb-0 text-center mt-2">راهنما</p>
                    </div>
                    <div class="btn-phone text-site">
                        <a href="{{route('index')}}" class="btn btn-outline-site">
                            <i class="fa fa-newspaper align-middle"></i>
                        </a>
                        <p class="mb-0 text-center mt-2">وبلاگ</p>
                    </div>
                    <div class="btn-phone text-site">
                        @if(\Illuminate\Support\Facades\Auth::check())
                            <div class="dropup">
                                <a class="btn btn-outline-site" data-bs-toggle="dropdown">
                                    <i class="fa fa-user align-middle"></i>
                                </a>
                                <ul class="dropdown-menu shadow mb-1 border-0 dropdown-menu-start">
                                    <li class="dropdown-item">
                                        <a href="{{route('dashboard_user_index')}}" class="text-site">
                                            <i class="fa fa-user-plus align-middle"></i>
                                            حساب کاربری
                                        </a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="{{route('logout')}}" class="text-site">
                                            <i class="fa fa-door-open align-middle"></i>
                                            خروج
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        @else
                            <a
                                aria-current="page"
                                data-bs-toggle="modal"
                                data-bs-target="#login-modal"
                                class="btn btn-outline-site">
                                <i class="fa fa-user align-middle"></i>
                            </a>
                        @endif
                        <p class="mb-0 text-center mt-2">پروفایل</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-login></x-login>
    <x-code></x-code>
    <x-signup></x-signup>
    <x-forgot></x-forgot>
    <x-newpass></x-newpass>
</header>
