<?php

namespace App\Repositories;

use App\Models\Categories;
use App\Models\Posts;
use Illuminate\Support\Facades\Validator;

class BlogRepositorie
{

    public static function getAllPosts()
    {
        return Posts::where('is_active', true)->orderBy('id', 'DESC')->get();
    }

    public static function getAllCategories()
    {
        return Categories::all();
    }

    public static function getPost($slug)
    {
        return Posts::where('slug', $slug)->where('is_active', true)->first();
    }

    public static function createPost($dataRequest)
    {
        try {

            $validator = Validator::make($dataRequest, [
                "title" => "string|required",
                "sub_title" => "string|nullable",
                "slug" => "string|required",
                "category" => "string|required",
                "description" => "string|required",
                'published_in' => 'nullable',
                "key_words" => "string|nullable",
                "meta_description" => "string|nullable",
                "thumbnail" => "mimes:jpg,bmp,png",
                "banner" => "mimes:jpg,bmp,png",
            ]);

            if ($validator->fails()) {
                return response(implode(PHP_EOL, $validator->errors()->all()), 422);
            }

            $postCreated = Posts::create([
                'title' => $dataRequest['title'],
                'sub_title' => $dataRequest['sub_title'],
                'slug' => $dataRequest['slug'],
                'categories' => $dataRequest['category'],
                'description' => $dataRequest['description'],
                'published_in' => $dataRequest['published_in'],
                'meta_description' => $dataRequest['meta_description'],
                'key_words' => $dataRequest['key_words'],
                'is_active' => 1
            ]);

            self::uploadThumbnail($dataRequest['thumbnail'], $postCreated->slug);

            self::uploadBanner($dataRequest['banner'], $postCreated->slug);

            return response('', 200);
        } catch (\Throwable $e) {
            return response($e->getMessage(), 422);
        }
    }

    public static function createCategory($dataRequest)
    {
        try {
            $validator = Validator::make($dataRequest, [
                'name' => 'string|required',
                'slug' => 'string|required',
            ]);

            if ($validator->fails()) {
                return response(implode(PHP_EOL, $validator->errors()->all()), 422);
            }

            Categories::create([
                'name' => $dataRequest['name'],
                'slug' => $dataRequest['slug']
            ]);

            return response('', 200);
        } catch (\Throwable $e) {
            return response($e->getMessage(), 422);
        }
    }

    public static function updateCategory($dataRequest)
    {
        $validator = Validator::make($dataRequest, [
            'name' => 'string|required',
            'slug' => 'string|required',
            'old_slug' => 'string|required',

        ]);

        if ($validator->fails()) {
            return response(implode(PHP_EOL, $validator->errors()->all()), 422);
        }

        try {
            $category = Categories::where('slug', $dataRequest['old_slug']);

            $category->update([
                'name' => $dataRequest['name'],
                'slug' => $dataRequest['slug']
            ]);

            return response('', 200);
        } catch (\Throwable $e) {
            return response($e->getMessage(), 422);
        }
    }

    public static function removeCategory($dataRequest)
    {
        $validator = Validator::make($dataRequest, [
            'slug' => 'string|required',
        ]);

        if ($validator->fails()) {
            return response(implode(PHP_EOL, $validator->errors()->all()), 422);
        }

        try {

            $category = Categories::where('slug', $dataRequest['slug'])->first();

            $category->delete();

            return response('', 200);
        } catch (\Throwable $e) {
            return response($e->getMessage(), 422);
        }
    }

    private static function uploadThumbnail($thumbnail, $slug)
    {
        if (isset($thumbnail) && $thumbnail->isValid()) {
            $path_thumbnail = $thumbnail;

            $custom_name_file = $slug . "-thumbnail.jpg";

            $folder_thumbnail = "imgs/posts/thumbnails/";

            $path_thumbnail->move($folder_thumbnail, $custom_name_file);
        }
    }

    private static function uploadBanner($banner, $slug)
    {
        if (isset($banner) && $banner->isValid()) {
            $path_banner = $banner;

            $custom_name_file = $slug . "-banner.jpg";

            $folder_banner = "imgs/posts/banners/";

            $path_banner->move($folder_banner, $custom_name_file);
        }
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
