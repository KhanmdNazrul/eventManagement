<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Speaker;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $speakers = Speaker::orderBy('id')->limit(3)->get();
        $events = Event::OrderBy('id', 'desc')->limit(3)->get();
        return view('frontend.home',compact('speakers','events',));
    }

    /**
     * Show the form for creating a new resource.
     */
   
}
