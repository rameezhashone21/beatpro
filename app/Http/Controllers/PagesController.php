<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Song;

class PagesController extends Controller
{
    /**
     * Load main site index page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $songs = Song::with('albums')->get();
        return view('pages.index', compact('songs'));
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

    public function services()
    {
        $services = Service::get();
        return view('pages.services.index', compact('services'));
    }
}

