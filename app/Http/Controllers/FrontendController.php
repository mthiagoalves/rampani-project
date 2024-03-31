<?php

namespace App\Http\Controllers;

use App\Repositories\BlogRepositorie;
use App\Repositories\CampainRepository;
use App\Repositories\HomepageRepositorie;
use Illuminate\Http\Request;
use Inertia\Inertia;

class FrontendController extends Controller
{
    public function getHomepage()
    {
        $campaigns = CampainRepository::getAllCampaignsActive();

        return Inertia::render('Homepage', ['title' => 'Clinica Rampani', 'campaigns' => $campaigns]);
    }

    public function getProcedures()
    {
        return Inertia::render('AllProcedures', ['title' => 'Clinica Rampani - Todos os Procedimentos']);
    }

    public function getProcedure()
    {
        return Inertia::render('Procedure');
    }

    public function getBlog()
    {
        $posts = BlogRepositorie::getAllPosts();

        $campaigns = CampainRepository::getAllCampaignsActive();


        return Inertia::render('Blog', ['title' => 'Clínica Rampani - Blog', 'posts' => $posts, 'campaigns' => $campaigns]);
    }

    public function getPost($slug)
    {
        $post = BlogRepositorie::getPost($slug);

        return Inertia::render('Blog/Post', ['title' => $post->title, 'post' => $post]);
    }

    public function getTheClinic()
    {
        return Inertia::render('Clinic', ['title' => 'Clínica Rampani - Nossa Clínica']);
    }

    public function getLandingMaleAesthetics(){
        return Inertia::render('Landings/MaleAesthetics', ['title' => 'Estética Intíma Masculina']);
    }

    public function getTermsAndConditions()
    {
        return Inertia::render('TermsAndConditions', ['title' => 'Clínica Rampani - Termos e Condições']);
    }

    public function getPrivacyPolicy()
    {
        return Inertia::render('PrivacyPolicy', ['title' => 'Clínica Rampani - Política de Privacidade']);
    }
}
