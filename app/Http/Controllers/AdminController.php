<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index(User $user)
  {
    return view('admin.frontPage');
  }

  public function scholarshipTable(User $user)
  {
    return view('admin.scholarshipTable');
  }
}
