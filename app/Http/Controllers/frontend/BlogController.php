<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog()
    {
        $blogs = Blog::orderBy('id', 'desc')->get();
        return view('frontend.blog', compact('blogs'));
    }

    
    public function blog_details()
    {
        $blogs = Blog::orderBy('id', 'desc')->get();
        return view('frontend.blog', compact('blogs'));
    }

}
