<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class eventShowController extends Controller
{
    public function show($id)
    {

        $event = Event::find($id);
        return view('frontend.eventDetails',compact('event'));
    }
}
