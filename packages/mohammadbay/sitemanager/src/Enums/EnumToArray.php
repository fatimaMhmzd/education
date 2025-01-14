<?php

namespace mohammadbay\sitemanager\Enums;

trait EnumToArray
{
    public static function names(): array
    {
        return array_column(self::cases(), 'name');
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function get_key_values(): array
    {
        return array_combine(self::values(), self::names());
    }

    public static function get_values_keys(): array
    {
        return array_combine(self::names(),self::values());
    }


    public static function getLabelKeys(): array
    {
        // به روز رسانی برای گرفتن برچسب‌ها
        return array_combine(self::names(), array_map(fn($case) => self::label($case), self::cases()));
    }

}
