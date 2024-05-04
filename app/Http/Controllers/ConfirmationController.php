<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ConfirmationController extends Controller
{

    private function getSocial()
    {
        $ApiUrl = env('API_URL');
        $socials = Http::get("$ApiUrl/api/get-social")->json();

        return $socials;
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
        $show    = $this->getShow();

        return view('home.confirmation')->with([
            'socials' => $socials,
            'show'    => $show,
        ]);
    }
}
