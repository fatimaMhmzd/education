<?php

return [
    'auth' => [
        'messages' => [
            'check_device_status_inactive' => 'ورود شما با این دستگاه(برای این نقش) غیر فعال میباشد',
            'check_device_status_block' => 'ورود شما با این دستگاه(برای این نقش) مسدود میباشد',
            'check_device_status_unknown' => 'ورود شما با این دستگاه(برای این نقش) نامشخص میباشد',
        ],
    ],
    'defaults' => [
        'success' => 'با موفقیت انجام شد',
        'failed' => 'خطایی رخ داده است',
        'repetitive' => 'اطلاعات وارد شده تکراری است',
        'store_success' => 'داده ی مورد نظر با موفقیت ذخیره شد',
        'store_failed' => 'خطایی رخ داد و ذخیره انجام نشد',
        'show_success' => 'داده مورد نظر با موفقیت یافت شد',
        'show_failed' => 'خطایی رخ داد و داده یافت نشد',
        'index_success' => 'لیست اطلاعات به شرح زیر است',
        'index_failed' => 'خطایی رخ داد',
        'delete_success' => 'با موفقیت حذف انجام شد',
        'delete_failed' => 'خطایی رخ داد و حذف انجام نشد',
        'destroy_success' => 'با موفقیت حذف انجام شد',
        'destroy_failed' => 'خطایی رخ داد و حذف انجام نشد',
        'update_success_list' => 'ویرایش اطلاعات با موفقیت انجام شد',
        'update_success' => 'ویرایش با موفقیت انجام شد',
        'update_failed' => 'ویرایش به خطا خورد و انجام نشد',
        'update_failed_list' => 'ویرایش اطلاعات به خطا خورد و انجام نشد',
        'upload_failed' => 'آپلود فایل نجام نشد',
        'user_creator_id' => 'شناسه کاربر ایجاد کننده',
        'not_found' => 'اطلاعات خواسته شده یافت نشد',
        'app_updating' => 'سامانه در حال به روز رسانی می باشد',
        'user_unauthenticated' => 'کاربر احراز هویت نشده است',
        'fields' => [
            'user_creator_id' => 'شناسه کاربر ایجاد کننده',
            'user_editor' => 'شناسه کاربر وییرایش کننده',
            'created_at' => 'تاریخ ایجاد',
            'updated_at' => 'تاریخ ویرایش',
            'deleted_at' => 'تاریخ حذف',
            'lat' => 'عرض جغرافیایی',
            'Latitude' => 'عرض جغرافیایی',
            'lng' => 'طول جغرافیایی',
            'Longitude' => 'طول جغرافیایی',
            'touch' => 'touch',
            'detach' => 'detach',
        ],
        'exceptions' => [
            '500' => 'خطا در سرور',
            '403' => 'شما اجازه دسترسی به این بخش را ندارید',
        ],
    ],
    'validation' => [
        'username' => 'قالب :attribute شما نادرست است',
        'national_code' => 'کد ملی وارد شده معتبر نیست',
        'just_string_english' => 'فیلد :attribute فقط میتواند شامل حرف انگلیسی باشد',
        'update_unique' => 'فیلد :attribute باید منحصر به فرد باشد، نام انتخاب شده قبلا استفاده شده است.',
        'report_invoice_options' => 'برای گزارشات فروش، نیاز است که یکی از گزینه های گزارش را وارد کنید.',
    ],
    'excel' => [
        'successful' => ' داده ها با موفقیت ثبت شدند.',
        'image_successful' => 'فایل عکس در سرور قرار گرفت.',
        'empty_record' => 'یکی از رکورد های این ستون وارد نشده است.',
        'failed_record' => 'یکی از رکورد های این ستون مقدارش اشتباه است.',
    ],
    'users' => [
        'messages' => [
            'not_found' => 'کاربری با این مشخصات یافت نشد',
            'expired_time_api_key' => 'توکن شما منقضی شده است',
            'excel_users_success' => 'ثبت کاربران با موفقیت انجام شد',
            'resend_otp_success' => 'کد تایید برای شما ارسال شد',
            'otp_success' => 'کد تایید برای شما ارسال شد',
            'otp_check_allow_send_code' => 'چند دقیقه دیگر امتحان کنید',
            'otp_check_mobile_exist_in_cache' => 'تا به حال برای این موبایل کدی ارسال نشده است',
            'register_success' => 'کد تایید برای شما ارسال شد',
            'login_unauthorized' => 'نام کاربری یا رمز عبور مطابقت ندارد',
            'login_forbidden' => 'شما مجوز ورود به این پنل را ندارید',
            'not_access_sync_role_to_user_on_group' => 'امکان اختصاص دادن نقش به کاربر به دلیل داشتن نقش در این گروه سیستم وجود ندارد. ',
            'not_access_sync_role_to_user' => 'امکان اختصاص دادن نقش به کاربر به دلیل داشتن 4 نقش در هر گروه سیستم وجود ندارد. ',
            'user_not_active' => 'حساب کاربری شما مسدود شده است جهت اطلاع از علت مسدودی با پشتیبانی ویزیتان ارتباط بگیرید',
            'profile' => 'اطلاعات کاربر لاگین شده',
            'my_permissions' => 'لیست سطوح دسترسی کاربر لاگین شده',
            'logout' => 'کاربر با موفقیت خارج شد',
            'mobile_exist' => "امکان تخصیص شماره به این شخص به دلیل اینکه این شماره همراه در سامانه ثبت شده است، میسر نمیباشد.",
            'not_access_to_delete_user_have_market' => "به دلیل اینکه این کاربر دارای تامین کننده است یا مدیر تامین کننده است،امکان حذف وجود ندارد.",
            'not_access_to_delete_user_have_customer' => "به دلیل اینکه این کاربر دارای تامین کننده است یا مدیر تامین کننده است،امکان حذف وجود ندارد.",
            'user_doesnt_have_permission_user_insert_new_user_update_market' => 'شما دسترسی برای ویرایش شخص یک مارکت را ندارید',
            'user_doesnt_have_permission_user_insert_new_user_update_customer' => 'شما دسترسی برای ویرایش شخص یک کاستومر را ندارید',
            'system_user_already_exist' => 'این کاربر قبلا ثبت شده است.',
            'market_personnel_not_active' => 'حساب کاربری شما غیر فعال شده است ',

            'national_code_unique' => ":attribute قبلا انتخاب شده است.",
            'mobile_unique' => ":attribute قبلا انتخاب شده است.",
            'mobiles_unique' => ":attribute قبلا انتخاب شده است.",
            "role_exists" => ":attribute انتخاب شده، معتبر نیست.",
            "roles_exists" => ":attribute انتخاب شده، معتبر نیست.",
            "name_filled" => "فیلد :attribute الزامی است(رشته خالی قابل قبول نیست)",
            "family_filled" => "فیلد :attribute الزامی است(رشته خالی قابل قبول نیست)",
            "full_name_filled" => "فیلد :attribute الزامی است(رشته خالی قابل قبول نیست)",
            "father_filled" => "فیلد :attribute الزامی است(رشته خالی قابل قبول نیست)",

            "name_string" => ":attribute باید رشته ای  باشد.",
            "family_string" => ":attribute باید رشته ای  باشد.",
            "full_name_string" => ":attribute باید رشته ای  باشد.",
            "father_string" => ":attribute باید رشته ای  باشد.",

        ],
        'fields' => [
            'id' => 'شناسه کاربر',
            'name' => 'نام',
            'family' => 'نام خانوادگی',
            'full_name' => 'نام و نام خانوادگی',
            'father' => 'نام پدر',
            'national_code' => 'کد ملی',
            'avatar' => 'عکس پروفایل',
            'gender' => 'جنسیت',
            'birthday' => 'تاریخ تولد',
            'username' => 'نام کاربری',
            'password' => 'رمز عبور',
            'status' => 'وضعیت کاربر',
            'mobile' => 'تلفن همراه',
            'role_groups_id' => 'شناسه گروه',
            'role_groups_name' => 'نام گروه',
            'role_groups_persian_name' => 'نام فارسی گروه',

            'mobiles' => 'لیست تلفن همراه',
            'file' => 'فایل اکسل',
            'customer_personnel_id' => 'ای دی پرسنل فروشگاه',
            'market_personnel_id' => 'ای دی پرسنل مارکت'
        ]
    ],
    'login_histories' => [
        'messages' => [
            # 'expired_time_api_key' => 'توکن شما منقضی شده است',
        ],
        'fields' => [
            'id' => 'شناسه جدول زمان بازدید',
            'user_id' => 'شناسه کاربر',
            'role_group_id' => 'شناسه گروه نقش',
            'last_login' => 'زمان آخرین لاگین کاربر',
            'last_visit' => 'زمان آخرین بازدید کاربر',
            'role_id' => 'شناسه نقش',
        ]
    ],
    'visits' => [
        'messages' => [
        ],
        'fields' => [
            'id' => 'شناسه گزارش ویزیت',
            'start' => 'زمان شروع',
            'end' => 'زمان پایان',
            'stay' => 'زمان توفق',
            'setting_shop_visit_responses_id' => 'عنوان گزارش',
            'title' => 'عنوان گزارش',
            'customer_id' => 'شناسه فروشگاه(صنف)',
            'market_id' => 'شناسه تامین کننده',
            'status_result' => 'نتیجه ویزیت',
            'user_creator_id' => 'شناسه کاربر ثبت',
        ]
    ],
    'notes' => [
        'messages' => [
            'message_one' => '',
        ],
        'fields' => [
            'id' => 'شناسه جدول یادداشت',
            'market_id' => 'شناسه تامین کننده',
            'customer_id' => 'شناسه اصناف',
            'note' => 'یادداشت',
            'image' => 'عکس',
            'audio' => 'صدا',
            'video' => 'ویدیو',
            'file' => 'فایل',
        ]
    ],
    'errors' => [
        'messages' => [
        ],
        'fields' => [
            'id' => 'id',
            'url' => 'url',
            'status_code' => 'status_code',
            'exception' => 'exception',
            'message' => 'message',
            'user_creator' => 'user_creator',
            'stack_trace' => 'stack_trace',
            'requests' => 'requests',
            'headers' => 'headers',
            'user_agent' => 'user_agent',
            'extra_date' => 'extra_date',
            'created_at' => 'created_at',
            'updated_at' => 'updated_at',
            'deleted_at' => 'deleted_at',
        ]
    ],
    'language_lines' => [
        'messages' => [
        ],
        'fields' => [
            'id' => 'شناسه جدول language_lines',
            'group' => 'گروه',
            'key' => 'کلید ترجمه',
            'text' => 'متن ترجمه',
        ]
    ],
    'user_mobiles' => [
        'messages' => [
        ],
        'fields' => [
            'id' => 'شناسه جدول موبایل',
            'mobile' => 'تلفن همراه',
        ],
        'mobiles' => 'لیست تلفن همراه',
    ],
    'configs' => [
        'messages' => [
        ],
        'fields' => [
            'key' => 'کلید',
            'value' => 'ارزش',
            'title' => 'عنوان',
        ]
    ],
    'markets' => [
        'market_login' => [
            'expiration_account_date' => 'تاریخ اعتبار اکانت شما به پایان رسیده است. لطفا با پشتیبانی ویزیتان ارتباط بگیرید',
            'blocked_account' => 'حساب کاربری شما مسدود شده است. جهت کسب اطلاعات بیشتر با پشتیبانی ویزیتان ارتباط بگیرید',
            'invalid_referral' => 'کد معرف وارد شده صحیح نمی باشد لطفا کد معرف وارد شده را بررسی نمایید',
        ],
        'market_locations' => [
            'messages' => [
                'id' => '',
            ],
            'fields' => [
                'id' => 'شناسه جدول ردیابی',
                'market_id' => 'شناسه مارکت',
                'user_creator_id' => 'شناسه جدول اشخاص(کاربران)',
                'location_point' => 'مختصات جغرافیایی',
            ],
        ],
        'main' => [
            'invalid_user_id_for_personnel' => 'به علت اینکه این کاربر به عنوان مدیر تامین کننده دیگر ثبت شده است، امکان افزودن به عنوان پرسنل میسر نمی باشد.',
            'personnel_already_exist' => 'این پرسنل قبلا برای این تامین کننده ثبت شده است.',
        ],
        'fields' => [
            'id' => 'شناسه تامین کننده',
        ],
        'town_service' => [
            'existed' => 'امکان اضافه کردن دو شهرستان مشابه میسر نمی باشد',
        ],
        'exclusive_codes' => [
            'customer_already_exist' => 'کد اختصاصی این صنف قبلا در سیستم ثبت شده است.',
        ],
        'personnel' => [
            'not_access' => 'شما دسترسی به این بخش را ندارید.',
            'not_access_with_out_manger' => 'امکان تغییرات در پرسنل به دلیل وجود نداشتن مدیر، امکان پذیر نمی باشد.',
            'not_access_update_manger' => 'امکان ویرایش مدیریت وجود ندارد.',
            'limit_reached' => 'ظرفیت اضافه کردن پرسنل شما به اتمام رسیده است، جهت افزایش ظرفیت با پشتیبانی ویزیتان ارتباط بگیرید.',
        ],
        'votes' => [
            'messages' => [
                '' => '',
            ],
            'fields' => [
                'score' => 'امتیاز',
                'comment' => 'کامنت',
                'customer_id' => 'شناسه فروشگاه',
                'market_id' => 'شناسه تامین کننده',
                'user_id' => 'شناسه کاربر',
                'all_my_personnels' => 'تمام پرسنل',
                'all_my_commands' => 'تمام کامنت های من',
            ]
        ],
        'has_advertise' => 'به دلیل داشتن آگهی امکان حذف این تامین کننده میسر نمیباشد',
        'sell_line_has_personnel' => 'به دلیل داشتن پرسنل برای این خط فروش، امکان حدف میسر نمی باشد'
    ],
    'devices' => [
        'messages' => [
            // 'otp_success' => 'کد تایید برای شما ارسال شد',
        ],
        'fields' => [
            'id' => 'شناسه جدول دستگاه',
            'user_id' => 'شناسه کاربر',
            'role_group_id' => 'شناسه گروه نقش کاربر',
            'device_id' => 'شناسه یکتا دستگاه',
            'operation_system' => 'نام سیستم عامل',
            'extra_data' => 'اطلاعات اضافی از دستگاه',
            'firebase_token' => 'firebase_token',
            'status' => 'وضعیت',
        ]
    ],
    'role_groups' => [
        'messages' => [
            // 'register_success' => 'کد تایید برای شما ارسال شد',
        ],
        'fields' => [
            'id' => 'شناسه گروه',
            'name' => 'نام گروه',
            'user_creator_id' => 'شناسه کاربر ایجاد کننده',
        ]
    ],
    'publicContent' => [
        'platform_not_exist' => 'پلتفرمی با این مشخصات وجود ندارد.',
        'item_already_exist' => 'این مورد قبلا ثبت شده است.',
        'item_with_application_id_already_exist' => 'این مورد قبلا با این اپلیکیشن ثبت شده است.',
        'architecture_type_required' => 'نوع معماری الزامی است',
    ],
    'customer' => [
        'fields' => [
            'id' => 'شناسه صنف',
        ],
        'user_with_mobile_already_exist' => 'کاربری با این شماره تلفن قبلا در سیستم ثبت شده است.',
        'invalid_working_hours' => 'ساعات کاری را به درستی وارد کنید.',
        'store_failed_user' => 'هنگام ذخیره اطلاعات کاربر خطایی رخ داد و ذخیره انجام نشد.',
        'store_failed_working_hours' => 'هنگام ذخیره ساعات کاری خطایی رخ داد و ذخیره انجام نشد.',
        'store_failed_customer_image' => 'هنگام ذخیره عکس ها خطایی رخ داد و ذخیره انجام نشد.',
        'store_failed_phones' => 'هنگام ذخیره تلفن ثابت خطایی رخ داد و ذخیره انجام نشد.',
        'store_failed_further_information' => 'هنگام ذخیره اطلاعات تکمیلی خطایی رخ داد و ذخیره انجام نشد.',
        'update_failed_working_hours' => 'هنگام ویرایش ساعات کاری خطایی رخ داد و ذخیره انجام نشد.',
        'update_failed_customer_image' => 'هنگام ویرایش عکس ها خطایی رخ داد و ذخیره انجام نشد.',
        'update_failed_phones' => 'هنگام ویرایش تلفن ثابت خطایی رخ داد و ذخیره انجام نشد.',
        'update_failed_further_information' => 'هنگام ویرایش اطلاعات تکمیلی خطایی رخ داد و ذخیره انجام نشد.',
        'update_failed_temporary_management' => 'هنگام ویرایش اطلاعات مدیریت موقت خطایی رخ داد و ذخیره انجام نشد.',
        'invalid_default_general_telephone' => 'شماره تلفن پیشفرض عمومی نامعتبر است.',
        'invalid_factor_general_telephone' => 'شماره تلفن پیشفرض فاکتورها نامعتبر است.',
        'invalid_user_id_for_personnel' => 'کاربر وارد شده برای پرسنل نامعتبر است.',
        'personnel_already_exist' => 'این پرسنل قبلا برای این فروشگاه ثبت شده است.',
        'not_access_to_remove_personnel' => 'شما مجاز به حذف این پرسنل نیستید.',
        'not_access_to_register_customer' => 'به دلیل وجود فروشگاه با اطلاعات مشابه در این محدوده، امکان ثبت فروشگاه میسر نمیباشد.',
        'not_access_to_update_customer' => 'شما دسترسی ویرایش صنف را ندارید.',
        'not_access_to_delete_customer_installed_app' => 'به دلیل اینکه این صنف اپلیکیشن را نصب کرده است، امکان حذف وجود ندارد.',
        'not_access_to_delete_customer_has_invoices' => 'به دلیل اینکه مشتری در سیستم فاکتور خرید دارد، امکان حذف وجود ندارد.',
        'not_access_to_delete_customer_has_notes' => 'به دلیل اینکه مشتری در سیستم یادداشت دارد، امکان حذف وجود ندارد.',
        'not_access_to_delete_customer_has_chats' => 'به دلیل اینکه مشتری در سیستم چت دارد، امکان حذف وجود ندارد.',
        'not_access_to_delete_customer_has_solicitations' => 'به دلیل اینکه مشتری در سیستم درخواست خرید دارد، امکان حذف وجود ندارد.',
        'not_access_to_delete_customer_has_bookmark' => 'به دلیل اینکه این مشتری جزو باشگاه مشتریان تامین کنندگان است، امکان حذف وجود ندارد.',
        'votes' => [
            'messages' => [
                '' => '',
            ],
            'fields' => [
                'score' => 'امتیاز',
                'comment' => 'کامنت',
                'customer_id' => 'شناسه فروشگاه',
                'market_id' => 'شناسه تامین کننده',
                'user_id' => 'شناسه کاربر',
                'all_my_personnels' => 'تمام پرسنل',
                'all_my_commands' => 'تمام کامنت های من',
            ]
        ],
    ],
    'invoice' => [
        'cart' => [
            'failed_cart_process' => 'هنگام پردازش سبد خرید خطایی رخ داد.',
            'failed_add_advertisement_to_cart' => 'هنگام افزودن آگهی به سبد خرید خطایی رخ داد.',
            'discount_code_accepted_successfully' => 'کد تخفیف با موفقیت اعمال شد.',
            'cart_not_found' => 'سبد خرید با این مشخصات یافت نشد.',
            'invalid_delivery_date_or_delivery_time' => 'تاریخ ارسال یا زمان ارسال نامعتبر است.',
            'insufficient_inventory' => 'موجودی کالا کافی نیست.',
            'minimum_count_big_than_count' => 'تعداد درخواستی از حداقل تعداد خرید کمتر است.',
            'maximum_count_less_than_count' => 'تعداد درخواستی از حداکثر تعداد خرید بیشتر است.',
            'insufficient_related_product_inventory' => 'موجودی کالای وابسته کافی نیست.',
            'not_access_to_delete_related_advertisement' => 'به دلیل وابستگی این آگهی به :advertisements امکان حذف وجود ندارد.',
            'invalid_discount_code' => 'کد تخفیف نامعتبر است.',
            'invalid_discount_code_date' => 'این کد تخفیف در این بازه زمانی معتبر نمی باشد.',
            'invalid_discount_code_customer' => 'امکان استفاده از کد تخفیف به دلیل قابل استفاده نبودن برای مشتری، میسر نمی باشد.',
            'invalid_discount_code_advertisement' => 'امکان استفاده از کد تخفیف به دلیل قابل استفاده نبودن برای آگهی، میسر نمی باشد.',
            'invalid_discount_code_can_use_personnel' => 'امکان استفاده از کد تخفیف برای فاکتور به دلیل قابل استفاده نبودن برای پرسنل تامین کننده، میسر نمی باشد.',
            'invalid_discount_code_min_factor_amount' => 'امکان استفاده از کد تخفیف برای فاکتور به دلیل حداقل مبلغ فاکتور ناکافی، میسر نمی باشد.',
            'invalid_discount_code_min_count_factor_number' => 'امکان استفاده از کد تخفیف برای فاکتور به دلیل حداقل تعداد فاکتور ناکافی، میسر نمی باشد.',
            'invalid_discount_code_user_limit_count' => 'امکان استفاده از کد تخفیف برای فاکتور به دلیل محدودیت تعداد استفاده کنندگان، میسر نمی باشد.',
            'invalid_discount_code_limit_count_per_user' => 'امکان استفاده از کد تخفیف برای فاکتور به دلیل تعداد دفعات استفاده شده، میسر نمی باشد.',
            'invalid_discount_code_advertise_limit_number' => 'امکان استفاده از کد تخفیف برای آگهی به دلیل محدودیت تعداد استفاده کنندگان، میسر نمی باشد.',
        ],
        'main' => [
            'invoice_amount_less_than_minimum_sell_amount' => 'مبلغ فاکتور کمتر از حداقل خرید فروشنده است.',
            'failed_process' => 'هنگام پردازش  خطایی رخ داد.',
            'this_market_does_not_services_on_this_area' => 'این فروشنده در حال حاضر در محدوده شما خدمت رسانی نمی‌کند.',
            'failed_register_invoice_process' => 'هنگام پردازش ثبت فاکتور خطایی رخ داد.',
            'settlement_type_cannot_cheque' => 'به دلیل وجود داشتن محصولات با وضعیت تسویه (فقط نقد) امکان ثبت به صورت چکی میسر نمی‌باشد.',
            'market_is_closed' => 'تامین کننده مورد نظر در حال حاضر تعطیل می‌باشد.',
            'advertisement_is_closed' => ' در حال حاضر امکان ثبت فاکتور برای آگهی :advertisementTitle به دلیل خارج بودن از بازه زمانی ،میسر نمی‌باشد.',
            'invalid_advertisement_status' => 'امکان ثبت فاکتور به دلیل وضعیت انتشار آگهی :advertisementTitle  وجود ندارد.',
            'insufficient_inventory_advertisement' => 'امکان ثبت فاکتور به دلیل کافی نبودن موجودی آگهی :advertisementTitle  وجود ندارد. لطفا مجددا تلاش نمایید.',
            'not_access_to_decrease_count_advertisement' => 'امکان کم کردن تعداد آگهی :advertisementTitle به دلیل وابسته بودن به آگهی دیگر،  وجود ندارد.',
            'not_access_to_change_count_advertisement' => 'امکان تغییر تعداد آگهی :advertisementTitle به دلیل تغییر قیمت،  وجود ندارد. لطفا فاکتور جدید ثبت کنید.',
            'not_access_to_canceled_advertisement' => 'امکان لغو کردن آگهی :advertisementTitle به دلیل وابسته بودن به آگهی دیگر،  وجود ندارد.',
            'not_access_to_canceled_advertisement_status' => 'امکان لغو کردن آگهی :advertisementTitle به دلیل وضعیت تحویل،  وجود ندارد.',
            'not_access_to_register_invoice_items_less_than_minimum_sell_amount' => 'به دلیل اینکه مبلغ فاکتور از حداقل مبلغ خرید تامین کننده کمتر است، امکان ثبت فاکتور میسر نمیباشد.',
            'not_access_to_update_invoice_items_less_than_minimum_sell_amount' => 'به دلیل اینکه مبلغ فاکتور از حداقل مبلغ خرید تامین کننده کمتر است، امکان ویرایش اقلام فاکتور میسر نمیباشد.',
            'invalid_advertisement_order_ratio' => 'تعداد وارد شده باید متناسب با ضریب خرید تامین کننده باشد.',
            'invalid_advertisement_max_order_number' => 'به دلیل خرید حداکثر :advertisementMaxOrder عدد برای آگهی :advertisementTitle ، امکان ثبت فاکتور تا روز بعد برای این آگهی میسر نمی باشد.',
            'advertisement_has_get_ir_code' => 'به دلیل مورد نیاز بودن کد ملی برای آگهی :advertisementTitle ، امکان ثبت فاکتور بدون کد ملی میسر نمی باشد.',
            'advertisement_has_get_commercial_role_code' => 'به دلیل مورد نیاز بودن کد نقش برای آگهی :advertisementTitle ، امکان ثبت فاکتور بدون کد نقش میسر نمی باشد.',
            'not_complete_delivery_information' => ' به دلیل ناقص بودن اطلاعات ارسال سبد خرید، ثبت فاکتور ممکن نمی باشد.',
            'not_found' => ' فاکتوری با این مشخصات وجود ندارد.',
            'invoice_item_not_found' => ' سفارشی با این مشخصات وجود ندارد.',
            'customer_not_found' => ' فروشنده با این مشخصات وجود ندارد.',
            'market_not_found' => ' تامین کننده با این مشخصات وجود ندارد.',
            'invoice_data_not_match' => 'این فاکتور برای این فروشنده و این تامین کننده نمی باشد.',
            'customer_info_not_complete' => 'مشخصات فروشنده تکمیل نیست .',
            'not_access_to_register_invoice_customer_info_not_complete' => 'امکان ثبت فاکتور برای این فروشگاه، به دلیل وجود حساب کاربری کامل تر، وجود ندارد .',
            'failed_edit_invoice_process' => 'هنگام پردازش  ویرایش فاکتور خطایی رخ داد.',
            'failed_merge_invoice_process' => 'هنگام پردازش  ادغام فاکتورها خطایی رخ داد.',
            'invoice_items_update_status_invoice_close_impossible' => 'امکان تغییر وضعیت سفارشات این فاکتور به دلیل بسته بودن فاکتور وجود ندارد.',
            'invoice_item_update_impossible' => 'امکان ویرایش سفارش به دلیل بایگانی شدن، وجود ندارد.',
            'invoice_item_update_status_impossible' => 'امکان تغییر وضعیت سفارش :invoiceItemName  وجود ندارد.',
            'not_access_to_register_discount_code' => 'به دلیل ثبت کد تخفیف دیگری برای این فاکتور، امکان ثبت کد تخفیف وجود ندارد',
            'invalid_discount_code' => ' کد تخفیف نامعتبر است',
            'failed_to_register_warehouse_transfers' => 'امکان صدور حواله انبار به دلیل عدم تطابق با اطلاعات وارد شده، وجود ندارد.',
            'failed_to_get_sales_predict' => 'امکان مشاهده پیش بینی فروش به دلیل به حد نصاب نرسیدن تعداد فروش، وجود ندارد.',
            'failed_to_update_invoice_cheque_settlement_type' => 'به دلیل اینکه مبلغ فاکتور از حداقل مبلغ خرید چکی کمتر می شود، امکان ویرایش فاکتور میسر نمی باشد. لطفا ابتدا تسویه نقدی را انتخاب نمایید و سپس تلاش نمایید',
        ],
        'payments' => [
            'invoice_data_not_match' => 'این فاکتور برای این تامین کننده نمی باشد.',
            'amount_bigger_than_invoice_balance' => 'مبلغ وارد شده از مبلغ باقی مانده فاکتور بیشتر میباشد.',
            'cannot_delete_pos_for_payments' => 'به دلیل ثبت پرداختی با این شماره کارتخوان، امکان حذف میسر نمی باشد.',
        ],
        'market_accounts' => [
            'exist_market_account' => 'شماره وارد شده تکراری است',
        ],
        'rejected_invoice_items' => [
            'not_found' => ' سفارشی با این مشخصات وجود ندارد.',
            'not_access_to_register' => 'امکان ثبت مرجوعی برای این سفارش وجود ندارد.',
            'item_with_detail_already_exist' => 'برای این مورد قبلا مرجوعی ثبت شده است.',
            'invalid_count_invoice_item' => 'تعداد وارد شده، از تعداد سفارش بیشتر است.',
        ],
        'merge' => [
            'invalid_customer_ids' => 'اصناف فاکتور ها با یکدیگر خوانایی ندارند.',
            'invalid_market_ids' => 'تامین کننده های فاکتور ها با یکدیگر خوانایی ندارند.',
            'invalid_closed_statuses' => 'یکی از فاکتور ها وضعیت بسته شده دارد.',
            'invalid_change_invoice_items_statuses' => 'به دلیل تغییر وضعیت سفارشات، امکان ادغام وجود ندارد.',
            'successfully' => 'ادغام فاکتور ها با موفقیت انجام شد.',
        ],
        "validation" => [
            "invalid_reject_reason_id" => "دلیل برگشت نامعتبر است. هنگام ارسال دلیل برگشت، مشخصه سفارش الزامی است",
            "invalid_cancellation_reason_id" => "دلیل لغو نامعتبر است. هنگام ارسال دلیل لغو، مشخصه سفارش الزامی است",
        ],
        "items" => [
            "ProformaInvoice" => "پیش فاکتور",
            "WaitingForDelivery" => "در انتظار تحویل",
            "Delivered" => "تحویلی",
            "Returned" => "برگشتی",
            "Cancelled" => "انصرافی",
            "Rejected" => "مرجوعی",
        ]

    ],
    'visit_route' => [
        'invalid_json_file' => 'اطلاعات فایل  json نامعتبر است.',
    ],
    'wallet' => [
        'main' => [
            'not_found' => ' کیف پول با این مشخصات یافت نشد.',
            'successfully_charge_wallet' => ' شارژ کیف پول با موفقیت انجام شد.',
            'failed_charge_wallet_process' => 'هنگام شارژ کیف پول خطایی رخ داد.',
            'failed_update_wallet' => 'هنگام ویرایش کیف پول خطایی رخ داد.',
        ],
        'transaction' => [
            'not_found' => ' تراکنش با این مشخصات یافت نشد.',
            'update_success' => ' تراکنش با موفقیت ویرایش شد.',
            'store_failed' => 'هنگام ثبت تراکنش خطایی رخ داد.',
            'update_failed' => 'هنگام ویرایش تراکنش خطایی رخ داد.',
        ],
        'bank' => [
            'error_0' => 'تراکنش با موفقیت انجام شد.',
            'error_11' => 'شماره کارت نامعتبر است.',
            'error_12' => 'موجودی کافی نیست.',
            'error_13' => 'رمز نادرست است.',
            'error_14' => 'تعداد دفعات وارد کردن رمز بیشتر از حد مجاز است.',
            'error_15' => 'کارت نامعتبر است.',
            'error_16' => 'دفعات برداشت وجه بیش تر از حد مجاز است.',
            'error_17' => 'کاربر از انجام تراکنش منصرف شده است.',
            'error_18' => 'تاریخ انقضای کارت گذشته است.',
            'error_19' => 'مبلغ برداشت شده بیشتر از حد مجاز است.',
            'error_111' => 'صادر کننده کارت نامعتبر است.',
            'error_113' => 'پاسخی از صادر کننده کارت صادر نشد.',
            'error_114' => 'دارنده کارت مجاز به انجام این تراکنش نیست.',
            'error_payments' => 'پرداخت شما با خطا مواجه شد.',
        ]
    ],
    'authorization' => [
        'roles' => [
            'messages' => [
                'failed_sync_role_to_user' => "به دلیل وجود یک نقش دیگر در این گروه برای این کاربر، نقش :role_name نمیتواند به این کاربر نسبت داده شود",
            ],
            'fields' => [
                'id' => 'شناسه نقش',
                'name' => 'نام نقش(به انگلیسی)',
                'persian_name' => 'نام نقش(به فارسی)',
                'tag' => 'برچسب',

                'touch' => 'touch',
                'detach' => 'detach',

                'withs' => 'جداول رابط',
                'with' => 'جدول اضافی',

                'roles' => 'لیست نقش ها',
                'user_id' => 'شناسه کاربر',
            ]
        ],
        'permissions' => [
            'messages' => [
                'failed_delete_permission' => "به دلیل انتصاب این دسترسی به نقش، امکان حذف آن میسر نمی باشد",
            ],
            'fields' => [
                'permissions_list' => 'لیست شناسه های سطح دسترسی',
                'id' => 'شناسه سطح دسترسی',
                'name' => 'نام سطح دسترسی(به انگلیسی)',
                'tag' => 'برچسب',
                'parent' => 'شناسه پدر(سطح دسترسی پدر)',
                'persian_name' => 'نام سطح دسترسی(به فارسی)',

                'touch' => 'touch',
                'detach' => 'detach',

                'permissions' => 'لیست سطح دسترسی ها',
                'file' => 'فایل اکسل',
            ]
        ],
        'role_groups' => [
            'messages' => [
                // 'register_success' => 'کد تایید برای شما ارسال شد',
            ],
            'fields' => [
                'id' => 'شناسه گروه',
                'name' => 'نام گروه',
                'persian_name' => 'نام فارسی گروه',
                'role_group_id' => 'شناسه والد گروه',
                'user_creator_id' => 'شناسه کاربر ایجاد کننده',

                'touch' => 'touch',
                'detach' => 'detach',
            ]
        ],
    ],
    'polymorphism' => [
        'images' => [
            'messages' => [
                'image_valid' => '',
            ],
            'fields' => [
                'title' => 'title',
                'original_name' => 'original_name',
                'image' => 'image',
                'type' => 'type',
                'url' => 'url',
                'is_cover' => 'is_cover',
                'is_public' => 'is_public',
                'is_water_mark' => 'is_water_mark',
                'created_at' => 'created_at',
                'updated_at' => 'updated_at',
            ]
        ],
        'audios' => [
            'messages' => [
                'audio_valid' => '',
            ],
            'fields' => [
                'title' => 'title',
                'original_name' => 'original_name',
                'audio' => 'audio',
                'type' => 'type',
                'url' => 'url',
                'created_at' => 'created_at',
                'updated_at' => 'updated_at',
            ]
        ],
        'videos' => [
            'messages' => [
                'video_valid' => '',
            ],
            'fields' => [
                'title' => 'title',
                'original_name' => 'original_name',
                'video' => 'video',
                'type' => 'type',
                'url' => 'url',
                'created_at' => 'created_at',
                'updated_at' => 'updated_at',
            ]
        ],
        'files' => [
            'messages' => [
                'file_valid' => '',
            ],
            'fields' => [
                'title' => 'title',
                'original_name' => 'original_name',
                'file' => 'file',
                'type' => 'type',
                'url' => 'url',
                'created_at' => 'created_at',
                'updated_at' => 'updated_at',
            ]
        ],
    ],
    'settings' => [
        'setting_shop_visit_responses' => [
            'messages' => [

            ],
            'fields' => [
                'title' => 'عنوان گزارش',
                'status' => 'وضعیت عنوان گزارش',
            ]
        ],
    ],
    'product_group' => [
        'group_has_subgroup' => 'این گروه دارای زیر گروه می باشد',
        'has_product' => 'امکان حذف این گروه به دلیل داشتن کالا میسر نمی باشد'
    ],
    'product' => [
        'has_advertise' => 'امکان حذف این کالا به دلیل داشتن آگهی میسر نمی باشد',
        'repetitive' => 'این کالا در لیست کالاهای ویزیتان موجود می باشد, لطفا از صفحه قبل کالای مورد نظر را جستجو نمایید',
        'exist_similar_brand' => 'برند وارد شده تکراری است',
    ],
    'notification' => [
        'send_fail' => 'ارسال نوتیفیکیشن با خطا مواجه شده است'
    ],
    'unit' => [
        'has_product' => 'امکان حذف این واحد به دلیل داشتن کالا میسر نمی باشد'
    ],
    'advertise' => [
        'need_has_activity_record' => 'امکان حذف محدوده فعالیت به دلیل نیاز به داشتن حداقل یک محدوده فعالیت برای تامین کننده میسر نمی باشد',
        'has_factor_update' => 'امکان تغییر کالا به دلیل داشتن فاکتور محیا نمی باشد',
        'has_factor' => 'امکان حذف این آگهی به دلیل داشتن فاکتور میسر نمی باشد',
        'repetitive' => 'امکان ثبت آگهی از این کالا به دلیل داشتن آگهی مشابه میسر نمی باشد',
        'has_not_store_room_activity' => 'محدوده خدماتی انبار این تامین کننده تعیین نشده است',
        'has_not_guild_activity' => 'لیست استان و شهرستانها با مقادیر حداقل خرید و هزینه ارسال برای این تامین کننده تعیین نشده است',
        'has_not_town_service' => 'گروه های صنفی مورد نظر برای انتشار و نمایش آگهی های تامین کننده تعیین نشده است',
        'has_not_commission' => 'پورسانت آگهی :advertisementTitle تعیین نشده است',
        'product_not_active' => 'کالا در وضعیت تایید نشده قرار دارد لذا امکان انتشار آگهی وجود ندارد',
        'repetitive_advertise' => 'این مارکت از این کالا آگهی دارد',
        'has_no_advertise' => 'در محدوده شما آگهی وجود ندارد',
        'max_ladder_count' => 'ظرفیت مجاز نردبان آگهی شما در روز به پایان رسیده است. لطفا در روزهای آتی مجدد تلاش نمایید',
        'max_ladder_count_with_number' => 'تعداد آگهی انتخاب شده برای نردبان بیشتر از ظرفیت مجاز امروز است. در حال حاضر شما برای امروز :number آگهی ظرفیت دارید',
        'failed_update_with_excel' => 'با توجه به اینکه داده نامعتبر در فایل وجود دارد، به روز رسانی انجام نشد. لطفا داده های فایل را بررسی نمایید.',
        'error_on_update_with_excel' => 'هنگام به روز رسانی خطایی رخ داده است، لطفا مجددا تلاش نمایید.',
        'update_with_excel' => [
            'sale_price_negative' => 'قیمت فروش آگهی :advertisementTitle کمتر یا مساوی 0 است. لطفا تصحیح شود.',
            'consumer_price_negative' => 'قیمت مصرف کننده آگهی :advertisementTitle کمتر از 0 است. لطفا تصحیح شود.',
            'sale_price_bigger_consumer_price' => 'قیمت فروش آگهی :advertisementTitle بزرگتر از قیمت مصرف کننده است. لطفا تصحیح شود.',
            'invalid_inputs' => 'کد کالا یا اشتراک تامین کننده آگهی :advertisementTitle وارد نشده است. لطفا تصحیح شود.',
            'invalid_inventory_inputs' => 'موجودی آگهی :advertisementTitle وارد نشده است و یا به اشتباه وارد شده است. لطفا تصحیح شود.',
            'invalid_sale_price' => 'قیمت پایه آگهی :advertisementTitle به درستی وارد نشده است. لطفا تصحیح شود.',
            'invalid_consumer_price' => 'قیمت مصرف کننده آگهی :advertisementTitle به درستی وارد نشده است. لطفا تصحیح شود.',
            'invalid_market_id' => 'اشتراک تامین کننده در ستون مربوطه به درستی وارد نشده است.',
            'invalid_advertisement_id' => ' شناسه آگهی در ستون مربوطه به درستی وارد نشده است.',
            'has_repeated_market_id_rows' => 'اشتراک تامین کننده تکراری در فایل وجود دارد . لطفا تصحیح شود.',
            'has_repeated_rows' => 'کد کالا یا شناسه آگهی :itemCode تکراری است . لطفا تصحیح شود.',
            'has_invalid_market_id' => 'شناسه تامین کننده در فایل با شناسه تامین کننده مطابقت ندارد . لطفا تصحیح شود.',
            'advertisement_not_exist' => 'آگهی با این مشخصات یافت نشد.',
            'inventory_not_defined' => 'موجودی وارد نشده است.',
        ],
    ],
    'status' => [
        'active' => 'فعال',
        'deactive' => 'غیر فعال'
    ],
    'store_room' => [
        'has_advertise' => 'حذف انبار مورد نظر به دلیل داشتن آگهی میسر نمی باشد'
    ],
    'discount' => [
        'advertise_has_discount' => 'امکان ثبت کدتخفیف برای این آگهی به دلیل داشتن کدتخفیف فعال قبلی میسر نمی باشد'
    ],
    'shopbasket' => [
        'is_basket' => 'آگهی انتخاب شده خودش دارای وابستگی می باشد لذا امکان ایجاد وابستگی جدید وجود ندارد'
    ],
    'sms' => [
        'fields' => [
            'sms_number' => 'شماره پیامک',
            'sms_text' => 'متن پیامک',
            'id_market' => 'ای دی مارکت',
            'id_customer' => 'ی دی کاستومر',
            'select_text' => 'باید یکی از فیلد های متن پیامک یا پیامک پیش فرض پر باشد'

        ],
    ],
    'postchi' => [
        'reject_factor' => 'سفارش :factorNum مورخ :date از :marketName توسط پخش به دلیل :reason لغو گردید',
        'return_factor' => 'سفارش :factorNum مورخ :date از :marketName توسط پخش به دلیل :reason برگشت خورد',
        'submit_factor' => 'زمان تحویل برای فاکتور شماره :factorNum مورخه :date از :marketName روز :day تعیین شد',
        'advertise_publish' => 'آگهی با عنوان :title به شناسه :code منتشر شد',
        'ticket_response' => 'تیکت به شماره :number با عنوان :title توسط پشتیبان ویزیتان پاسخ داده شد',
    ],
];
