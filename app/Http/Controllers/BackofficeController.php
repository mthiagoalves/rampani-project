<?php

namespace App\Http\Controllers;

use App\Repositories\BlogRepositorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class BackofficeController extends Controller
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

    public function createPost(Request $request){
        $dataRequest = $request->all();

        $response = BlogRepositorie::createPost($dataRequest);

        if(isset($response)) {
            return response()->json(['success' => 'Artigo criado com sucesso!'], 200);
        }
        return response()->json(['error' => 'Algo de errado aconteceu na criação do artigo :('], 422);
    }

    public function uploadImagePost(Request $request)
    {
        $response = BlogRepositorie::uploadImagePost($request);

        return response($response);
    }
}
