<?php

return [
    "accepted" => ":attribute باید پذیرفته شده باشد.",
    "active_url" => "آدرس :attribute معتبر نیست",
    "after" => ":attribute باید تاریخی بعد از :date باشد.",
    "alpha" => ":attribute باید شامل حروف الفبا باشد.",
    "alpha_dash" => ":attribute باید شامل حروف الفبا و عدد و خط تیره(-) باشد.",
    "alpha_num" => ":attribute باید شامل حروف الفبا و عدد باشد.",
    "array" => ":attribute باید شامل آرایه باشد.",
    "before" => ":attribute باید تاریخی قبل از :date باشد.",
    "between" => [
        "numeric" => ":attribute باید بین :min و :max باشد.",
        "file" => ":attribute باید بین :min و :max کیلوبایت باشد.",
        "string" => ":attribute باید بین :min و :max کاراکتر باشد.",
        "array" => ":attribute باید بین :min و :max آیتم باشد.",
    ],
    "boolean" => "فیلد :attribute فقط میتواند صحیح و یا غلط باشد",
    "confirmed" => ":attribute با تاییدیه مطابقت ندارد.",
    "date" => ":attribute یک تاریخ معتبر نیست.",
    "date_format" => ":attribute با الگوی :format مطابقت ندارد.",
    "different" => ":attribute و :other باید متفاوت باشند.",
    "digits" => ":attribute باید :digits رقم باشد.",
    "digits_between" => ":attribute باید بین :min و :max رقم باشد.",
    'dimensions' => 'ابعاد :attribute نامعتبر است.',
    "email" => "فرمت :attribute معتبر نیست.",
    "exists" => ":attribute انتخاب شده، معتبر نیست.",
    "filled" => "فیلد :attribute الزامی است(رشته خالی قابل قبول نیست)",
    "image" => ":attribute باید تصویر باشد.",
    "in" => ":attribute انتخاب شده، معتبر نیست.",
    "integer" => ":attribute باید نوع داده ای عددی (عدد) باشد.",
    "ip" => ":attribute باید IP آدرس معتبر باشد.",
    "max" => [
        "numeric" => ":attribute نباید بزرگتر از :max باشد.",
        "file" => "حجم :attribute نباید بیشتر از :max کیلوبایت باشد.",
        "string" => ":attribute نباید بیشتر از :max کاراکتر باشد.",
        "array" => ":attribute نباید بیشتر از :max آیتم باشد.",
    ],
    "mimes" => ":attribute باید یکی از فرمت های :values باشد.",
    "min" => [
        "numeric" => ":attribute نباید کوچکتر از :min باشد.",
        "file" => ":attribute نباید کوچکتر از :min کیلوبایت باشد.",
        "string" => ":attribute نباید کمتر از :min کاراکتر باشد.",
        "array" => ":attribute نباید کمتر از :min آیتم باشد.",
    ],
    "not_in" => ":attribute انتخاب شده، معتبر نیست.",
    "numeric" => ":attribute باید شامل عدد باشد.",
    "regex" => ":attribute یک فرمت معتبر نیست.",
    "required" => "فیلد :attribute الزامی است.",
    "required_if" => "فیلد :attribute هنگامی که :other برابر با :value است، الزامیست.",
    'required_unless'  => 'فیلد :attribute الزامیست مگر این فیلد :other مقدارش  :values باشد.',
    "required_with" => ":attribute الزامی است زمانی که :values موجود است.",
    "required_with_all" => ":attribute الزامی است زمانی که :values موجود است.",
    "required_without" => ":attribute الزامی است زمانی که :values موجود نیست.",
    "required_without_all" => ":attribute الزامی است زمانی که :values موجود نیست.",
    "same" => ":attribute و :other باید مانند هم باشند.",
    "size" => [
        "numeric" => ":attribute باید برابر با :size باشد.",
        "file" => ":attribute باید برابر با :size کیلوبایت باشد.",
        "string" => ":attribute باید برابر با :size کاراکتر باشد.",
        "array" => ":attribute باسد شامل :size آیتم باشد.",
    ],
    "string" => ":attribute باید رشته ای  باشد.",
    "mobile" => ":attribute معتبر نیست",
    "timezone" => "فیلد :attribute باید یک منطقه صحیح باشد.",
    "unique" => ":attribute قبلا انتخاب شده است.",
    'uploaded' => 'بارگزاری :attribute با شکست مواجه شد.',
    "url" => "فرمت آدرس :attribute اشتباه است.",

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'adult_id' => [
            'required' => 'Please choose some parents!',
        ],
        'group_id' => [
            'required' => 'Please choose a group or choose temp!',
        ],
        'update_unique' => 'ای بابا پسر',
        'unique_deleted_at_null' => 'دمت گرم بامرام',
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */
    'attributes' => [
        "name" => "نام",
        'firstName' => 'نام',
        "username" => "نام کاربری",
        "email" => "ایمیل",
        "first_name" => "نام",
        "last_name" => "نام خانوادگی",
        "lastName" => "نام خانوادگی",
        "family" => "نام خانوادگی",
        "password" => "رمز عبور",
        "password_confirmation" => "تاییدیه ی رمز عبور",
        "city" => "شهر",
        "country" => "کشور",
        "address" => "آدرس",
        "phone" => "تلفن",
        "telephone" => "تلفن",
        "mobile" => "موبایل",
        "cellphone" => "تلفن همراه",
        "age" => "سن",
        "sex" => "جنسیت",
        "gender" => "جنسیت",
        "day" => "روز",
        "month" => "ماه",
        "year" => "سال",
        "hour" => "ساعت",
        "minute" => "دقیقه",
        "second" => "ثانیه",
        "title" => "عنوان",
        "active" => "فعال",
        "module_id" => "ایدی ماژول",
        "action" => "عملیات",
        "text" => "متن",
        "content" => "محتوا",
        "description" => "توضیحات ",
        "excerpt" => "گلچین کردن",
        "date" => "تاریخ",
        "time" => "زمان",
        "available" => "موجود",
        "size" => "اندازه",
        "file" => "فایل",
        "full_name" => "نام کامل",
        "postal_code" => "کد پستی",
        "comment" => "نظر",
        "body" => "متن اصلی",
        "image" => "تصویر",
        "photos" => "تصاویر",
        "photo" => "تصویر",
        "cat_id" => "دسته بندی",
        "published_at" => "تاریخ انتشار",
        "reference_id" => "ارجاع",
        "priority_id" => "اولویت",
        "category_id" => "دسته بندی",
        "tags" => "برچسب ها",
        "summary" => "خلاصه",
        "amount" => "مبلغ",
        "delivery_time" => "زمان ارسال",
        "delivery_time_unit" => "واحد زمان ارسال",
        "original_name" => "نام برند",
        "persian_name" => "نام فارسی برند",
        "logo" => "لوگو",
        "role.*" => "نقش",
        'national_code' => 'کد ملی',
        'user_national_code' => 'کد ملی',
        'parent_id' => ' والد',
        'fax' => 'فکس (دورنگار)',
        'manager_id' => 'مدیر',
        'website' => 'سایت',
        'independent ' => 'سایت',
        'organization_id' => 'سازمان',
        'key' => 'کلید',
        'system_id' => 'سیستم',
        'medical_code' => 'کد نظام پزشکی',
        'father_name' => 'نام پدر',
        'sex_id' => 'جنسیت',
        'birth_place' => 'محل تولد',
        'birth_date' => 'تاریخ تولد',
        'marital_id' => 'وضعیت تاهل',
        'religion_id' => 'دین',
        'job' => 'شغل',
        'office' => 'آدرس محل کار',
        'avatar' => 'تصویر',
        'identity_number' => 'شماره شناسنامه',
        'his_reception_number' => 'شماره پذیرش HIS',
        'reception_time' => 'زمان پذیرش',
        'doctor_id' => 'نام پزشک',
        'death_time' => 'زمان فوت',
        'guest_patient_mobile' => 'تلفن همراهی بیمار',
        'bed_id' => 'نوع تخت',
        'insurance_number' => 'شماره بیمه نامه',
        'insurance' => 'بیمه',
        'part_id' => 'بخش',
        'hospital_id' => 'بیمارستان',
        'code' => 'کد',
        'current_password' => 'رمز عبور فعلی',
        'url' => 'آدرس url',
        'sms_server_id' => 'نوع سرویس پیامکی',
        'customer_id' => 'شناسه مشتری',
        'dbname' => 'نام دیتابیس',
        'port' => 'پورت',
        'role' => 'نقش',
        'role_id' => 'شناسه نقش',
        'role_ids' => 'شناسه نقش',
        'role_ids.*' => 'شناسه نقش',
        'role_type_id' => 'شناسه کاربر نقش',
        'birthday' => 'تاریخ تولد',
        'application_id' => 'شناسه اپلیکیشن',
        'application_platform_id' => 'شناسه پلتفرم اپلیکیشن',
        'architecture_type' => 'نوع معماری',
        'version' => 'ورژن',
        'force_update' => 'آپدیت اجباری',
        'local_download_file' => 'لینک دانلود داخلی',
        'external_download_links' => 'لینک های دانلود خارجی',
        'external_download_links.*.url' => 'لینک دانلود خارجی',
        'external_download_links.*.type' => 'نوع لینک دانلود خارجی',
        'app_name' => 'نام اپلیکیشن',
        'app_name_alias' => 'نام مستعار اپلیکیشن',
        'telegram' => 'تلگرام',
        'instagram' => 'اینستاگرام',

        'lat' => 'عرض جغرافیایی',
        'location_lat' => 'عرض جغرافیایی',
        'Latitude' => 'عرض جغرافیایی',

        'lng' => 'طول جغرافیایی',
        'location_lng' => 'طول جغرافیایی',
        'Longitude' => 'طول جغرافیایی',

        'question' => 'سوال',
        'answer' => 'پاسخ',
        'shop_name' => 'نام فروشگاه',
        'guild_id' => 'گروه صنفی',
        'location_type' => 'مکانیت',
        'user_id' => 'شناسه کاربر',
        'country_id' => 'شناسه کشور',
        'province_id' => 'شناسه استان',
        'township_id' => 'شناسه شهرستان',
        'city_id' => 'شناسه شهر',
        'area_id' => 'شناسه منطقه',
        'sector_id' => 'شناسه محله',
        'village_id' => 'شناسه روستا',
        'user_name' => 'نام کاربر',
        'user_family' => 'نام خانوادگی کاربر',
        'user_mobile_1' => 'شماره همراه 1 کاربر',
        'user_mobile_2' => 'شماره همراه 2 کاربر',
        'referral_code' => 'کد معرف',
        'telephone_1' => 'شماره تلفن 1',
        'telephone_2' => 'شماره تلفن 2',
        'shop_image' => 'تصویر فروشگاه',
        'firebase_token' => 'firebase_token',
        'morning_time_from' => 'ساعت صبح از',
        'morning_time_to' => 'ساعت صبح تا',
        'afternoon_time_from' => 'ساعت بعدازظهر از',
        'afternoon_time_to' => 'ساعت بعدازظهر تا',
        'is_24_hours' => '24 ساعته',
        'holiday' => 'روز تعطیل',
        'is_active' => 'فعالیت',
        'is_confirmed_info' => 'صحت اطلاعات',
        'is_vip' => 'حساب ویژه',
        'is_blocking' => 'فعال بودن',
        'is_authenticated' => 'احراز هویت شده',
        'is_installed' => 'اپلیکیشن نصب شده',
        'default_general_telephone' => ' شماره تلفن پیشفرض عمومی',
        'default_factor_telephone' => ' شماره تلفن پیشفرض فاکتورها',
        'installation_expert_user_id' => 'شناسه کارشناس نصب',
        'install_report_id' => 'شناسه گزارش نصب',
        'temporary_management_name' => 'نام مدیر موقت',
        'temporary_mobile_1' => 'شماره همراه موقت 1',
        'temporary_mobile_2' => 'شماره همراه موقت 2',
        'temporary_mobile_3' => 'شماره همراه موقت 3',
        'history_activity' => 'سابقه فعالیت',
        'ownership' => 'مالکیت',
        'board_sponsor_id' => 'شناسه اسپانسر تابلو',
        'rent_end_date' => 'تاریخ پایان اجاره',
        'street_type_id' => 'شناسه نوع معبر',
        'grade_id' => 'شناسه رتبه',
        'area_class_id' => 'شناسه مساحت فروشگاه',
        'credit' => 'اعتبار',
        'credit_description' => 'توضیحات اعتبارسنجی مشتری',
        'access_market_page' => 'دسترسی به پیج تامین کنندگان',
        'paginate' => 'paginate',
        'per_page' => 'per_page',
        'perPage' => 'per_page',
        'selects' => 'selects',
        'guild_ids' => 'شناسه گروه های صنفی',
        'guild_ids.*' => 'شناسه گروه های صنفی',
        'country_ids' => 'شناسه کشور ها',
        'country_ids.*' => 'شناسه کشور ها',
        'province_ids' => 'شناسه استان ها',
        'province_ids.*' => 'شناسه استان ها',
        'township_ids' => 'شناسه شهرستان ها',
        'township_ids.*' => 'شناسه شهرستان ها',
        'city_ids' => 'شناسه شهر ها',
        'city_ids.*' => 'شناسه شهر ها',
        'area_ids' => 'شناسه مناطق',
        'area_ids.*' => 'شناسه مناطق',
        'sector_ids' => 'شناسه محلات',
        'sector_ids.*' => 'شناسه محلات',
        'install_report_ids' => 'شناسه وضعیت های گزارش نصب',
        'install_report_ids.*' => 'شناسه وضعیت های گزارش نصب',
        'has_telephone' => 'وضعیت داشتن تلفن',
        'app_installed' => 'وضعیت نصب داشتن اپلیکیشن',
        'confirmed_information' => 'وضعیت صحت سنجی اطلاعات',
        'account_holder_name' => 'نام دارنده حساب',
        'account_number_type' => 'نوع شماره حساب',
        'account_number' => 'شماره حساب',
        'bank_name' => 'نام بانک',
        'bank_branch' => 'نام شعبه بانک',
        'market_account_id' => 'شماره حساب تامین کننده',
        'POS_number' => 'شماره کارتخوان',
        'market_POS_id' => 'شناسه کارتخوان',
        'cheque_number' => 'شماره چک',
        'cheque_due_date' => 'تاریخ سر رسید چک',
        'payer_name' => 'پرداخت کننده',
        'data' => 'اطلاعات',
        'data.*.advertisement_id' => 'شناسه آگهی',
        'data.*.count' => 'تعداد',
        'data.*.customer_id' => 'شناسه مشتری',
        'data.*.customer_description' => 'توضیحات مشتری',
        'data.*.visit_route_id' => 'مسیر ویزیت',
        'data.*.market_personnel_id' => 'پرسنل تامین کننده',
        'data.customer_ids' => 'شناسه مشتریان',
        'data.deleted_customer_ids' => 'شناسه مشتریان حذف شده ',
        'data.group_guild_ids' => 'شناسه گروه های صنفی',
        'data.title' => 'عنوان',
        'data.visit_route_base_id' => 'شناسه مسیر پایه',
        'data.points' => 'نقاط',
        'data.points.*.lat' => 'عرض جغرافیایی',
        'data.points.*.lng' => 'طول جغرافیایی',
        'data.customers' => 'اصناف',
        'data.customers.*.customer_id' => 'شناسه مشتری',
        'data.customers.*' => 'شناسه مشتری',
        'data.deleted_customer_ids.*' => 'شناسه مشتری حذف شده',
        'data.group_guild_ids.*' => 'شناسه گروه های صنفی',
        'data.route_length' => 'طول مسیر',
        'advertisement_id' => 'شناسه آگهی',
        'count' => 'تعداد',
        'discount_code' => 'کد تخفیف',
        'discount_codes.*' => 'کد تخفیف',
        'delivery_date' => 'تاریخ ارسال',
        'customer_description' => 'توضیحات مشتری',
        'cart_id' => 'شناسه سبد خرید',
        'invoice_id' => 'شناسه فاکتور',
        'invoice_ids' => 'شناسه های فاکتور',
        'invoice_ids.*' => 'شناسه های فاکتور',
        'first_invoice_id' => 'شناسه فاکتور اول',
        'second_invoice_id' => 'شناسه فاکتور دوم',
        'invoice_item_id' => 'شناسه سفارش',
        'data.*.invoice_item_id' => 'شناسه سفارش',
        'type_payment' => 'نوع پرداخت',
        'role_group' => 'گروه نقش',
        'manager_name' => 'نام مدیر',
        'manager_mobile' => 'تلفن همراه مدیر',
        'customer_ids' => 'شناسه اصناف',
        'customer_ids.*' => 'شناسه اصناف',
        'market_ids' => 'شناسه تامین کنندگان',
        'market_ids.*' => 'شناسه تامین کنندگان',
        'market_id' => 'شناسه تامین کننده',
        'advertisement_ids' => 'شناسه آگهی ها',
        'advertisement_ids.*' => 'شناسه آگهی ها',
        'distribute_line_ids' => 'شناسه خطوط توزیع',
        'distribute_line_ids.*' => 'شناسه خطوط توزیع',
        'register_type' => 'نوع ثبت کننده',
        'registering_personnel_ids' => 'شناسه پرسنل ثبت کننده',
        'registering_personnel_ids.*' => 'شناسه پرسنل ثبت کننده',
        'delivery_personnel_ids' => 'شناسه پرسنل تحویل دهنده',
        'delivery_personnel_ids.*' => 'شناسه پرسنل تحویل دهنده',
        'product_group_ids' => 'شناسه دسته بندی های کالا',
        'product_group_ids.*' => 'شناسه دسته بندی های کالا',
        'invoice_items_statuses' => 'وضعیت  سفارشات',
        'invoice_items_statuses.*' => 'وضعیت سفارشات',
        'market_invoice_items_statuses' => 'وضعیت  سفارشات از سمت تامین کننده',
        'market_invoice_items_statuses.*' => 'وضعیت  سفارشات از سمت تامین کننده',
        'customer_invoice_items_statuses' => 'وضعیت  سفارشات از سمت صنف',
        'customer_invoice_items_statuses.*' => 'وضعیت  سفارشات از سمت صنف',
        'has_note' => 'یادداشت',
        'has_complimentary' => 'اشانتیون',
        'accepted' => 'وضعیت تایید',
        'is_closed' => 'وضعیت بسته بودن فاکتور',
        'delivered' => 'وضعیت تحویل دادن',
        'price_factor_from' => 'مبلغ فاکتور از',
        'price_factor_to' => 'مبلغ فاکتور تا',
        'percent_commission_from' => 'درصد پورسانت از',
        'percent_commission_to' => 'درصد پورسانت تا',
        'register_invoice_date_from' => 'تاریخ ثبت فاکتور از',
        'register_invoice_date_to' => 'تاریخ ثبت فاکتور تا',
        'archived_date_from' => 'تاریخ بایگانی فاکتور از',
        'archived_date_to' => 'تاریخ بایگانی فاکتور تا',
        'delivery_date_from' => 'تاریخ تحویل فاکتور از',
        'delivery_date_to' => 'تاریخ تحویل فاکتور تا',
        'withs' => 'اطلاعات اضافی',
        'withs.*' => 'فیلد اطلاعات اضافی',
        'invoice_code' => 'کد فاکتور',
        'invoice_item_code' => 'کد سفارش فاکتور',
        'sending_status_discrepancy' => 'مغایرت وضعیت ارسال',
        'tracking_number' => 'شماره پیگیری',
        'type' => 'نوع',
        'market_invoice_cancellation_reason_id' => 'شناسه دلیل لغو فاکتور',
        'market_invoice_reject_reason_id' => 'شناسه دلیل برگشت فاکتور',
        'discount_percent' => 'درصد تخفیف',
        'commission' => 'پورسانت',
        'market_shipping_status' => 'وضعیت ارسال برای تامین کننده',
        'customer_shipping_status' => 'وضعیت ارسال برای صنف',
        'market_cancellation_reason_id' => 'علت لغو توسط تامین کننده',
        'customer_cancellation_reason_id' => 'علت لغو توسط صنف',
        'market_reject_reason_id' => 'علت برگشت توسط تامین کننده',
        'customer_reject_reason_id' => 'علت برگشت توسط صنف',
        'user_creator_id' => 'کاربر ایجاد کننده',
        'user_editor' => 'کاربر ایجاد کننده',
        'creator_personnel_id' => 'پرسنل ایجاد کننده',
        'created_at' => 'تاریخ ایجاد',
        'updated_at' => 'تاریخ ویرایش',
        'deleted_at' => 'تاریخ حذف',
        'user_type' => 'نوع کاربر',
        'waiting_for_delivery_item_ids' => 'شناسه سفارشات در انتظار تحویل',
        'waiting_for_delivery_item_ids.*' => 'شناسه سفارشات در انتظار تحویل',
        'delivered_item_ids' => 'شناسه سفارشات تحویل شده',
        'delivered_item_ids.*' => 'شناسه سفارشات تحویل شده',
        'returned_item_ids' => 'شناسه سفارشات برگشت داده شده',
        'returned_item_ids.*' => 'شناسه سفارشات برگشت داده شده',
        'cancelled_item_ids' => 'شناسه سفارشات لغو شده',
        'cancelled_item_ids.*' => 'شناسه سفارشات لغو شده',
        'contact_us_id' => 'شناسه تماس با ما',
        'agent_name' => 'نام نماینده',
        'based_on_guild_group_in_area' => 'بر اساس گروه صنفی در محدوده',
        'based_on_range_date_buy_on_month' => 'بر اساس بازه زمانی خرید در ماه',
        'based_on_buy_amount' => 'بر اساس میزان خرید در ماه',
        'based_on_activity_status' => 'بر اساس وضعیت فعال بودن',
        'based_on_customers_settlement_status' => 'بر اساس وضعیت تسویه مشتریان',
        'based_on_personnel_settlement_status' => 'بر اساس وضعیت تسویه پرسنل',
        'based_on_area' => 'بر اساس محدوده ها',
        'based_on_reason_reject_personnel' => 'بر اساس علت برگشت برای پرسنل',
        'based_on_reason_reject_markets' => 'بر اساس علت برگشت برای تامین کنندگان',
        'based_on_reason_reject_customers' => 'بر اساس علت برگشت برای فروشگاه',
        'based_on_invoice_status' => 'بر اساس وضعیت فاکتور',
        'based_on_personnel' => 'بر اساس پرسنل',
        'based_on_daily_sell' => 'بر اساس فروش روزانه',
        'based_on_commission' => 'بر اساس پورسانت',
        'based_on_markets' => 'بر اساس تامین کنندگان',
        'based_on_advertisements' => 'بر اساس آگهی ها',
        'based_on_products' => 'بر اساس کالا ها',
        'based_on_register_type' => 'بر اساس نوع ثبت',
        'customers_club' => 'باشگاه مشتریان',
        'visit_report_status' => 'گزارش ویزیت',
        'last_factor_date_from' => 'تاریخ آخرین فاکتور از',
        'last_factor_date_to' => 'تاریخ آخرین فاکتور تا',
        'visit_date_from' => 'تاریخ ویزیت از',
        'visit_date_date_to' => 'تاریخ ویزیت تا',
        'has_notes' => 'دارای یادداشت',
        'settlement_type' => 'روش تسویه',
        'salary_type_id' => 'نوع درآمد',
        'commercial_role_code' => 'کد نقش',
        'get_commercial_role_code' => 'دریافت کد نقش',
        'user_commercial_role_code' => 'کد نقش کاربر',
        'num_per_total_by_middle' => 'تعداد واحد میانه در واحد کل',
        'num_per_total_by_small' => 'تعداد در واحد کل بر اساس واحد جز',
        'installation_expert_user_id' => 'کارشناس نصب',
        'show_status' => 'وضعیت نمایش',
        'product_id' => 'شناسه محصول',
    ],
];
