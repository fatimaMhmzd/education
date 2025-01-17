<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="#">
                    <div class="brand-logo"></div>
                    <h2 class="brand-text mb-0">Education</h2></a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a href="#"><i class="feather icon-mail"></i><span class="menu-title" data-i18n="Email">داشبورد</span></a>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-shopping-cart"></i><span class="menu-title" data-i18n="Ecommerce">گروه آموزشی</span></a>
                <ul class="menu-content">
                    <li class="{{ Request::routeIs('admin_education_group_add') ? 'active' : '' }}"><a href="{{route('admin_education_group_add')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">گروه جدید</span></a>
                    </li>
                    <li class="{{ Request::routeIs('admin_education_group_list') ? 'active' : '' }}"><a href="{{route('admin_education_group_list')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Details">لیست گروه ها</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-shopping-cart"></i><span class="menu-title" data-i18n="Ecommerce">اساتید</span></a>
                <ul class="menu-content">
                    <li class="{{ Request::routeIs('admin_education_master_add') ? 'active' : '' }}"><a href="{{route('admin_education_master_add')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">استاد جدید</span></a>
                    </li>
                    <li class="{{ Request::routeIs('admin_education_master_list') ? 'active' : '' }}"><a href="{{route('admin_education_master_list')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Details">لیست اساتید</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-shopping-cart"></i><span class="menu-title" data-i18n="Ecommerce">دوره ها</span></a>
                <ul class="menu-content">
                    <li class="{{ Request::routeIs('admin_education_product_add') ? 'active' : '' }}"><a href="{{route('admin_education_product_add')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">دوره جدید</span></a>
                    </li>
                    <li class="{{ Request::routeIs('admin_education_product_list') ? 'active' : '' }}"><a href="{{route('admin_education_product_list')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Details">لیست دوره ها</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-shopping-cart"></i><span class="menu-title" data-i18n="Ecommerce">تایپ آموزشی</span></a>
                <ul class="menu-content">
                    <li class="{{ Request::routeIs('admin_education_type_add') ? 'active' : '' }}"><a href="{{route('admin_education_type_add')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">تایپ جدید</span></a>
                    </li>
                    <li class="{{ Request::routeIs('admin_education_type_list') ? 'active' : '' }}"><a href="{{route('admin_education_type_list')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Details">لیست تایپ ها</span></a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
