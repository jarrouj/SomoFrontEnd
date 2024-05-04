<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{

    private function getLanding()
    {
        $ApiUrl = env('API_URL');
        $landings = Http::get("$ApiUrl/api/get-landing")->json();

        return $landings;
    }

    private function getSocial()
    {
        $ApiUrl = env('API_URL');
        $socials = Http::get("$ApiUrl/api/get-social")->json();

        return $socials;
    }

    private function getAbout()
    {
        $ApiUrl = env('API_URL');
        $about = Http::get("$ApiUrl/api/get-about")->json();

        return $about;
    }

    private function getOpening()
    {
        $ApiUrl = env('API_URL');
        $openings = Http::get("$ApiUrl/api/get-opening")->json();

        return $openings;
    }

    private function getMenu()
    {
        $ApiUrl = env('API_URL');
        $menus = Http::get("$ApiUrl/api/get-menu")->json();

        return $menus;
    }

    private function getCategoryMenu()
    {
        $ApiUrl = env('API_URL');
        $categories = Http::get("$ApiUrl/api/get-category-menu")->json();

        return $categories;
    }


    private function getWwd()
    {
        $ApiUrl = env('API_URL');
        $wwd = Http::get("$ApiUrl/api/get-wwd")->json();

        return $wwd;
    }

    private function getBlog()
    {
        $ApiUrl = env('API_URL');
        $blog = Http::get("$ApiUrl/api/get-blog")->json();

        return $blog;
    }


    private function getGallery()
    {
        $ApiUrl = env('API_URL');
        $galleriesData = Http::get("$ApiUrl/api/get-gallery")->json();

        if (is_array($galleriesData) && count($galleriesData) > 0)
        {
            $galleries = array_slice($galleriesData, -8);
        }
        else
        {
            $galleries = [];
        }

        return $galleries;
    }

    private function getTeam()
    {
        $ApiUrl = env('API_URL');
        $teams = Http::get("$ApiUrl/api/get-team")->json();

        return $teams;
    }

    private function getShow()
    {
        $ApiUrl = env('API_URL');
        $show = Http::get("$ApiUrl/api/get-show")->json();

        return $show;
    }

    private function getLocation()
    {
        $ApiUrl = env('API_URL');
        $locations = Http::get("$ApiUrl/api/get-location")->json();

        return $locations;
    }

    private function getCatLocation()
    {
        $ApiUrl = env('API_URL');
        $catLoc = Http::get("$ApiUrl/api/get-loc-cat")->json();

        return $catLoc;
    }





    public function index()
    {

        $landings = $this->getLanding();
        $socials  = $this->getSocial();
        $about    = $this->getAbout();
        $openings = $this->getOpening();
        $wwd      = $this->getWwd();
        $blogs    = $this->getBlog();
        $galleries= $this->getGallery();
        $teams    = $this->getTeam();
        $show     = $this->getShow();
        $locations = $this->getLocation();

        $categories = $this->getCategoryMenu();
        $menus    = $this->getMenu();
        $catLoc   = $this->getCatLocation();


        return view('home.landing.home')->with([
            'landings' => $landings ,
            'socials'  => $socials,
            'about'    => $about,
            'openings' => $openings,
            'menus'    => $menus,
            'wwd'      => $wwd,
            'blogs'    => $blogs,
            'galleries'=> $galleries,
            'teams'     => $teams,
            'categories'=> $categories,
            'show'      => $show,
            'locations'  => $locations,
            'catLoc'     => $catLoc
        ]);
    }
}
