<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html">
                    <div class="brand-logo"></div>
                    <h2 class="brand-text mb-0">تکنوبای</h2></a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                        class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i
                        class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary"
                        data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="nav-item {{Route::currentRouteName() == "site_manager_admin_modules_index" ? 'active' : ''}}"><a href="{{route('site_manager_admin_modules_index')}}"><i class="feather icon-mail"></i><span class="menu-title">ماژول ها</span></a>
            </li>
            <li class="nav-item {{ in_array(Route::currentRouteName(), ['site_manager_admin_component_index','site_manager_admin_component_add','site_manager_admin_component_update']) ? 'active' : '' }}"><a href="{{route('site_manager_admin_component_index')}}"><i class="feather icon-mail"></i><span class="menu-title">اجزا</span></a>
            </li>
           {{-- <li class="nav-item"><a href="#"><i class="feather icon-shopping-cart"></i><span class="menu-title"
                                                                                             data-i18n="Ecommerce">اجزا</span></a>
                <ul class="menu-content">
                    <li class="{{Route::currentRouteName() == "site_manager_admin_component_index" ? 'active' : ''}}"><a href="{{route('site_manager_admin_component_index')}}"><i class="feather icon-circle"></i><span class="menu-item">لیست</span></a>
                    </li>
                    <li class="{{Route::currentRouteName() == "site_manager_admin_component_add" ? 'active' : ''}}"><a href="{{route('site_manager_admin_component_add')}}"><i class="feather icon-circle"></i><span class="menu-item">افزودن</span></a>
                    </li>

                </ul>
            </li>--}}





        </ul>
    </div>
</div>
