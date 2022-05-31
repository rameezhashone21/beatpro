<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Load main site index page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Welcome to my App";
        return view('pages.index', compact('title'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function faqs()
    {
        return view('pages.faqs');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}

