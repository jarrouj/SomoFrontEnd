<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BlogController extends Controller
{

    private function getSocial()
    {
        $ApiUrl = env('API_URL');
        $socials = Http::get("$ApiUrl/api/get-social")->json();

        return $socials;
    }

    private function getBlog()
    {
        $ApiUrl = env('API_URL');
        $blogs = Http::get("$ApiUrl/api/get-blog")->json();

        return $blogs;
    }

    private function getShow()
    {
        $ApiUrl = env('API_URL');
        $show = Http::get("$ApiUrl/api/get-show")->json();

        return $show;
    }

    public function index()
    {
        $socials = $this->getSocial();
        $blog    = $this->getBlog();
        $show    = $this->getShow();

        return view('home.blog.home')->with([
            'socials' => $socials,
            'blogs'   => $blog,
            'show'    => $show,
            
        ]);
    }
}
