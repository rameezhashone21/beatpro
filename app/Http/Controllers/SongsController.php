<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Song;
use App\Models\Album;
use App\Models\User_song;
use Illuminate\Support\Facades\Auth;

class SongsController extends Controller
{
    /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    // Get all pages
    $songs = Song::with('albums')->get();
    return view('dashboard.admin.songs.index', compact('songs'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $albums = Album::all();
    return view('dashboard.admin.songs.add', compact('albums'));
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
      'album' => 'required',
      'song_file' => 'required',
      'status' => 'required',
    ]);

    if ($request->hasFile('song_file')) {
      // Save file to folder
      $loc = '/public/songs';
      $fileData = $request->file('song_file');
      $fileNameToStore1 = $this->uploadImage($fileData, $loc);
    } else {
      $fileNameToStore1 = 'no_img.jpg';
    }

    if ($request->hasFile('image')) {
      // Save image to folder
      $loc = '/public/songs';
      $fileData = $request->file('image');
      $fileNameToStore = $this->uploadImage($fileData, $loc);
    } else {
      $fileNameToStore = 'no_img.jpg';
    }

    $data = [
      'album_id' => $valid['album'],
      'title' => $valid['title'],
      'desc' => $request->desc,
      'price' => $request->price,
      'lyrics' => $request->lyrics,
      'image' => $fileNameToStore,
      'song_file' => $fileNameToStore1,
      'status' => $valid['status']
    ];

    // Save data into db
    $songs = Song::create($data);

    if ($songs) {
      return redirect('/admin/songs')->with('success', 'Record created successfully.');
    } else {
      return redirect('/admin/songs')->with('error', 'Record not created!');
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
    $song = Song::findOrFail($id);

    $albums = Album::all();

    return view('dashboard.admin.songs.edit', compact('song','albums'));
  }

  public function my_songs()
  {
    $user_id = Auth::id(); 

    $user_songs=User_song::select('song_id')->where('user_id',$user_id)->get();
    $songs=Song::whereIn('id',$user_songs)->get();

    return view('dashboard.front.songs.my_songs', compact('songs'));
  }

   /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function membership()
  {
    return view('dashboard.front.membership');
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
      'album' => 'required',
      'song_file' => 'required',
      'status' => 'required',
    ]);

    if ($request->hasFile('image')) {
      // Save image to folder
      $loc = '/public/songs';
      $fileData = $request->file('image');
      $fileNameToStore = $this->uploadImage($fileData, $loc);
      $data1 = [
        'image' => $fileNameToStore
      ];

      // Delete previous file
      $song = Song::where('id', $id)->first();
      Storage::delete('public/songs/' . $song->image);
    }


      if ($request->hasFile('song_file')) {
        // Save song file to folder
        $loc = '/public/songs';
        $fileData1 = $request->file('song_file');
        $fileNameToStore1 = $this->uploadImage($fileData1, $loc);
        $data2 = [
          'song_file' => $fileNameToStore1
        ];

      // Delete previous file
      $song = Song::where('id', $id)->first();
      Storage::delete('public/songs/' . $song->song_file);
    }

    $data = [
      'album_id' => $valid['album'],
      'title' => $valid['title'],
      'desc' => $request->desc,
      'price' => $request->price,
      'lyrics' => $request->lyrics,
      'status' => $valid['status']
    ];

    if ($request->hasFile('image') && $request->hasFile('song_file') ) {
      $data = array_merge($data1, $data2, $data);
    } else {
      $data = $data;
    }

    // Update data into db
    $song = Song::find($id);
    $song = $song->update($data);

    if ($song) {
      return redirect('/admin/songs')->with('success', 'Record updated successfully.');
    } else {
      return redirect('/admin/songs')->with('error', 'Record not updated!');
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
    $song = Songs::destroy($id);

    if ($song) {
      return redirect('/admin/songs')->with('success', 'Record Deleted Successfully.');
    } else {
      return redirect('/admin/songs')->with('error', "Record not deleted!");
    }
  }

  /**
     * Write code on Method
     *
     * @return response()
     */
    public function cart()
    {
      $carts = session()->get('cart');
        return view('pages.cart');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function addToCart($id)
    {
        $song = Song::findOrFail($id);
          
        $cart = session()->get('cart', []);
  
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "id" => $song->id,
                "name" => $song->title,
                "song_file" => $song->song_file,
                "quantity" => 1,
                "price" => $song->price,
                "image" => $song->image
            ];
        }
          
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Song added to cart successfully!');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function cartupdate(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Song removed successfully');
        }
    }
}
