<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;
use App\Models\Album;
use App\Models\Song;


class AlbumsController extends Controller
{
    /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    // Get all pages
    $albums = Album::with('categories')->get();

    return view('dashboard.admin.albums.index', compact('albums'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $genres = Category::all();
    return view('dashboard.admin.albums.add', compact('genres'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */

  public function uploadImage($fileData, $loc)
  {
    // Get file name with extension
    $fileNameWithExt = $fileData->getClientOriginalName();
    // Get just file name
    $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
    // Get just extension
    $fileExtension = $fileData->extension();
    // File name to store
    $fileNameToStore = time() . '.' . $fileExtension;
    // Finally Upload Image
    $fileData->storeAs($loc, $fileNameToStore);

    return $fileNameToStore;
  }

  public function store(Request $request)
  {
    // Validate data
    $valid = $this->validate($request, [
      'title' => 'required|string',
      'image' => 'required|image',
      'genre' => 'required|string',
      'status' => 'required',
    ]);

    
    if ($request->hasFile('image')) {
      // Save image to folder
      $loc = '/public/albums';
      $fileData = $request->file('image');
      $fileNameToStore = $this->uploadImage($fileData, $loc);
    } else {
      $fileNameToStore = 'no_img.jpg';
    }

    $data = [
      'genre_id' => $valid['genre'],
      'title' => $valid['title'],
      'desc' => $request->desc,
      'price' => $request->price,
      'image' => $fileNameToStore,
      'status' => $valid['status']
    ];

    // Save data into db
    $albums = Album::create($data);

    if ($albums) {
      return redirect('/admin/albums')->with('success', 'Record created successfully.');
    } else {
      return redirect('/admin/albums')->with('error', 'Record not created!');
    }
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Page  $page
   * @return \Illuminate\Http\Response
   */
  public function show(Page $page)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Page  $page
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    // Get single page details

    $genres = Category::all();

    $album = Album::findOrFail($id);

    return view('dashboard.admin.albums.edit', compact('album','genres'));
  }

  public function view_songs($id)
  {
    // Get single page details
    $songs = Song::where('album_id',$id)->get();

    return view('dashboard.admin.albums.view', compact('songs'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Page  $page
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    // Validate data
    $valid = $this->validate($request, [
      'title' => 'required|string',
      'image' => 'required|image',
      'genre' => 'required|string',
      'status' => 'required',
    ]);

    if ($request->hasFile('image')) {
      // Save image to folder
      $loc = '/public/albums';
      $fileData = $request->file('image');
      $fileNameToStore = $this->uploadImage($fileData, $loc);
      $data1 = [
        'image' => $fileNameToStore
      ];

      // Delete previous file
      $album = Album::where('id', $id)->first();
      Storage::delete('public/albums/' . $album->image);
    }

    $data = [
      'genre_id' => $valid['genre'],
      'title' => $valid['title'],
      'desc' => $request->desc,
      'price' => $request->price,
      'status' => $valid['status']
    ];

    if ($request->hasFile('image')) {
      $data = array_merge($data1, $data);
    } else {
      $data = $data;
    }

    // Update data into db
    $album = Album::find($id);
    $album = $album->update($data);

    if ($album) {
      return redirect('/admin/albums')->with('success', 'Record updated successfully.');
    } else {
      return redirect('/admin/albums')->with('error', 'Record not updated!');
    }
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Page  $page
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    // Delete page
    $album = Album::destroy($id);

    if ($album) {
      return redirect('/admin/albums')->with('success', 'Record Deleted Successfully.');
    } else {
      return redirect('/admin/albums')->with('error', "Record not deleted!");
    }
  }
}
