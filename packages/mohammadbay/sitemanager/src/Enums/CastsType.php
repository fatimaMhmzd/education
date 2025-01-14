<?php

namespace mohammadbay\sitemanager\Enums;

enum CastsType: string
{
    case TinyInteger = 'tinyInteger';
    case SmallInteger = 'smallInteger';
    case MediumInteger = 'mediumInteger';
    case BigInteger = 'bigInteger';
    case Float = 'float';
    case Double = 'double';
    case String = 'string';
    case Text = 'text';
    case LongText = 'longText';
    case MediumText = 'mediumText';
    case Date = 'date';
    case DateTime = 'dateTime';
    case Boolean = 'boolean';

    public static function toCast(CastsType $fieldType): string
    {
        return match ($fieldType) {
            self::TinyInteger,
            self::SmallInteger,
            self::MediumInteger,
            self::BigInteger => 'integer',
            self::Float => 'float',
            self::Double => 'double',
            self::String,
            self::Text,
            self::LongText,
            self::MediumText => 'string',
            self::Date => 'date',
            self::DateTime => 'datetime',
            self::Boolean => 'boolean',
        };
    }

    public function toValidationRule(): string
    {
        return match ($this) {
            self::TinyInteger,
            self::SmallInteger,
            self::MediumInteger,
            self::BigInteger,
            self::Float,
            self::Double => 'numeric',

            self::String,
            self::Text,
            self::LongText,
            self::MediumText => 'string',

            self::Date => 'date',
            self::DateTime => 'date_format:Y-m-d H:i:s',

            self::Boolean => 'boolean',
        };
    }

    public function toDatabaseType(): string
    {
        return match ($this) {
            self::TinyInteger => 'tinyint',
            self::SmallInteger => 'smallint',
            self::MediumInteger => 'mediumint',
            self::BigInteger => 'bigint',
            self::Float => 'float',
            self::Double => 'double',
            self::String => 'varchar',
            self::Text,
            self::LongText,
            self::MediumText => 'text',
            self::Date => 'date',
            self::DateTime => 'datetime',
            self::Boolean => 'tinyint(1)',
        };
    }

}
