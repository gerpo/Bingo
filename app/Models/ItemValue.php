<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemValue extends Model
{
    use HasFactory;

    public const TEXT_TYPE = 1;
    public const IMAGE_TYPE = 2;
    public const VIDEO_TYPE = 3;

    public const TYPES = [
        self::TEXT_TYPE,
        self::IMAGE_TYPE,
        self::VIDEO_TYPE,
    ];
}
