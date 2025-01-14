<?php

use Illuminate\Support\Str;
use Modules\Location\Http\lib\pointLocation;
use mohammadbay\sitemanager\Http\Repositories\ModuleRepository;
use Morilog\Jalali\Jalalian;
use Tymon\JWTAuth\Facades\JWTAuth;

if (!function_exists('generate_random_unique_code_user')) {
    function generate_random_unique_code_user(): int
    {
        $min_random_code = config_(key: 'configs.authentication.users.min_random_code_user', title: 'کمترین مقدار کد کاربر(min)');
        $max_random_code = config_(key: 'configs.authentication.users.max_random_code_user', title: 'بیشترین مقدار کد کاربر(max)');
        $code = rand($min_random_code, $max_random_code);
        $is_code_unique = \Modules\Authentication\Entities\User::check_unique_code($code);
        return $is_code_unique ? $code : generate_random_unique_code_user();
    }
}

if (!function_exists('set_user_creator_id')) {
    function set_user_creator_id($user = null)
    {
        $user = $user ?? auth()?->user() ?? null;
        return $user?->id ?? null;
    }
}

// todo should be delete
if (!function_exists('set_user_creator')) {
    function set_user_creator($user = null)
    {
        $user = $user ?? auth()?->user() ?? null;
        return $user?->id ?? null;
    }
}

if (!function_exists('user_have_permission')) {
    function user_have_permission($permission, $user = null, $role = null): bool
    {
        return true;
        return \Modules\Authorization\Services\PermissionService::user_have_permission(permission: $permission, user: $user);
    }
}


if (!function_exists('user_have_role')) {
    function user_have_role($roles = [], $user = null): bool
    {
        if (is_string($roles)) {
            $roles = [$roles];
        }
        /** @var Modules\Authentication\Entities\User $user */
        $user = $user ?? auth()?->user() ?? null;
        return \Modules\Authorization\Services\RoleService::userHaveRoles(user: $user, roles: $roles);
    }
}


if (!function_exists('response_default')) {
    function response_default($data = [], $message = '', $status = \Symfony\Component\HttpFoundation\Response::HTTP_OK/* 200 */, $errors = []): \Illuminate\Http\JsonResponse
    {
        $response = [];
        $response['message'] = $message ?? '';
        $response['errors'] = $errors ?? [];
        $response['data'] = $data ?? null;

        # set and validate status_code
        $status = array_key_exists($status, \Symfony\Component\HttpFoundation\Response::$statusTexts) ? $status : /* 200 */
            \Symfony\Component\HttpFoundation\Response::HTTP_OK;

        return response()->json($response, $status);
    }
}

if (!function_exists('mobile')) {
    function mobile(string $mobile): bool|int
    {
        return (bool)preg_match('/^(((98)|(\+98)|(0098)|0)(9){1}[0-9]{9})+$/', $mobile) || (bool)preg_match('/^(9){1}[0-9]{9}+$/', $mobile);
        // return preg_match('/(09)[0-9]{9}/', $mobile);
    }
}

if (!function_exists('password')) {
    function password(string $password): bool|int
    {
        return preg_match('/(?=^.{8,}$)(?=.*\d)(?=.*[!@#$%^&*]+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/', $password);
    }
}

if (!function_exists('telephone')) {
    function telephone(string $telephone): bool|int
    {
        return preg_match('/(0)[0-9]{9}/', $telephone);
    }
}

if (!function_exists('send_sms')) {
    function send_sms(string|int $mobile, string $message = null, string $hash = '-'): bool
    {
        try {

            $app_env = env('APP_ENV');
            \Illuminate\Support\Facades\Log::debug($mobile." : ".$message);
            if ($app_env == 'production') {
                return \Modules\Sms\Services\Sms::sendSMSAsTemp($mobile, $message, $hash, 'NewOTP');
//                return \Modules\Sms\Services\Sms::sendSMSAsTemp($mobile, $message, $hash, 'otp');
            } else {
//                \Illuminate\Support\Facades\Log::debug($message);
                return true;
            }
        } catch (\Exception $exception) {
            return false;
        }
    }
}

if (!function_exists('is_string_english')) {
    function is_string_english(string $string, $strict = false): bool|int
    {
        $result = preg_match('/[^A-Za-z0-9]/', $string);
        return !$strict ? $result : $result && !is_string_persian($string);
    }
}

