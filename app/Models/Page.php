<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $table = 'pages';

    protected $fillable = [
        'order',
        'name',
        'excerpt',
        'body',
        'image',
        'status',
        'slug'
    ];

    protected $guarded = [];

    protected $casts = [];
}
