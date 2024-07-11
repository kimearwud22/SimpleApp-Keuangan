<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        if (!$blog) {
            abort(404);
        }
        return view('show', compact('blog'));
    }

    public function index()
    {
        $blogs = Blog::all();
        // return from data db
        return ($blogs);

    }
}


// blog show.blade.php -->
// @extends('layouts.app')

// @section('content')
//     <div class="container">
//         <div class="row">
//             <div class="col-md-8">
//                 <div class="card">
//                     <div class="card-header">{{ $blog->title }}</div>
//                     <div class="card-body">
//                         <p>{{ $blog->content }}</p>
//                     </div>
//                 </div>
//             </div>
//         </div>
//     </div>
// @endsection