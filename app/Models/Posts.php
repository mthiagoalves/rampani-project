<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'title',
        'sub_title',
        'slug',
        'category_id',
        'published_in',
        'description',
        'meta_description',
        'key_words',
        'is_active'
    ];
}
