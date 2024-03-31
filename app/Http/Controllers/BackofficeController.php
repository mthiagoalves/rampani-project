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
        $posts = BlogRepositorie::getAllPosts();

        $categories = BlogRepositorie::getAllCategories();

        return Inertia::render('Backoffice/Blog', ['posts' => $posts, 'categories' => $categories]);
    }

    public function createPost(Request $request)
    {
        $dataRequest = $request->all();

        $response = BlogRepositorie::createPost($dataRequest);

        if ($response->getStatusCode() === 200) {
            return response()->json(['success' => 'Artigo criado com sucesso!'], 200);
        } else {
            return response()->json(['error' => $response->getContent() . ' :('], $response->getStatusCode());
        }
    }

    public function updatePost(Request $request)
    {
        $dataRequest = $request->all();

        $response = BlogRepositorie::updatePost($dataRequest);

        if ($response->getStatusCode() === 200) {
            return response()->json(['success' => 'Artigo atualizado com sucesso!'], 200);
        } else {
            return response()->json(['error' => $response->getContent() . ' :('], $response->getStatusCode());
        }
    }

    public function updateCategory(Request $request)
    {
        $dataRequest = $request->all();

        $response = BlogRepositorie::updateCategory($dataRequest);

        if ($response->getStatusCode() === 200) {
            return response()->json(['success' => 'Categoria removida com sucesso!'], 200);
        } else {
            return response()->json(['error' => $response->getContent() . ' :('], $response->getStatusCode());
        }
    }

    public function removeCategory(Request $request)
    {
        $dataRequest = $request->all();

        $response = BlogRepositorie::removeCategory($dataRequest);

        if ($response->getStatusCode() === 200) {
            return response()->json(['success' => 'Categoria removida com sucesso!'], 200);
        } else {
            return response()->json(['error' => $response->getContent() . ' :('], $response->getStatusCode());
        }
    }

    public function uploadImagePost(Request $request)
    {
        $response = BlogRepositorie::uploadImagePost($request);

        return response($response);
    }

    public function createCategory(Request $request)
    {
        $dataRequest = $request->all();

        $response = BlogRepositorie::createCategory($dataRequest);

        if ($response->getStatusCode() === 200) {
            return response()->json(['success' => 'Nova categoria adicionada!'], 200);
        } else {
            return response()->json(['error' => $response->getContent() . ' :('], $response->getStatusCode());
        }
    }
}
