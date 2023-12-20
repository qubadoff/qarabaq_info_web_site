<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'order',
        'name',
        'excerpt',
        'body',
        'image',
        'slug'
    ];

    protected $guarded = [];

    protected $casts = [];
}