if (!function_exists('is_string_persian')) {
    function is_string_persian(string $string): bool|int
    {
        $pattern = '/^[\x{0600}-\x{06FF}\x{FB50}-\x{FDFF}\x{06F0}-\x{06F9}0-9\s\.,،]+$/u';
        return preg_match($pattern, $string) === 1;
    }
}


if (!function_exists('convertPersianDigitsToEnglish')) {
    function convertPersianDigitsToEnglish($string): array|string|null
    {
        if ($string == null) {
            return null;
        }
        $persian = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
        $arabic = ['٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'];

        $num = range(0, 9);
        $convertedPersianNums = str_replace($persian, $num, $string);
        return str_replace($arabic, $num, $convertedPersianNums);
    }
}

if (!function_exists('random_string')) {
    function random_string($length = 10, $start_with = '', $end_with = ''): string
    {
        $start_with = filled($start_with) ? $start_with . "_" : $start_with;
        $end_with = filled($end_with) ? "_" . $end_with : $end_with;
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $start_with . $randomString . $end_with;
    }
}

if (!function_exists('between')) {
    function between($number, $min, $max, $equal = true): bool
    {
        if ($equal) {
            if ($number < $min) return false;
            if ($number > $max) return false;
        } else {
            if ($number <= $min) return false;
            if ($number >= $max) return false;
        }
        return true;
    }
}

if (!function_exists('flatten')) {
    function flatten(array $array): array
    {
        $return = array();
        array_walk_recursive($array, function ($a) use (&$return) {
            $return[] = $a;
        });
        return $return;
    }
}

if (!function_exists('fake_persian')) {
    function fake_persian()
    {
        return new \Database\Seeders\persianLib();
    }
}

if (!function_exists('bool_true_false')) {
    function bool_true_false($value = null, $default = null): bool
    {
        if (is_bool($value)) {
            return $value;
        }
        if ((is_string($value) || is_int($value)) && filled($value)) {
            if ($value == 'true' || ($value == '1' || $value == 1)) {
                $value = true;
            } elseif ($value == 'false' || ($value == '0' || $value == 0)) {
                $value = false;
            } else {
                return bool_true_false($default);
            }
        }
        return $value;
    }
}

if (!function_exists('convert_withs_from_string_to_array')) {
    function convert_withs_from_string_to_array($withs = null): array
    {
        if ($withs && filled($withs) && is_string($withs)) {
            $withs = str_replace(' ', '', $withs);
            $withs = filled($withs) ? explode(',', $withs) : [];
            return $withs;
        }
        return [];
    }
}

if (!function_exists('replaceConfigVariablesData')) {

    function replaceConfigVariablesData($configVar, $replaceData = [])
    {
        foreach ($replaceData as $key => $item) {
            if (str_contains($configVar, "%" . $key . "%")) {
                $configVar = str_replace("%" . $key . "%", $item, $configVar);
            }
        }
        return $configVar;
    }
}


if (!function_exists('helperDeleteFiles')) {
    function helperDeleteFiles($links = null)
    {
        if (is_null($links)) {
            return null;
        }
        if (is_string($links)) {
            $links = [$links];
        } elseif ($links instanceof \Illuminate\Support\Collection) {
            $links = $links?->toArray() ?? [];
        }

        foreach ($links as $link) {
            if (is_null($link)) {
                continue;
            }
            try {
                # Path to the file.
                $filename = storage_path("app/public") . parse_url(str_replace("storage", "", $link))["path"];
                unlink(filename: $filename);
            } catch (\Exception $exception) {
            }
        }
    }
}


if (!function_exists('findData')) {
    function findData(object|null $data, array $list, bool $hasWidget = true): array
    {
        if (is_null($data)) {
            return [];
        }

        $payload = [];

        if ($hasWidget) {
            $data = collect($data->widgets);
        }

        foreach ($list as $value => $indexes) {
            $widgets = $data->where('widget_type', $value)->all();
            foreach ($widgets as $widget) {
                switch ($value) {
                    case 'GROUP_INFO_ROW':
                        foreach ($indexes as $index) {
                            $widgetData = $widget->data->{$index};
                            foreach ($widgetData as $widgetValue) {
                                $payload[$value][] = $widgetValue;
                            }
                        }
                        break;
                    case 'MAP':
                        foreach ($indexes as $index) {
                            $payload[$value][] = $widget->data->{$index}->exact_data->point;
                        }
                        break;
                    default:
                        foreach ($indexes as $index) {
                            $payload[$value][] = $widget->data->{$index};
                        }
                        break;
                }
            }
        }

        return $payload;
    }
}


