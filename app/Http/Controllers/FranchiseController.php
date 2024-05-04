<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class FranchiseController extends Controller
{

    private function getSocial()
    {
        $ApiUrl = env('API_URL');
        $socials = Http::get("$ApiUrl/api/get-social")->json();

        return $socials;
    }

    private function getGallery()
    {
        $ApiUrl = env('API_URL');
        $galleries = Http::get("$ApiUrl/api/get-gallery")->json();

        return $galleries;
    }

    private function getLocation()
    {
        $ApiUrl = env('API_URL');
        $locations = Http::get("$ApiUrl/api/get-location")->json();

        return $locations;
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
        $galleries = $this->getGallery();
        $locations = $this->getLocation();
        $show      = $this->getShow();

        return view('home.franchise.home')->with([
            'socials' => $socials,
            'galleries' => $galleries,
            'locations' => $locations,
            'show'      => $show,
        ]);
    }


public function sendEmail(Request $request)
{
    $subject = $request->input('subject');
    $title = $request->input('title');
    $text = $request->input('text');

    Mail::to('georgesjarrouj3@gmail.com')->send(new ContactMail($subject, $title, $text));


    return redirect()->back()->with('success', 'Email sent successfully!');
}
}
