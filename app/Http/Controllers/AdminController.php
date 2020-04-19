<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use App\Calendar;
use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index()
  {
      $usersCount = User::all()->count();
      $postsCount = Post::all()->count();
      $calendarEvents = Calendar::where('user_id',auth()->user()->id)->count();

    return view('admin.frontPage', compact('usersCount', 'postsCount', 'calendarEvents'));
  }
}
