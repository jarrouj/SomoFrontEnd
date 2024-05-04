<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AboutController extends Controller
{
    private function getAbout()
    {
        $ApiUrl = env('API_URL');
        $about = Http::get("$ApiUrl/api/get-about")->json();

        return $about;
    }

    private function getSocial()
    {
        $ApiUrl = env('API_URL');
        $socials = Http::get("$ApiUrl/api/get-social")->json();

        return $socials;
    }

    private function getTeam()
    {
        $ApiUrl = env('API_URL');
        $teams = Http::get("$ApiUrl/api/get-team")->json();

        return $teams;
    }

    private function getWwd()
    {
        $ApiUrl = env('API_URL');
        $wwds = Http::get("$ApiUrl/api/get-wwd")->json();

        return $wwds;
    }

    private function getGallery()
    {
        $ApiUrl = env('API_URL');
        $galleries = Http::get("$ApiUrl/api/get-gallery")->json();

        return $galleries;
    }

    private function getShow()
    {
        $ApiUrl = env('API_URL');
        $show = Http::get("$ApiUrl/api/get-show")->json();

        return $show;
    }

    public function index()
    {
        $about     = $this->getAbout();
        $socials   = $this->getSocial();
        $teams     = $this->getTeam();
        $galleries = $this->getGallery();
        $wwd      = $this->getWwd();
        $show     = $this->getShow();

        return view('home.about.home')->with([
            'about'     => $about,
            'socials'   => $socials,
            'teams'     => $teams,
            'galleries' => $galleries,
            'wwd'      => $wwd,
            'show'      => $show
        ]);
    }
}
