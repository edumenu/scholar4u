<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScholarshipTableController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Auth users are only supposed to see calendar
    }

    public function index()
    {
        // Return the calendar view
        return view('admin.scholarshipTable');
    }
}
