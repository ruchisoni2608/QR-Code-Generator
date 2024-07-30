<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class PageItem extends Model
{
    use HasFactory;
    protected $guarded = [];

    public const IMAGE = 'image';
    public const VIDEO = 'video';
    public const PDF = 'pdf';
    public const TYPES = [
        self::IMAGE => "Image",
        self::VIDEO => 'Video',
        self::PDF => "Pdf",
    ];
}