if (!function_exists('fixArray')) {
    function fixArray($array)
    {
        $result = [];
        foreach ($array as $element) {
            if (is_array($element)) {
                $result = array_merge($result, fixArray($element));
            } else {
                $result[] = $element;
            }
        }
        return $result;
    }
}

if (!function_exists('array_search_level_two')) {
    function array_search_level_two($needle, array $arr): bool|int|string
    {
        // check arrays contained in this array
        foreach ($arr as $key => $element) {
            if (in_array($needle, $element)) {
                return $key;
            }
        }

        return false;
    }
}

if (!function_exists('ConvertShamsiToMiladi')) {
    function convert_shamsi_to_miladi($string): string
    {
        $year = substr($string, 0, 4);
        $month = substr($string, 4, 2);
        $day = substr($string, 6, 2);
        $georgianCarbonDate = Jalalian::fromFormat('Y/m/d', $year . '/' . $month . '/' . $day)->toCarbon();

        return $georgianCarbonDate->format('Y-m-d 00:00:00');
    }
}

if (!function_exists('ConvertNumberEnglishToFarsi')) {
    function convert_number_to_english($string): string
    {
        $word = ["گرمی", "اصل", "میل", "کیلویی", "عددی"];
        $final = str_replace($word, "", $string);
        $explode_data = explode(' ', $final);
        $export = [];
        foreach ($explode_data as $value) {
            $persian = ['۰', '۱', '۲', '۳', '۴', '٤', '۵', '٥', '٦', '۶', '۷', '۸', '۹'];
            $english = [0, 1, 2, 3, 4, 4, 5, 5, 6, 6, 7, 8, 9];
            $word = str_replace($persian, $english, $value);

            $characters = [
                'ك' => 'ک',
                'ي' => 'ی',
            ];
            $convert = str_replace(array_keys($characters), array_values($characters), $word);

            $export[] = $convert;
        }

        return implode(' ', $export);
    }
}


if (!function_exists('loadJson')) {

    function loadJson($directory)
    {
        //dd(ini_get('memory_limit'));
        $url = storage_path("app/public/layer/$directory");
        $datos = file_get_contents($url);
        $data = json_decode($datos, true)['features'];
        return $data;
    }
}


if (!function_exists('findInPolygon')) {
    function findInPolygon($directory, $point, $sort = 1)
    {
        $data = loadJson($directory);
        $pointLocation = new pointLocation();
        if ($sort == 1) {
            $data = collect($data)->sortBy('attributes.SHAPE_Length')->values();
        }
        foreach ($data as $feature) {
            foreach ($feature['geometry']['rings'] as $curveRing) {
                $res = $pointLocation->pointInPolygon($point, $curveRing);
                if ($res == "inside") {
                    return $feature['attributes'];
                }
            }
        }
        return false;
    }
}


if (!function_exists('checkIsSystemUser')) {
    function checkIsSystemUser()
    {
        $jwtToken = str_replace("Bearer ", "", request()->header('Authorization'));
        $roleGroupApplication = JWTAuth::setToken($jwtToken)->getClaim("role_group_application") ?? null;
        return ($roleGroupApplication == "user");
    }
}

if (!function_exists('removeUnnecessaryFilter')) {

    function removeUnnecessaryFilter($request, $unnecessaryItem = ['page', 'per_page', 'paginate', 'pageNumber', 'perPage'],$extraItem = []): array
    {
        $totalUnnecessaryItem = array_merge($unnecessaryItem, $extraItem);
        $filters = [];
        $filterKeys = $request->keys();
        foreach ($filterKeys as $filterKey) {
            if (!in_array($filterKey, $totalUnnecessaryItem)) {
                $filters["$filterKey"] = $request->$filterKey;
            }
        }
        return $filters;
    }
}


if (!function_exists('adminItems')) {

    function adminItems()
    {
        $modules = resolve(ModuleRepository::class)->all(relations:['component']);
        foreach ($modules as $mIndex=>$module) {
            $moduleUrl = "admin_".Str::snake($module->name)."_";
            foreach ($module->components as $cIndex=>$component) {
                $componentUrl = $moduleUrl.Str::snake($component->name)."_index";
                $modules[$mIndex]['components'][$cIndex]['url'] = $componentUrl;
            }
        }
        return $modules;
    }
}


