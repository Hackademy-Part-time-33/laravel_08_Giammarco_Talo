<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PageController extends Controller
{
    public function homepage()
    {
        
        $latestPosts = Post::latest()->take(3)->get();
        
        return view('homepage', ['latestPosts' => $latestPosts]);
    }

    public function allposts()
    {
        return view('allposts');
    }

    // Altre azioni possono essere aggiunte qui, ad esempio per le altre pagine del sito.
}
