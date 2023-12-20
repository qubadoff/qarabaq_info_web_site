<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siteinfo extends Model
{
    use HasFactory;

    protected $table = 'siteinfos';

    protected $fillable = [
        'name',
        'description',
        'meta_desc',
        'meta_keywords',
        'meta_tags',
        'email',
        'phone',
        'fb',
        'instagram',
        'twitter',
        'linkedin',
        'tiktok',
        'youtube',
        'location',
        'logo',
    ];

    protected $guarded = [];

    protected $casts = [];
}
