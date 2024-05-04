<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MenuController extends Controller
{

    private function getSocial()
    {
        $ApiUrl = env('API_URL');
        $socials = Http::get("$ApiUrl/api/get-social")->json();

        return $socials;
    }

    private function getCategoryMenu()
    {
        $ApiUrl = env('API_URL');
        $categories = Http::get("$ApiUrl/api/get-category-menu")->json();

        return $categories;
    }

    private function getMenu()
    {
        $ApiUrl = env('API_URL');
        $menus = Http::get("$ApiUrl/api/get-menu")->json();

        return $menus;
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

    private function getCatLocation()
    {
        $ApiUrl = env('API_URL');
        $catLoc = Http::get("$ApiUrl/api/get-loc-cat")->json();

        return $catLoc;
    }

    private function getLocation()
    {
        $ApiUrl = env('API_URL');
        $locations = Http::get("$ApiUrl/api/get-location")->json();

        return $locations;
    }

    public function index()
    {
        $socials    = $this->getSocial();
        $categories = $this->getCategoryMenu();
        $menus      = $this->getMenu();
        $galleries  = $this->getGallery();
        $show       = $this->getShow();
        $catLoc     = $this->getCatLocation();
        $locations  = $this->getLocation();

        return view('home.menu.home')->with([

            'socials'   => $socials,
            'categories'=> $categories,
            'menus'     => $menus,
            'galleries' => $galleries,
            'show'      => $show,
            'catLoc'    => $catLoc,
            'locations' => $locations,

        ]);
    }

    private function getMenuByCategory($categoryId)
    {
        $ApiUrl = env('API_URL');
        $menus = Http::get("$ApiUrl/api/get-menu")->json();

        // Filter menus based on the category ID
        $filteredMenus = array_filter($menus, function($menu) use ($categoryId) {
            return $menu['category_id'] == $categoryId;
        });

        return array_values($filteredMenus); // Resetting array keys
    }

    // Public function to handle API requests
    public function fetchMenuByCategory($categoryId)
    {
        $menus = $this->getMenuByCategory($categoryId);
        return response()->json($menus);
    }

    public function saveLocation(Request $request)
    {
        // Retrieve the selected location ID from the request
        $selectedLocationId = $request->location_id;

        // Store the selected location ID in the session
        $request->session()->put('selected_location_id', $selectedLocationId);

        // Respond with a success message or any other necessary response
        return redirect()->back();
    }
}
