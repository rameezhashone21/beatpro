<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Song;
use App\Models\Album;

class PagesController extends Controller
{
    /**
     * Load main site index page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $songs = Song::with('albums')->take(4)->get();
        $albums = Album::take(4)->get();
        return view('pages.index', compact('songs','albums'));
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

    public function all_tracks(Request $request)
    {
        $search = $request->input('search');
  
        $songs = Song::query()
                    ->orwhere('title', 'LIKE', "%{$search}%")
                    ->get();
        
        //$songs = Song::with('albums')->get(); 
        return view('pages.all_tracks', compact('songs'));
    }

    public function specific_album($id)
    {
        $album = Album::where('id',$id)->first();
        $songs = Song::where('album_id',$id)->get(); 
        return view('pages.specific_album', compact('songs','album'));
    }
}

