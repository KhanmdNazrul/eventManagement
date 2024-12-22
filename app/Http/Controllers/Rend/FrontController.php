<?php

namespace App\Http\Controllers\Rend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class FrontController extends Controller
{
    public function home()
    {
        
        return Inertia::render('Home');
    }
}
