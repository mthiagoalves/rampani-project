<?php

namespace App\Repositories;

use App\Models\Posts;

class BlogRepositorie
{

    public static function getAllPosts()
    {
        return Posts::where('is_active', true)->orderBy('id', 'DESC')->get();
    }

    public static function getPost($slug)
    {
        return Posts::where('slug', $slug)->where('is_active', true)->first();
    }
}
