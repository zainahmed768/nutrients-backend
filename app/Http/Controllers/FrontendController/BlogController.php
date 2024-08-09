<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('frontEnd.pages.blogs.blog', compact('blogs'));
    }

    public function show($id)
    {
        $blog = Blog::with('user')->find($id);
        dd($blog);
        // return view('frontEnd.pages.blogs.blog-detail', compact('blog'));
    }
}
