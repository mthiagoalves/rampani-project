<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Repositories\HomepageRepositorie;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function getHomepageContent()
    {
        $content = HomepageRepositorie::getHomepageContent();

        return $content;
    }
}
