<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class BakcofficeController extends Controller
{
    public function getDashboard()
    {
        return Inertia::render('Backoffice/Dashboard');
    }

    public function getHomepage()
    {
        return Inertia::render('Backoffice/Homepage');
    }

    public function getProcedures()
    {
        return Inertia::render('Backoffice/Procedures');
    }

    public function getCampain()
    {
        return Inertia::render('Backoffice/Campain');
    }

    public function getBlog()
    {
        return Inertia::render('Backoffice/Blog');
    }
}
