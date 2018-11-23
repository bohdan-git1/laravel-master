<?php

namespace Movor\LaravelCustomCasts\Test\Support\Models;

use Illuminate\Database\Eloquent\Model;
use Movor\LaravelCustomCasts\HasCustomCasts;
use Movor\LaravelCustomCasts\Test\Support\CustomCasts\Base64ImageCast;

class Image extends Model
{
    use HasCustomCasts;

    protected $guarded = [];
    protected $table = 'images';

    protected $casts = [
        'data' => 'array',
        'image' => Base64ImageCast::class,
    ];
}