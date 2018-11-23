<?php

namespace Movor\LaravelCustomCasts\Test\Support\Models;

use Movor\LaravelCustomCasts\Test\Support\CustomCasts\PrefixNameCast;

class ImageWithPrefixNameCast extends Image
{
    protected $casts = [
        'image' => PrefixNameCast::class
    ];
}