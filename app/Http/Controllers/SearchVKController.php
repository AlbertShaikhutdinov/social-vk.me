<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class SearchVKController extends Controller
{
    public function search(Request $request)
    {
        // search database, with result, list on page, with links to products,
        $posts = [];

        return Inertia::render('PostFeed', compact('posts'));
    }
}
