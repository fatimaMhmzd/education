<?php

namespace mohammadbay\sitemanager\Enums;

enum RelationType: string
{
    use EnumToArray;
    case HasOne = 'hasOne';
    case HasMany = 'hasMany';
    case BelongsTo = 'belongsTo';
    case BelongsToOne = 'belongsToOne';
    case BelongsToMany = 'belongsToMany';
    case MorphOne = 'morphOne';
    case MorphMany = 'morphMany';
    case MorphTo = 'morphTo';
    case MorphToMany = 'morphToMany';
    case HasOneThrough = 'hasOneThrough';
    case HasManyThrough = 'hasManyThrough';

    public static function label(RelationType $type): string
    {
        return match($type) {
            self::HasOne => 'یک به یک',
            self::HasMany => 'یک به چند',
            self::BelongsTo => 'تعلق به',
            self::BelongsToOne => 'تعلق به(یک به یک)',
            self::BelongsToMany => 'چند به چند',
            self::MorphOne => 'چندشکلی یک به یک',
            self::MorphMany => 'چندشکلی یک به چند',
            self::MorphTo => 'چندشکلی تعلق',
            self::MorphToMany => 'چندشکلی چند به چند',
            self::HasOneThrough => 'یک به یک از طریق',
            self::HasManyThrough => 'یک به چند از طریق',
        };
    }

    public static function getLabels(): array
    {
        return array_map(fn($case) => self::label($case), self::cases());
    }

}
