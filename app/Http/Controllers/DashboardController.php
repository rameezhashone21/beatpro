<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User_song;


class DashboardController extends Controller
{
  /**
   * This method retrun the main page of dashboard
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $user_id=Auth::user()->id;
    if (Auth::user()->level() == 2) {
      return view('dashboard.admin.pages.index');
    }
    $songs=User_song::where('user_id',$user_id)->get();
    // \Session::flash('error','First Purchase Subscription Plan to Buy any Song');
    return view('dashboard.front.index',compact('songs'));
  }
}
