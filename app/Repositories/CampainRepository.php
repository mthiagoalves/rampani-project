<?php

namespace App\Repositories;

use App\Models\Campaigns;
use Illuminate\Support\Facades\Validator;

class CampainRepository
{
    public static function getAllCampaigns()
    {
        return Campaigns::all()->orderBy('order', 'ASC');
    }

    public static function createCampain($dataRequest)
    {
        try {
            $validator = Validator::make($dataRequest, [
                'name' => 'string|required',
                'slug' => 'string|required',
                'type' => 'string|required',
                'order' => 'integer|required',
                'is_active' => 'string|required',
                'banner_pc' => 'mimes:jpg,bmp,png',
                'banner_mobile' => 'mimes:jpg,bmp,png',
            ]);

            if ($validator->fails()) {
                return response(implode(PHP_EOL, $validator->errors()->all()), 422);
            }

            if (Campaigns::where('name', $dataRequest['name'])->exists()) {
                return response('Essa campanha já existe', 422);
            }

            if($dataRequest['is_active'] === 'true'){
                $is_active = true;
            } else {
                $is_active = false;
            }

            $campainCreated = Campaigns::create([
                'name' => $dataRequest['name'],
                'slug' => $dataRequest['slug'],
                'type' => $dataRequest['type'],
                'order' => $dataRequest['order'],
                'is_active' => $is_active
            ]);

            self::uploadBannerPc($dataRequest['banner_pc'], $campainCreated->slug);

            self::uploadBannerMobile($dataRequest['banner_mobile'], $campainCreated->slug);

            return response('', 200);
        } catch (\Throwable $e) {
            return response($e->getMessage(), 422);
        }
    }

    private static function uploadBannerPc($banner_pc, $slug)
    {
        if (isset($banner_pc) && $banner_pc->isValid()) {
            $path_banner_pc = $banner_pc;

            $custom_name_file = $slug . ".jpg";

            $folder_banner_pc = "imgs/campaigns/";

            $path_banner_pc->move($folder_banner_pc, $custom_name_file);
        }
    }

    private static function uploadBannerMobile($banner_mobile, $slug)
    {
        if (isset($banner_mobile) && $banner_mobile->isValid()) {
            $path_banner_mobile = $banner_mobile;

            $custom_name_file = $slug . "-m.jpg";

            $folder_banner_mobile = "imgs/campaigns/";

            $path_banner_mobile->move($folder_banner_mobile, $custom_name_file);
        }
    }
}
