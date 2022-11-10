<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()   
    {
        $viewData = [];
        $viewData['title'] = 'DNS - Hostinger';
        $viewData['subtitle'] = "DNS HOST";
        return view('index')->with('viewData', $viewData);
    }

    public function domain()
    {
        $viewData = [];
        $viewData['title'] = 'Domaine - Hostinger';
        $viewData['subtitle'] = "DNS HOST";
        return view('domain')->with('viewData', $viewData);
    }


    public function contact()
    {
        $viewData = [];
        $viewData['title'] = 'Contact Page - Hostinger';
        $viewData['subtitle'] = "DNS HOST";
        return view('contact')->with('viewData', $viewData);
    }

}
