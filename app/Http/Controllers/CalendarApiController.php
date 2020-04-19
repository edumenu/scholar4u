<?php

namespace App\Http\Controllers;

use App\Calendar;
use App\Http\Resources\Calendar as CalendarResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CalendarApiController extends Controller
{

    public function index($id)
    {
        // Get calendar event based on user ID
        $user_events = Calendar::where('user_id', $id)->get();

        return CalendarResource::collection($user_events);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Create new calendar
        $calendar = new Calendar;

        $calendar->user_id = $request->input('user_id');
        $calendar->title = $request->input('title');
        $calendar->start = $request->input('start');
        $calendar->all_day = $request->input('all_day');
        $calendar->color = $request->input('color');

        //Save calendar
        if($calendar->save()) {

            return new CalendarResource($calendar);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Get one event on calendar
        $calendar = Calendar::findOrFail($id);

        // Delete calendar event
        if($calendar->delete()){

            return new CalendarResource($calendar);
        }
    }
}
