<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RetailMenuController extends Controller
{
    private function getSocial()
    {
        $ApiUrl = env('API_URL');
        $socials = Http::get("$ApiUrl/api/get-social")->json();

        return $socials;
    }

    private function getCategoryRetail()
    {
        $ApiUrl = env('API_URL');
        $categories = Http::get("$ApiUrl/api/get-category-retail")->json();

        return $categories;
    }

    private function getRetailMenu()
    {
        $ApiUrl = env('API_URL');
        $retailMenus = Http::get("$ApiUrl/api/get-retail-menu")->json();

        return $retailMenus;
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
        $categories = $this->getCategoryRetail();
        $RetailMenus= $this->getRetailMenu();
        $galleries  = $this->getGallery();
        $show       = $this->getShow();

        $catLoc     = $this->getCatLocation();
        $locations  = $this->getLocation();

        return view('home.retail-menu.home')->with([

            'socials'   => $socials,
            'categories'=> $categories,
            'retail-menus' => $RetailMenus,
            'galleries' => $galleries,
            'show'      => $show,
            'catLoc'    => $catLoc,
            'locations' => $locations,


        ]);
    }

    private function getRetailMenuByCategory($categoryId)
    {
        $ApiUrl = env('API_URL');
        $menus = Http::get("$ApiUrl/api/get-retail-menu")->json();

        // Filter menus based on the category ID
        $filteredMenus = array_filter($menus, function($menu) use ($categoryId) {
            return $menu['category_id'] == $categoryId;
        });

        return array_values($filteredMenus); // Resetting array keys
    }

    // Public function to handle API requests
    public function fetchRetailMenuByCategory($categoryId)
    {
        $menus = $this->getRetailMenuByCategory($categoryId);
        return response()->json($menus);
    }
}
