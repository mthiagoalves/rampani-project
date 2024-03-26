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

    public static function createPost($dataRequest)
    {
        return Posts::create([
            'title' => $dataRequest['title'],
            'sub_title' => $dataRequest['sub_title'],
            'slug' => $dataRequest['slug'],
            'category_id' => $dataRequest['category'],
            'description' => $dataRequest['description'],
            'published_in' => $dataRequest['published_in'],
            'meta_description' => $dataRequest['meta_description'],
            'key_words' => $dataRequest['key_words'],
            'is_active' => 1
        ]);
    }

    public static function uploadImagePost($request)
    {
        if ($request->hasFIle("file")) {
            $filenamewithextension = $request
                ->file("file")
                ->getClientOriginalName();

            $folder_img_article = "imgs/posts/img-article/";

            $request->file("file")->move($folder_img_article, $filenamewithextension);

            return response(['folder' => $folder_img_article, 'location' => '/imgs/posts/img-article/' . $filenamewithextension]);
        }
    }
}
