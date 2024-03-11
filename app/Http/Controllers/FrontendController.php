<?php

namespace App\Http\Controllers;

use App\Repositories\HomepageRepositorie;
use Illuminate\Http\Request;
use Inertia\Inertia;

class FrontendController extends Controller
{
    public function getHomepage()
    {
        $content = HomepageRepositorie::getHomepageContent();

        return Inertia::render('Homepage');
    }

    public function getProcedures()
    {
        return Inertia::render('Procedures');
    }

    public function getBlog()
    {
        return Inertia::render('Blog');
    }

    public function getTheClinic()
    {
        return Inertia::render('Clinic');
    }

    public function getTermsAndConditions()
    {
        return Inertia::render('TermsAndConditions');
    }

    public function getPrivacyPolicy()
    {
        return Inertia::render('PrivacyPolicy');
    }
}
